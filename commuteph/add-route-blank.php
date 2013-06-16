<?php include('header.php'); ?>

  <div class="row">
    <div class="large-9 columns">
      <section class="page">
        <h2><span class="desc">Add directions from</span></h2>

        <div class="row">
          <div class="large-5 columns">
            <label>Point A</label>
            <input type="text" placeholder="Starting destination">
          </div>
          <div class="large-2 columns">
            <span class="inline">to</span>
          </div>
          <div class="large-5 columns">
            <label>Point B</label>
            <input type="text" placeholder="End destination">
          </div>
        </div>

        <div class="button-bar add-directions-buttons" data-magellan-expedition="fixed">
          <ul class="button-group">
            <li><a href="#" class="small button add-alight">Alight at...</a></li>
          </ul>
          <ul class="button-group">
            <li><a href="#" class="small button add-walk">Walk</a></li>
            <li><a href="#" class="small button add-trike">Tricycle</a></li>
            <li><a href="#" class="small button add-jeep">Jeep</a></li>
            <li><a href="#" class="small button add-bus">Bus</a></li>
            <li><a href="#" class="small button add-fx">FX</a></li>
            <li><a href="#" class="small button add-mrt">MRT</a></li>
            <li><a href="#" class="small button add-lrt">LRT</a></li>
            <li><a href="#" class="small button add-lrt2">LRT2</a></li>
          </ul>
        </div>

        <div class="row">
          <div class="large-9 columns">
            <section class="route-building">
              <form class="form-add-directions">

                <fieldset class="add-walk">
                  <legend>Walk</legend>

                  <div class="row">
                    <div class="small-12 large-3 columns">
                      <label for="walk-to" class="inline">Walk to</label>
                    </div>
                    <div class="small-12 large-9 columns">
                      <input type="text" id="walk-to" placeholder="destination">
                    </div>
                  </div>
                </fieldset>

                <fieldset class="add-trike">
                  <legend>Tricycle</legend>

                  <div class="row">
                    <div class="small-12 large-3 columns">
                      <label for="trike-to" class="inline">Trycicle to</label>
                    </div>
                    <div class="small-12 large-9 columns">
                      <input type="text" id="trike-to" placeholder="destination">
                    </div>
                  </div>
                </fieldset>

                <fieldset class="add-jeep">
                  <legend>Jeep</legend>

                  <div class="row">
                    <div class="small-12 large-3 columns">
                      <label for="jeep-to" class="inline">Jeep to</label>
                    </div>
                    <div class="small-12 large-9 columns">
                      <input type="text" id="jeep-to" placeholder="destination">
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-12 large-3 columns">
                      <label for="jeep-bound" class="inline">bound to *</label>
                    </div>
                    <div class="small-12 large-9 columns">
                      <input type="text" id="jeep-bound" placeholder="sign on jeep to where it's going">
                    </div>
                  </div>
                  <p>For example, you're taking a jeep to <em>Eastwood</em> but you have to ride a jeep <strong>bound to Cubao *</strong> because Eastwood is on the way.</p>
                </fieldset>

                <fieldset class="add-bus">
                  <legend>Bus</legend>

                  <div class="row">
                    <div class="small-12 large-3 columns">
                      <label for="bus-to" class="inline">Bus to</label>
                    </div>
                    <div class="small-12 large-9 columns">
                      <input type="text" id="bus-to" placeholder="your destination">
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-12 large-3 columns">
                      <label for="bus-bound" class="inline">bound to</label>
                    </div>
                    <div class="small-12 large-9 columns">
                      <input type="text" id="bus-bound" placeholder="sign on bus to where it's going">
                    </div>
                  </div>
                  <p>For example, you're taking a bus to <em>Shaw</em> but you have to ride a bus <strong>bound to Cubao *</strong> because Shaw is on the way.</p>
                </fieldset>

                <fieldset class="add-alight">
                  <legend>Alight at...</legend>

                  <div class="row">
                    <div class="small-12 large-3 columns">
                      <label for="alight-loc" class="inline">Alight at</label>
                    </div>
                    <div class="small-12 large-9 columns">
                      <input type="text" id="alight-loc" placeholder="the place where you go down">
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-12 large-3 columns">
                      <label for="alight-landmark" class="inline">landmark to find *</label>
                    </div>
                    <div class="small-12 large-9 columns">
                      <input type="text" id="alight-landmark" placeholder="next to, in front of, or across something">
                    </div>
                  </div>
                  <p>* add <strong>a landmark</strong> to indicate any sign, establishment, or street that the commuter has to find before alighting.</p>
                  <p><strong>For example, </strong> beside McDo</p>
                </fieldset>


                <fieldset class="add-jeep">
                  <legend>FX</legend>

                  <div class="row">
                    <div class="small-12 large-3 columns">
                      <label for="fx-to" class="inline">FX to</label>
                    </div>
                    <div class="small-12 large-9 columns">
                      <input type="text" id="fx-to" placeholder="your destination">
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-12 large-3 columns">
                      <label for="fx-bound" class="inline">bound to *</label>
                    </div>
                    <div class="small-12 large-9 columns">
                      <input type="text" id="fx-bound" placeholder="sign on FX to where it's going">
                    </div>
                  </div>
                  <p>For example, you're taking an FX to <em>Eastwood</em> but you have to ride an FX <strong>bound to Cubao *</strong> because Eastwood is on the way.</p>
                </fieldset>

                <fieldset class="add-mrt">
                  <legend>MRT</legend>

                  <div class="row">
                    <div class="small-12 large-4 columns">
                      <label for="mrt-bound" class="inline">MRT bound to*</label>
                    </div>
                    <div class="small-12 large-8 columns">
                      <input type="text" id="mrt-bound" placeholder="last station">
                    </div>
                    <div class="small-12 columns">
                      <p><strong>*bound to</strong> is the last station of the train (where the train is going)</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-12 large-4 columns">
                      <label for="mrt-alight" class="inline">alight at*</label>
                    </div>
                    <div class="small-12 large-8 columns">
                      <input type="text" id="mrt-alight" placeholder="which station to alight">
                    </div>
                    <div class="small-12 columns">
                      <p><strong>*alight at</strong> the last station where you have to go down</p>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="add-lrt">
                  <legend>LRT</legend>

                  <div class="row">
                    <div class="small-12 large-4 columns">
                      <label for="lrt-bound" class="inline">LRT bound to*</label>
                    </div>
                    <div class="small-12 large-8 columns">
                      <input type="text" id="lrt-bound" placeholder="last station">
                    </div>
                    <div class="small-12 columns">
                      <p><strong>*bound to</strong> is the last station of the train (where the train is going)</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-12 large-4 columns">
                      <label for="lrt-alight" class="inline">alight at*</label>
                    </div>
                    <div class="small-12 large-8 columns">
                      <input type="text" id="lrt-alight" placeholder="which station to alight">
                    </div>
                    <div class="small-12 columns">
                      <p><strong>*alight at</strong> the last station where you have to go down</p>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="add-lrt2">
                  <legend>LRT2</legend>

                  <div class="row">
                    <div class="small-12 large-4 columns">
                      <label for="lrt2-bound" class="inline">LRT2 bound to*</label>
                    </div>
                    <div class="small-12 large-8 columns">
                      <input type="text" id="lrt2-bound" placeholder="last station">
                    </div>
                    <div class="small-12 columns">
                      <p><strong>*bound to</strong> is the last station of the train (where the train is going)</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-12 large-4 columns">
                      <label for="lrt2-alight" class="inline">alight at*</label>
                    </div>
                    <div class="small-12 large-8 columns">
                      <input type="text" id="lrt2-alight" placeholder="which station to alight">
                    </div>
                    <div class="small-12 columns">
                      <p><strong>*alight at</strong> the last station where you have to go down</p>
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