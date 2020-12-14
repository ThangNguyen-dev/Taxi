<?php
require_once 'db.php';
require_once 'CostTaxi.class.php';


$error = null;
$distance = null;
$weight = null;
$fee = null;

if (isset($_POST['submit'])) {
    $weight = $_POST['weight'];
    $distance = $_POST['distance'];
    $unit = $_POST['unit'];
}

//convert unit for distance m to km
if (isset($unit) && $unit == 'km') {
    $distance = $distance;
}elseif (isset($unit) && $unit == 'm')
{
    $distance = $distance/1000;
}else {
    $error = 'Du lieu vua nhap khong hop le!';
}
if (isset($_POST['submit']) && empty($error)) {
    $taxi_fee = new CostTaxi($conn, $weight, $distance);
    $fee = $taxi_fee->getCost();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tinh Phis Taxi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- input form here -->
    <div class="container mt-4">
        <form action="" method="post" class="form-control">
            <div class="mb-3">

                <!-- input weight -->
                <label for="weight" class="form-label">Tải Trọng</label>
                <input type="text" class="form-control" name="weight" id="weight" aria-describedby="weight">
            </div>
            <div class="mb-3">

                <!-- input distance -->
                <label for="form-select" class="form-label">Nhập Khoảng Cách</label>
                <input type="texts" class="form-control" name="distance" id="distance" aria-describedby="distance">
            </div>

            <!-- input km or m -->
            <div class="form-check">
                <input class="form-check-input" type="radio" name="unit" id="m" value="km" checked>
                <label class="form-check-label" for="m">
                    Kilometer(km).
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="unit" id="m" value="m">
                <label class="form-check-label" for="m">
                    Meter(m)
                </label>
            </div>

            <button type="submit" class="btn btn-primary mt-2" name="submit">Submit</button>
        </form>
    </div>
    <?php if (!empty($fee)) {
        include 'template/main.php';
    }?>
</body>

</html>