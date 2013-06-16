<?php include('header.php'); ?>

  <div class="row">
    <div class="large-9 columns">
      <section class="page">
        <h2><span class="desc">Add directions from</span>
            <span class="pointA">Cubao Station (MRT)</span> to <span class="pointB">Eastwood City</span></h2>
        <div class="button-bar">
          <ul class="button-group">
            <li><a href="#" class="small button">Walk</a></li>
            <li><a href="#" class="small button">Tricycle</a></li>
            <li><a href="#" class="small button">Jeep</a></li>
            <li><a href="#" class="small button">Bus</a></li>
            <li><a href="#" class="small button">FX</a></li>
            <li><a href="#" class="small button">MRT</a></li>
            <li><a href="#" class="small button">LRT</a></li>
            <li><a href="#" class="small button">LRT2</a></li>
          </ul>
        </div>


        <div class="row">
          <div class="large-9 columns">
            <section>
              <form>

                <fieldset class="add-walk">
                  <legend>Walk</legend>

                  <div class="row">
                    <div class="small-12 large-3 columns">
                      <label for="right-label" class="inline">Walk to</label>
                    </div>
                    <div class="small-12 large-9 columns">
                      <input type="text" id="right-label" placeholder="Inline Text Input">
                    </div>
                  </div>

                </fieldset>

                <fieldset class="add-trike">
                  <legend>Trycicle</legend>

                  <div class="row">
                    <div class="small-12 large-3 columns">
                      <label for="right-label" class="inline">Trycicle to</label>
                    </div>
                    <div class="small-12 large-9 columns">
                      <input type="text" id="right-label" placeholder="Inline Text Input">
                    </div>
                  </div>

                </fieldset>

                <fieldset class="add-jeep">
                  <legend>Jeep</legend>

                  <div class="row">
                    <div class="small-12 large-3 columns">
                      <label for="right-label" class="inline">Jeep to</label>
                    </div>
                    <div class="small-12 large-9 columns">
                      <input type="text" id="right-label" placeholder="Inline Text Input">
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-12 large-3 columns">
                      <label for="right-label" class="inline">bound to</label>
                    </div>
                    <div class="small-12 large-9 columns">
                      <input type="text" id="right-label" placeholder="Inline Text Input">
                    </div>
                  </div>

                </fieldset>

                <fieldset class="add-bus">
                  <legend>Bus</legend>

                  <div class="row">
                    <div class="small-12 large-3 columns">
                      <label for="right-label" class="inline">Bus to</label>
                    </div>
                    <div class="small-12 large-9 columns">
                      <input type="text" id="right-label" placeholder="Inline Text Input">
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-12 large-3 columns">
                      <label for="right-label" class="inline">bound to</label>
                    </div>
                    <div class="small-12 large-9 columns">
                      <input type="text" id="right-label" placeholder="Inline Text Input">
                    </div>
                  </div>

                </fieldset>

                <button class="button expand">Add Directions</button>
              </form>
            </section>
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

<?php include('footer.php'); ?>