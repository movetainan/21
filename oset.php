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
		<title>21台南大學店-SET測驗-屬性分佈檢測 <?php echo $_POST['UserName']; ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="21台南大學店-SET測驗-屬性分佈檢測" />
		<meta name="keywords" content="21台南大學店,SET測驗,點一下人文創思" />
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
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
	<body>

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="active"><a href="https://move-tainan.appspot.com/set.html">SET測驗</a></li>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				<!-- Logo -->
				<div id="logo">
					<h1><a href="https://move-tainan.appspot.com">21台南大學店</a></h1>
					<span class="tag">SET屬性測驗</span>
				</div>
			</div>
		</div>
	<!-- Header --> 
	<!-- Main -->
		<div id="main">
			<div id="content" class="container">
				<section>
				 <center>
					<header>
            <p>
                <iframe src="https://www.facebook.com/plugins/share_button.php?href=https://move-tainan.appspot.com/index.html&layout=box_count&size=large&mobile_iframe=true&width=65&height=58&appId" width="65" height="58" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
              </p>
						<h2> <?php echo $_POST['UserName']; ?> 的SET測驗</h2>
						<span class="byline">這些結果沒有對錯之分，提供給 <?php echo $_POST['UserName']; ?> 參考選擇。</span>
					</header>
               <div id="columnchart_material" style="width: 360px; height: 500px;"></div>
               </center>
				</section>
			</div>
		</div>
	<!-- /Main -->
	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>
						老虎：  目標導向，重視實際報酬，企圖性強。<br>
						孔雀：  同理心強，擅長語言表達，自我宣傳。<br>
						無尾熊：良好耐心，極佳忍耐度，具親和力。 <br>
					    貓頭鷹：循規蹈矩，要求精確，責任心強。
					</blockquote>
				</section>
			</div>
		</div>
	<!-- /Tweet -->
	</body>
</html>