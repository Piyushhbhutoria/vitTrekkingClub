<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Wishlist | VIT Tekking CLub</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel=icon href="images/favicon.png ">
	<meta name='viewport' content="width=device-width, height=device-height, initial-scale=1">
	<meta charset="utf-8" />
	<style type="text/css">
		h1{
			padding: 100px 0 0 100px;
		}
		@media only screen and (max-width: 420px){
			#fil{
				font-size: 40px;
			}
			h1{
				padding: 20px 0 0 20px;
				font-size: 20px;
			}
		}
	</style>
</head>
<body style="height: 100%;">
	<?php	include ("header.php");	?>
	<div id="virt" style="background-color: #eaeaea; min-height: 700px">
		<div id="fil" style="height: initial;">Trek Wishlist</div>
		<div class="wrap" id="wrap3" style=" text-align: center; margin: 0">
			<h1>Enter the place you wish to visit for the next Trek</h1>
				<input type="text" id="place" style="border-radius: 10px;outline: none; height: 30px; padding-left: 10px; width: 250px; font-size: 20px" placeholder="example: Jawadhu Hills">
				<input type="button" value="Submit" id="sub">
		</div>
		<?php	include ("footer.php");	?>
	</div>	
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#sub').click(function(){
				if(!($('input:text').val()))
					alert("Please enter a place first");
				else{
					$('h1').html('Thanks!<br>We will consider your opinion too!');
					$('input').fadeOut();
				}
				});
			});
	</script>
	<script type="text/javascript" src=scripts/script.js></script>