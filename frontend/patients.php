<?php
require_once './../includes/patientsAction.php';
require_once './../template/header.php'; // Assuming header is already included
require_once './../template/footer.php';

// ... (any other PHP logic or includes you might have)

?>

<div class="container d-flex align-items-center justify-content-center vh-100">
    

    <form action="./../includes/patientsAction.php" method="post" class="col-6">
    <h1 class="text-center col-12">Medical Appointment Request Form</h1>
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name:</label>
            <input type="text" id="firstName" name="firstName" class="form-control" placeholder="First Name" required>
        </div>

        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name:</label>
            <input type="text" id="last_name" name="lastName" class="form-control" placeholder="Last Name" required>
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age:</label>
            <input type="number" id="age" name="age" class="form-control" placeholder="Age" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
        </div>

        <div class="mb-3">
            <label for="phoneNumber" class="form-label">Phone Number:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="Phone Number" required>
        </div>

        <!--  -->
        <div class="mb-3">
        <button type="submit" class="btn btn-success form-control"  placeholder="Choose an Ailment Type:">Submit Appointment Request</button>
        </div>
    </form>
</div>
