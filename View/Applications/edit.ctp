<div class="applications form">
<?php echo $this->Form->create('Application'); ?>
	<fieldset>
		<legend><?php echo __('Edit Application'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('last');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('position');
		echo $this->Form->input('treasurer_name');
		echo $this->Form->input('treasurer_email');
		echo $this->Form->input('treasurer_phone');
		echo $this->Form->input('club_name');
		echo $this->Form->input('sport');
		echo $this->Form->input('members');
		echo $this->Form->input('website');
		echo $this->Form->input('facebook');
		echo $this->Form->input('logo');
		echo $this->Form->input('free');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Application.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Application.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Applications'), array('action' => 'index')); ?></li>
	</ul>
</div>
