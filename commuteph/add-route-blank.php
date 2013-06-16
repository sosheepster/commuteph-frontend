<?php include('header.php'); ?>

  <form class="form-add-directions">
  <div class="row">
    <div class="large-9 columns">
      <section class="page">
        <h2><span class="desc">Add directions from</span></h2>

        <div class="row">
          <div class="large-5 columns">
            <label for="pointA">Point A</label>
            <input type="text" id="pointA" placeholder="Starting destination">
          </div>
          <div class="large-2 columns">
            <span class="inline">to</span>
          </div>
          <div class="large-5 columns">
            <label for="pointB">Point B</label>
            <input type="text" id="pointB" placeholder="End destination">
          </div>
        </div>

        <div class="button-bar add-directions-buttons" data-magellan-expedition="fixed">
          <ul class="button-group">
            <li><a href="#form-bottom" class="small button add-direction add-alight">Alight at...</a></li>
          </ul>
          <ul class="button-group">
            <li><a href="#form-bottom" class="small button add-direction add-walk">Walk</a></li>
            <li><a href="#form-bottom" class="small button add-direction add-trike">Tricycle</a></li>
            <li><a href="#form-bottom" class="small button add-direction add-jeep">Jeep</a></li>
            <li><a href="#form-bottom" class="small button add-direction add-bus">Bus</a></li>
            <li><a href="#form-bottom" class="small button add-direction add-fx">FX</a></li>
            <li><a href="#form-bottom" class="small button add-direction add-mrt">MRT</a></li>
            <li><a href="#form-bottom" class="small button add-direction add-lrt">LRT</a></li>
            <li><a href="#form-bottom" class="small button add-direction add-lrt2">LRT2</a></li>
          </ul>
        </div>


        <div class="row">
          <div class="large-9 columns">
              <section class="route-building blank">

                <div class="status">
                  <p>Click on the buttons above to start adding directions!</p>
                </div>

              </section>
              <input type="submit" class="button expand hide save-directions" value="Add Directions">

            <a name="form-bottom"></a>
          </div>

          <div class="large-3 columns">
            <h3>Rates</h3>
              <ul class="rates">
                <li><span class="label">Jeep</span> Php8.00</li>
                <li><span class="label">LRT/MRT</span> Php14.00</li>
              </ul>
          </div>
        </div>
      </section>
    </div>
    <div class="large-3 columns">
      <?php include('widgets/sidebar-needroutes.php'); ?>
      <?php include('widgets/sidebar-recentadded.php'); ?>
    </div>
  </div>

  
  </form>
<?php include('footer.php'); ?>