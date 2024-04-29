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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- navbar -->
    <?php 
        include 'header.php';
    ?>
    <!-- loader -->
    <!-- <div id="loader">
        <img src="imgs/loader4.gif" width="500" alt="">
    </div> -->

    <!-- breadcrums -->
    <div class="container-fluid" id="breadcrumb_container">
        <div class="row align-items-center">
            <div class="col-12">
                <h1 class="text-center headingtext text-white">Accommodation</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center my-5 align-items-center">
            <h1 class="redtext fw-bold text-center mb-4 headingtext">Accommodation (Hotel Taj Skyline - Ahmedabad)</h1>
            <div class="col-lg-5 d-flex justify-content-center align-items-center">
                <div class="d-flex">
                    <img src="https://q-xx.bstatic.com/xdata/images/hotel/max500/284736624.jpg?k=b0d30f56963afbd06434999733f60c76b05e463afe90176949a8b1dfcfe9b2af&o="
                        class="img-fluid doctorimg" alt="">
                </div>
            </div>
            <div class="col-lg-5 mt-5 mt-lg-0">
                <div class="card px-3 py-4 border-0 customshadow customcard">
                    <h5 class="redtext fw-bold">Hotel Taj Skyline - Ahmedabad</h5>
                    <div class="d-flex">
                        <i class="fa-solid fa-location-dot redtext me-2 mt-1 mb-2"></i>
                        <p class="purpletext">Taj Skyline Ahmedabad, Sankalp Square III, Opp. Saket 3, Sindhubhavan
                            Road, nr. Neelkanth Green, Shilaj, Gujarat 380059</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.444638981689!2d72.47970237509254!3d23.04415487915864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b6318e8da91%3A0x864bb42461cc953f!2sTaj%20Skyline%2C%20Ahmedabad!5e0!3m2!1sen!2sin!4v1713018760637!5m2!1sen!2sin"
                            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- tables -->
        <div class="row justify-content-center my-5">
            <div class="col-12">
                <!-- large device table -->
                <div class="row justify-content-center d-none d-md-block">
                    <div class="col-12 card border-0 customshadow customcard p-3">
                        <div class="table-responsive">
                            <table class="table table-bordered border-primary text-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>CATEGORY</th>
                                        <th>Early Bird
                                            Till 15th May, 2024</th>
                                        <th>Regular
                                            Till 30th June, 2024</th>
                                        <th>Advanced
                                            Till 30th September, 2024</th>
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
                                    </tr>
                                    <tr>
                                        <td>DOUBLE OCCUPANCY <span class="redtext">*(RATE PER
                                                NIGHT)</span></td>
                                        <td>₹ 14000</td>
                                        <td>₹ 15500</td>
                                        <td>₹ 21500</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="redtext mb-0 mt-2">*NOTE: Check-in Time is 14:00hrs & Check-out time is 12:00 hrs.</p>
                        <div class="d-flex justify-content-center mt-4">
                            <a href="https://rxregistrations.com/isot2024/" target="_blank" class="btn btn-primary"><i
                                    class="fa-solid fa-user-plus me-2"></i>Register Now</a>
                        </div>
                    </div>
                </div>
                <!-- small device table -->
                <div class="row justify-content-center d-block d-md-none px-3">
                    <div class="col-12 card border-0 customshadow customcard p-3">
                        <div class="mb-4">
                            <h2 class="fw-bold redtext headingtext text-center">SINGLE OCCUPANCY <span
                                    class="redtext">*(RATE PER
                                    NIGHT)</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered border-primary mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Early Bird
                                                Till 15th May, 2024</td>
                                            <td>₹ 11000</td>
                                        </tr>
                                        <tr>
                                            <td>Regular
                                                Till 30th June, 2024</td>
                                            <td>₹ 12500</td>
                                        </tr>
                                        <tr>
                                            <td>Advanced
                                                Till 30th September, 2024</td>
                                            <td>₹ 18500</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h2 class="fw-bold redtext headingtext text-center">DOUBLE OCCUPANCY <span
                                    class="redtext">*(RATE PER
                                    NIGHT)</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered border-primary mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Early Bird
                                                Till 15th May, 2024</td>
                                            <td>₹ 14000</td>
                                        </tr>
                                        <tr>
                                            <td>Regular
                                                Till 30th June, 2024</td>
                                            <td>₹ 15500</td>
                                        </tr>
                                        <tr>
                                            <td>Advanced
                                                Till 30th September, 2024</td>
                                            <td>₹ 21500</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <p class="redtext mb-0 mt-2">*NOTE: Check-in Time is 14:00hrs & Check-out time is 12:00 hrs.</p>
                        <div class="d-flex justify-content-center mt-4">
                            <a href="https://rxregistrations.com/isot2024/" target="_blank" class="btn btn-primary"><i
                                    class="fa-solid fa-user-plus me-2"></i>Register Now</a>
                        </div>
                    </div>
                </div>
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
    <script src="loader.js"></script>
</body>

</html>