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

    <script src="PDFJSExpress/lib/webviewer.min.js"></script>
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
                <h1 class="text-center headingtext text-white">Scientific Program</h1>
            </div>
        </div>
    </div>

    <!-- main content -->
    <div class="container">
        <div class="row my-3">
            <ul class="nav justify-content-center">
                <li class="nav-item m-2">
                    <button id="scientificAgenda" class="btn btn-primary" onclick="handleButtonClick()">Scientific
                        Agenda</button>
                </li>
                <li class="nav-item m-2">
                    <button id="posterAgenda" class="btn btn-outline-primary"
                        onclick="handleButtonClick()">Oral & Poster Agenda</button>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center mb-5">
            <div id="pdf-container" class="pdfiframe"></div>
        </div>
    </div>
    <!-- footer -->
    <?php 
        include 'footer.php';
    ?>
    <script>
    let instance; // Declare instance outside to access in the function

    function loadPDF(url) {
        if (instance) {
            instance.loadDocument(url); // Load new PDF
        } else {
            WebViewer({
                    path: 'PDFJSExpress/lib/',
                    licenseKey: 'pwug34KTO7uWtiFMvW4C',
                    initialDoc: url,
                    disabledElements: [
                        'leftPanelButton',
                        'viewControlsButton',
                        'panToolButton',
                        'selectToolButton',
                        'freeHandToolGroupButton',
                        'textToolGroupButton',
                        'ribbons',
                        'searchButton',
                        'textSelectButton',
                        'toggleNotesButton',
                        'menuButton',
                        'moreButton',
                        'toolsHeader'
                    ],
                    enableElements: [
                        'zoomOutButton',
                        'zoomInButton'
                    ]
                }, document.getElementById('pdf-container'))
                .then(inst => {
                    instance = inst; // Save the instance
                    const docViewer = instance.docViewer;
                    const annotManager = instance.annotManager;

                    docViewer.on('documentLoaded', () => {
                        // Document loaded actions
                    });
                });
        }
    }

    // Load the default PDF initially
    loadPDF('asset/ISOT Scientific Agenda.pdf');

    function handleButtonClick(pdfPath, activeId, inactiveId) {
        loadPDF(pdfPath);
        // Update button classes
        document.getElementById(activeId).classList.add("btn-primary");
        document.getElementById(activeId).classList.remove("btn-outline-primary");
        document.getElementById(inactiveId).classList.add("btn-outline-primary");
        document.getElementById(inactiveId).classList.remove("btn-primary");
    }

    // Event listeners for buttons
    document.getElementById('scientificAgenda').addEventListener('click', () => {
        handleButtonClick('../../../asset/ISOT Scientific Agenda.pdf', 'scientificAgenda', 'posterAgenda');
    });
    document.getElementById('posterAgenda').addEventListener('click', () => {
        handleButtonClick('../../../asset/ISOT ORAL & POSTER.pdf', 'posterAgenda', 'scientificAgenda');
    });
    </script>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>