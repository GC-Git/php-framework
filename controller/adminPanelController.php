<?php


# Include html header
include( APP_VIEW . '/header.php' );

# Include main navigation
include( APP_VIEW . '/nav.php' );

switch ( $route->getAction() ) {

    case 'add':
        include( APP_VIEW .'/admin/addTrailer.php' );
        break;

    case 'list':
        $trailers = listTrailers();
        include( APP_VIEW .'/admin/listTrailers.php' );
        break;

    default:
        $trailers = listTrailers();
        include( APP_VIEW .'/admin/addTrailer.php' );
        break;
}

// Local Functions
function listTrailers(){
    $sql = "SELECT * FROM trailers";
    $dbObj = new db();
    $dbObj->dbPrepare($sql);
    $dbObj->dbExecute();
    $trailers = $dbObj->dbFetch("all");

    return $trailers;
}

# Include html footer
include( APP_VIEW . '/footer.php' );
