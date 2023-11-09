<?php
require_once './../template/header.php';
require_once './../template/footer.php';
?>
    <h1 class="justify-content-center text-light text-center">medicine</h1>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-lg-6 col-sm-12">       
          <div class="card">
          <div class="card-header bg-success text-light text-center">
          Enter Medicine 
        </div>
    <div class="card-body">
      <form action="./../includes/action.php" method="post">
        <table class="table table-hover">
            <tr>
                <td> Medicine Name</td>
                <td><input type="text" name="name" placeholder="Enter Medicine Name" required></td>
            </tr>

            <tr>
                <td>Quantity</td>
                <td><input type="text" name="qty" placeholder="Enter Quantity" required></td>
            </tr>

            <tr>
    <td class="col-md-2 d-flex align-items-center justify-content-center">
      <input type="submit" name="submit" value="store" class="btn btn-success">
    </td>
  </tr>
    </table>
    </form>
    </div>
   </div>
    </div>
  </div>
</div>

