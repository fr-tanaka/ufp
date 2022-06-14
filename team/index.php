<!DOCTYPE html>
<html lang="ja">
	
<head>
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PC9VYP2N26"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-PC9VYP2N26');
</script>	
	
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>TEAM | UFP -UTEC Founders Program-</title>
	
    <link rel="SHORTCUT ICON" href="../img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta name="viewport" content="width=device-width,intial=1">
	
	<!--OGP-->
	<meta property="og:title" content="TEAM | UFP -UTEC Founders Program-" />
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
	
	
	
	
<body class="page team">
	
	<!--- header -->
	<?php require_once('../template/header.php'); ?>
	
	
	
	<section class="page_tit team_top">
		<div class="page_tit_box01">
			<div class="page_subtit_box">
				<hr>
				<p class="page_subtit">TEAM</p>
			</div>
			
			<div class="page_tit_box02">
				<p class="page_tit_txt01 slide-left">キャピタリスト紹介</p>
			</div>
		</div>
		
		<p class="page_tit_img"><img class="team_img_1" src="../img/team_tit_img.jpg" alt="ページタイトルイメージ"></p>
	</section>
	
	
	
	
	
	<section class="utec_team_box slide-left">
		<div class="utec_team_block">
				<p class="page_tit_txt03">UTEC投資チーム</p>
			<div class="utec_team_img_block">
				<img class="team_img_2" src="../img/team_img_1.jpg" alt="">
				<a href="https://www.ut-ec.co.jp/" class="btn_utec_hp">UTEC 公式HPへ</a>
				<!---<p class="utec_site_icon"><img src="../img/site_icon.svg" alt="リンク別窓アイコン"></p>--->
			</div>
		</div>
	</section>

	<?php
		$teams = [
			[
				"name" => "林佑樹",
				"image" => "team_hayashi.jpg",
				"text" => "東大在学中より、アドテクスタートアップでのデータサイエンス業務を経て、2016年冬よりUTECにリサーチアシスタントとして参画、2019年よりアソシエイト&データサイエンティストとして国内外IT投資に従事。K-POPと減量を愛するコスメコンシェルジュ"
			],
			[
				"name" => "Kiran Mysore",
				"image" => "team_kiran.jpg",
				"text" => "元AI研究者。2018年1月にUTECに参画し、インド、シンガポール、米国のディープテック企業6社への投資をリード。インドの小さな町で育ち、2014年に東京大学で修士号を取得。ソフトウェアエンジニア、社会起業家、オープンイノベーションコンサルタント、ベンチャーキャピタルなど、さまざまな顔を持つ。趣味は、ThinkSpecting（思考＋内省）、モラルキャピタリズムの考察、FCバルセロナの応援。"
			],
			[
				"name" => "小林宏彰",
				"image" => "team_kobayashi.jpg",
				"text" => "日本生まれ、日本育ち。臨床医(救急集中治療)、医療機器ベンチャー、MBA留学を経て2019年にUTEC参画。ヘルスケア/ライフサイエンス中心にテック系全般を担当。運営チームダントツの最年長。趣味は野菜の栽培、テニス、子育て。"
			],
			[
				"name" => "野間円",
				"image" => "team_noma.jpg",
				"text" => "東京大学工学系研究科修士課程在学、医用工学分野で研究中。2021年からインターンとしてUTECに参画。興味分野は再生医療、ヘルスケア、アート。趣味は歌、ピアノ、絵。"
			],
			[
				"name" => "陳嘉洋",
				"image" => "team_lenny.jpg",
				"text" => "カリフォルニア大学サンタバーバラ校数学科卒業。PwCアドバイザリー合同会社の事業再生部門、レノボ・ジャパン株式会社を経て、カリフォルニア大学ロサンゼルス校経営学修士（MBA）。同校卒業後、2021年7月よりUTEC参画。AI・量子コンピュータを中心にIT分野におけるシード/アーリーステージ投資を担当。趣味はサーフィン、テニス、読書"
			],
			[
				"name" => "趙誼",
				"image" => "team_chou.jpg",
				"text" => "東京大学総合文化研究科博士課程在学中。サーキュラーエコノミーと意思決定について研究中。中国語、日本語、英語、台湾語、ドイツ語、韓国語のマルチリンガル。2022年からインターンとしてUTECに参画、現在はRAとして本プログラムに参画。興味分野はWeb3.0、AI、培養肉、アート。趣味は旅行、言語学習、芸術祭巡り。"
			]
		];
	?>
	<section class="ufp_team_box">
		<div class="ufp_team_block">
			<p class="page_tit_txt03">UFP運営チーム</p>
			<div class="ufp_team_list_block">
				<?php
					$i = 1;
					$count = 0;
					$length = count($teams);
					foreach ($teams as $team) {
						if($i == 1) {
							echo '<ul class="ufp_team_list">';
						}
				?>
						<li class="ufp_team_card">
							<div class="ufp_team_card_bo slide-leftx">
								<img src="../img/<?php echo $team["image"]; ?>" alt="" class="box2">
								<p class="ufp_team_name_heading"><?php echo $team["name"]; ?></p>
								<p class="card_txt"><?php echo $team["text"]; ?></p>
								<div class="sns_btn_block">
									<a href=""><img class="sns_btn sns_btn_space" src="../img/fb_btn.png" alt="facebook"></a>
									<a href=""><img class="sns_btn" src="../img/tw_btn.png" alt="twitter"></a>
								</div>
							</div><!--ufp_team_card_box-->
						</li><!--ufp_team_list-->
				<?php
						$count++;
						if(($i == 3)||($count == $length)) {
							echo '</ul>';
							$i = 1;
						}else{
							$i++;
						}
					}
				?>
			</div>
		</div>
	</section>
	
	
	
	
	
	<!--- footer --->
	<?php require_once('../template/footer.php'); ?>

	
	
	<!-- js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../js/script.js" async></script>
	<script src="../js/jquery-fadethis.min.js"></script>
	<script src="../js/scroll-event.js"></script>
	
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
