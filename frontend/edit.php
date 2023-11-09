<?php
require_once './../includes/update.php';
require_once './../template/header.php';
require_once './../template/footer.php';
?>


<h1 class="justify-content-center">Edit</h1>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-6">        
            <div class="card">
            <div class="card-header bg-success text-light text-center">
            Enter Medicine 
            </div>
            <div class="card-body">
            <form action="./../includes/update.php" method="post">
                <table class="table table-hover">

                <tr>
                
                <td><input type="hidden" name="id"  value="<?php echo $row["id"]; ?>"></td>
            </tr>



            <tr>
                                <td> Medicine Name</td>
                                <td><input type="text" name="name" placeholder="Enter Medicine Name"
                                           value="<?php echo isset($row["name"]) ? $row["name"] : ''; ?>"></td>
                            </tr>

                            <tr>
                                <td>Quantity</td>
                                <td><input type="text" name="qty" placeholder="Enter Quantity"
                                           value="<?php echo isset($row["qty"]) ? $row["qty"] : ''; ?>"></td>
                            </tr>

            <tr>
    <td class="col-md-2 d-flex align-items-center justify-content-center">
      <input type="submit" name="edit" value="update" class="btn btn-success">
    </td>
  </tr>
        </table>
      </form>
    </div>
  </div>
    </div>
  </div>
</div>