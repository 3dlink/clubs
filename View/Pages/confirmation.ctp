<section id="confirmation">
	<h2 class="animated">You’re set to fundraise<br>with your feet up</h2>
	<p class="animated"><b>Cheers <?php echo $application['Application']['name']; ?>,</b> now your club can start fundraising just by watching sport. We should have you up and running within 10 days.
		<br><br>
		<b>We’ll be in touch soon</b> with some handy info to help you spread the word back at the club rooms.
		<br><br>
		<b>Add your club logo to the FAN PASS website,</b> to help promote your fundraising efforts here too. You can upload it here.
	</p>

	<div style="text-align:center;" class="animated">
		<input type="file" id="file2" name="file2" accept="image/*" data-img="" data-index="" />
	</div>
	<div class="imageHiddenContent2"></div>

	<button id="upload_btn" class="animated btn_clubs black_trans" onclick="window.location.href='<?php echo $this->webroot;?>'">UPLOAD</button>

	<div id="footer">
		<div id="rights"></div>
		<ul>
			<li><a href="<?php echo $this->webroot; ?>about">ABOUT US</a></li>
			<li><a href="<?php echo $this->webroot; ?>contact">CONTACT US</a></li>
			<li><a href="<?php echo $this->webroot; ?>faq">FAQ</a></li>
		</ul>
		<div id="clubs_2"></div>
	</div>
</section>

<script type="text/javascript">
	$("#file2").pekeUpload({showPercent: false,allowedExtensions:"jpeg|jpg|png|gif", multi:false, url:"<?php echo $this->webroot?>start/upload/<?php echo $id; ?>"});


	$(window).resize(function() {
		if($(window).height()>870)
			$('#confirmation').css('height', $(window).height());
	});

	$(document).ready(function() {
		if($(window).height()>870)
			$('#confirmation').css('height', $(window).height());
	});

</script>