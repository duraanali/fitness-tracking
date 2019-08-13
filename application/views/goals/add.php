<main role="main">
      <div class="jumbotron">
    <div class="container">
      <h1 class="display-4">Fitness Goal Tracker</h1>
      <p>You can't improve if you can't track your goals!</p>
    </div>
  </div>
<div class="container">
<form action="<?php echo get_site_url('goals/add'); ?>" method="post" >
  <div class="form-group">
    <label>Your Goal</label>
    <input type="text" class="form-control" name="name" placeholder="Your Goal">
  </div>
  <div class="form-group">
    <label>Actions</label>
    <input type="text" class="form-control" name="actions" placeholder="Actions">
  </div>
   <button type="submit" name="submit" value="Add" class="btn btn-info">Add Goal</button>
</form>
</div>
</div>