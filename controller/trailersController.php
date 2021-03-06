<?php


# Include html header
include( APP_VIEW . '/header.php' );

# Include main navigation
include( APP_VIEW . '/nav.php' );

switch ( $route->getAction() ) {

    // TODO: Handle urls parameters like '1' or '2' representing the trailer ID. Use this to display the appropriate trailer
    //         $lastParam = $route->getParams();
    //        print_r(end($lastParam));


    case 'list':
        $trailers = listTrailers();
        include( APP_VIEW .'/trailers/listSubNav.php' );
//        include( APP_VIEW .'/trailers/listTrailers.php' );
        break;

    case 'remove':
        $trailers = listTrailers();
        $lastParam = $route->getParams();
        $lastParam = end($lastParam);
        if(is_numeric($lastParam)) {
            if(isset($_SESSION['role'])) {
                if(in_array("ROLE_ADMIN", $_SESSION['role'])) {
                    $sql = "DELETE FROM project.trailers WHERE id = :trailerID";

                    $params = array(
                        ":trailerID" => $lastParam
                    );

                    $dbObj = new db();
                    $dbObj->dbPrepare($sql);
                    $dbObj->dbExecute($params);
                }
            }
        }
        header('Location: '. APP_DOC_ROOT . '/trailers');
        break;

    default:
        $trailers = listTrailers();
        $lastParam = $route->getParams();
        $lastParam = end($lastParam);
        // If there's a number like trailers/1 in the url, itll go to the appropriate video, otherwise it goes to list
        if(is_numeric($lastParam)) {
            
            include(APP_VIEW . '/trailers/listSubNav.php');
            include(APP_VIEW . '/trailers/showTrailer.php');
        } else {
            include(APP_VIEW . '/trailers/listSubNav.php');
//            include( APP_VIEW .'/trailers/listTrailers.php' );
        }
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
