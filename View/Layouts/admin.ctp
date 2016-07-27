<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
?>
<!doctype html>
<html lang="">
  <head>
    <meta charset="utf-8">
	<title>
		Clubs Admin
	</title>
    <?php 
    echo $this->Html->meta('icon');

    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('dropzone');
    echo $this->Html->css('admin');
    echo $this->Html->css('clubs');
    echo $this->Html->script('jquery-2.2.0.min');
    echo $this->Html->script('bootstrap.min');
    echo $this->Html->script('moment.js');
    echo $this->Html->script('bootstrap-datetimepicker.min');
    echo $this->Html->script('dropzone');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
    
<script type="text/javascript">WEBROOT='<?php echo $this->webroot; ?>';</script>
  </head>
  <body>
    <!-- <div id="header" style="margin-bottom:100px;">
      <div onclick="window.location.href='<?php echo $this->webroot;?>'" id="logo"></div>
      <div id="clubs" class="menu_web"></div>
      <div onclick="window.location.href='<?php echo $this->webroot;?>#plan'" class="menu_item menu_web">HOW IT WORKS</div>
      <div onclick="window.location.href='<?php echo $this->webroot;?>#haka'" class="menu_item menu_web">APPLY</div>
      <div onclick="window.location.href='<?php echo $this->webroot;?>#whats'" class="menu_item menu_web">WHAT IS FAN PASS</div>
      <div onclick="window.open('http://www.fanpass.co.nz/','_blank')" class="menu_item menu_web">GO TO FAN PASS</div>
      <div id="burger"></div>
      <div id="menu_movil">
        <div onclick="window.location.href='<?php echo $this->webroot;?>#plan'" class="menu_movil">HOW IT WORKS</div>
        <div onclick="window.location.href='<?php echo $this->webroot;?>#haka'" class="menu_movil">APPLY</div>
        <div onclick="window.location.href='<?php echo $this->webroot;?>#whats'" class="menu_movil">WHAT IS FAN PASS</div>
        <div onclick="window.open('http://www.fanpass.co.nz/','_blank')" class="menu_movil">GO TO FAN PASS</div>
      </div>
    </div> -->
    <?php
      echo $this->element('menu');
    ?>
    <section class="container">
    <?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content'); ?>
    </section>

    <script type="text/javascript">
      $('#burger').click(function(event) {
        if($('#menu_movil').hasClass('in')){
          $('#menu_movil').css('display', 'none');
          $('#menu_movil').removeClass('in');
          $('#header').css('height', '50px');
        }else{
          $('#menu_movil').css('display', 'block');
          $('#menu_movil').addClass('in');
          $('#header').css('height', 'initial');
        }
      });

    $('.error_message').click(function(event) {
      $(this).css('display', 'none');
    });
    $('.success_message').click(function(event) {
      $(this).css('display', 'none');
    });
  </script>
  </body>
</html>