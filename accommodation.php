<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISOT 2024</title>
    <!-- bootstrap css -->
    <link rel="shortcut icon" href="imgs/logofavicon.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="scss/style.css">
</head>

<body>
    <!-- navbar -->
    <?php 
        include 'header.php';
        include 'eventbanner.html';
    ?>

    <div class="container">
        <!-- tables -->
        <div class="row justify-content-center my-5">
            <div class="col-12">
                <h1 class="redtext fw-bold text-center mb-3 headingtext">Accommodation (Hotel Taj Skyline)</h1>
                <!-- large device table -->
                <div class="row justify-content-center d-none d-md-block">
                    <div class="col-12 card border-0 customshadow customcard p-3">
                        <div class="table-responsive">
                            <table class="table table-bordered border-primary text-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>CATEGORY</th>
                                        <th>Early Bird
                                            Till April 30 '24</th>
                                        <th>Regular
                                            Till June 30 '24</th>
                                        <th>Advanced
                                            Till September 30 '24</th>
                                        <th>Spot
                                            October 1 '24 Onwards</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>SINGLE OCCUPANCY <span class="redtext">*(RATE PER
                                                NIGHT)</span>
                                        </td>
                                        <td>₹ 11000</td>
                                        <td>₹ 12500</td>
                                        <td>₹ 18500</td>
                                        <td class="text-center">-</td>
                                    </tr>
                                    <tr>
                                        <td>DOUBLE OCCUPANCY <span class="redtext">*(RATE PER
                                                NIGHT)</span></td>
                                        <td>₹ 14000</td>
                                        <td>₹ 15500</td>
                                        <td>₹ 21500</td>
                                        <td class="text-center">-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="redtext mb-0 mt-2">*NOTE: Check-in Time is 14:00hrs & Check-out time is 12:00 hrs.</p>
                    </div>
                </div>
                <!-- small device table -->
                <!-- <div class="row justify-content-center d-block d-md-none px-3">
                    <div class="col-12 card border-0 customshadow customcard p-3">
                        <div class="mb-4">
                            <h2 class="fw-bold redtext headingtext text-center">ISOT Members</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered border-primary mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Early Bird
                                                Till April 30 '24</td>
                                            <td>₹ 20000</td>
                                        </tr>
                                        <tr>
                                            <td>Regular
                                                Till June 30 '24</td>
                                            <td>₹ 22000</td>
                                        </tr>
                                        <tr>
                                            <td>Advanced
                                                Till September 30 '24</td>
                                            <td>₹ 25000</td>
                                        </tr>
                                        <tr>
                                            <td>Spot
                                                October 1 '24 Onwards</td>
                                            <td>₹ 27000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h2 class="fw-bold redtext headingtext text-center">Non Members</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered border-primary mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Early Bird
                                                Till April 30 '24</td>
                                            <td>₹ 22000</td>
                                        </tr>
                                        <tr>
                                            <td>Regular
                                                Till June 30 '24</td>
                                            <td>₹ 25000</td>
                                        </tr>
                                        <tr>
                                            <td>Advanced
                                                Till September 30 '24</td>
                                            <td>₹ 27000</td>
                                        </tr>
                                        <tr>
                                            <td>Spot
                                                October 1 '24 Onwards</td>
                                            <td>₹ 30000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>                        
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php 
        include 'footer.php';
    ?>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        </script>
</body>

</html>