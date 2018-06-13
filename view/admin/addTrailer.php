
        <!-- page content -->
        <div class="col-md-9">
          <div class="well pageContent">

              <h2>Add a trailer</h2>
              <?php if ($error != '') { ?>
                  <div class="alert alert-danger" role="alert">
                      <p><?php print $error;?><p>
                  </div>
              <?php } ?>
              <form method="post" action="<?php print APP_DOC_ROOT; ?>/admin/add">
                  <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Trailer title">
                  </div>
                  <div class="form-group">
                      <label for="titleKey">IMDB Title Key</label>
                      <input type="text" class="form-control" name="titleKey" placeholder="ex: tt0083624">
                  </div>
                  <div class="form-group">
                      <label for="description">Description</label>
                      <input type="text" class="form-control" name="description" placeholder="Trailer description">
                  </div>
                  <div class="form-group">
                      <label for="link">Video embeded url</label>
                      <input type="text" class="form-control" name="link" placeholder="URL (embedded iframe format)">
                  </div>
                  <button name="submitTrailerButton" type="submit" id="submitTrailerButton" class="btn btn-default">Submit</button>
              </form>
          </div>
        </div>
        <!-- end page content -->
