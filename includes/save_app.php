<?php

require_once "./action.php";

class Appointments extends DataOperation
{
    public function insertAppointment($patientsId, $doctorsId, $dateTime)
    {
        $table = "appointments";
        $fields = array(
            'patientsId' => $patientsId,
            'doctorsId' => $doctorsId,
            'dateTime' => $dateTime
        );

        return $this->insert_record($table, $fields);
    }

    public function fetchAllAppointments()
    {
        return $this->fetch_record('appointments');
    }
}

$appointments = new Appointments();

// Form processing logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patientsId = $_POST["patientsId"];
    $doctorsId = $_POST["doctorsId"];
    $dateTime = $_POST["dateTime"];

    if ($appointments->insertAppointment($patientsId, $doctorsId, $dateTime)) {
        echo "Appointment scheduled successfully!";
    } else {
        echo "Error inserting appointment data.";
    }
}

// Fetch and display appointments
$appointmentsList = $appointments->fetchAllAppointments();

// Output the fetched appointments
if ($appointmentsList) {
    echo "<h2>Fetched Appointments:</h2>";
    foreach ($appointmentsList as $appointment) {
        echo "Appointment ID: {$appointment['appointmentId']}, Patients ID: {$appointment['patientsId']}, Doctors ID: {$appointment['doctorsId']}, DateTime: {$appointment['dateTime']}<br>";
    }
} else {
    echo "Error fetching appointments.";
}
?>

<?php
// require_once './../connection/db.php';
require_once './../template/header.php';
require_once './../template/footer.php';
?>
<h2>Appointment Form</h2>

<form action="./../includes/appointment-action.php" method="post">
    <label for="patientsId">Patient:</label>
    <select name="patientsId" required>
        <?php
        

        // Fetch patients from the database
        $db = new Database();
        
$result = $db->query("SELECT * FROM patients");

if (!$result) {
    echo "Error: " . $db->error;
} else {
   
    while ($row = $result->fetch_assoc()) {
        echo "<option value=\"{$row['patientsId']}\">{$row['firstName']} {$row['lastName']}</option>";
    }
}

        ?>
    </select>
    <br>


    <label for="doctorsId">Doctor:</label>
    <select name="doctorsId" required>
        <?php
        // Fetch doctors from the database
        $result = $db->query("SELECT * FROM doctors");

        
        while ($row = $result->fetch_assoc()) {
            echo "<option value=\"{$row['doctorsId']}\">{$row['firstName']}</option>";
        }
        ?>
    </select>
    <br>

    <label for="dateTime">Date and Time:</label>
    <input type="datetime-local" name="dateTime" required>
    <br>

    <button type="submit">Schedule Appointment</button>
</form>



