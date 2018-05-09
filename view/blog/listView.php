
        <!-- page content -->
        <div class="col-md-9">
          <div class="pageContent">

<?php foreach($posts as $key => $post){
    $byLine = $post['author'] . ' - ' . $post['posted'];
    $content = 500 > strlen($post['content']) ? $post['conent'] : substr($post['content'],0, 500) . '...'
    ?>
            <div class="well post">
                <div class="postTitle">
                    <h1><?php print $post['title']; ?></h1>
                </div>

                <div class="postByLine">
                    <strong><em><?php print $byLine; ?></em></strong>
                </div>

                <div class="content">
                    <?php print $content; ?>
                </div>
            </div>
<?php } ?>

          </div>
        </div>
        <!-- end page content -->
