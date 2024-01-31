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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, quos quisquam. Quasi, consequatur dolorem hic nesciunt exercitationem ea autem quisquam ex, facere eligendi similique odit, dignissimos esse dolore est quas architecto? Pariatur distinctio at quisquam rerum perferendis, iusto molestiae ut quidem quaerat sapiente dolorum excepturi, recusandae consequuntur nulla error sed tempore accusamus, quod molestias unde voluptatum modi porro amet repellendus. Incidunt odit dignissimos, at illo quod expedita sed cum repellat voluptatum, soluta voluptates hic obcaecati asperiores veniam id accusantium aliquam maiores nisi excepturi. Eos, incidunt ipsa nemo neque sed, est adipisci dignissimos libero nobis, optio minus assumenda minima amet molestiae!</p>
                        <div class="text-center"><button class="btn_normal">erfahre mehr über uns</button></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="gallerie">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 px-0">
                        <img src="images/Atelier.jpg" alt="Atelier" class="img-fluid">
                    </div>
                    <div class="col-md-4 px-0">
                        <img src="images/Stoffe.jpg" alt="Stoffe" class="img-fluid">
                    </div>
                    <div class="col-md-4 px-0">
                        <img src="images/Atelier.jpg" alt="Atelier" class="img-fluid">
                    </div>
                    <div class="col-md-4 px-0">
                        <img src="images/Stoffe.jpg" alt="Stoffe" class="img-fluid">
                    </div>
                    <div class="col-md-4 px-0">
                        <img src="images/Atelier.jpg" alt="Atelier" class="img-fluid">
                    </div>
                    <div class="col-md-4 px-0">
                        <img src="images/Stoffe.jpg" alt="Stoffe" class="img-fluid">
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
            <div class="text-center mt-3"><button class="btn_normal">sieh dir alle Termine an</button></div>
        </section>

    </main>

    <?php include 'footer.php'; ?>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    
</body>
</html>