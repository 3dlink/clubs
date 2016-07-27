<style>
  textarea{
    width:100% !important;
    height:500px !important;  
  }
  h3{
    color: black !important;
  }
</style>

<div class="applications form">
<?php echo $this->Form->create('Content'); ?>
	<fieldset>
    <h3><?php echo ('Edit - '.$this->data['Content']['Title']); ?></h3>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Content', array('class' => 'textareContent','type' => 'textarea', 'label' =>''));

	?>
	</fieldset>
  <div style="float:right;">
    <a class="btn btn-danger" href="<?php echo $this->webroot.'contents'; ?>">Cancel</a>
    <button class="btn btn-success" type="submit">Save</button>
  </div>
<?php echo $this->Form->end(); ?>
</div>
