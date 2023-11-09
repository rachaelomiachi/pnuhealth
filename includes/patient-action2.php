<?php

// require_once 'action.php';

class DataOperation extends Database
{
    public function insert_record($table, $fields)
    {
        $sql = "INSERT INTO " . $table;
        $sql .= " (" . implode(",", array_keys($fields)) . ") VALUES ";
        $sql .= " ('" . implode("','", array_values($fields)) . "')";

        $query = mysqli_query($this->con, $sql);
        if ($query) {
            return true;
        }
    }
}

class Patients extends DataOperation
{
    public function insertPatient($firstName, $lastName, $age, $email, $phoneNumber)
    {
        $table = "patients";
        $fields = array(
            'firstName' => $firstName,
            'lastName' => $lastName,
            'age' => $age,
            'email' => $email,
            'phoneNumber' => $phoneNumber
        );

        return $this->insert_record($table, $fields);
    }
}

// Form processing logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phone_number"];

    $patients = new Patients();

    if ($patients->insertPatient($firstName, $lastName, $age, $email, $phoneNumber)) {
        echo "Appointment scheduled successfully!";
    } else {
        echo "Error inserting patient data.";
    }


   
}

?>
