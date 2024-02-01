<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Zum Roten Tuch</title>
    <?php include 'head.php'; ?>
</head>
<body>

    <header>
       <?php include 'menu.php'; ?>
    </header>
    <main>

        <section id="info" class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Zum Roten Tuch</h1>
                        <p>Willkommen bei "Zum Roten Tuch - die individuelle Schneiderei"! Tauchen Sie ein in die faszinierende Welt des Mittelalters und entdecken Sie unsere handgefertigten Kleidungsstücke, die von einer vergangenen Ära inspiriert sind. Besuchen Sie uns auf Mittelaltermärkten, wo wir unsere Kollektion präsentieren und Sie in eine Welt voller Geschichte, Tradition und Handwerkskunst entführen. Lassen Sie sich von unseren einzigartigen Kreationen verzaubern und erleben Sie das Mittelalter in all seiner Pracht und Schönheit!</p>
                        <div class="text-center"><button class="btn_normal"><a href="ueberuns.php">erfahre mehr über uns</a></button></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="gallerie">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 px-0">
                        <img src="images/gallerie1.jpg" alt="Atelier" class="img-fluid">
                    </div>
                    <div class="col-md-4 px-0">
                        <img src="images/gallerie2.jpg" alt="Stoffe" class="img-fluid">
                    </div>
                    <div class="col-md-4 px-0">
                        <img src="images/gallerie3.jpg" alt="Atelier" class="img-fluid">
                    </div>
                    <div class="col-md-4 px-0">
                        <img src="images/gallerie4.jpg" alt="Stoffe" class="img-fluid">
                    </div>
                    <div class="col-md-4 px-0">
                        <img src="images/gallerie5.jpg" alt="Atelier" class="img-fluid">
                    </div>
                    <div class="col-md-4 px-0">
                        <img src="images/gallerie6.jpg" alt="Stoffe" class="img-fluid">
                    </div>
                    <div class="col-md-12 mt-2">
                        <p>einige Eindrücke unserer Mittelaltermärkte</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="karte" class="my-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Unsere nächsten Märkte</h2>
                    </div>
                    <div class="col-md-6 d-flex">
                        <i class="me-2"><img src="images/symbol.png" alt="Symbol" width="18px"></i></i>
                        <p>3. März 2024 - 05. März 2024 in Hameln</p>
                    </div>
                    <div class="col-md-6 d-flex">
                    <i class="me-2"><img src="images/symbol.png" alt="Symbol" width="18px"></i></i>
                        <p>25. März 2024 - 26. März 2024 in Gloggnitz</p>
                    </div>  
                </div>
            </div>
        </section>
        <section id="kartedetail" class ="mb-5 px-1">
            <?php include 'map.php'; ?>
            <?php include 'dialog.php'; ?>
            <div class="text-center mt-3"><button class="btn_normal"><a href="marktkalender.php">sieh dir alle Termine an</a></button></div>
        </section>

    </main>

    <?php include 'footer.php'; ?>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    
</body>
</html>