<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Zum Roten Tuch</title>
    <?php include 'head.php'; ?>
</head>
<body>

    <?php include 'menu1.php'; ?>    

    <main>
        <section id="kontakt" class="mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <h1>Kontaktdaten</h1>
                        <p>Zum Roten Tuch<br>Monika Novak</p>
                        <p>Saglstraße 35<br>6410 Telfs<br>Österreich</p>
                        <a class="download" href="tel:+436602503740">+43 660 250 3740</a><br>
                        <a class="download" href="mailto:office@zum-roten-tuch.at">office@zum-roten-tuch.at</a>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5410.3060222422055!2d11.072590960951306!3d47.311349253382986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479d656f969f61fb%3A0x7f54786b71384687!2sZum%20roten%20Tuch!5e0!3m2!1sde!2sit!4v1706862012485!5m2!1sde!2sit" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section id="kontaktformular" class="mb-5">
            <div class="container">
                <div class="row form-group">
                    <div class="col-md-12">
                        <h2>Kontaktformular</h2>
                    </div>
                    <div class="col-md-12 mb-4">
                        <p>Solltet Ihr Fragen haben, Wünsche hegen oder einfach nur Eure Gedanken mit uns teilen wollen,<br>zaudert nicht und sendet uns eine Botschaft!</p>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Vor- und Nachname">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="E-Mail Adresse">
                    </div>
                    <div class="col-md-12 mt-4">
                        <textarea class="form-control" rows="5" id="comment" placeholder="Geben Sie hier Ihre Botschaft ein ..."></textarea>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <button type="submit" class="btn-form px-5 mt-4">senden</button>
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