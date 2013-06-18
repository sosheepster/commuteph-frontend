<?php include('header.php'); ?>
  
  <div class="row">
    <div class="small-12 columns">

      <div class="section-container tabs" data-section="tabs" data-options="deep_linking: true">
        <section>
          <p class="title" data-section-title><a href="#directions">Directions</a></p>
          <div class="content content-directions" data-slug="directions" data-section-content>
            <h2>List of Directions</h2>
            <form>
              <div class="row collapse">
                <div class="small-10 columns">
                  <input type="text" placeholder="Find specific places or areas">
                </div>
                <div class="small-2 columns">
                  <input type="submit" value="Search" class="button prefix">
                </div>
              </div>
            </form>

            <div data-alert class="alert-box round success">
              <a href="#" class="close">&times;</a>
              Directions verified.
            </div>
            <div data-alert class="alert-box round success">
              <a href="#" class="close">&times;</a>
              Tags added.
            </div>
            <div data-alert class="alert-box round">
              <a href="#" class="close">&times;</a>
              Directions un-verified.
            </div>
            <div data-alert class="alert-box alert round">
              <a href="#" class="close">&times;</a>
              Directions deleted.
            </div>

            <?php include('widgets/list-directions.php'); ?>
            <?php include('widgets/pagination.php'); ?>
          </div>
        </section>
        <section>
          <p class="title" data-section-title><a href="#routes">Routes</a></p>
          <div class="content content-routes" data-slug="routes" data-section-content>
            <h2>List of Routes</h2>
            <form>
              <div class="row collapse">
                <div class="small-10 columns">
                  <input type="text" placeholder="Find specific places or areas">
                </div>
                <div class="small-2 columns">
                  <input type="submit" value="Search" class="button prefix">
                </div>
              </div>
            </form>

            <?php include('widgets/list-routes.php'); ?>
            <?php include('widgets/pagination.php'); ?>
          </div>
        </section>
        <section>
          <p class="title" data-section-title><a href="#tags">Tags</a></p>
          <div class="content content-tags" data-slug="tags" data-section-content>
            <h2>List of Tags</h2>
            <form>
              <div class="row collapse">
                <div class="small-10 columns">
                  <input type="text" placeholder="Find tag by name">
                </div>
                <div class="small-2 columns">
                  <input type="submit" value="Search" class="button prefix">
                </div>
              </div>
            </form>

            <?php include('widgets/list-tags.php'); ?>
            <?php include('widgets/pagination.php'); ?>
          </div>
        </section>
        <section>
          <p class="title" data-section-title><a href="#locations">Locations</a></p>
          <div class="content content-locations" data-slug="locations" data-section-content>
            <h2>List of Locations</h2>
            <form>
              <div class="row collapse">
                <div class="small-10 columns">
                  <input type="text" placeholder="Find location by name">
                </div>
                <div class="small-2 columns">
                  <input type="submit" value="Search" class="button prefix">
                </div>
              </div>
            </form>

            <?php include('widgets/list-locs.php'); ?>
            <?php include('widgets/pagination.php'); ?>
          </div>
        </section>
      </div>
      
    </div>
  </div>

<div id="deleteModal" class="reveal-modal small">
  <a class="close-reveal-modal">&#215;</a>
  <h3>Are you sure you want to delete this?</h3>
  <div class="row">
    <div class="small-6 columns">
      <a href="#" class="button expand">Yes, delete this</a>
    </div>
    <div class="small-6 columns">
      <a href="#" class="button secondary expand close-reveal-modal">Cancel</a>
    </div>
  </div>  
</div>

<?php include('footer.php'); ?>