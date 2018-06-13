
<!-- page content -->
<div class="col-md-9">
    <div class="pageContent">
        <?php

        foreach($trailers as $key => $trailer) {
            if($trailer['id'] == $lastParam){
                $videoUrl = $trailer['url'];
                $description = $trailer['description'];
                $imdbTitleKey = $trailer['titleKey'];
        ?>
            <div class="well post">
                <div class="postTitle">
                    <h1 id="trailerTitle" class="text-center" style="margin-bottom: .5em; margin-top: .2em;"><?php print $trailer['title']; ?></h1>
                </div>

                <div class="embed-responsive embed-responsive-16by9">
                    <?php print $trailer['url']; ?>
                </div>

                <div class="description">
                    <h3>Description</h3>
                    <?php print $description; ?>
                </div>
                <p id="omdbInfo">

                </p>
            </div>
        <?php }} ?>
    </div>
    <script>
        $(function(){
           $.get("http://www.omdbapi.com/?i=<?php print $imdbTitleKey ?>&plot=full&apikey=<?php print APP_OMDB_API_KEY ?>", function (data){
               var omdb = $('#omdbInfo');
               console.log(data);
               omdb.append("<h3>Plot:</h3>" + data.Plot);
               omdb.append("<h4>Released:</h4>" + data.Released);
               $("#trailerTitle").append("<br/><small>IMDB Rating: " + JSON.parse(data.imdbRating) + "</small>");})
        });
    </script>
</div>
<!-- end page content -->
