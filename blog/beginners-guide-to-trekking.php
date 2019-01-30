<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Blog | VIT Trekking CLub</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel=icon href="../images/favicon.png ">
	<meta name='viewport' content="width=device-width, height=device-height, initial-scale=1">
	<meta charset="utf-8" />
	<meta property="op:markup_version" content="v1.0">
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Beginners Guide to Trekking in South India" />
  	<meta property="og:image" content="../images/beginners-guide-to-trekking.jpg" />
</head>
<body>
	<?php	include ("header.php");	?>
	<div id="virt" style="background-color: #eaeaea; font-family: rob;">
		<div id="blog-wrap">
			<div id="blog-image" style="padding-left: 0;"><img src="../images/beginners-guide-to-trekking.jpg"></div>
				<div class="blog" style="margin-bottom: 0; height: initial;">
					<div class="blog-image" id="heading">
						<h1>Beginners Guide to Trekking in South India</h1>
						<div style="height: 5px; width: 100px; background: #FF4081; border-radius: 2px;"></div>
						<h5>Aditya Tyagi</h5><br><br>
					</div>
					<div class="blog-title" id="para">
						<h2 style="font-family: rob;">Though easier than hiking in the northern part of the country, trekking in South India can still be a demanding challenge. The hills and plateau are considerably steep, and one will have to do a lot of work to ascend them.</h2>
						<p style="text-align: justify;">If someone wishes to explore the rugged Himalayas on foot but lack the skill for it, then they may undertake trekking in South India to gain some experience. The Deccan Plateau and the Western Ghats, that together cover a large part of the southern region of India have attracted hikers for quite some time now. Their relatively lesser height, when compared to the Himalayas, makes them ideal for novices and those with little hiking skills. During South Indian Trekking, the person is bound to see an incredible variety of flora and fauna that is one of the main characteristics of the region.<br><br>At several instances, the trekkers will meander through dense forests on trails that may not be well marked. Loose soil and sometimes almost-vertical and barren cliffs will make the climbing a bit strenuous. These challenges require that people are completely fit for the activity.<br><br>Before embarking on treks in South India, one may get a doctor to deem them physically fit for the task. They must also start exercising some time before departing on such excursions to warm up their body and get their muscles and bones to loosen up. For the hikes, one must always remember to pick comfortable sports shoes that would give them the optimum amount of grip on the slopes. Also one should carry enough snacks and drinking water on the expeditions so that they can get nourished and refreshed whenever they want.<br><br>An important base for trekking in South India is Bangalore – the capital of the Karnataka state. Easy accessibility from around the country and close proximity to the hills in the region makes it a preferred site to begin such on-foot jaunts. There are two types of hikes: day hikes and night hikes. Whereas walking during the day is easy and pleasurable, doing it at night is demanding and adventurous. Day hiking trips can be done to places such as Kodachadri, Kudremukh, Kumara Parvatha, Kunti Betta, Tadiandamol, Savandurga, and Ramanagara. While walking to these destinations in sunlight, one would see lush vegetation, sparkling streams, splashing waterfalls, or maybe even some animals, endemic to the Western Ghats or the Deccan Plateau.<br><br>Kabbal Durga, Kunti Betta, Narayangiri, Ramanagara, Rangaswamy Betta, Savandurga, Skandagiri are some destinations, to where trekking in South India is organized during the night. The trekkers will tread in the fleeting light of electric torches, and the path will not be properly illuminated. Such tours may also include camping on the cliff itself, wherein they will light a bonfire and rest in sleeping bags. Some fun games may also be hosted while people sit around the warming fire.<br><br>During numerous hikes, they will have to ascend huge boulders with the help of others and will have to do the same for those, climbing the rocks after them. The people may also have to lay flat on their stomach and crawl through patches, bearing thick and bushy vegetation. A good thing about hiking in the region is that the height will never be enough to induce altitude sickness. So if a person wants to get lost in the nature to find himself while not pushing their muscles too much then trekking in South India is the best option for them because, in every walk with nature, one receives far more than they seek.</p><br><br>
						<button id="shareBtn" class="btn btn-success clearfix">Share</button>
					</div>
				</div>
		</div>
		<?php	include ("footer.php");	?>
	</div>
	
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script type="text/javascript" src=../scripts/script.js></script>
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '131721800887367',
	      xfbml      : true,
	      version    : 'v2.10'
	    });
	    FB.AppEvents.logPageView();
	  };

	  (function(d, s, id){	
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	  document.getElementById('shareBtn').onclick = function() {
	  FB.ui({
	    method: 'share',
	    display: 'popup',
	    href: 'http://vittrekkingclub.co.in/blog/beginners-guide-to-trekking.html',
	  }, function(response){});
	}
	</script>