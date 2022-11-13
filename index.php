<?php
	$main = $_GET['main'] ?: 'home';
	$nav = $_GET['nav'] ?: 'menu_main';
?>

<!DOCTYPE html>

<html>
<head>
	<title>Epiphany v2 Dainty</title>
	<link rel="stylesheet" type="text/css" href="style/index.css">
	<link rel="stylesheet" type="text/css" href="style/stuff.css">
	<LINK REL="SHORTCUT ICON" HREF="images/favicon.ico">
</head>

<body>

<div id="banner">
	<div id="title">
		<img id="title" src="images/banner.png">
	</div>
	<div id="site-nav">
		<a class="jq" id="menu_main"><img src="btns/index.png"></a>
		<a class="jq" id="menu_about"><img src="btns/about.png"></a>
		<a class="jq" id="menu_adoption"><img src="btns/adopt.png"></a>
		<a class="jq" id="menu_links"><img src="btns/links.png"></a>
	</div>
</div>
	
<div id="main" class="transparent">
	<img src="images/corner-left-01.png" id="corner-left-01">
	<img src="images/corner-left-02.png" id="corner-left-02">
	<img src="images/corner-left-03.png" id="corner-left-03">
	
	<div class="scroll">
		<div id="main-content">
			
		</div>
	</div>
</div>    

<div id="nav" class="transparent scroll">
	
</div>

<div id="cbox" class="transparent">
	<?php include 'cbox.php'; ?>
	<img src="images/corner-right-01.png" id="corner-right-01">
	<img src="images/corner-right-02.png" id="corner-right-02">
	<img src="images/corner-right-03.png" id="corner-right-03">
</div>
	
<div id="footer">
	<!-- Webring -->
	<table style="text-align:center; width: auto; font-size:11px; margin: 10px auto;" border="0" cellspacing="0">
		<tr>
			<td style="text-align:center;">
				<a href="https://mnemoli.github.io/petzwebring/?site=epiphany&direction=prev">
					Prev<br>
					&lt;&lt;
				</a>
			</td>
			<td style="text-align:center;">
				<a href="https://mnemoli.github.io/petzwebring/">
					<img src="https://mnemoli.github.io/petzwebring/banner.gif">
				</a><br>
			</td>
			<td	style="text-align:center;">
				<a href="https://mnemoli.github.io/petzwebring/?site=epiphany&direction=next">
					Next<br>
					&gt;&gt;
				</a>
			</td>
		</tr>
		<tr>
			<td style="padding-top: 0px; text-align:center;"/>
			<td style="padding-top: 0px; text-align:center;">
				<a href="https://mnemoli.github.io/petzwebring/?direction=random">
					&lt;&lt; Random	&gt;&gt;
				</a>
			</td>
			<td style="padding-top: 0px; text-align:center;"/>
		</tr>
	</table>

	<p>Epiphany &copy; 2014-2022</p>
</div>

<!-- jquery include -->
<script
src="https://code.jquery.com/jquery-3.6.0.js"
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>

<!-- oooooo i hate JS -->
<script language="javascript">
	// load home page first
	$(document).ready(function(){
		$("#main-content").load("home.php", null, function(){
			// make home page links work
			$('#main-content a.jq').click(function(){
				// grab id
				var page = $(this).attr("id");
				var page = page + ".php";
				// load page
				$('#main-content').load(page);
			});
		});

		// load main menu first
		$("#nav").load("menu_main.php", null, function(){
			// make main menu page links work
			$('#nav a.jq').click(function(){
				// grab id
				var page = $(this).attr("id");
				var page = page + ".php";
				// load page
				$('#main-content').load(page);
			});
		});

		// change menu content on link click
		$("#site-nav a.jq").click(function(){
			// grab a ID and assign it to page var
			var page = $(this).attr("id");
			var page = page + ".php";
			//load menu
			$('#nav').load(page, null, function(){
				// change page content based on menu click
				$('#nav a.jq').click(function(){
					// grab id
					var page = $(this).attr("id");
					var page = page + ".php";
					// load page
					$('#main-content').load(page, null, function(){
						// make any links on that page working as well
						$('#main-content a.jq').click(function(){
							// grab id
							var page = $(this).attr("id");
							var page = page + ".php";
							// load page
							$('#main-content').load(page);
						});
					});
				});
			});
		});
	})
</script>
</body>
</html>