<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Error <?= $_GET['code']; ?></title>
  <?php include 'head.php'; ?>
</head>
<body>

<div class="container-fluid d-flex justify-content-end pt-3 pe-3">
  <a class="download" href="kontakt.php">Kontaktiere uns</a>
</div>

<main id="error">

  <div class="container">
      <div class="row">
          <div class="col-md-12">
            <h1>ERROR <?= $_GET['code']; ?></h1>
          </div>
          <div class="col-md-12 my-3">
            <p>Hoppla! Da ist wohl etwas schiefgelaufen. Die von euch gesuchte Seite konnte nicht gefunden werden. Aber keine Sorge, wir sind hier, um zu helfen! Kehrt zurück zur Startseite und erkundet unser vielfältiges Angebot. Oder kontaktiert uns direkt, wenn ihr Hilfe benötigt. Wir stehen euch gerne zur Verfügung, um das Problem zu lösen. Danke für euer Verständnis!</p>
          </div>
          <div class="col-md-5">
            <hr>
          </div>
          <div class="col-md-2 d-flex justify-content-center">
            <i class="me-2"><img src="images/symbol.png" alt="Symbol" width="18px"></i>
          </div>
          <div class="col-md-5">
            <hr>
          </div>
          <div class="col-md-12 mt-3">
            <p>
            HTTP 400 - Bad Request<br>
            Error 401 - Unauthorized<br>
            Error 404 - Not found<br>
            Error 405 - Method Not Allowed<br>
            HTTP 408 - Timeout Error<br>
            Error 502 - Bad Gateway<br>
            HTTP 504 - Gateway Timeout
            </p>
          </div>
      </div>
  </div>

</main>

</body>
</html>