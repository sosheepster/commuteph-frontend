<?php include('header.php'); ?>

  <div class="row">
    <div class="large-6 small-12 push-3 columns">
      <section class="page">
        <h2><a href="#route-page"><span class="desc">From</span>
            <span class="pointA">Cubao Station (MRT)</span> to <span class="pointB">Eastwood City</span></a></h2>
        <section class="set-directions">
          <div class="directions">
            <ul class="list-directions">
              <li class="jeep">Ride Jeep to <strong>Katipunan</strong> bound to <em>Katipunan</em></li>
              <li class="train">Ride <strong>LRT2 to Cubao</strong></li>
              <li class="jeep">Ride Jeep to <strong>Eastwood City</strong> bound to <em>Rosario</em></li>
            </ul>
          </div>
          <div class="reactions">
            <ul class="inline-list">
              <li><a href="#">Upvote</a></li>
              <li><a href="#">Downvote</a></li>
              <li><a href="#" data-dropdown="route-share-ID">Share</a></li>
            </ul>
          </div>

          <ul id="route-share-ID" class="f-dropdown" data-dropdown-content>
            <li><a href="#">Post on Facebook</a></li>
            <li><a href="#">Share on Twitter</a></li>
          </ul>
        </section>


        <a href="add-route.php" class="button secondary expand">
          <span class="desc">Have a better route in mind?</span>
          <span class="action">Add New Directions</span>
        </a>
      </section>

      <section class="comments">
        FB comments here
      </section>
    </div>
    <div class="large-3 pull-6 columns">
      <?php include('widgets/sidebar-needroutes.php'); ?>
      <?php include('widgets/sidebar-recentadded.php'); ?>
    </div>
    <div class="large-3 columns">
      <!-- RELATED ROUTES FOR SEARCH RESULTS:
            list down other routes that may contain PointA or PointB of search.
            limit to 10 -->
      <?php include('widgets/sidebar-search-similar.php'); ?>
      <?php include('widgets/sidebar-popular.php'); ?>
    </div>
  </div>

<?php include('footer.php'); ?>