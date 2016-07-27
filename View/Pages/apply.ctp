<section id="apply">
	<h2 class="animated">AWESOME!</h2>
	<p class="animated">Looks like you’re keen <b>to fundraise the fun way.</b><br><br><b>We just need a few details to kick off your fundraising</b><br>then you should be good to go within 10 days.</p>

	<form id="form">
		<div id="personal_contact" class="col-md-6 animated">
			<h3>PERSONAL CONTACT</h3>

			<div class="input_content animated">
				<label>Contact name</label>
				<div class="col-md-6 input_left">
					<input id="first_name" class="input_clubs" placeholder="First">
				</div>
				<div class="col-md-6 input_right">
					<input id="last_name" class="input_clubs" placeholder="Last">
				</div>
			</div>

			<div class="input_content animated">
				<label>Email address</label>
				<input id="email" class="input_clubs" placeholder="">
			</div>

			<div class="input_content animated">
				<label>Phone number</label>
				<input id="phone" class="input_clubs" placeholder="">
			</div>

			<div class="input_content animated">
				<label>Your position in the club</label>
				<input id="position" class="input_clubs" placeholder="">
			</div>

			<div class="input_content animated">
				<label>Treasurer name</label>
				<div class="col-md-6 input_left">
					<input id="first_treasure" class="input_clubs" placeholder="First">
				</div>
				<div class="col-md-6 input_right">
					<input id="last_treasure" class="input_clubs" placeholder="Last">
				</div>
				<div id="copy_name" class="copy">Copy my name</div>
			</div>

			<div class="input_content animated">
				<label>Treasurer email</label>
				<input id="treasurer_email" class="input_clubs" placeholder="">
				<div id="copy_email" class="copy">Copy my email</div>
			</div>

			<div class="input_content animated">
				<label>Treasurer phone</label>
				<input id="treasurer_phone" class="input_clubs" placeholder="">
				<div id="copy_phone" class="copy">Copy my phone</div>
			</div>
		<hr>
		</div>
		<div id="club_details" class="col-md-6 animated">
			<h3>CLUB DETAILS</h3>

			<div class="input_content animated">
				<label>Name of your club</label>
				<input id="club_name" class="input_clubs" placeholder="">
			</div>

			<div class="input_content animated">
				<label>Sport</label>
				<select id="sports" class="input_clubs">
					<option></option>
					<option>Rugby</option>
					<option>Cricket</option>
					<option>Netball</option>
					<option>Tennis</option>
					<option>Basketball</option>
					<option>Field hockey</option>
				</select>
			</div>

			<div class="input_content animated">
				<label style="font-size: 18px;">Number of club members</label>
				<select id="nums_members" class="input_clubs">
					<option></option>
					<option>1-100</option>
					<option>101-300</option>
					<option>301- 600</option>
					<option>601-1,000</option>
					<option>1,001+</option>
				</select>
			</div>

			<div class="input_content animated">
				<label>Website</label>
				<input id="website" class="input_clubs" placeholder="URL">
			</div>

			<div class="input_content animated">
				<label>Facebook page</label>
				<label class="sub_label">(if you have one)</label>
				<input id="facebook_page" class="input_clubs" placeholder="URL">
			</div>

		</div>

			<p class="animated">Want to try out <b>FAN PASS</b> yourself for free? </p>
			<div class="submit animated">
				<div id="submit_content">
					<div class="col-md-6">
						<label class="left">YES</label>
						<input id="yes" type="radio" name="check_clubs" value="1" class="radio_clubs left">
					</div>
					<div class="col-md-6">
						<label class="right">NO</label>
						<input id="no" type="radio" name="check_clubs" value="0" class="radio_clubs right">
					</div>
					<button style="float:left;" class="btn_clubs black_trans animated" onclick="window.location.href='<?php echo $this->webroot;?>confirmation'">APPLY NOW</button>
				</div>
			</div>
	</form>


	<div id="footer">
		<div id="rights"></div>
		<ul>
			<li><a href="">ABOUT US</a></li>
			<li><a href="">CONTACT US</a></li>
			<li><a href="">FAQ</a></li>
		</ul>
		<div id="clubs_2"></div>
	</div>
</section>

<script type="text/javascript">

$('#copy_name').click(function(event) {
	$('#first_treasure').val($('#first_name').val());
	$('#last_treasure').val($('#last_name').val());
});
$('#copy_email').click(function(event) {
	$('#treasurer_email').val($('#email').val());
});
$('#copy_phone').click(function(event) {
	$('#treasurer_phone').val($('#phone').val());
});

</script>