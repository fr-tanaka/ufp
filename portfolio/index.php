<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>PORTFOLIO | UFP -UTEC Founders Program-</title>
	
    <link rel="SHORTCUT ICON" href="../img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta name="viewport" content="width=device-width,intial=1">
	
	<!--OGP-->
	<meta property="og:title" content="PORTFOLIO | UFP -UTEC Founders Program-" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="UTECが新たに立ち上げたシード期のサイエンス＆テクノロジー系のスタートアップに対してスケールアップも見据えた支援を迅速に意思決定・支援するプログラムです。" />
	<meta property="og:url" content="https://ufp.jp/" />
	<meta property="og:site_name" content="UFP" />
	<meta property="og:image" content="https://ufp.jp/img/main_visual.jpg" />
	
	<!--- ファビコン --->
	<link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="../img/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	
	<!--- notosans font --->
	<link href="http://fonts.googleapis.com/earlyaccess/notosansjp.css">
</head>
	
	
	
	
<body class="page portfolio">
	
	<!--- header -->
	<?php require_once('../template/header.php'); ?>
	
	
	
	<section class="page_tit">
		<div class="page_tit_box01">
			<div class="page_subtit_box">
				<hr>
				<p class="page_subtit">PORTFOLIO</p>
			</div>
			
			<div class="page_tit_box02">
				<p class="page_tit_txt01 slide-left">採択企業</p>
			</div>
		</div>
	</section>
	
	
	<section class="Equity_Track_contents">
		<div class="Equity_Track_wrapper">
			<div class="Equity_Track_box">
				<p class="page_tit_txt03 slide-left">Equity Track</p>
				<div class="Equity_Track_group">
          <ul id="equityList" class="Equity_Track_list Equity_Track_list_top slide-left">
            <div class="loader">Loading...</div>
					</ul><!--Equity_Track_list-->
				</div><!--Equity_Track_group-->
			</div><!--Equity_Track_box-->
		</div>

		<div class="Equity_Track_wrapper">
			<div class="Equity_Track_box">
				<p class="page_tit_txt03 slide-left">Grant Track</p>
				<div class="Equity_Track_group">
          <ul id="grantList"  class="Equity_Track_list Equity_Track_list_top slide-left">
            <div class="loader">Loading...</div>
					</ul><!--Equity_Track_list-->
				</div><!--Equity_Track_group-->
			</div><!--Equity_Track_box-->
		</div>
	</section>
	
	
	
	
	<!--- footer --->
	<?php require_once('../template/footer.php'); ?>

	
	
	<!-- js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../js/script.js" async></script>
	<script src="../js/jquery-fadethis.min.js"></script>
	<script src="../js/scroll-event.js"></script>
  <script src="../js/wordpress-embedding.js"></script>
	
	<!--- スクロール表示 --->
	<script>
				  $(window).fadeThis({
					distance: 1,
					reverse: false,
					offset:-1000,
				  });
	</script>

</body>
</html>
