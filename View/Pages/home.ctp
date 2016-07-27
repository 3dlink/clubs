<section id="home" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $this->webroot;?>img/home.png">
	<!-- <div class="parallax"><img src=""></div> -->
	<img id="logo_home" src="<?php echo $this->webroot; ?>img/logo_home.png">
	<h1 class="animated">Forget the <br><b>sausage sizzle</b></h1>
	<button class="animated btn_clubs black_trans" onclick="window.location.href='<?php echo $this->webroot;?>apply'">APPLY HERE NOW</button>
	<p>WATCH SPORT, <b>FUNDRAISE.</b> <br>IT’S THAT EASY</p>
</section>
<section id="goodbye">
	<h1 id="title_gb" class="animated"><b>SAY GOOD-BYE</b><br>TO MEAT RAFFLES</h1>
	<p class="animated">With <b>Fan Pass</b> your club earns <b>10% on every<br>subscription</b> your members buy.</p>
</section>
<section id="kobe" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $this->webroot;?>img/kobeb.png">
	<!-- <div class="parallax"><img src="<?php echo $this->webroot; ?>img/kobeb.png"></div> -->
	<h1 class="animated">YOUR CLUB MEMBERS<br><b>GET SPORT FOR LESS</b></h1>
	<p class="animated">Not only that, members get a <br><b>10% discount too.</b></p>

	<div id="whats">
		<div id="whats_contain">
			<h1 class="animated">WHAT’S <b>FAN PASS?</b></h1>
			<p class="animated"> SKY Sport channels 1, 2, 3, 4 through the Fan Pass website or mobile app. Just buy a pass for a day, a week or a month starting from only $14.99. <br><br>You get the freedom and flexibility to watch sport when you want to, without contracts or long-term commitment. It’s a player’s dream come true.</p>
		</div>
	</div>
</section>
<section id="haka" class="parallax-container">
	<h1 class="animated">WHAT’S IN IT <br><b>FOR YOUR CLUB?</b></h1>
	<div>
		<div>
			<p class="animated">Forget the dodgy meat raffle to pay for the new team uniforms - with <b>FAN PASS</b> your club earns money every time your members buy a pass. And your members get <b>FAN PASS</b> for less. <br><b>It’s a WIN-WIN.</b><br><br><br>
			<b class="animated" style="font-size:20px;font-weight:100;letter-spacing: 2px;">Fundraise just by watching sport. Sound good?</b></p><br><br><br>
			<button class="animated btn_clubs blue_trans" onclick="window.location.href='<?php echo $this->webroot;?>apply'">APPLY HERE NOW</button>
		</div>
	</div>
</section>
<section id="bonus">
	<h1 class="animated">BONUS POINT</h1>
	<p class="animated"><b>Your club gets a free Google Chromecast for every <br>100 passes your club members purchase.</b> <br>Chromecast lets you easily stream digital content on <br>your TV or big screen. <br><br><b style="font-size:20px;font-weight:700;">Now that’s something worth raffling.</b></p>
	<img class="animated" id="chromecast" src="<?php echo $this->webroot; ?>img/chromecast.png">
</section>

<section id="clubsin">
	<h1 class="animated">CLUBS</h1>
	<h4 class="animated">ALREADY ON THE PROGRAM</h4>

	<div class="view-with-margin-v animated">
    <div id="owl-demo-v" class="owl-carousel">
    	<?php foreach ($others as $key => $value){ ?>
	      <div class="item">
	        <img src="<?php echo $this->webroot;?>files/<?php echo $value['Logo']['logo'] ?>">
	      </div>
    	<?php } ?>
    	<?php foreach ($logos as $key => $value){ ?>
	      <div class="item">
	        <img src="<?php echo $this->webroot;?>files/<?php echo $value['Application']['logo'] ?>">
	      </div>
    	<?php } ?>
    </div>
  </div> 

  <p class="animated">Over <b>$5,000,000</b> given back to clubs!</p>

</section>

<section id="plan">
	<h1 class="animated">HERE’S THE<br><b>GAME PLAN</b></h1>
	<img class="animated" id="steps" src="<?php echo $this->webroot; ?>img/steps.png">
	<button class="animated btn_clubs black_trans" onclick="window.location.href='<?php echo $this->webroot;?>apply'">APPLY HERE NOW</button>


	<div id="footer">
		<div id="rights"></div>
		<ul style="margin-left: 10px;">
			<li><a href="<?php echo $this->webroot; ?>about">ABOUT US</a></li>
			<li><a href="<?php echo $this->webroot; ?>contact">CONTACT US</a></li>
			<li><a href="<?php echo $this->webroot; ?>faq">FAQ</a></li>
		</ul>
		<div id="clubs_2"></div>
	</div>
</section>



<script type="text/javascript">

	$(window).resize(function(event) {
		if($(window).height()>870)
			$('#home').css('height', $(window).height());
	});

	$(document).ready(function() {

		if($(window).height()>870)
			$('#home').css('height', $(window).height());

    $('.parallax').parallax();

		$('#owl-demo-v').owlCarousel({
	    items:5,
	    loop:true,
	    margin:30,
	    autoplay:true,
	    autoplayTimeout:2000,
	    autoplayHoverPause:true
	  });
	});
</script>