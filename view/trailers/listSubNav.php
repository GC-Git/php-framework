
<!-- sub navigation -->
<div class="col-md-3">
    <div class="panel panel-default">
        <div class="panel-heading">Trailer List</div>
        <div class="panel-body">
            <?php foreach($trailers as $key => $trailer){
                $videoUrl = $trailer['url'];
                ?>
                <a class="list-group-item" href="<?php print APP_DOC_ROOT . '/trailers/' .$trailer['id']; ?>"><?php
                    print $trailer['title'];
                    if(isset($_SESSION['role'])){
                        if(in_array("ROLE_ADMIN", $_SESSION['role'])){
                            print '<span id="'.$trailer['id'].'" class="removeTrailer glyphicon glyphicon-remove pull-right"></span>';
                        }
                    }
                     ?>
                </a>
            <?php } ?>
        </div>
    </div>
</div>
<script>
    $(function(){
        $('.removeTrailer').click(function(event){
            event.preventDefault();
            console.log(event.currentTarget.id);
            window.location.replace("<?php print APP_DOC_ROOT . '/trailers/remove/'?>" + event.currentTarget.id);
        })
    })
</script>
<!-- end sub navigation -->