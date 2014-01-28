<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    <!-- PACE LOAD BAR PLUGIN - This creates the subtle load bar effect at the top of the page. -->
    <?php echo Asset::css('pace/pace.css'); ?>
    <?php echo Asset::js('pace/pace.js'); ?>

    <!-- GLOBAL STYLES - Include these on every page. -->
    <?php echo Asset::css(array(
      'bootstrap/bootstrap.min.css',
      'http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
      'font-awesome.min.css',
      'style.css',
      'plugins.css',
      )); ?>
    <link href= rel="stylesheet" type="text/css">
    <link href= rel="stylesheet" type="text/css">
    <link href="icons/font-awesome/css/" rel="stylesheet">

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <?php echo $plugins; ?>

    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <script>
      $(function(){ $('.topbar').dropdown(); });
    </script>    
</head>

<body>
  <?php if (Session::get_flash('success')): ?>
				<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<p>
					<?php echo implode('</p><p>', (array) Session::get_flash('success')); ?>
					</p>
				</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
				<div class="alert alert-error alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<p>
					<?php echo implode('</p><p>', (array) Session::get_flash('error')); ?>
					</p>
				</div>
<?php endif; ?>
  
  <?php if($current_user): ?>


        <!-- begin MAIN PAGE CONTENT -->
        <div id="page-wrapper">

            <div class="page-content">

                <!-- begin PAGE TITLE ROW -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title">
                            <h1>
                                <?php echo $title; ?>
                                <small>For Customization</small>
                            </h1>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                                </li>
                                <li class="active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- end PAGE TITLE ROW -->

            </div>
            <!-- /.page-content -->

        </div>
        <!-- /#page-wrapper -->
        <!-- end MAIN PAGE CONTENT -->

    <!-- /#wrapper -->

    <!-- GLOBAL SCRIPTS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/popupoverlay/jquery.popupoverlay.js"></script>
    <script src="js/plugins/popupoverlay/defaults.js"></script>
    <!-- Logout Notification Box -->
    <div id="logout">
        <div class="col-lg-12 logout-img">
            <img src="img/profile-pic.jpg" alt="">
        </div>
        <div class="clearfix"></div>
        <div class="logout-message">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h3>
                            <i class="fa fa-sign-out text-green"></i> Logout
                            <strong><span class="text-green">John Smith</span>?</strong>
                        </h3>
                        <p>Select "Logout" if you are ready to end your current session.</p>
                        <ul class="list-inline">
                            <li>
                                <a href="login.html" class="btn btn-green">
                                    <strong>Logout</strong>
                                </a>
                            </li>
                            <li>
                                <button class="logout_close btn btn-green">Cancel</button>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-sm-5 -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
    <!-- /#logout -->
    <!-- Logout Notification jQuery -->
    <script src="js/plugins/popupoverlay/logout.js"></script>
    <!-- HISRC Retina Images -->
    <script src="js/plugins/hisrc/hisrc.js"></script>

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->

    <!-- THEME SCRIPTS -->
    <script src="js/flex.js"></script>

</body>

</html>
