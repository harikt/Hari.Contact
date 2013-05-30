<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<?php
    $this->scripts()->add('/asset/Hari.Contact/js/bootstrap.min.js');
    $this->scripts()->add('/asset/Hari.Contact/js/jquery.js');
    $this->scripts()->add('/asset/Hari.Contact/js/bootstrap-transition.js');
    $this->scripts()->add('/asset/Hari.Contact/js/bootstrap-alert.js');
    $this->scripts()->add('/asset/Hari.Contact/js/bootstrap-modal.js');
    $this->scripts()->add('/asset/Hari.Contact/js/bootstrap-dropdown.js');
    $this->scripts()->add('/asset/Hari.Contact/js/bootstrap-scrollspy.js');
    $this->scripts()->add('/asset/Hari.Contact/js/bootstrap-tab.js');
    $this->scripts()->add('/asset/Hari.Contact/js/bootstrap-tooltip.js');
    $this->scripts()->add('/asset/Hari.Contact/js/bootstrap-popover.js');
    $this->scripts()->add('/asset/Hari.Contact/js/bootstrap-button.js');
    $this->scripts()->add('/asset/Hari.Contact/js/bootstrap-collapse.js');
    $this->scripts()->add('/asset/Hari.Contact/js/bootstrap-carousel.js');
    $this->scripts()->add('/asset/Hari.Contact/js/bootstrap-typeahead.js');

    $this->styles()->add('/asset/Hari.Contact/css/bootstrap-responsive.min.css');
    $this->styles()->add('/asset/Hari.Contact/css/bootstrap.css');
    echo $this->metas()->get();
    echo $this->title()->get();
    echo $this->styles()->get();
?>
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>
    <?php include $this->find('top-nav'); ?>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
            <?php include $this->find('side-nav'); ?>
        </div><!--/span-->
        <div class="span9">
            <?php echo $this->__raw()->inner_view; ?>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
          <?php include $this->find('footer'); ?>
      </footer>

    </div><!--/.fluid-container-->
  <?php echo $this->scripts()->get(); ?>
  </body>
</html>
