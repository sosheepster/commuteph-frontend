<?php include('header.php'); ?>

  <div class="row">
    <div class="large-8 push-4 columns">
      <section class="intro-content">
        <h2>Routes that need directions</h2>
        <p>These are some routes that need directions. Maybe if you know the way, you can add it to our database!</p>

        <form>
          <div class="row collapse">
            <div class="small-8 columns">
              <input type="text" placeholder="Find routes from a specific area or place">
            </div>
            <div class="small-4 columns">
              <input type="submit" class="button prefix secondary" value="Filter Results">
            </div>
          </div>
        </form>

        <!-- show all, recent first, just paginate -->
        <ul class="browse-routes">
          <li><a href="#">Katipunan Station (LRT2) to Eastwood City</a></li>
          <li><a href="#">McKinley Hill to Crossing Station</a></li>
          <li><a href="#">masinag to kingsville</a></li>
          <li><a href="#">Katipunan Station (LRT2) to Eastwood City</a></li>
          <li><a href="#">McKinley Hill to Crossing Station</a></li>
          <li><a href="#">Katipunan Station (LRT2) to Eastwood City</a></li>
          <li><a href="#">McKinley Hill to Crossing Station</a></li>
          <li><a href="#">masinag to kingsville</a></li>
          <li><a href="#">Katipunan Station (LRT2) to Eastwood City</a></li>
          <li><a href="#">McKinley Hill to Crossing Station</a></li>
          <li><a href="#">Katipunan Station (LRT2) to Eastwood City</a></li>
          <li><a href="#">McKinley Hill to Crossing Station</a></li>
          <li><a href="#">masinag to kingsville</a></li>
          <li><a href="#">Katipunan Station (LRT2) to Eastwood City</a></li>
          <li><a href="#">McKinley Hill to Crossing Station</a></li>
          <li><a href="#">Katipunan Station (LRT2) to Eastwood City</a></li>
          <li><a href="#">McKinley Hill to Crossing Station</a></li>
          <li><a href="#">masinag to kingsville</a></li>
          <li><a href="#">Katipunan Station (LRT2) to Eastwood City</a></li>
          <li><a href="#">McKinley Hill to Crossing Station</a></li>
          <li><a href="#">Katipunan Station (LRT2) to Eastwood City</a></li>
          <li><a href="#">McKinley Hill to Crossing Station</a></li>
          <li><a href="#">masinag to kingsville</a></li>
          <li><a href="#">Katipunan Station (LRT2) to Eastwood City</a></li>
          <li><a href="#">McKinley Hill to Crossing Station</a></li>
          <li><a href="#">Katipunan Station (LRT2) to Eastwood City</a></li>
          <li><a href="#">McKinley Hill to Crossing Station</a></li>
          <li><a href="#">masinag to kingsville</a></li>
          <li><a href="#">Katipunan Station (LRT2) to Eastwood City</a></li>
          <li><a href="#">McKinley Hill to Crossing Station</a></li>
          <li><a href="#">Katipunan Station (LRT2) to Eastwood City</a></li>
          <li><a href="#">McKinley Hill to Crossing Station</a></li>
          <li><a href="#">masinag to kingsville</a></li>
          <li><a href="#">Katipunan Station (LRT2) to Eastwood City</a></li>
          <li><a href="#">McKinley Hill to Crossing Station</a></li>
          <li><a href="#">Katipunan Station (LRT2) to Eastwood City</a></li>
          <li><a href="#">McKinley Hill to Crossing Station</a></li>
          <li><a href="#">masinag to kingsville</a></li>
          <li><a href="#">Katipunan Station (LRT2) to Eastwood City</a></li>
          <li><a href="#">McKinley Hill to Crossing Station</a></li>
        </ul>

        <?php include('widgets/pagination.php'); ?>
        
        <form>
          <div class="row collapse">
            <div class="small-8 columns">
              <input type="text" placeholder="Find routes from a specific area or place">
            </div>
            <div class="small-4 columns">
              <input type="submit" class="button prefix secondary" value="Filter Results">
            </div>
          </div>
        </form>


      </section>
    </div>
    <div class="large-4 pull-8 columns">
      <?php include('widgets/sidebar-popular.php'); ?>
      <?php include('widgets/sidebar-recentadded.php'); ?>
    </div>
  </div>

<?php include('footer.php'); ?>