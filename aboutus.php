<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>About Us | VIT Trekking CLub</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel=icon href="images/favicon.png ">
	<meta name='viewport' content="width=device-width, height=device-height, initial-scale=1"> 
	<meta charset="utf-8" />
</head>
<style>
.flex-container {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.flex-container1 {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.flex-container1 > div {
  width: 270px;
  margin: 10px;
  text-align: center;
}
	#f1_container {
  position: relative;
  margin: 10px auto;
  width: 300px;
  height: 300px;
  z-index: 1;
}
#f1_container {
  perspective: 1000;
}
#f1_card {
  width: 100%;
  height: 100%;
  transform-style: preserve-3d;
  transition: all 1.0s linear;
}
#f1_container:hover #f1_card {
  transform: rotateY(180deg);
  box-shadow: -5px 5px 5px #aaa;
}
.face {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}
.face.back {
  display: block;
  transform: rotateY(180deg);
  box-sizing: border-box;
  padding: 10px;
  color: white;
  text-align: center;
  background-color: #aaa;
}
.para > p{
  padding-left: 90px;
  padding-right: 70px;
  text-align: justify;
  padding-bottom: 30px;
}
</style>
<body>
	<?php	include ("header.php");	?>
<div id="virt" style="background-color: white; font-family: rob;">
		<div id="fil" style="height: 20%">About Us</div>
    <div class="para">
        <img src="board/demo/960x340.gif" alt="" width="100%">
        <p>VIT Trekking club is a fun-filled adventure club which promotes trekking and outdoor acitivities. The club provides you a wonderful opportunity to step out of the room, breathe fresh air, and enjoy the greeneries. We constantly dwell in search of adventure and fun. Traveling through various trails and nature trips bring us closer and we cherish it. Being an outdoor club we focus on sharing this knowledge and experience to our colleagues and friends.</p>
		    <p>The VIT Trekking club was initiated on 9th of July, 2010 by like-minded enthusiasts of Vellore Institute of Technology to create a feeling of oneness towards nature. The club aims in developing real love for the mountains and various forms of nature among students.</p>  
		    <p>Trekking as a group inculcates the virtue of coordination, value of physical exertion, sometimes to the limit of endurance, spirit of comradeship, fitness, survival instincts, presence of mind, willingness to share and help each other and above all, helps in our self-realisation. Trekking also plays a positive role in providing healthy mind, body and soul. VIT Trekking club is just the perfect way to do so!</p>
		    <p>VIT Trekking club beckons one and all to see everything they can expect of an adventure club. The club serves as a disembarking point for those who wish to experience the thrill and thirst of nature. Apart from active trekking, VIT trekking club is well known for its fun filled activities and open classroom events which makes a huge impact on students’ lives and inspire them to trek. We create awareness, we create thrill, we develop unforgettable memories, we take you one step closer to nature!</p>
    </div>
  <div style="padding-right: 70px;" class="flex-container">
    <div class="flex-container1">
    <div id="f1_container" >
			<div id="f1_card" class="shadow">
  				<div class="front face">
    				<img src="board/300x300.png" />
  				</div>
  				<div class="back face center">
    				<p class="team_name">Name Goes Here</p>
                	<p class="team_title">Title Here</p>
                	<p class="team_description">Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phas ellus sagit titor ant curabi turpis.</p>
  				</div>
			</div>
		</div>
		<div id="f1_container" >
			<div id="f1_card" class="shadow">
  				<div class="front face">
    				<img src="board/300x300.png"/>
  				</div>
  				<div class="back face center">
    				<p class="team_name">Name Goes Here</p>
                	<p class="team_title">Title Here</p>
                	<p class="team_description">Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phas ellus sagit titor ant curabi turpis.</p>
  				</div>
			</div>
		</div>
		<div id="f1_container" >
			<div id="f1_card" class="shadow">
  				<div class="front face">
    				<img src="board/300x300.png"/>
  				</div>
  				<div class="back face center">
    				<p class="team_name">Name Goes Here</p>
                	<p class="team_title">Title Here</p>
                	<p class="team_description">Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phas ellus sagit titor ant curabi turpis.</p>
  				</div>
			</div>
		</div>
    </div>
    <div class="flex-container1">
		<div id="f1_container" >
			<div id="f1_card" class="shadow">
  				<div class="front face">
    				<img src="board/300x300.png"/>
  				</div>
  				<div class="back face center">
    				<p class="team_name">Name Goes Here</p>
                	<p class="team_title">Title Here</p>
                	<p class="team_description">Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phas ellus sagit titor ant curabi turpis.</p>
  				</div>
			</div>
		</div>
		<div id="f1_container" >
			<div id="f1_card" class="shadow">
  				<div class="front face">
    				<img src="board/300x300.png"/>
  				</div>
  				<div class="back face center">
    				<p class="team_name">Name Goes Here</p>
                	<p class="team_title">Title Here</p>
                	<p class="team_description">Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phas ellus sagit titor ant curabi turpis.</p>
  				</div>
			</div>
		</div>
		<div id="f1_container" >
			<div id="f1_card" class="shadow">
  				<div class="front face">
    				<img src="board/300x300.png" />
  				</div>
  				<div class="back face center">
    				<p class="team_name">Name Goes Here</p>
                	<p class="team_title">Title Here</p>
                	<p class="team_description">Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phas ellus sagit titor ant curabi turpis.</p>
  				</div>
			</div>
		</div>
		<div id="f1_container" >
			<div id="f1_card" class="shadow">
  				<div class="front face">
    				<img src="board/300x300.png" />
  				</div>
  				<div class="back face center">
    				<p class="team_name">Name Goes Here</p>
                	<p class="team_title">Title Here</p>
                	<p class="team_description">Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phas ellus sagit titor ant curabi turpis.</p>
  				</div>
			</div>
		</div>
    </div>
    <div class="flex-container1">
		<div id="f1_container" >
			<div id="f1_card" class="shadow">
  				<div class="front face">
    				<img src="board/300x300.png" />
  				</div>
  				<div class="back face center">
    				<p class="team_name">Name Goes Here</p>
                	<p class="team_title">Title Here</p>
                	<p class="team_description">Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phas ellus sagit titor ant curabi turpis.</p>
  				</div>
			</div>
		</div>
		<div id="f1_container" >
			<div id="f1_card" class="shadow">
  				<div class="front face">
    				<img src="board/300x300.png" />
  				</div>
  				<div class="back face center">
    				<p class="team_name">Name Goes Here</p>
                	<p class="team_title">Title Here</p>
                	<p class="team_description">Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phas ellus sagit titor ant curabi turpis.</p>
  				</div>
			</div>
		</div>
		<div id="f1_container" >
			<div id="f1_card" class="shadow">
  				<div class="front face">
    				<img src="board/300x300.png" />
  				</div>
  				<div class="back face center">
    				<p class="team_name">Name Goes Here</p>
                	<p class="team_title">Title Here</p>
                	<p class="team_description">Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phas ellus sagit titor ant curabi turpis.</p>
  				</div>
			</div>
		  </div>
    </div>
    </div>

		<?php	include ("footer.php");	?>
</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script type="text/javascript" src=scripts/script.js></script>
</body>
</html>