
<!-- sub navigation -->
<div class="col-md-3">
    <div class="well sidebar-nav">
        <ul class="nav nav-list">
            <li class="nav-header">Trailer List</li>
            <?php foreach($trailers as $key => $trailer){
                $videoUrl = $trailer['url'];
                ?>
                <li>
                    <a href="<?php print APP_DOC_ROOT . '/trailers/' .$trailer['id']; ?>"><?php print $trailer['title']; ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
<!-- end sub navigation -->