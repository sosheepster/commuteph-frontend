<?php include('header.php'); ?>
  <!-- breadcrumbs -->
  <nav class="breadcrumbs">
    <a href="dashboard.php">Dashboard</a>
    <a href="dashboard.php#directions">List of Directions</a>
    <a class="current" href="dashboard.php#directions">Directions</a>
  </nav>

  
  <header class="page">
    <div class="row">
      <div class="small-12 columns">
        <h2>Edit Directions</h2>
      </div>
    </div>
  </header>

  <div class="row">
    <div class="small-12 large-6 push-3 columns">
      <section id="set-directions">

        <form>
          <?php include('widgets/set-directions.php'); ?>
          <input type="submit" value="save" class="button right">
          <input type="submit" value="Delete" class="button left secondary">

        </form>
      </section>
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