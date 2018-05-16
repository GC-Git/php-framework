
<!-- page content -->
<div class="col-md-9">
    <div class="pageContent">
        <?php

        foreach($trailers as $key => $trailer) {
            if($trailer['id'] == $lastParam){
                $videoUrl = $trailer['url'];
                $description = $trailer['description'];
        ?>
            <div class="well post">
                <div class="postTitle">
                    <h1><?php print $trailer['title']; ?></h1>
                </div>

                <div class="embed-responsive embed-responsive-16by9">
                    <?php print $trailer['url']; ?>
                </div>

                <div class="description">
                    <?php print $description; ?>
                </div>
            </div>
        <?php }} ?>
    </div>
</div>
<!-- end page content -->
