<div class="applications index">
 <!--List  Open-->
  <article class="card shadow-1">
      <fieldset>
        <legend>Contents</legend>
        <!--Search Close-->
        <div class="margenesHorizontales">
          <table class="table table-striped">
            <tr>
              <th style="text-align:center;">Title</th>
              <!-- <th>Content</th> -->
              <th style="text-align:center;">Action</th>
            </th>
            <?php foreach ($content as $item): ?>
							<tr>
                <td style="text-align:center;"><?php echo h($item['Content']['Title']); ?>&nbsp;</td>
                <!-- <td><?php echo h($item['Content']['Content']); ?>&nbsp;</td> -->
                <td style="text-align:center;">
                  <a style="" href="<?php echo $this->webroot;?>contents/edit/<?php echo $item['Content']['id'];?>" title="View Application" class="">
                    Edit
                  </a>
                </td>
							</tr>
						<?php endforeach; ?>
          </table>
        </div>
      </fieldset>
  </article>
</div>