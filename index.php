<?php
error_reporting(E_ERROR);
ob_start(); ?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
      <link rel="icon" type="image/svg+xml" href="img/house-door-fill.svg" />
    <title>საწყობი</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-weidth: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }


th, td {
    padding: 2px;
    width: auto;
}
th {
    background: rgba(15, 15, 15, .100);
    color: #fff;
    border: 2px solid rgba(40, 40, 40, .100);
    box-shadow: 1px 1px 8px rgba(10, 10, 10, .100);
    text-align: center;
}
td {
    background: #def0e8;
    border: 2px solid #898989;
    box-shadow: 1px 1px 8px rgba(10, 10, 10, .100);
    font-size: 16px;
    </style>


    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
     <!-- სესიის შემოწმება. სესია არაა აქტიური -->
<?php
        if(!isset($_COOKIE['wareh_userr']) || $_COOKIE['wareh_userr'] == ''):
?>

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
    <div class="container-fluid">
      <h3 class="float-md-start mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
</svg> საწყობი</h3>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample01">
        <ul class="navbar-nav me-auto mb-2">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">ავტორიზაცია</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="ebout.php">ჩვენს შესახებ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">კონტაქტი</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <main class="px-3">
      <br><br>
    <h1>სურსათის საწყობი</h1>
    <p class="lead">მოგესალმები.</p>
      <p class="lead">ჩვენს საწყობში ხილის, ბოსტნეულის, თევზის და ხორცის ფართო ასორტიმენტია.</p>

    <br><br>

      <form action="php/auth.php" method="post">
    <h1 class="h3 mb-3 fw-normal">გაიარეთ ავტორიზაცია</h1>
    <br>
      <input type="txt" class="form-control" id="user" name="user" placeholder="E-mail">
      <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
    <div class="checkbox mb-3">
      <label>
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
  <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
  <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg> შესვლა</button>
  </form>
  </main>

  <footer class="mt-auto text-white-50">
    <label class="">Created By Davitius</label>
<br>
<label class="">&copy;2021</label>
  </footer>
</div>

<!-- სესია აქტიურია -->
<?php else: ?>

<?php
      ob_end_clean();
      header('location: goods.php#tab_01');
      exit();
      ?>

<?php endif;?>

<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
