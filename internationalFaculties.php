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
    <link rel="shortcut icon" href="imgs/logofavicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- navbar -->
    <?php 
        include 'header.php';
    ?>
    <!-- breadcrums -->
    <div class="container-fluid" id="breadcrumb_container">
        <div class="row align-items-center">
            <div class="col-12">
                <h1 class="text-center headingtext text-white">International Faculty</h1>
            </div>
        </div>
    </div>

    <!-- main content -->
    <div class="container">
        <div class="row justify-content-center my-5">
            <!-- main committee -->
            <div class="col-12">
                <h1 class="redtext fw-bold text-center mb-4 headingtext">International Faculty</h1>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-5">

                    <?php 
                        $faculty = array(
                            array('url' => 'imgs/international/ADRIENNE SEITZ.png', 'name' => 'ADRIENNE SEITZ'),
                            array('url' => 'imgs/international/AHN CURIE.png', 'name' => 'AHN CURIE'),
                            array('url' => 'imgs/international/AJAY KUMAR SHARMA.jpg', 'name' => 'AJAY KUMAR SHARMA'),
                            array('url' => 'imgs/international/ALI ABDUL KAREEM AL OBAIDLI.jpg', 'name' => 'ALI ABDUL KAREEM AL OBAIDLI'),
                            array('url' => 'imgs/international/BEATRIZ DOMINGUEZ-GIL.jpg', 'name' => 'BEATRIZ DOMINGUEZ-GIL'),
                            array('url' => 'imgs/international/CARLOS ESQUIVE.jpg', 'name' => 'CARLOS ESQUIVE'),
                            array('url' => 'imgs/international/CHLOË BALLESTÉ.jpg', 'name' => 'CHLOË BALLESTÉ'),
                            array('url' => 'imgs/international/CHRIS CALLAGHAN.jpg', 'name' => 'CHRIS CALLAGHAN'),
                            array('url' => 'imgs/international/DEIRDRE SAWINSKI.png', 'name' => 'DEIRDRE SAWINSKI'),
                            array('url' => 'imgs/international/DEVI MEY.jpg', 'name' => 'DEVI MEY'),
                            array('url' => 'imgs/international/DORRY SEGEV.jpg', 'name' => 'DORRY SEGEV'),
                            array('url' => 'imgs/international/ELMI MULLER.jpg', 'name' => 'ELMI MULLER'),
                            array('url' => 'imgs/international/FOTINI PARTHENIOU.png', 'name' => 'FOTINI PARTHENIOU'),
                            array('url' => 'imgs/international/GABRIEL ONISCU.jpg', 'name' => 'GABRIEL ONISCU'),
                            array('url' => 'imgs/international/HAIBO WANG.png', 'name' => 'HAIBO WANG'),
                            array('url' => 'imgs/international/JEREMY CHAPMAN.jpg', 'name' => 'JEREMY CHAPMAN'),
                            array('url' => 'imgs/international/JOHN FRIEDEWALD.png', 'name' => 'JOHN FRIEDEWALD'),
                            array('url' => 'imgs/international/JOHN FUNG.jpg', 'name' => 'JOHN FUNG'),
                            array('url' => 'imgs/international/JOSH LEVITSKY.png', 'name' => 'JOSH LEVITSKY'),
                            array('url' => 'imgs/international/KRIENGSAK VAREESANGTHIP.png', 'name' => 'KRIENGSAK VAREESANGTHIP'),
                            array('url' => 'imgs/international/KRISHNA MENON.jpg', 'name' => 'KRISHNA MENON'),
                            array('url' => 'imgs/international/LARS WENNBERG.jpg', 'name' => 'LARS WENNBERG'),
                            array('url' => 'imgs/international/MAGGIE MA.png', 'name' => 'MAGGIE MA'),
                            array('url' => 'imgs/international/MARCELLE MCPHADEN.jpg', 'name' => 'MARCELLE MCPHADEN'),
                            array('url' => 'imgs/international/MARCELO CANTAROVICH.jpg', 'name' => 'MARCELO CANTAROVICH'),
                            array('url' => 'imgs/international/MARIA PAULA GOMEZ.jpg', 'name' => 'MARIA PAULA GOMEZ'),
                            array('url' => 'imgs/international/MUSTAFA AL-MOUSAWI.png', 'name' => 'MUSTAFA AL-MOUSAWI'),
                            array('url' => 'imgs/international/NATASHA KHOVANOVA.jpg', 'name' => 'NATASHA KHOVANOVA'),
                            array('url' => 'imgs/international/RUPESH RAINA.jpg', 'name' => 'RUPESH RAINA'),
                            array('url' => 'imgs/international/SANJAY SINHA.png', 'name' => 'SANJAY SINHA'),
                            array('url' => 'imgs/international/SIAN GRIFFIN.jpg', 'name' => 'SIAN GRIFFIN'),
                            array('url' => 'imgs/international/STEFAN G. TULLIUS.jpg', 'name' => 'STEFAN G. TULLIUS'),
                            array('url' => 'imgs/international/SUNIL DAGA.jpg', 'name' => 'SUNIL DAGA'),
                            array('url' => 'imgs/international/SUSHMA SHANKAR.png', 'name' => 'SUSHMA SHANKAR'),
                        );
                        foreach($faculty as $faculty){
                            $url = htmlspecialchars($faculty['url']);
                            $name = htmlspecialchars($faculty['name']);
                            echo '<div class="col">
                                    <div class="card h-100 doctorimg border-0 customshadow customcard">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center mt-2">
                                                <img src="' . $url . '" class="mb-4 facultyBorder" width="170" alt="">
                                            </div>
                                            <h5 class="redtext text-center fw-bold">' . $name . '</h5>
                                        </div>
                                    </div>
                                </div>';
                        };
                    ?>

                    <!-- <div class="col">
                        <div class="card h-100 doctorimg border-0 customshadow customcard">
                            <div class="card-body">
                                <div class="d-flex justify-content-center mt-2">
                                    <img src="imgs/AHN CURIE.png" class="mb-4 facultyBorder" width="170" alt="">
                                </div>
                                <h5 class="redtext text-center fw-bold">ADRIENNE SEITZ</h5>
                            </div>
                        </div>
                    </div> -->
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