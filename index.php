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

    <header class="mb-4">
       <?php include 'menu.php'; ?>
    </header>
    <main>

        <section id="info" class="mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Zum Roten Tuch</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, quos quisquam. Quasi, consequatur dolorem hic nesciunt exercitationem ea autem quisquam ex, facere eligendi similique odit, dignissimos esse dolore est quas architecto? Pariatur distinctio at quisquam rerum perferendis, iusto molestiae ut quidem quaerat sapiente dolorum excepturi, recusandae consequuntur nulla error sed tempore accusamus, quod molestias unde voluptatum modi porro amet repellendus. Incidunt odit dignissimos, at illo quod expedita sed cum repellat voluptatum, soluta voluptates hic obcaecati asperiores veniam id accusantium aliquam maiores nisi excepturi. Eos, incidunt ipsa nemo neque sed, est adipisci dignissimos libero nobis, optio minus assumenda minima amet molestiae!</p>
                        <div class="text-center"><button>erfahre mehr über uns</button></div>
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

        <section id="karte">
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
                <div class="text-center"><button>sieh dir alle Termine an</button></div>
            </div>
        </section>

    </main>

    <?php include 'footer.php'; ?>

    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>