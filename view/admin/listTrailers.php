
        <!-- page content -->
        <div class="col-md-9">
          <div class="pageContent">

<?php foreach($trailers as $key => $trailer){
    $videoUrl = $trailer['url'];
    $description = 500 > strlen($trailer['description']) ? $trailer['description'] : substr($trailer['description'],0, 500) . '...'
    ?>
            <div class="well post">
                <div class="postTitle">
                    <h1><?php print $trailer['title']; ?></h1>
                </div>

                <div class="trailer">
                    <iframe width="560" height="315" src="<?php print $trailer['url']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>

                <div class="description">
                    <?php print $description; ?>
                </div>
            </div>
<?php } ?>

          </div>
        </div>
        <!-- end page content -->
