<?php
require_once "./action.php";
require_once "./Mailer.php";
// Use Mailer;
// require_once "./patientsAction.php";

class AppointmentAction extends  DataOperation  
{
    public function InsertAppointment($patientsId, $doctorsId, $dateTime)
    {
        $table = "appointments";
        $fields = array(
            "patientsId" => $patientsId,
            "doctorsId" =>  $doctorsId,
            "dateTime"  =>  $dateTime
        );

        return $this->insertRecord($table, $fields);
    }

    // Fetch from table
    public function fetchAppointment()
    {
        return $this->fetchRecords("appointments");
    }
}

// Create an instance of the AppointmentAction class
$appointmentAction = new AppointmentAction();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patientsId = $_POST["patientsId"];
    $doctorsId = $_POST["doctorsId"];
    $dateTime = $_POST["dateTime"];

    if ($appointmentAction->InsertAppointment($patientsId, $doctorsId, $dateTime)) {

        //get doctor and patient info 
        $patient = $obj->select_record('patients',['id'=>$patientsId]);
        $doctor = $obj->select_record('doctors',['id'=>$doctorsId]);
        
        $message = "Dear {$patient['firstName']} {$patient['lastName']}, \n Your appointement has been register and scheduled for $dateTime \n with {$doctor['firstName']} {$doctor['lastName']} ";
        $subject = "Appointment Registration";
        //send email
        $mailer = new Mailer($patient['email'],$subject,$message);
        var_dump($mailer);
        echo "Your appointment was successfully added!";
    } else {
        echo "Error inserting appointment data.";
    }
}
?>
