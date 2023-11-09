<?php
require_once './../connection/db.php';
require_once './../includes/action.php';
require_once './../template/header.php';
require_once './../template/footer.php';
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>Medicine Name</th>
                    <th>Avaliable Stock</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>

                <?php
                $myrow = $obj->fetch_record("medicine");
                foreach ($myrow as $row) {
                    # break point...
                
                ?>

               
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["qty"]; ?></td>
                    <th><a href="./../frontend/edit.php?update=1&id=<?php echo $row["id"]; ?>" class="btn btn-success">Edit</a></th>
                    <th><a href="./../frontend/edit.php?delete=1&id=<?php echo $row["id"]; ?>" class="btn btn-dark">Delete</a></th>
                    
                    
                </tr>

                <?php
                }
                ?>



            </table>
        </div>
    </div>
</div>

    
   