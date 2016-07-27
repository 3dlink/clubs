<section id="apply">
	<div id="apply_cont">
	<h2 class="animated">AWESOME!</h2>
	<p class="animated">Looks like you’re keen <b>to fundraise the fun way.</b><br><br><b>We just need a few details to kick off your fundraising</b><br>then you should be good to go within 10 days.</p>

<?php echo $this->Form->create('Application',array('id'=>'form')); ?>
		<div id="personal_contact" class="col-md-6 animated">
			<h3>PERSONAL CONTACT</h3>

			<div class="input_content animated">
				<label>Contact name</label>
				<div class="col-md-6 input_left">
					<?php echo $this->Form->input('name',array('class'=>'input_clubs','placeholder'=>'First','id'=>'first_name','label'=>false,'required'=>true)); ?>
				</div>
				<div class="col-md-6 input_right">
					<?php echo $this->Form->input('last',array('class'=>'input_clubs','placeholder'=>'Last','id'=>'last_name','label'=>false,'required'=>true)); ?>
				</div>
			</div>

			<div class="input_content animated">
				<label>Email address</label>
					<?php echo $this->Form->input('email',array('class'=>'input_clubs','placeholder'=>'','id'=>'email','label'=>false,'required'=>true)); ?>
			</div>

			<div class="input_content animated">
				<label>Phone number</label>
					<?php echo $this->Form->input('phone',array('class'=>'input_clubs','placeholder'=>'','id'=>'phone','label'=>false,'required'=>true)); ?>
			</div>

			<div class="input_content animated">
				<label>Your position in the club</label>
					<?php echo $this->Form->input('position',array('class'=>'input_clubs','placeholder'=>'','id'=>'position','label'=>false,'required'=>true)); ?>
			</div>

			<div class="input_content animated">
				<label>Treasurer name</label>
				<div class="col-md-6 input_left">
					<?php echo $this->Form->input('treasurer_name',array('class'=>'input_clubs','placeholder'=>'First','id'=>'first_treasure','label'=>false,'required'=>true)); ?>
				</div>
				<div class="col-md-6 input_right">
					<?php echo $this->Form->input('treasurer_last',array('class'=>'input_clubs','placeholder'=>'Last','id'=>'last_treasure','label'=>false,'required'=>true)); ?>
				</div>
				<div id="copy_name" class="copy">Copy my name</div>
			</div>

			<div class="input_content animated">
				<label>Treasurer email</label>
					<?php echo $this->Form->input('treasurer_email',array('class'=>'input_clubs','placeholder'=>'','id'=>'treasurer_email','label'=>false,'required'=>true)); ?>
				<div id="copy_email" class="copy">Copy my email</div>
			</div>

			<div class="input_content animated">
				<label>Treasurer phone</label>
					<?php echo $this->Form->input('treasurer_phone',array('class'=>'input_clubs','placeholder'=>'','id'=>'treasurer_phone','label'=>false,'required'=>true)); ?>
				<div id="copy_phone" class="copy">Copy my phone</div>
			</div>
		<hr>
		</div>
		<div id="club_details" class="col-md-6 animated">
			<h3>CLUB DETAILS</h3>

			<div class="input_content animated">
				<label>Name of your club</label>
					<?php echo $this->Form->input('club_name',array('class'=>'input_clubs','placeholder'=>'','id'=>'club_name','label'=>false,'required'=>true)); ?>
			</div>

			<div class="input_content animated">
				<label>Sport</label>
					<?php echo $this->Form->input('sport',array('class'=>'input_clubs','id'=>'sports','label'=>false,'type'=>'select','options'=>array(''=>'','Rugby'=>'Rugby','Cricket'=>'Cricket','Netball'=>'Netball','Tennis'=>'Tennis','Basketball'=>'Basketball','Field hockey'=>'Field hockey'))); ?>
			</div>

			<div class="input_content animated">
				<label style="font-size: 18px;">Number of club members</label>
					<?php echo $this->Form->input('members',array('class'=>'input_clubs','id'=>'nums_members','label'=>false,'type'=>'select','options'=>array(''=>'','1-100'=>'1-100','101-300'=>'101-300','301-600'=>'301-600','601-1,000'=>'601-1,000','1,001+'=>'1,001+'))); ?>
			</div>

			<div class="input_content animated">
				<label>Website</label>
					<?php echo $this->Form->input('website',array('class'=>'input_clubs','placeholder'=>'URL','id'=>'website','label'=>false)); ?>
			</div>

			<div class="input_content animated">
				<label>Facebook page</label>
				<label class="sub_label">(if you have one)</label>
					<?php echo $this->Form->input('facebook',array('class'=>'input_clubs','placeholder'=>'URL','id'=>'facebook_page','label'=>false)); ?>
			</div>

		</div>

			<p class="">Want to try out <b>FAN PASS</b> yourself for free? </p>
			<div class="submit ">
				<div id="submit_content">
					<div class="col-md-6">
						<label class="left">YES</label>
						<input id="yes" type="radio" name="check_clubs" value="1" class="radio_clubs left">
					</div>
					<div class="col-md-6">
						<label class="right">NO</label>
						<input id="no" type="radio" name="check_clubs" value="0" class="radio_clubs right">
					</div>
					<input name="data[Application][free]" id="free" hidden value="" type="text">
					<?php echo $this->Form->button('APPLY NOW', array('class'=>array('btn_clubs','black_trans'),'style'=>'float:left;')); ?>
				</div>
			</div>


	<div id="footer">
		<div id="rights"></div>
		<ul>
			<li><a href="<?php echo $this->webroot; ?>about">ABOUT US</a></li>
			<li><a href="<?php echo $this->webroot; ?>contact">CONTACT US</a></li>
			<li><a href="<?php echo $this->webroot; ?>faq">FAQ</a></li>
		</ul>
		<div id="clubs_2"></div>
	</div>
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

$('.radio_clubs').click(function(event) {
	$('#free').attr('value', $( "input:checked" ).val());
});

</script>