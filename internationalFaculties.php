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
                            array('url' => 'imgs/international/ADRIENNE-SEITZ.jpg', 'name' => 'ADRIENNE SEITZ', 'country'=>'UK'),
                            array('url' => 'imgs/international/AHN-CURIE.jpg', 'name' => 'AHN CURIE', 'country'=>'Korea'),
                            array('url' => 'imgs/international/AJAY-SHARMA.jpg', 'name' => 'AJAY SHARMA', 'country'=>'UK'),
                            array('url' => 'imgs/international/ALEXANDRE LOUPY.jpg', 'name' => 'ALEXANDRE LOUPY', 'country'=>'italy'),
                            array('url' => 'imgs/international/ALI-ABDUL-KAREEM.jpg', 'name' => 'ALI ABDUL KAREEM AL OBAIDLI', 'country'=>'UAE'),
                            array('url' => 'imgs/international/ATUL-AGNIHOTRI.jpg', 'name' => 'Atul Agnihotri', 'country'=>'USA'),
                            array('url' => 'imgs/international/CARLOS-ESQUIVEL.jpg', 'name' => 'CARLOS ESQUIVE', 'country'=>'USA'),
                            array('url' => 'imgs/international/CHLOË-BALLESTÉ-DELPIERRE.jpg', 'name' => 'CHLOË BALLESTÉ DELPIERRE', 'country'=>'Spain'),
                            array('url' => 'imgs/international/CHRIS-CALLAGHAN.jpg', 'name' => 'CHRIS CALLAGHAN', 'country'=>'UK'),
                            array('url' => 'imgs/international/DEIRDRE-SAWINSKI.jpg', 'name' => 'DEIRDRE SAWINSKI', 'country'=>'USA'),
                             array('url' => 'imgs/international/DEVAM-A.-DESAI.jpg', 'name' => 'Devam Desai', 'country'=>'USA'),
                            array('url' => 'imgs/international/DIETER-HAFFNER.jpg', 'name' => 'DIETER HAFFNER', 'country'=>'GERMANY'),
                            array('url' => 'imgs/international/DORRY-SEGEV.jpg', 'name' => 'DORRY SEGEV', 'country'=>'USA'),
                            array('url' => 'imgs/international/ELMI-MULLER.jpg', 'name' => 'ELMI MULLER', 'country'=>'South Africa'),
                            array('url' => 'imgs/international/FAISAL-MASOOD-KHAN.jpg', 'name' => 'FAISAL Masood Khan', 'country'=>'Canada'),
                            array('url' => 'imgs/international/GABRIEL-ONISCU.jpg', 'name' => 'GABRIEL ONISCU', 'country'=>'Europe'),
                            array('url' => 'imgs/international/HAIBO-WANG.jpg', 'name' => 'HAIBO WANG', 'country'=>'China'),
                            array('url' => 'imgs/international/JEREMY-CHAPMAN.jpg', 'name' => 'JEREMY CHAPMAN', 'country'=>'Australia'),
                            array('url' => 'imgs/international/JOHN-FRIEDEWALD.jpg', 'name' => 'JOHN FRIEDEWALD', 'country'=>'USA'),
                            array('url' => 'imgs/international/KRIENGSAK-VAREESSNGTHIP.jpg', 'name' => 'KRIENGSAK VAREESANGTHIP', 'country'=>'Thailand'),
                            array('url' => 'imgs/international/KRISH-MENON.jpg', 'name' => 'KRISH MENON','country'=>'UK'),
                            array('url' => 'imgs/international/Luciano Potena.jpg', 'name' => 'Luciano Potena', 'country'=>'italy'),
                            array('url' => 'imgs/international/MAGGIE-MA.jpg', 'name' => 'MAGGIE MA', 'country'=>'Hong Kong'),
                            array('url' => 'imgs/international/MARCELLO-CANTAROVICH.jpg', 'name' => 'MARCELO CANTAROVICH', 'country'=>'Canada'),
                            array('url' => 'imgs/international/MARIA-PAULA-GOMEZ.jpg', 'name' => 'MARIA PAULA GOMEZ', 'country'=>'Spain'),
                            array('url' => 'imgs/international/MASSIE-ALLAN.jpg', 'name' => 'Massie Allan', 'country'=>'USA'),
                            array('url' => 'imgs/international/MICHAEL-REES.jpg', 'name' => 'MICHAEL REES', 'country'=>'USA'),
                            array('url' => 'imgs/international/MUSTAFA-AL-MOUSAWI.jpg', 'name' => 'MUSTAFA AL-MOUSAWI', 'country'=>'Kuwait'),
                            array('url' => 'imgs/international/NASSIM-KAMAR.jpg', 'name' => 'NASSIM KAMAR', 'country'=>'FRANCE'),
                            array('url' => 'imgs/international/NATASHA-KHOVANOVA.jpg', 'name' => 'NATASHA KHOVANOVA', 'country'=>'UK'),
                            array('url' => 'imgs/international/NICOLE-ISABEL.jpg', 'name' => 'NICOLE ISABEL', 'country'=>'AUSTRALIA'),
                            array('url' => 'imgs/international/NITHYA-KRISHNAN.jpg', 'name' => 'NITHYA KRISHNAN', 'country'=>'UK'),
                            array('url' => 'imgs/international/RAJINDER-SINGH.jpg', 'name' => 'RAJINDER SINGH', 'country'=>'UK'),
                            array('url' => 'imgs/international/RAMAN-DHANDA.jpg', 'name' => 'Raman Dhanda', 'country'=>'UK'),
                            array('url' => 'imgs/international/RUPESH-RAINA.jpg', 'name' => 'RUPESH RAINA', 'country'=>'USA'),
                            array('url' => 'imgs/international/SAINARESH-VELLANKI.jpg', 'name' => 'Sainaresh Vellanki', 'country'=>'UAE'),
                            array('url' => 'imgs/international/SANJAY-SINHA.jpg', 'name' => 'SANJAY SINHA', 'country'=>'UK'),
                            array('url' => 'imgs/international/SEEMA-BAID-AGRAWAL.jpg', 'name' => 'SEEMA BAID-AGRAWAL', 'country'=>'SWEDEN'),
                            array('url' => 'imgs/international/SHAFI-MALIK.jpg', 'name' => 'Shafi Malik', 'country'=>'UK'),
                            array('url' => 'imgs/international/SHIREEN-AFROZ.jpg', 'name' => 'SHIREEN AFROZ', 'country'=>'BANGLADESH'),
                            array('url' => 'imgs/international/SIAN-GRIFFIN.jpg', 'name' => 'SIAN GRIFFIN', 'country'=>'UK'),
                            array('url' => 'imgs/international/SIDDIQ-ANWAR.jpg', 'name' => 'Siddiq Anwar', 'country'=>'UAE'),
                            array('url' => 'imgs/international/STEFAN-G.-TULLIUS.jpg', 'name' => 'STEFAN G. TULLIUS', 'country'=>'USA'),
                            array('url' => 'imgs/international/SUNIL-DAGA.jpg', 'name' => 'SUNIL DAGA', 'country'=>'UK'),
                            array('url' => 'imgs/international/SUSHMA-SHANKAR.jpg', 'name' => 'SUSHMA SHANKAR', 'country'=>'UK'),
                            array('url' => 'imgs/international/YOLANDA-BECKER.jpg', 'name' => 'Yolanda Becker', 'country'=>'USA'),
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
                                            <p class="orangetext text-center fw-bold mb-0  text-uppercase">' . $country . '</p>
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