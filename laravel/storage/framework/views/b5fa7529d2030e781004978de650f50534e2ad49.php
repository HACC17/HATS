<?php $__env->startSection('content'); ?>
<html> 
<style>
html{
height: 50%; 
}

body { 
    background-image: url('/imgs/dockets_imgs/land1.jpg');
    height: 50%; 
    background-position: center;

    background-size: cover; 

  div.modal-body {
     margin: 0px 20px;
      }
}
</style>
<!-- Background Image found in laravel/public -->  
<body> 
<div class="container">
  <h2>DOCKETS</h2>

  <!-- PENDING DOCKETS - Modal -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Pending Dockets</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Boundary Amendments</h4>
        </div>
        <div class="modal-body">
          <li>Some text.</li>
          <li>Some text.</li>
        </div>
        <div class="modal-header">
          <h4 class="modal-title">Special Permits</h4>
        </div>
        <div class="modal-body">
          <p>Some text.</p>
        </div>
        <div class="modal-header">
          <h4 class="modal-title">Declaratory Rulings</h4>
        </div>
        <div class="modal-body">
          <p>Some text.</p>
        </div>
        <div class="modal-header">
          <h4 class="modal-title">Motions</h4>
        </div>
        <div class="modal-body">
          <p>Some text.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- COMPLETED DOCKETS - Modal -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Completed Dockets</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Boundary Amendments</h4>
        </div>
        <div class="modal-body">
          <p>Some text.</p>
        </div>
        <div class="modal-header">
          <h4 class="modal-title">Special Permits</h4>
        </div>
        <div class="modal-body">
          <p>Some text.</p>
        </div>
        <div class="modal-header">
          <h4 class="modal-title">Declaratory Rulings</h4>
        </div>
        <div class="modal-body">
          <p>Some text.</p>
        </div>
        <!-- LUC CURRENTLY DOES NOT HAVE ANY COMPLETED MOTIONS -->
        <div class="modal-header">
          <h4 class="modal-title">Motions</h4>
        </div>
        <div class="modal-body">
          <p>As of right now, Land Use Commission does not have any completed motions.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
</div>


</body>

</html> 
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>