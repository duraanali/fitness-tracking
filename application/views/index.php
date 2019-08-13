
<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-4">Fitness Goal Tracker</h1>
      <p>You can't improve if you can't track your goals!</p>
    </div>
  </div>
<div class="container">

 <?php if($this->session->flashdata('delete')): ?>
<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <p><?php echo $this->session->flashdata('delete'); ?></p>
</div>
<?php endif; ?>

 <?php if($this->session->flashdata('update')): ?>
<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <p><?php echo $this->session->flashdata('update'); ?></p>
</div>
<?php endif; ?>

 <?php if($this->session->flashdata('add')): ?>
<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <p><?php echo $this->session->flashdata('add'); ?></p>
</div>
<?php endif; ?>

  <a class="btn btn-success float-right" style="margin-bottom: 20px;" href="<?php echo get_site_url('goals/add'); ?>">Add New</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Goals</th>
      <th scope="col">Actions</th>
      <th scope="col">Status</th>
      <th scope="col">Created</th>
     <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>
    <?php if($rows): ?>
        <?php foreach($rows as $row): ?>
            <tr>
            <td> <?php echo $row->id; ?></td>
            
            <td> <?php echo $row->name; ?></td>
          
            <td><?php echo $row->actions; ?></td>
            <?php if ($row->status == 1) {  ?>
             <td>Not Complete</td>
           <?php  } else { ?>
            <td>Completed</td>
           <?php } ?>
             <td><?php echo date('m/d/Y', $row->created); ?></td>
            
          <td>  <div class="dropdown">
  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Options
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
     <a class="dropdown-item" href="javascript: void(0);" onclick="confirm_complete('<?php echo get_site_url('goals/completed/'.$row->id); ?>');">Mark Complete</a>
    <a class="dropdown-item" href="<?php echo get_site_url('goals/edit/'.$row->id); ?>">Edit</a>
      <a class="dropdown-item" href="javascript: void(0);" onclick="confirm_delete('<?php echo get_site_url('goals/delete/'.$row->id); ?>');">Delete</a>
  </div>
</div>
</td>
            </tr>
         
        <?php endforeach; ?>
    <?php endif; ?>
  </tbody>
</table>

  </div> <!-- /container -->


</main>
<script>
     $(document).ready(function(){
        $('.dropdown-toggle').dropdown()
    });
</script>

