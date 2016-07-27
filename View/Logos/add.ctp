<article class="card shadow-1">
<?php echo $this->Form->create('Logo'); ?>
    <fieldset>
      <legend>Add Pass</legend>
      <div class="margenesHorizontales">

				<div class="col-md-12">
	        <div class="form-group">
	          <label style="color:black;">Name</label>
	          <?php echo $this->Form->input('name',array('div'=>false,'label'=>false,'class'=>'form-control','placeholder'=>'Name')); ?>
	        </div>
	      </div>
	      <legend>Upload LOGO File</legend>

				<div class="col-md-12 dlink-dropzone">
	        <label style="color:black;">LOGO File</label>
	        <div  class="dropzone"  id ="drop-csv"  name="mainFileUploader">
            <div  class="fallback">
            	<input  name="file"  type="file" />
            </div>
	        </div>
	      </div>
	      <div id="content_csv"></div>

        <div class="margenesVerticales" style="text-align:right;margin-top:30px;float:right;">
          <input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'logos';" title="Go Back" value = "Back" style="width: 79px;">
          <button type="submit" class="btn btn-primary" id="save">
            Save
          </button>
        </div>
      </div>
    </fieldset>
</article>

<script type="text/javascript">
$(document).ready(function() {
	$("#drop-csv").dropzone({ url: WEBROOT+"start/upload", maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Drop here LOGO File or <a  class="add-files">Browse in your PC</a></p>',maxFiles: 1, acceptedFiles: "image/jpeg,image/png,image/gif",
		success:function(data){
			$('#content_csv').html('<input type="hidden" value='+data.xhr.response+' name="data[Logo][logo]">');
	  }
	});
});
</script>
