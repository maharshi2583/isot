<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISOT 2024</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="scss/style.css">
    <link rel="shortcut icon" href="imgs/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- navbar -->
    <?php 
        include 'header.php';
        include 'eventbanner.html';
    ?>

    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-12">
                <h1 class="redtext fw-bold text-center mb-4 headingtext">Organizing Committee</h1>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    <div class="col">
                        <div class="card h-100 doctorimg border-0 rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="imgs/doctor1.png" class="img-fluid mb-3" alt="">
                                </div>
                                <h5 class="redtext text-center fw-bold">Dr. Aneesh Srivastava</h5>
                                <p class="purpletext text-center">President ISOT</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 doctorimg border-0 customshadow">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="imgs/doctor2.png" class="img-fluid mb-3" alt="">
                                </div>
                                <h5 class="redtext text-center fw-bold">Dr. Manish Balwani</h5>
                                <p class="purpletext text-center">Secretary ISOT</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 doctorimg border-0 customshadow">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="imgs/doctor3.png" class="img-fluid mb-3" alt="">
                                </div>
                                <h5 class="redtext text-center fw-bold">Dr. Vivek Kute</h5>
                                <p class="purpletext text-center">Organizing Secretary</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 doctorimg border-0 customshadow">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="imgs/doctor4.png" class="img-fluid mb-3" alt="">
                                </div>
                                <h5 class="redtext text-center fw-bold">Dr. Jigar Shrimali</h5>
                                <p class="purpletext text-center">Organizing Secretary</p>
                            </div>
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
</body>

</html>