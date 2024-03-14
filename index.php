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
    ?>

    <!-- carousel -->
    <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <div class="row d-flex justify-content-center align-items-center py-5 text-center slide1 main">
                    <div class="col-md-5 col-12 text-white carouselshape">
                        <!-- <p>34<sup>th</sup></p>
                        <h1 class="fw-bold headingtext">ISOT 2024</h1>
                        <p class="mt-4 mb-0 px-2">ANNUAL CONFERENCE OF INDIAN SOCIETY OF ORCAN TRANSPLANT</p> -->
                        <img src="imgs/carousel.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="row d-flex justify-content-center align-items-center py-5 text-center slide2 main">
                    <div class="col-md-5 col-12 text-white carouselshape">
                        <!-- <p>34<sup>th</sup></p>
                        <h1 class="fw-bold headingtext">ISOT 2024</h1>
                        <p class="mt-4 mb-0 px-2">ANNUAL CONFERENCE OF INDIAN SOCIETY OF ORCAN TRANSPLANT</p> -->
                        <img src="imgs/carousel.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <div class="row d-flex justify-content-center align-items-center py-5 text-center slide3 main">
                    <div class="col-md-5 col-12 text-white carouselshape">
                        <!-- <p>34<sup>th</sup></p>
                        <h1 class="fw-bold headingtext">ISOT 2024</h1>
                        <p class="mt-4 mb-0 px-2">ANNUAL CONFERENCE OF INDIAN SOCIETY OF ORCAN TRANSPLANT</p> -->
                        <img src="imgs/carousel.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- main content -->
    <div class="container">
        <!-- welcome message -->
        <div class="row justify-content-center my-5">
            <div class="col-12">
                <h1 class="text-center fw-bold redtext mb-3 headingtext">Welcome Message</h1>
                <div class="col-12 card p-3 border-0 customshadow">
                    <h4 class="mb-3 orangetext">Welcome to<br>
                        ISOT 2024, AHMEDABAD</h4>
                    <div class="welcomeMsg">
                        <p class="purpletext">Dear Esteemed Colleagues and Industry Leaders, 'Kem Cho' from the vibrant
                            city of Ahmedabad,</p>
                        <p class="purpletext text-justify">It is with great pleasure that we, on behalf of the
                            organising team, extend a warm invita on to
                            th
                            you for the eagerly awaited 34 Annual Conference of Indian Society of Organ Transplant,2024.
                            This event, set against the historic backdrop of Ahmedabad, a UNESCO World Heritage City,
                            promises an unparalleled convergence of leading experts, researchers, and industry
                            professionals in the field of organ transplanta on. The city's rich heritage, combined with
                            its
                            dynamic modernity, offers the perfect se ng to inspire innova on and collabora on in the
                            pursuit of enhancing transplant pa ent care
                        </p>
                        <p class="purpletext text-justify">The ISOT 2024 conference is poised to be a milestone event,
                            featuring a rich scien fic program,
                            inspiring keynote addresses, thought-provoking panel discussions, and hands-on workshops.
                            As Ahmedabad prides itself on its blend of cultural legacy and academic excellence, the
                            conference will provide a unique pla orm for a endees to share pioneering advancements,
                            present research findings, and discuss the latest trends in organ transplanta on.</p>
                        <!-- <p class="purpletext text-justify">
                            Ahmedabad, known for its bustling energy and hospitable culture, will provide the perfect
                            setting
                            for a conference that
                            seamlessly blends academic excellence with opportunities for networking and camaraderie.
                            Join us
                            for
                            an unforgettable
                            experience that combines the best of academic enrichment and the vibrant spirit of Chennai.
                        </p>
                        <p class="purpletext text-justify">We eagerly anticipate the opportunity to welcome you and your
                            esteemed
                            colleagues to the 77th
                            Annual
                            Radiology
                            Conference. Let's come together to learn, share, and forge new connections in the
                            ever-evolving
                            field of radiology.</p> -->
                        <a href="aboutus.php" class="links">know more...</a>
                        <h5 class="orangetext mt-3">Warm regards,<br>
                            The Organizing Committee</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- quick links -->
        <div class="row justify-content-center my-5">
            <div class="col-12">
                <h1 class="redtext fw-bold text-center mb-3 headingtext">Quick Links</h1>
            </div>
            <div class="col-12">
                <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center">
                    <a href="#" class="btn btn-primary mx-3"><i class="fa-solid fa-user-plus me-2"></i>Registration</a>
                    <a href="#" class="btn btn-primary mx-3 mt-3 mt-sm-0"><i
                            class="fa-solid fa-book me-2"></i>Conference
                        Brochures</a>
                </div>
            </div>
        </div>

        <!-- tables -->
        <div class="row justify-content-center my-5">
            <div class="col-12">
                <h1 class="redtext fw-bold text-center mb-3 headingtext">Important Dates</h1>
                <div class="row row-cols-1 row-cols-lg-2 g-4">
                    <div class="col px-3 px-sm-auto">
                        <div class="card h-100 customshadow p-3 border-0">
                            <div class="table-responsive">
                                <table cellpadding="5" class="w-100">
                                    <thead class="border-bottom">
                                        <tr>
                                            <th colspan="2">
                                                <h4 class="redtext">Registration (International Delegate's)
                                                </h4>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-bottom">
                                            <td class="py-2">
                                                <div class="d-flex justify-content-center">
                                                    <img src="https://aocr2025.org/assets/img/calendar.webp" height="50"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 orangetext">Early Bird</p>
                                                <p class="mb-0 purpletext">1st Jan 2024 to 31st Mar 2024</p>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="py-2">
                                                <div class="d-flex justify-content-center">
                                                    <img src="https://aocr2025.org/assets/img/calendar.webp" height="50"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 orangetext">Discounted</p>
                                                <p class="mb-0 purpletext">1st Apr 2024 to 31st Jul 2024</p>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="py-2">
                                                <div class="d-flex justify-content-center">
                                                    <img src="https://aocr2025.org/assets/img/calendar.webp" height="50"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 orangetext">Regular</p>
                                                <p class="mb-0 purpletext">1st Aug 2024 to 31st Dec 2024</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">
                                                <div class="d-flex justify-content-center">
                                                    <img src="https://aocr2025.org/assets/img/calendar.webp" height="50"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 orangetext">Spot</p>
                                                <p class="mb-0 purpletext">1st Jan 2025 to 26th Jan 2025</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <button class="btn btn-primary mt-3 ms-auto">Get Registered</button>
                        </div>
                    </div>
                    <div class="col px-3 px-sm-auto">
                        <div class="card h-100 customshadow p-3 border-0">
                            <div class="table-responsive">
                                <table cellpadding="5" class="w-100">
                                    <thead class="border-bottom">
                                        <tr>
                                            <th colspan="2">
                                                <h4 class="redtext">Registration (Indian Delegate's)</h4>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-bottom">
                                            <td class="py-2">
                                                <div class="d-flex justify-content-center">
                                                    <img src="https://aocr2025.org/assets/img/calendar.webp" height="50"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 orangetext">Early Bird</p>
                                                <p class="mb-0 purpletext">1st Jan 2024 to 31st Mar 2024</p>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="py-2">
                                                <div class="d-flex justify-content-center">
                                                    <img src="https://aocr2025.org/assets/img/calendar.webp" height="50"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 orangetext">Discounted</p>
                                                <p class="mb-0 purpletext">1st Apr 2024 to 31st Jul 2024</p>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="py-2">
                                                <div class="d-flex justify-content-center">
                                                    <img src="https://aocr2025.org/assets/img/calendar.webp" height="50"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 orangetext">Regular</p>
                                                <p class="mb-0 purpletext">1st Aug 2024 to 31st Dec 2024</p>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="py-2">
                                                <div class="d-flex justify-content-center">
                                                    <img src="https://aocr2025.org/assets/img/calendar.webp" height="50"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 orangetext">Late</p>
                                                <p class="mb-0 purpletext">1st Nov 2024 to 31st Dec 2024</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">
                                                <div class="d-flex justify-content-center">
                                                    <img src="https://aocr2025.org/assets/img/calendar.webp" height="50"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 orangetext">Spot</p>
                                                <p class="mb-0 purpletext">1st Jan 2025 to 26th Jan 2025</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <button class="btn btn-primary mt-3 ms-auto">Get Registered</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- organizing committee -->
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

        <!-- vanue -->
        <div class="row justify-content-center my-5">
            <div class="col-12">
                <h1 class="redtext fw-bold text-center mb-4 headingtext">Ultimate Destination</h1>
                <div class="row justify-content-around pt-3">
                    <div class="col-md-6 col-lg-5 d-flex align-items-center">
                        <div>
                            <img src="https://image.wedmegood.com/resized/800X/uploads/member/405280/1610699884_DSC_7373.JPG"
                                class="img-fluid doctorimg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 mt-4 mt-md-0 p-3">
                        <div class="card px-3 py-4 border-0 customshadow">
                            <h5 class="redtext fw-bold">THE FORUM CLUB O7</h5>
                            <div class="d-flex">
                                <i class="fa-solid fa-location-dot redtext me-2 mt-1"></i>
                                <p class="purpletext">The Forum,
                                    Celebrations and Conventions,
                                    Near Club O7, Off SP Ring Road, Club O7 Rd,
                                    Shela, Ahmedabad, Gujarat 380058 </p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="fa-solid fa-plane redtext me-2 mt-1"></i>
                                <div>
                                    <p class="purpletext mb-0">From Ahmedabad Airport</p>
                                    <span class="orangetext">25 KM (40 MINUTES)</span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <i class="fa-solid fa-train redtext me-2 mt-1"></i>
                                <div>
                                    <p class="purpletext mb-0">From Ahmedabad Railway Station</p>
                                    <span class="orangetext">17.6 KM (35 MINUTES)</span>
                                </div>
                            </div>
                            <div class="mt-2 ms-2">
                                <a href="https://maps.app.goo.gl/Wii7agsMUJSpNh5FA" target="_blanck" class="links">Visit
                                    Map</a>
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