<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<?php echo Asset::css(array(
    'bootstrap.css',
    'pace/pace.css',
    'http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic',
    'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
    'font-awesome.min.css',
    'style.css',
    'plugins.css',
    'demo.css'
    )); ?>
	<?php echo Asset::js(array(
		'http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js',
		'bootstrap.js',
    'pace/pace.js'
	)); ?>
	<script>
		$(function(){ $('.topbar').dropdown(); });
	</script>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="login-banner text-center">
          <h1><i class="fa fa-gears"></i> Synergy Networks Center</h1>
      </div>
      <div class="portlet portlet-green">
          <div class="portlet-heading login-heading">
              <div class="portlet-title">
                  <h4><strong>Login to SNC!</strong>
                  </h4>
              </div>
              <div class="portlet-widgets">
                  <button class="btn btn-white btn-xs"><i class="fa fa-plus-circle"></i> New User</button>
              </div>
              <div class="clearfix"></div>
          </div>
          <div class="portlet-body">
            <?php echo Form::open(array()); ?>

              <?php if (isset($_GET['destination'])): ?>
                <?php echo Form::hidden('destination',$_GET['destination']); ?>
              <?php endif; ?>

              <?php if (isset($login_error)): ?>
                <div class="error"><?php echo $login_error; ?></div>
              <?php endif; ?>

              <div class="form-group <?php echo ! $val->error('email') ?: 'has-error' ?>">
                <label for="email">Email or Username:</label>
                <?php echo Form::input('email', Input::post('email'), array('class' => 'form-control', 'placeholder' => 'Email or Username', 'autofocus')); ?>

                <?php if ($val->error('email')): ?>
                  <span class="control-label"><?php echo $val->error('email')->get_message('You must provide a username or email'); ?></sőan>
                <?php endif; ?>
              </div>

              <div class="form-group <?php echo ! $val->error('password') ?: 'has-error' ?>">
                <label for="password">Password:</label>
                <?php echo Form::password('password', null, array('class' => 'form-control', 'placeholder' => 'Password')); ?>

                <?php if ($val->error('password')): ?>
                  <span class="control-label"><?php echo $val->error('password')->get_message(':label cannot be blank'); ?></span>
                <?php endif; ?>
              </div>

              <div class="actions">
                <?php echo Form::submit(array('value'=>'Login', 'name'=>'submit', 'class' => 'btn btn-lg btn-primary btn-block')); ?>
              </div>

            <?php echo Form::close(); ?>
          </div>
      </div>
    </div>
  </div>
</div>

  <?php echo Asset::js(array(
      'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js',
      'bootstrap/bootstrap.min.js',
      'slimscroll/jquery.slimscroll.min.js',
      'popupoverlay/jquery.popupoverlay.js',
      'popupoverlay/defaults.js',
      'hisrc/hisrc.js',
      'flex.js'
    )); ?>
  
</body>
</html>