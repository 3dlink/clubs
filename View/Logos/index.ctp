<div class="logos index">
 <!--List  Open-->
      <article class="card shadow-1">
          <fieldset>
            <legend>Logos <buttom onclick="window.location.href=WEBROOT+'logos/add';" style="float:right" class="btn btn-primary">Add Logo</buttom></legend>
            <!--Search Close-->
            <div class="margenesHorizontales">
              <table class="table table-striped">
                <tr>
                  <th>Name</th>
                  <th></th>
                </th>

                <?php foreach ($logos as $item): ?>
									<tr>
                    <td><?php echo h($item['Logo']['name']); ?>&nbsp;</td>
	                  <td>
	                    <div style="display: block; width: 80px; margin: 0 auto;">
  	                      <a href="<?php echo $this->webroot;?>logos/edit/<?php echo $item['Logo']['id'];?>" title="Edit Logo" class="menuTable">
  	                        <span class="glyphicon glyphicon-pencil"></span>
  	                      </a>
  	                      <a href="<?php echo $this->webroot;?>logos/delete/<?php echo $item['Logo']['id'];?>" onclick="if (confirm(&quot;Please, confirm you want to delete the Logo&quot;)) { return true; } return false;" class="menuTable" title="Delete Logo">
  	                        X</a>
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