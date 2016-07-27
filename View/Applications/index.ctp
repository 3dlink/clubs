<div class="applications index">
 <!--List  Open-->
      <article class="card shadow-1">
          <fieldset>
            <legend>Applications</legend>
            <!--Search Close-->
            <div class="margenesHorizontales">
              <table class="table table-striped">
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Club Name</th>
                  <th>Sport</th>
                  <th>Website</th>
                  <th>Accepted</th>
                  <th></th>
                </th>

                <?php foreach ($applications as $item): ?>
									<tr>
                    <td><?php echo h($item['Application']['name'].' '.$item['Application']['last']); ?>&nbsp;</td>
                    <td><?php echo h($item['Application']['email']); ?>&nbsp;</td>
                    <td><?php echo h($item['Application']['club_name']); ?>&nbsp;</td>
                    <td><?php echo h($item['Application']['sport']); ?>&nbsp;</td>
                    <td><?php echo h($item['Application']['website']); ?>&nbsp;</td>
                    <td><?php if($item['Application']['active']){echo 'Yes';}else{echo 'No';} ?>&nbsp;</td>
	                  <td>
	                    <div style="display: block; width: 80px; margin: 0 auto;">
	                      <a href="<?php echo $this->webroot;?>applications/delete/<?php echo $item['Application']['id'];?>" onclick="if (confirm(&quot;Please, confirm you want to delete the application&quot;)) { return true; } return false;" class="menuTable" title="Delete application">
	                        X</a>
	                      <a href="<?php echo $this->webroot;?>applications/view/<?php echo $item['Application']['id'];?>" title="View Application" class="menuTable">
	                        ->
	                      </a>
	                    </div>                  
	                  </td>
									</tr>
								<?php endforeach; ?>
              </table>
            </div> 
          </fieldset>          
      </article>

<ul class="pagination">
<?php
  echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
  echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
  echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
?>
</ul>

</div>	