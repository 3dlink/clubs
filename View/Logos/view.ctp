<div class="logos view">
<h2><?php echo __('Logo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($logo['Logo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($logo['Logo']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logo'); ?></dt>
		<dd>
			<?php echo h($logo['Logo']['logo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Logo'), array('action' => 'edit', $logo['Logo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Logo'), array('action' => 'delete', $logo['Logo']['id']), array(), __('Are you sure you want to delete # %s?', $logo['Logo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Logos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Logo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
