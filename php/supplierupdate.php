<?php
error_reporting(E_ERROR);
require_once 'connect.php';
ob_start();
$supplier_id = $_GET['id'];
$user = mysqli_query($connect, "SELECT * FROM wareh_suppliers WHERE id = '$supplier_id'");
$user = mysqli_fetch_assoc($user);
$userkookie = $_COOKIE['wareh_userr'];
$conn = new mysqli('localhost', 'root', 'root', 'projectsdb');
$sql = "SELECT * FROM wareh_users WHERE user LIKE '$userkookie'";
$result = $conn->query($sql);
$userr = mysqli_query($conn, "SELECT * FROM wareh_users WHERE user = '$userkookie'");
$userr = mysqli_fetch_assoc($userr);
$sqlquery = "SELECT * FROM wareh_users WHERE user LIKE '$userkookie'";
$resultat = $conn->query($sqlquery);
$row = $resultat->fetch_object();
$access = $row->status;
?>

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
      <link rel="icon" type="image/svg+xml" href="../img/house-door-fill.svg" />

    <title>საწყობი</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">


    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

th, td {
    padding: 4px;
    width: auto;
}
th {
    background: #898989;
    color: #fff;
    border: 2px solid rgba(10, 10, 10, .100);
    box-shadow: 1px 1px 8px rgba(10, 10, 10, .100);
    text-align: center;
}
td {
    background: #def0e8;
    border: 2px solid #898989;
    box-shadow: 1px 1px 8px rgba(10, 10, 10, .100);
    font-size: 16px;
}
    </style>


    <!-- Custom styles for this template -->
    <link href="../css/cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
<!-- სესიის შემოწმება. სესია არაა აქტიური -->
<?php
        if(!isset($_COOKIE['wareh_userr']) || $_COOKIE['wareh_userr'] == ''):
      header ('location: ../index.php');
?>

<!-- სესია აქტიურია -->
<?php else: ?>


<div class="col-md-1" style="background-color:#red">
      </div>
<div class="col-md-10" style="background-color:#red">
 <div class="cover-container-fluid d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Fifth navbar example">
    <div class="container-fluid">
      <h3 class="float-md-start mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
</svg> საწყობი</h3>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample05">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../goods.php#tab_01">საქონელი</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../addgoods.php#tab_01">საქონლის დამატება</a>
          </li>
            <li class="nav-item">
            <a class="nav-link active" href="../suppliers.php">მომწოდებლები</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="../users.php">თანამშრომლები</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="../orders.php">გაყიდული საქონელი</a>
          </li>
            <li class="divider"></li>
            <li class="nav-item">
            <a class="nav-link" href="exit.php">გასვლა</a>
          </li>
            <p class="name5">მომხმარებელი: ... </p> <p class="white text"><?php $row = $result->fetch_object(); echo $row->name ?></p>
        </ul>
      </div>
    </div>
  </nav>
  </header>

  <main class="px-3">
      <div class="container cv col-md-12">
          <br>
    <div class="row centered">
        <h3 class="white text" >მომწოდებლის მონაცემები</h3>
        <!-- //ორგანიზაციის ლოკაცია.  -->
<div class="col-md-6" >
    <div class="block flex-container3">
    <div class="block__element flex-element3">

<?= $user['location'] ?>

    </div>
        </div>
        </div>


        <!-- //უზერის მონაცემები.  -->
<div class="col-md-6">
          <div class="block flex-container2">
              <div class="block__element flex-element2">
          <form action="" method="post" enctype="multipart/form-data">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#009dff" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
              <label class="white text">სახელი გვარი:</label>
            <input type="text" class="form-control" name="supplier"
                   id="supplier" placeholder="" required value="<?= $user['supplier'] ?>">

              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#009dff" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg>
              <label class="white text">E-mail:</label>
            <input type="email" class="form-control" name="email"
                   id="email" placeholder="" required value="<?= $user['email'] ?>">

              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#009dff" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>
              <label class="white text">მობილური:</label>
            <input type="text" class="form-control" name="phone"
                   id="phone" placeholder="" value="<?= $user['phone'] ?>">

              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#009dff" class="bi bi-credit-card-2-front-fill" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zm0 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
