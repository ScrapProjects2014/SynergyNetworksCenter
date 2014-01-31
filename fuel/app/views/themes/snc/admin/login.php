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