<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./../css/style.css">
    <title>Med Stock</title>
    

    <style>
         body {
            /* background: linear-gradient(rgba(1, 238, 144, 0.5), rgba(144, 238, 144, 0.5)), url('./../images/pexels-los-muertos-crew-8460159.jpg');
            background-size: cover;
            background-repeat: no-repeat; */
            background-color:white;
            font-family: 'Poppins', sans-serif;
            font-family: 'Roboto', sans-serif;
            
        }

        .carousel-item {
            transition: opacity 0.5s;
        }

        /* .custom-img-dimensions {
             width: 400px; 
              height: 200px; 
            object-fit: cover;
        } */

        .search {
            position: relative;
            display: inline-flex;
            align-items: center;
            border: 0;
            margin-bottom:25px;
        }

        .search-input {
            padding-right: 35px; Space for the search icon
            color: black; /* Set the text color to black */
        }

        .search-icon {
            position: absolute;
            right: 10px; /* Adjust the position of the search icon */
            color: black; /* Set the color of the search icon to black */
            cursor: pointer;
            font-weight: bold; 
        }

        /* Adjust the appearance of the search input */
        /* .form-control {
            border-radius: 25px;
        } */
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg text-light bg-success" style="color:white; ">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-dark"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand text-light" href="#"><img src="./../images/med-loo.jpg" style="width:50%" alt=""></a>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="./../frontend/index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-light" href="./../frontend/read.php">Read Drugs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active text-light" href="./../frontend/create-drugs.php" tabindex="-1" aria-disabled="true">Create Drugs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active text-light" href="./../frontend/patients.php" tabindex="-1" aria-disabled="true">See a Doctor</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active text-light" href="./../frontend/appointment.php" tabindex="-1" aria-disabled="true">Appointments</a>
                </li>

            </ul>
            <!-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success text-light" type="submit">Search</button>
            </form> -->
        </div>
    </div>
</nav>

</body>
</html>