</svg>
            <label class="white text">პირადი ნომერი:</label>
            <input type="text" class="form-control" name="personalnumber"
                   id="personalnumber" placeholder="" value="<?= $user['personalnumber'] ?>" required>

              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#009dff" class="bi bi-award-fill" viewBox="0 0 16 16">
  <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
</svg>
              <label class="white text">პოზიცია:</label>
              <input type="text" class="form-control" name="position"
                   id="position" placeholder="" required value="<?= $user['position'] ?>">


              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#009dff" class="bi bi-bookmark-star-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z"/>
</svg>
             <label class="white text">ორგანიზაცია:</label>
            <input type="text" class="form-control" name="organization"
                   id="organization" placeholder="" required value="<?= $user['organization']?>">

              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#009dff" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
</svg>
             <label class="white text">Google ლოკაცია. (ორგანიზაციის მისამართი):</label>
            <textarea class="form-control" name="location" id="location"><?= $user['location']?></textarea>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#009dff" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
  <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
</svg>
            <label class="white text">პრიორიტეტი:</label>
              <select class="form-control" name="priority" id="priority" required>
        <option value="<?= $user['priority'] ?>"><?= $user['priority'] ?></option>
        <option value="მაღალი">მაღალი</option>
        <option value="საშუალო">საშუალო</option>
        <option value="დაბალი">დაბალი</option>
        </select>

              <br>
              <?php if($access == "უფროსი" || $access == "ადმინისტრატორი"): ?>
              <label class="white text">ვეთანხმები: </label>
              <input type="checkbox" name="" required>
              <br><br>
                <div class="btn-group">
                    <button class="btn btn-warning" name="supplierupdate"type="submit">შეცვლა</button>
                  <input type="submit" class="btn btn-danger" name="supplierdelete" value="წაშლა">
                    <a class="btn btn-success" href="../suppliers.php">დაბრუნება</a>
                      <a class="btn btn-primary" href="">Reset</a>
                </div> <?php endif; ?>
            </form>
         <br>
      </div>
    </div>
</div>
          </div>
      </div>
<p class="lead">
    </p>
  </main>


  <footer class="mt-auto text-white-50">
    <label class="">Created By Davitius</label>
<br>
<label class="">&copy;2021</label>
  </footer>
</div>
      </div>
<div class="col-md-1" style="background-color:#red">
      </div>

<?php endif;?>

      <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

<?php

if (!$connect)
{
    die ('ბაზასთან კავშირის შეცდომა');
}
/* მომწოდებლის მონაცემის განახლება */
if(isset($_POST['supplierupdate']))
{


$id = $_GET['id'];
$supplier = $_POST['supplier'];
$organization = $_POST['organization'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$position = $_POST['position'];
$priority = $_POST['priority'];
$personalnumber = $_POST['personalnumber'];
$address = $_POST['address'];
$location = $_POST['location'];


    $query = "UPDATE `wareh_suppliers` SET
    `supplier`='".$supplier."',
    `organization`='".$organization."',
    `email`='".$email."',
    `phone`='".$phone."',
    `position`='".$position."',
    `priority`='".$priority."',
    `personalnumber`='".$personalnumber."',
    `location`='".$location."'
    WHERE `id` = $id";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());


     if($query_run)
    {
        ob_end_clean();
        header('Location: ../php/errors/supplierupdateconfirm.php');
        exit();
    }
    else
    {
        echo "მონაცემები არ განახლდა";
    }
}

/* მომწოდებლის წაშლა */
if(isset($_POST['supplierdelete'])){
       $id = $_GET['id'];
        $querry = "DELETE FROM `wareh_suppliers` WHERE `id` = $id";
            $querry_run = mysqli_query($connect, $querry) or die(mysqli_error());

if($querry_run)
    {
       ob_end_clean();
        header('Location: ../php/errors/supplierdeleteconfirm.php');
       exit();
    }

    }
?>
