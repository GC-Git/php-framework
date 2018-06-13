<?php


# Include html header
include( APP_VIEW . '/header.php' );

# Include main navigation
include( APP_VIEW . '/nav.php' );

switch ( $route->getAction() ) {

    case 'add':
        $error = '';
        // TODO: Post never shows up? Even when I post to the link? What even?
        if ($_POST) {
            $error = formInvalid($_POST);
            if($error === ''){
                insertTrailer($_POST['title'], $_POST['titleKey'], $_POST['description'], $_POST['link']);
            }
        }
        include( APP_VIEW .'/admin/addTrailer.php' );
        break;

    case 'list':
        $trailers = listTrailers();
        include( APP_VIEW .'/admin/listTrailers.php' );
        break;

    default:
        $error = "";
//        $trailers = listTrailers();
        include( APP_VIEW .'/admin/addTrailer.php' );
        break;
}

// Local Functions
function listTrailers(){
    $sql = "SELECT * FROM project.trailers";
    $dbObj = new db();
    $dbObj->dbPrepare($sql);
    $dbObj->dbExecute();
    $trailers = $dbObj->dbFetch("all");

    return $trailers;
}

// Returns an error, or empty string if the form is valid
function formInvalid( $array ) {
    $all_valid = true;
    $error = '';

    if($array['title'] == ""){
        $error = "Title required!";
        $all_valid = false;
    }

    if($array['titleKey'] == ""){
        $error = "IMDB Title Key required!";
        $all_valid = false;
    }

    if($array['description'] == ""){
        $error = "Description required!";
        $all_valid = false;
    }

    if($array['link'] == ""){
        $error = "URL required!";
        $all_valid = false;
    }
    if($all_valid == false){
        return $error;
    } else { return '';}
}

function insertTrailer($title, $titleKey, $description, $url){

    $sql = "INSERT INTO project.trailers (title, titleKey, description, url) VALUES (:title, :titleKey,:description, :url)";

    $params = array(
        ":title" => $title,
        ":titleKey" => $titleKey,
        ":description" => $description,
        ":url" => $url
    );

    $dbObj = new db();
    $dbObj->dbPrepare($sql);
    $dbObj->dbExecute($params);
}


# Include html footer
include( APP_VIEW . '/footer.php' );
