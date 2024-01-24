<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zum Roten Tuch</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mein.css">
</head>
<body>

    <?php include 'menu1.php'; ?>    

    <main>
        <section id="kontakt">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Kontaktdaten</h1>
                        <p>Nachname Vorname</p>
                        <p>Saglstraße 35<br>6410 Telfs<br>Österreich</p>
                        <a href="tel:+436602503740">+43 660 250 3740</a><br>
                        <a href="mailto:office@zum-roten-tuch.at">office@zum-roten-tuch.at</a>
                    </div>
                    <div class="col-md-6">
                        <p>Googlemaps</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="kontaktformular">
            <div class="container">
                <div class="row form-group">
                    <div class="col-md-12">
                        <h2>Kontaktformular</h2>
                    </div>
                    <div class="col-md-6">
                        <label for="text">Name</label>
                        <input type="text" class="form-control" placeholder="Vor- und Nachname">
                    </div>
                    <div class="col-md-6">
                        <label for="email">E-Mail</label>
                        <input type="email" class="form-control" placeholder="E-Mail Adresse">
                    </div>
                    <div class="col-md-12">
                        <label for="text">Nachricht</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    
</body>
</html>