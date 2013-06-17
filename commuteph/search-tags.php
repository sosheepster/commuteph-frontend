<?php include('header.php'); ?>

  <div class="row">
    <div class="large-9 columns">
      <section class="search">
        <h2>Directions tagged with '<span class="tag-name">malls</span>'</h2>
        <h3 class="search-status">2 directions found</h3>

        <a name="form-top"></a>

        <div class="button-bar add-directions-buttons filter" data-magellan-expedition="fixed">
          <ul class="button-group">
            <li class="desc"><a href="#" class="inline" data-dropdown="copy-filter">Filter</a></li> 
            <li><a href="#form-top" class="small button add-walk">Walk</a></li>
            <li><a href="#form-top" class="small button add-trike">Tricycle</a></li>
            <li><a href="#form-top" class="small button add-jeep">Jeep</a></li>
            <li><a href="#form-top" class="small button add-bus">Bus</a></li>
            <li><a href="#form-top" class="small button add-fx">FX</a></li>
            <li><a href="#form-top" class="small button add-mrt">MRT</a></li>
            <li><a href="#form-top" class="small button add-lrt">LRT</a></li>
            <li><a href="#form-top" class="small button add-lrt2">LRT2</a></li>
          </ul>
        </div>

        <div id="copy-filter" class="f-dropdown content copy-info" data-dropdown-content>
          <p>Click on the buttons to show routes with your preferred mode of transportation.</p>
        </div>

        <section class="set-directions">
          <h4><a href="page-route.php">From Cubao Station (MRT) To Eastwood City</a></h4>
          <div class="directions">
            <ul class="list-directions">
              <li class="jeep">Ride Jeep to <strong>Eastwood City</strong> bound to <em>Rosario</em></li>
            </ul>
          </div>
          <div class="tags">
            <dl class="sub-nav tags-nav">
              <dt>Tags</dt>
              <dd><a href="#">#malls</a></dd>
              <dd><a href="#">#trains</a></dd>
            </dl>
          </div>
          <div class="reactions">
            <ul class="inline-list">
              <li><a href="#">Upvote</a></li>
              <li><a href="#">Downvote</a></li>
              <li><a href="#">Comments</a></li>
              <li><a href="#" data-dropdown="route-share-ID">Share</a></li>
            </ul>
          </div>

          <ul id="route-share-ID" class="f-dropdown" data-dropdown-content>
            <li><a href="#">Post on Facebook</a></li>
            <li><a href="#">Share on Twitter</a></li>
          </ul>
        </section>
        <section class="set-directions">
          <h4><a href="page-route.php">From UP To Eastwood City</a></h4>
          <div class="directions">
            <ul class="list-directions">
              <li class="jeep">Ride Jeep to <strong>Katipunan</strong> bound to <em>Katipunan</em></li>
              <li class="lrt2">Ride <strong>LRT2 to Cubao</strong></li>
              <li class="jeep">Ride Jeep to <strong>Eastwood City</strong> bound to <em>Rosario</em></li>
            </ul>
          </div>
          <div class="tags">
            <dl class="sub-nav tags-nav">
              <dt>Tags</dt>
              <dd><a href="#">#schools</a></dd>
              <dd><a href="#">#malls</a></dd>
            </dl>
          </div>
          <div class="reactions">
            <ul class="inline-list">
              <li><a href="#">Upvote</a></li>
              <li><a href="#">Downvote</a></li>
              <li><a href="#">Comments</a></li>
              <li><a href="#" data-dropdown="route-share-2">Share</a></li>
            </ul>
          </div>

          <ul id="route-share-2" class="f-dropdown" data-dropdown-content>
            <li><a href="#">Post on Facebook</a></li>
            <li><a href="#">Share on Twitter</a></li>
          </ul>
        </section>

        <?php include('widgets/pagination.php'); ?>
      </section>
    </div>
    <div class="large-3 columns">
      <?php include('widgets/sidebar-needroutes.php'); ?>
      <?php include('widgets/sidebar-popular.php'); ?>
      <?php include('widgets/sidebar-recentadded.php'); ?>
    </div>
  </div>

<?php include('footer.php'); ?>