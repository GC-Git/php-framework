
    <!-- main navigation -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo APP_DOC_ROOT . '/trailers'; ?>">Bad Movie Trailers</a>
        </div>
        <div class="navbar-collapse collapse">


            <ul class="nav navbar-nav navbar-right">
            <?php if ( 0 !== APP_AUTH_TYPE && isset($_SESSION["username"]) ) { ?>
                <li><a href="<?php echo APP_DOC_ROOT . '/admin'; ?>"><span class="glyphicon glyphicon-plus"></span> New Trailer</a></li>
                <li><a href="<?php echo APP_DOC_ROOT; ?>/auth/logout">Logout</a></li>
            <?php } else {?>
                <li><a href="<?php echo APP_DOC_ROOT . '/admin'; ?>">Login</a></li>
            <?php } ?>
            </ul>

        </div>
      </div>
    </div>
    <!-- end main navigation -->

    <!-- start page container -->
    <div class="container-fluid">
      <div class="row">
