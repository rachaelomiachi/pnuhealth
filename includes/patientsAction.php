<?php

require_once './../includes/action.php';


class PatientsAction extends DataOperation
{
    public function insertPatients($firstName, $lastName, $age, $email, $phoneNumber)
    {
        $table = "patients";
        $fields = array(
            'firstName' => $firstName,
            'lastName' => $lastName,
            'age' => $age,
            'email' => $email,
            'phoneNumber' => $phoneNumber
        );
        return $this->insertRecord($table, $fields);
    }

    public function selectPatients()
    {
        return $this->fetch_record('patients');
    }
}

$patientsAction = new PatientsAction();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];

    // Insert patient data
    if ($patientsAction->insertPatients($firstName, $lastName, $age, $email, $phoneNumber)) {

        echo "Your appointment successfully!";
    } else {
        echo "Error inserting patient data.";
 
}
}