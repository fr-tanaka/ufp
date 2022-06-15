var all_data = [];

$(window).on("load", function () {
  all_data = [];

  $.ajax({
    type: "GET",
    dataType: "json",
    url:
      "https://ufp.jp/wp//wp-json/wp/v2/news?_fields=date,status,acf&per_page=3"
  })
    .done(function (response) {
      all_data=[]; 
      all_data = response;
      var multipleLi = "";
    
      for (var i = 0; i < all_data.length; i++) {
        var date = all_data[i].date;
        var content = all_data[i].acf.news_content;
        var status = all_data[i].status;

        
        if(status === "publish") {
          var li = `\
            <li>
              <p class="news_date">${formattedDate(date)}</p>
              <p class="nees_txt">${content}</p>
            </li>`
      
          multipleLi += li;
        }
      }
      setTimeout(function() {
        $("#news-list").html(multipleLi);
      }, 800); // for smooth ui
    })
    .fail(function (XMLHttpRequest, textStatus, errorThrown) {
      console.log("XMLHttpRequest : " + XMLHttpRequest.status);
      console.log("textStatus     : " + textStatus);
      console.log("errorThrown    : " + errorThrown.message);
    });

  return false;
});


$(window).on("load", function () {

  var totalPages = getContents(0);
  //totalPages = 2;
  if(totalPages !== 1) {
    for(var i = 2; i <= totalPages; i++) {
      getContents((2 - 1) * 100);
    }
  }

  function getContents(offset) {
    all_data = [];

    $.ajax({
      type: "GET",
      dataType: "json",
      url:
        `https://ufp.jp/wp//wp-json/wp/v2/portfolio?_fields=status,acf&per_page=100&offset=${offset}`
    })
      .done(function (response, status, request) {
        var totalPages = request.getResponseHeader('X-WP-TotalPages');

        setTimeout(function() {
          $("#grantList").addClass('active');
          $("#equityList").addClass('active');

          all_data=[]; 
          all_data = response;
        
          for (var i = 0; i < all_data.length; i++) {
            var status = all_data[i].status;
            var thumnail = all_data[i].acf.company_img.sizes.large;
            var company_name = all_data[i].acf.company_name;

            if(all_data[i].acf.invest_date) {
              var invest_date = '<p class="card_heading">支給時期<br><span class="card_txt">' + all_data[i].acf.invest_date + '</span></p>';
            }else {
              var invest_date = "";
            }
            if(all_data[i].acf.buziness_domain) {
              var buziness_domain = '<p class="card_heading"><span class="card_txt">' + all_data[i].acf.buziness_domain + '</span></p>';
            }else {
              var buziness_domain = "";
            }
            
            var invest_type = all_data[i].acf.invest_type;

            
            if(status === "publish") {
              var li = `\
                <li class="Equity_Track_card">
                  <div class="Equity_Track_card_box">
                    <img src="${thumnail}" alt="" class="box">
                    <p class="card_Company_Name">${company_name}</p>
                    ${invest_date}
                    ${buziness_domain}
                  </div><!--Equity_Track_card_box-->
                </li><!--Equity_Track_card-->`
          
              if(invest_type === "Grant Track") { 
                $("#grantList").append(li);
              } else if(invest_type === "Equity Track") {
                $("#equityList").append(li);
              }

            }
          }
        }, 1000);


      })
      .fail(function (XMLHttpRequest, textStatus, errorThrown) {
        console.log("XMLHttpRequest : " + XMLHttpRequest.status);
        console.log("textStatus     : " + textStatus);
        console.log("errorThrown    : " + errorThrown.message);
      });

    return totalPages ;
  }
});


function formattedDate(input) {
  var date = new Date(input);
  var year = date.getFullYear();
  var month = date.getMonth() + 1;
  var date = date.getDate();
  return `${year}.${month}.${date}`;
}
