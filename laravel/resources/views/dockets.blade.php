<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.head')
  <title>Land Use Commission Dockets</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  div.modal-body {
     margin: 0px 20px;
      }
  </style>
</head>

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
