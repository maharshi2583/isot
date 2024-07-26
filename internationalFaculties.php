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
                            array('url' => 'imgs/international/ADRIENNE SEITZ.png', 'name' => 'ADRIENNE SEITZ', 'country'=>'UK'),
                            array('url' => 'imgs/international/AHN CURIE.png', 'name' => 'AHN CURIE', 'country'=>'Korea'),
                            array('url' => 'imgs/international/AJAY KUMAR SHARMA.jpg', 'name' => 'AJAY SHARMA', 'country'=>'UK'),
                            array('url' => 'imgs/international/ALI ABDUL KAREEM AL OBAIDLI.jpg', 'name' => 'ALI ABDUL KAREEM AL OBAIDLI', 'country'=>'Abu Dhabi, UAE'),
                            array('url' => 'imgs/international/BEATRIZ DOMINGUEZ-GIL.jpg', 'name' => 'BEATRIZ DOMINGUEZ-GIL', 'country'=>'Spain'),
                            array('url' => 'imgs/international/CARLOS ESQUIVE.jpg', 'name' => 'CARLOS ESQUIVE', 'country'=>'USA'),
                            array('url' => 'imgs/international/CHLOË BALLESTÉ.jpg', 'name' => 'CHLOË BALLESTÉ DELPIERRE', 'country'=>'Spain'),
                            array('url' => 'imgs/international/CHRIS CALLAGHAN.jpg', 'name' => 'CHRIS CALLAGHAN', 'country'=>'UK'),
                            array('url' => 'imgs/international/DEIRDRE SAWINSKI.png', 'name' => 'DEIRDRE SAWINSKI', 'country'=>'USA'),
                            array('url' => 'imgs/international/Dieter Haffner.png', 'name' => 'DIETER HAFFNER', 'country'=>'UK'),
                            array('url' => 'imgs/international/DORRY SEGEV.jpg', 'name' => 'DORRY SEGEV', 'country'=>'USA'),
                            array('url' => 'imgs/international/ELMI MULLER.jpg', 'name' => 'ELMI MULLER', 'country'=>'Africa'),
                            array('url' => 'imgs/international/Faisal Masood Khan.jpg', 'name' => 'FAISAL Masood Khan', 'country'=>'Canada'),
                            array('url' => 'imgs/international/FOTINI PARTHENIOU.png', 'name' => 'FOTINI PARTHENIOU', 'country'=>'UK'),
                            array('url' => 'imgs/international/GABRIEL ONISCU.jpg', 'name' => 'GABRIEL ONISCU', 'country'=>'Europe'),
                            array('url' => 'imgs/international/HAIBO WANG.png', 'name' => 'HAIBO WANG', 'country'=>'China'),
                            array('url' => 'imgs/international/JEREMY CHAPMAN.jpg', 'name' => 'JEREMY CHAPMAN', 'country'=>'Australia'),
                            array('url' => 'imgs/international/JOHN FRIEDEWALD.png', 'name' => 'JOHN FRIEDEWALD', 'country'=>'USA'),
                            array('url' => 'imgs/international/JOSH LEVITSKY.png', 'name' => 'JOSH LEVITSKY', 'country'=>'USA'),
                            array('url' => 'imgs/international/KRIENGSAK VAREESANGTHIP.png', 'name' => 'KRIENGSAK VAREESANGTHIP', 'country'=>'Thailand'),
                            array('url' => 'imgs/international/KRISHNA MENON.jpg', 'name' => 'KRISH MENON','country'=>'UK'),
                            array('url' => 'imgs/international/MAGGIE MA.png', 'name' => 'MAGGIE MA', 'country'=>'Hong Kong'),
                            // array('url' => 'imgs/international/MARCELLE MCPHADEN.jpg', 'name' => 'MARCELLE MCPHADEN', 'country'=>'Canada'),
                            array('url' => 'imgs/international/MARCELO CANTAROVICH.jpg', 'name' => 'MARCELO CANTAROVICH', 'country'=>'Canada'),
                            array('url' => 'imgs/international/MARIA PAULA GOMEZ.jpg', 'name' => 'MARIA PAULA GOMEZ', 'country'=>'Spain'),
                            array('url' => 'imgs/international/Allan Massie.jpg', 'name' => 'Allan Massie', 'country'=>'USA'),
                            array('url' => 'imgs/international/MUSTAFA AL-MOUSAWI.png', 'name' => 'MUSTAFA AL-MOUSAWI', 'country'=>'Kuwait'),
                            array('url' => 'imgs/international/NATASHA KHOVANOVA.jpg', 'name' => 'NATASHA KHOVANOVA', 'country'=>'UK'),
                            array('url' => 'imgs/international/', 'name' => 'Nikky Isabel', 'country'=>'UK'),
                            array('url' => 'imgs/international/', 'name' => 'Rajendra Singh', 'country'=>'UK'),
                            array('url' => 'imgs/international/', 'name' => 'Raman Dhanda', 'country'=>'UK'),
                            array('url' => 'imgs/international/RUPESH RAINA.jpg', 'name' => 'RUPESH RAINA', 'country'=>'USA'),
                            array('url' => 'imgs/international/', 'name' => 'Sainaresh Vellanki', 'country'=>'Abu Dhabi, UAE'),
                            array('url' => 'imgs/international/SANJAY SINHA.png', 'name' => 'SANJAY SINHA', 'country'=>'UK'),
                            array('url' => 'imgs/international/', 'name' => 'Shafi Malik', 'country'=>'UK'),
                            array('url' => 'imgs/international/SIAN GRIFFIN.jpg', 'name' => 'SIAN GRIFFIN', 'country'=>'UK'),
                            array('url' => 'imgs/international/Siddiq Anwar.jpg', 'name' => 'Siddiq Anwar', 'country'=>'Abu Dhabi, UAE'),
                            array('url' => 'imgs/international/STEFAN G. TULLIUS.jpg', 'name' => 'STEFAN G. TULLIUS', 'country'=>'USA'),
                            array('url' => 'imgs/international/', 'name' => 'STEPHEN MARKS', 'country'=>'USA'),
                            array('url' => 'imgs/international/SUNIL DAGA.jpg', 'name' => 'SUNIL DAGA', 'country'=>'UK'),
                            array('url' => 'imgs/international/SUSHMA SHANKAR.png', 'name' => 'SUSHMA SHANKAR', 'country'=>'UK'),
                            array('url' => 'imgs/international/Yolanda Becker.jpg', 'name' => 'Yolanda Becker', 'country'=>'USA'),
                            array('url' => 'imgs/international/Devam Desai.jpg', 'name' => 'Devam Desai', 'country'=>'INDIA'),
                        );
                        foreach($faculty as $faculty){
                            $url = htmlspecialchars($faculty['url']);
                            $name = htmlspecialchars($faculty['name']);
                            $country = htmlspecialchars($faculty['country']);
                            echo '<div class="col">
                                    <div class="card h-100 doctorimg border-0 customshadow customcard">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center mt-2">
                                                <img src="' . $url . '" class="mb-4 facultyBorder" width="170" height="170" alt="">
                                            </div>
                                            <h5 class="redtext text-center fw-bold text-uppercase">' . $name . '</h5>
                                            <p class="orangetext text-center fw-bold mb-0">' . $country . '</p>
                                        </div>
                                    </div>
                                </div>';
                        };
                    ?>
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