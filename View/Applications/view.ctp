<!-- <div class="applications view">
<h2><?php echo __('Application'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($application['Application']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($application['Application']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last'); ?></dt>
		<dd>
			<?php echo h($application['Application']['last']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($application['Application']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($application['Application']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($application['Application']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Treasurer Name'); ?></dt>
		<dd>
			<?php echo h($application['Application']['treasurer_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Treasurer Email'); ?></dt>
		<dd>
			<?php echo h($application['Application']['treasurer_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Treasurer Phone'); ?></dt>
		<dd>
			<?php echo h($application['Application']['treasurer_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Club Name'); ?></dt>
		<dd>
			<?php echo h($application['Application']['club_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sport'); ?></dt>
		<dd>
			<?php echo h($application['Application']['sport']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Members'); ?></dt>
		<dd>
			<?php echo h($application['Application']['members']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
			<?php echo h($application['Application']['website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook'); ?></dt>
		<dd>
			<?php echo h($application['Application']['facebook']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logo'); ?></dt>
		<dd>
			<?php echo h($application['Application']['logo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Free'); ?></dt>
		<dd>
			<?php echo h($application['Application']['free']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Application'), array('action' => 'edit', $application['Application']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Application'), array('action' => 'delete', $application['Application']['id']), array(), __('Are you sure you want to delete # %s?', $application['Application']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Application'), array('action' => 'add')); ?> </li>
	</ul>
</div>
 -->

<style type="text/css">
label{
	color: black;
}
</style>

<article class="card shadow-1">
  <fieldset>
      <legend><b>Application</b><?php echo ': '; if (!empty($application)) { echo '<small>'.$application['Application']['club_name'].'</small>'; }?></legend>
      <div class="margenesHorizontales">
      	<div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Name</label>
              <?php echo h($application['Application']['name'])?>
						</div>
      		</div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Last</label>
              <?php echo h($application['Application']['last'])?>
						</div>
      		</div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Email</label>
              <?php echo h($application['Application']['email'])?>
						</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>

      	<div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Phone</label>
              <?php echo h($application['Application']['phone'])?>
						</div>
      		</div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Position</label>
              <?php echo h($application['Application']['position'])?>
						</div>
      		</div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Treasurer Name</label>
              <?php echo h($application['Application']['treasurer_name'])?>
						</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>

      	<div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Treasurer Email</label>
              <?php echo h($application['Application']['treasurer_email'])?>
						</div>
      		</div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Treasurer Phone</label>
              <?php echo h($application['Application']['treasurer_phone'])?>
						</div>
      		</div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Club Name</label>
              <?php echo h($application['Application']['club_name'])?>
						</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>

      	<div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Sport</label>
              <?php echo h($application['Application']['sport'])?>
						</div>
      		</div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Number of members</label>
              <?php echo h($application['Application']['members'])?>
						</div>
      		</div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Website</label>
              <?php echo h($application['Application']['website'])?>
						</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>

      	<div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Facebook page</label>
              <?php echo h($application['Application']['facebook'])?>
						</div>
      		</div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Free</label>
              <?php if($application['Application']['free']){echo 'Yes';}else{echo 'No';}?>
						</div>
      		</div>
      		<div class="col-md-4">
      			<div class="form-group">
							<label>Logo</label>
              <img style="width:50%;" src="<?php echo $this->webroot; ?>files/<?php echo $application['Application']['logo']; ?>">
						</div>
      		</div>
      		<div style="clear:both;"></div>
      	</div>
      		<div class="margenesVerticales" style="text-align:right;">
	          	<input type="button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'applications';" value="Go Back" style="width: 80px;"> 
      			<?php if(!$application['Application']['active']){ ?>
	          	<input type="button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'applications/addlogo/<?php echo $application['Application']['id']; ?>';" value="Accept" style="width: 80px;"> 	  
	          <?php }else{ ?>
	          	<input type="button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'applications/removelogo/<?php echo $application['Application']['id']; ?>';" value="Remove" style="width: 80px;"> 	  
	          <?php } ?>
					</div>
      	</div>    
</div>          
    </fieldset>  
</article>

