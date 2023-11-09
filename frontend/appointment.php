<?php
require_once './../template/header.php';
require_once './../includes/patientsAction.php';
require_once './../includes/doctorsAction.php';
require_once './../template/footer.php';

// Instantiate PatientsAction to use its methods
$patientsAction = new PatientsAction();
$patients = $patientsAction->selectPatients();

$doctorsAction = new doctorsAction();
$doctors = $doctorsAction->fetchDoctors();
?>

<div class="container mt-5">
    <div class="row justify-content-center" >
        <div class="col-6">
            <h1 class="text-center ">Appointment Form</h1>
            
            <form action="./../includes/appointment-action.php" method="post">
                <label for="patientsId">Select Patient:</label> <br>
                <select name="patientsId" class="form-control" required style="outline-color: green; border-color:green;"> 
                    <?php
                    // Populate dropdown list with patient names
                    foreach ($patients as $patient) {
                        echo "<option value='" . $patient['id'] . "'>" . $patient['firstName'] . ' ' . $patient['lastName'] . "</option>";
                    }
                    ?>
                </select><br>

                <label for="doctorsId">Select a Doctor:</label> <br>
                <select name="doctorsId" class="form-control" required style="outline-color: green; border-color:green;"> 
                    <?php
                    // Populate dropdown list with doctor names
                    foreach ($doctors as $doctor) {
                        echo "<option value='" . $doctor['id'] . "'>" . $doctor['firstName'] . ' ' . $doctor['lastName'] . "</option>";
                    }
                    ?>
                </select><br>

                <input type="datetime-local" name="dateTime" class="form-control" required style="outline-color: green; border-color:green;">

               

                <input type="submit" value="Submit Appointment" class="btn btn-success mt-3">
            </form>
        </div>
    </div>
</div>
