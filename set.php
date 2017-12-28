<?php
  $A = 0; $B = 0; $C = 0; $D = 0;
  if ($_POST['p1']=="甲"){$A = $A +1 ; } else { $B = $B+1;}
  if ($_POST['p2']=="甲"){$C = $C +1 ; } else { $B = $B+1;}
  if ($_POST['p3']=="甲"){$C = $C +1 ; } else { $D = $D+1;}
  if ($_POST['p4']=="甲"){$C = $C +1 ; } else { $A = $A+1;}
  if ($_POST['p5']=="甲"){$B = $B +1 ; } else { $D = $D+1;}
  if ($_POST['p6']=="甲"){$D = $D +1 ; } else { $C = $C+1;}
  if ($_POST['p7']=="甲"){$A = $A +1 ; } else { $D = $D+1;}
  if ($_POST['p8']=="甲"){$C = $C +1 ; } else { $B = $B+1;}
  if ($_POST['p9']=="甲"){$C = $C +1 ; } else { $D = $D+1;}
  if ($_POST['p10']=="甲"){$D = $D +1 ; } else { $A = $A+1;}
  if ($_POST['p11']=="甲"){$B = $B +1 ; } else { $D = $D+1;}
  if ($_POST['p12']=="甲"){$C = $C +1 ; } else { $A = $A+1;}
  if ($_POST['p13']=="甲"){$B = $B +1 ; } else { $C = $C+1;}
  if ($_POST['p14']=="甲"){$B = $B +1 ; } else { $A = $A+1;}
  if ($_POST['p15']=="甲"){$B = $B +1 ; } else { $D = $D+1;}
  if ($_POST['p16']=="甲"){$C = $C +1 ; } else { $A = $A+1;}
  if ($_POST['p17']=="甲"){$B = $B +1 ; } else { $D = $D+1;}
  if ($_POST['p18']=="甲"){$D = $D +1 ; } else { $A = $A+1;}
  if ($_POST['p19']=="甲"){$A = $A +1 ; } else { $C = $C+1;}
  if ($_POST['p20']=="甲"){$B = $B +1 ; } else { $A = $A+1;}
  $datetime = date ("Y- m - d / H : i : s");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>==心理測驗== 21世紀不動產-台南大學店  <?php echo $_POST['UserName']; ?> 挑戰你的熱情</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="21世紀不動產-台南大學店 挑戰你的熱情 " />
    <meta content='21世紀不動產,台南大學店,點一下人文創思' name='keywords'/>
    <meta content='==心理測驗== 實踐您對家的想像-21世紀不動產-台南大學店' property='og:description'/>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   		<script type="text/javascript">
      		google.charts.load('current', {'packages':['bar']});
      		google.charts.setOnLoadCallback(drawChart);

      		function drawChart() {
         var a = <?php echo $A; ?>, b = <?php echo $B; ?>, c = <?php echo $C; ?>, d = <?php echo $D; ?>;
        	var data = google.visualization.arrayToDataTable([
        	  ['測驗日期:<?php echo $datetime ; ?> ', '老虎', '孔雀', '無尾熊', '貓頭鷹'],
        	  ['ＳＥＴ屬性', a, b, c, d]
      		  ]);

        	var options = {
        	  chart: {
             title: '測驗結果',
             subtitle: '<?php echo $_POST['UserName']; ?> | <?php echo $_POST['Year']; ?> 歲',
         	  }
        	};
        	var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
        	chart.draw(data, google.charts.Bar.convertOptions(options));
     		 }
    	</script>
	</head>
<body class="no-sidebar">

	<!-- Header -->
		<div id="header">
			<div class="container">

				<!-- Logo -->
					<div id="logo">
						<h1><a href="#">== <?php echo $_POST['UserName']; ?> 心理測驗== </a></h1>
					</div>

				<!-- Nav -->
					<nav id="nav">
						<ul>
       <li class="active"><a href="http://062136666.century21.com.tw">Home</a></li>
							<li><a href="#">優質團隊</a></li>
							<li><a href="#">專業服務</a></li>
							<li><a href="#">更多</a></li>
						</ul>
					</nav>

			</div>
		</div>
	<!-- Header -->

	<!-- Banner -->
		<div id="banner">
			<div class="container">
			</div>
		</div>
	<!-- /Banner -->

	<!-- Main -->
		<div id="page">

			<!-- Main -->
			<div id="main" class="container">
				<div class="row">
					<div class="12u">
						<section>
            <center>
							<header>
               <p>
                <iframe src="https://www.facebook.com/plugins/share_button.php?href=https://move-tainan.appspot.com/index.html&layout=box_count&size=large&mobile_iframe=true&width=65&height=58&appId" width="65" height="58" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
              </p>
						<h2> <?php echo $_POST['UserName']; ?> 的SET測驗</h2>
						<span class="byline">這些結果沒有對錯之分，提供給 <?php echo $_POST['UserName']; ?> 參考選擇。</span>
            <div id="columnchart_material" style="width: 360px; height: 500px;"></div>
               </center>

      	    </section>
					</div>

				</div>
			</div>

 	</div>
	<!-- /Main -->


	<!-- Featured -->
		<div id="featured">
			<div class="container">
				<div class="row">
					<section class="4u">
						<div class="box">
							<a href="#" class="image left"><img src="images/pics04.jpg" alt=""></a>
							<h3>Etiam posuere augue</h3>
							<p>Donec nonummy magna quis risus eleifend. </p>
							<a href="#" class="button">More</a>
						</div>
					</section>
					<section class="4u">
						<div class="box">
							<a href="#" class="image left"><img src="images/pics05.jpg" alt=""></a>
							<h3>Etiam posuere augue</h3>
							<p>Donec nonummy magna quis risus eleifend. </p>
							<a href="#" class="button">More</a>
						</div>
					</section>
					<section class="4u">
						<div class="box">
							<a href="#" class="image left"><img src="images/pics06.jpg" alt=""></a>
							<h3>Etiam posuere augue</h3>
							<p>Donec nonummy magna quis risus eleifend. </p>
							<a href="#" class="button">More</a>
						</div>
					</section>
				</div>

			</div>
		</div>
	<!-- /Featured -->

	<!-- Copyright -->
		<div id="copyright" class="container">
   ----==心理測驗==---- |  實踐您對家的想像-21世紀不動產-台南大學店<br>
         06-2136666<br>
  	</div>
	</body>
</html>