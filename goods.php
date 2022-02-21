<?php
error_reporting(E_ERROR);
ob_start();
$userkookie = $_COOKIE['wareh_userr'];
$conn = new mysqli('localhost', 'root', 'root', 'projectsdb');
$sql = "SELECT * FROM wareh_users WHERE user LIKE '$userkookie'";
$result = $conn->query($sql);
$user = mysqli_query($conn, "SELECT * FROM wareh_users WHERE user = '$userkookie'");
$user = mysqli_fetch_assoc($user);
$sqlquery = "SELECT * FROM wareh_users WHERE user LIKE '$userkookie'";
$resultat = $conn->query($sqlquery);
$row = $resultat->fetch_object();
                  $pr1name = $row->pr1name; $pr1price = $row->pr1price; $pr1quant = $row->pr1quant;
                  $pr2name = $row->pr2name; $pr2price = $row->pr2price; $pr2quant = $row->pr2quant;
                  $pr3name = $row->pr3name; $pr3price = $row->pr3price; $pr3quant = $row->pr3quant;
                  $pr4name = $row->pr4name; $pr4price = $row->pr4price; $pr4quant = $row->pr4quant;
                  $pr5name = $row->pr5name; $pr5price = $row->pr5price; $pr5quant = $row->pr5quant;
                  $pr6name = $row->pr6name; $pr6price = $row->pr6price; $pr6quant = $row->pr6quant;
                  $pr7name = $row->pr7name; $pr7price = $row->pr7price; $pr7quant = $row->pr7quant;
                  $pr8name = $row->pr8name; $pr8price = $row->pr8price; $pr8quant = $row->pr8quant;
                  $pr9name = $row->pr9name; $pr9price = $row->pr9price; $pr9quant = $row->pr9quant;
                  $pr10name = $row->pr10name; $pr10price = $row->pr10price; $pr10quant = $row->pr10quant;

                $access = $row->status;

        if($pr1name != ""){$pr1 = 1;}
        if($pr2name != ""){$pr2 = 1;}
        if($pr3name != ""){$pr3 = 1;}
        if($pr4name != ""){$pr4 = 1;}
        if($pr5name != ""){$pr5 = 1;}
        if($pr6name != ""){$pr6 = 1;}
        if($pr7name != ""){$pr7 = 1;}
        if($pr8name != ""){$pr8 = 1;}
        if($pr9name != ""){$pr9 = 1;}
        if($pr10name != ""){$pr10 = 1;}
        $cart = $pr1+$pr2+$pr3+$pr4+$pr5+$pr6+$pr7+$pr8+$pr9+$pr10;

        $sum1 = $pr1quant*$pr1price; $sum2 = $pr2quant*$pr2price; $sum3 = $pr3quant*$pr3price;
        $sum4 = $pr4quant*$pr4price; $sum5 = $pr5quant*$pr5price; $sum6 = $pr6quant*$pr6price;
        $sum7 = $pr7quant*$pr7price; $sum8 = $pr8quant*$pr8price; $sum9 = $pr9quant*$pr9price;
        $sum10 = $pr10quant*$pr10price;

        $username = $row->name;
   ?>
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

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }


th, td {
    padding: 1px;
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
      header('Location: index.php');
?>

<!-- სესია აქტიურია -->
<?php else: ?>


<div class="col-md-1" style="background-color:#red">
      </div>
<div class="col-md-10" style="background-color:#red">
 <div class="cover-container-fluid d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
   <!-- ნავიგაცია. ბურგერით  -->
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
            <a class="nav-link active" aria-current="page" href="goods.php#tab_01">საქონელი</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addgoods.php#tab_01">საქონლის დამატება</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="suppliers.php">მომწოდებლები</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="users.php">თანამშრომლები</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="orders.php">გაყიდული საქონელი</a>
          </li>
            <li class="divider"></li>
            <li class="nav-item">
            <a class="nav-link" href="php/exit.php">გასვლა</a>
          </li>
            <p class="name5">მომხმარებელი: ... </p> <p class="white text"><?php $row = $result->fetch_object(); echo $username ?></p>
        </ul>
      </div>
    </div>
  </nav>
  </header>

  <main class="px-3">
      <div class="container cv col-md-12">
    <div class="row centered">
      <div class="col-md-8" style="background-color:#red">
          <label class="white text">პროდუქტი საწყობში.</label>
          <div class="block flex-container3">
              <div class="block__element flex-element3">



        <!-- პროდუქტის სია ჩანართებით -->
        <div class="wrapper">
            <div class="content">
                <div class="tabs">
                    <nav class="tabs__items">
                        <a href="#tab_01" class="tabs__item"><span>ხილი</span></a>
                        <a href="#tab_02" class="tabs__item"><span>ბოსტნეული</span></a>
                        <a href="#tab_03" class="tabs__item"><span>ხორცი/თევზი</span></a>
                    </nav>
                    <!-- ჩანართები -->
                    <div class="tabs__body">
                       <!-- პირველი ჩანართი -->
                        <div id="tab_01" class="tabs__block">
<?php
      $conn = new mysqli('localhost', 'root', 'root', 'projectsdb');
     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM wareh_goods1 WHERE name LIKE '%$searchKey%'";
     }else
     $sql = "SELECT * FROM wareh_goods1 WHERE category LIKE 'ხილი'";
     $result = $conn->query($sql);
?>
                  <form action="" method="GET">
                      <div class="btn-group">
        <input type="text" name="search" class='form-control' placeholder="ძებნა" value=<?php echo @$_GET['search']; ?> >

      <input class="btn btn-primary" type="submit" value="ძებნა"/>
         <a class="btn btn-primary" href="goods.php?id=#tab_01">განახლება</a>
</div>
   </form>
    <table id="users" border="2">
                  <thead>
                      <tr>
                          <th>id</th>
                          <th>დასახელება</th>
                          <th>აღწერა</th>
                          <th>რაოდენობა</th>
                          <th>ფასი</th>
                          <th>ფდ</th>
                          <th></th>
                      </tr>
        </thead>
        <?php while( $row = $result->fetch_object() ): ?>
        <tr>
            <td><?php echo $row->id ?></td>
            <td><?php echo $row->name ?></td>
            <td><?php echo $row->description ?></td>
            <td><?php echo $row->quantity ?></td>
            <td><?php echo $row->price ?></td>
            <td><?php echo $row->sale ?> %</td>
            <td>

                <a class="btn btn-primary" href="php/goodsdetails.php?id=<?php echo $row->id ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
  <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
  <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
</svg></a>
<?php if($access == "თანამშრომელი" || $access =="ადმინისტრატორი"): ?>
<?php if($cart != 10): ?>
                <a class="btn btn-success" href="php/goodscart.php?id=<?php echo $row->id ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg></a>

<?php else: ?>
                <a class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg></a>
<?php endif; ?>
<?php endif; ?>

<?php if($access == "მენეჯერი" || $access =="ადმინისტრატორი"): ?>
                <a class="btn btn-warning" href="php/goodsupdate.php?id=<?php echo $row->id ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a>
<?php endif; ?>
            </td>
        </tr>
<?php endwhile; ?>
                  </table>

                        </div>

                        <!-- მეორე ჩანართი -->
                        <div id="tab_02" class="tabs__block">
<?php
      $conn = new mysqli('localhost', 'root', 'root', 'projectsdb');
     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM wareh_goods1 WHERE name LIKE '%$searchKey%'";
     }else
     $sql = "SELECT * FROM wareh_goods1 WHERE category LIKE 'ბოსტნეული'";
     $result = $conn->query($sql);
?>
                  <form action="" method="GET">
                      <div class="btn-group">
        <input type="text" name="search" class='form-control' placeholder="ძებნა" value=<?php echo @$_GET['search']; ?> >

      <input class="btn btn-primary" type="submit" value="ძებნა"/>
         <a class="btn btn-primary" href="goods.php?id=#tab_02">განახლება</a>
</div>
   </form>

    <table id="users" border="2">
                  <thead>
                      <tr>
                          <th>id</th>
                          <th>დასახელება</th>
                          <th>აღწერა</th>
                          <th>რაოდენობა</th>
                          <th>ფასი</th>
                          <th>ფდ</th>
                          <th></th>
                      </tr>
        </thead>
<?php while( $row = $result->fetch_object() ): ?>
        <tr>
            <td><?php echo $row->id ?></td>
            <td><?php echo $row->name ?></td>
            <td><?php echo $row->description ?></td>
            <td><?php echo $row->quantity ?></td>
            <td><?php echo $row->price ?></td>
            <td><?php echo $row->sale ?> %</td>
            <td>
                <a class="btn btn-primary" href="php/goodsdetails.php?id=<?php echo $row->id ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
  <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
  <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
</svg></a>
<?php if($access == "თანამშრომელი" || $access =="ადმინისტრატორი"): ?>
<?php if($cart != 10): ?>
                <a class="btn btn-success" href="php/goodscart.php?id=<?php echo $row->id ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg></a>

<?php else: ?>
                <a class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg></a>
<?php endif; ?>
<?php endif; ?>

<?php if($access == "მენეჯერი" || $access =="ადმინისტრატორი"): ?>
                <a class="btn btn-warning" href="php/goodsupdate.php?id=<?php echo $row->id ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a>
<?php endif; ?>
            </td>
        </tr>
<?php endwhile; ?>
                  </table>
                        </div>

                        <!-- პირველი ჩანართი -->
                        <div id="tab_03" class="tabs__block">
<?php
      $conn = new mysqli('localhost', 'root', 'root', 'projectsdb');
     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM wareh_goods1 WHERE name LIKE '%$searchKey%'";
     }else
     $sql = "SELECT * FROM wareh_goods1 WHERE category LIKE 'ხორცი/თევზი'";
     $result = $conn->query($sql);
?>

                  <form action="" method="GET">
                      <div class="btn-group">
        <input type="text" name="search" class='form-control' placeholder="ძებნა" value=<?php echo @$_GET['search']; ?> >

      <input class="btn btn-primary" type="submit" value="ძებნა"/>
         <a class="btn btn-primary" href="goods.php?id=#tab_03">განახლება</a>
</div>

   </form>


    <table id="users" border="2">
                  <thead>
                      <tr>
                          <th>id</th>
                          <th>დასახელება</th>
                          <th>აღწერა</th>
                          <th>რაოდენობა</th>
                          <th>ფასი</th>
                          <th>ფდ</th>
                          <th></th>


                      </tr>
        </thead>
<?php while( $row = $result->fetch_object() ): ?>
        <tr>
            <td><?php echo $row->id ?></td>
            <td><?php echo $row->name ?></td>
            <td><?php echo $row->description ?></td>
            <td><?php echo $row->quantity ?></td>
            <td><?php echo $row->price ?></td>
            <td><?php echo $row->sale ?> %</td>
            <td>
                <a class="btn btn-primary" href="php/goodsdetails.php?id=<?php echo $row->id ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
  <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
  <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
</svg></a>
<?php if($access == "თანამშრომელი" || $access =="ადმინისტრატორი"): ?>
<?php if($cart != 10): ?>
                <a class="btn btn-success" href="php/goodscart.php?id=<?php echo $row->id ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg></a>

<?php else: ?>

                <a class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg></a>
<?php endif; ?>
<?php endif; ?>

<?php if($access == "მენეჯერი" || $access =="ადმინისტრატორი"): ?>
                <a class="btn btn-warning" href="php/goodsupdate.php?id=<?php echo $row->id ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a>
<?php endif; ?>
            </td>
        </tr>
<?php endwhile; ?>
                  </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


      </div>
          </div>
          </div>


        <div class="col-md-4" style="background-color:#red">
          <div class="block flex-container3">
              <div class="block__element flex-element33">
              <!-- კალათა  -->
<?php if($access == "თანამშრომელი" || $access =="ადმინისტრატორი"): ?>

<h2 class="white text" > კალათა <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#009dff" class="bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg> <?php echo $cart; ?>  /10</h2>
                  <br>
<form action="" method="post" >
                    <table>
                    <thead>
        <tr>
        <th>პროდუქტი</th>
        <th>ოდენობა</th>
        <th>ფასი(ლ)</th>
        <th>სულ.ფ</th>
            </tr>
    </thead>

<!-- პირველი პროდუქტი კალათაში  -->
<?php if($pr1name != ""): ?>
                        <tr>
                            <td><?php  echo $pr1name; ?></td>
<?php if($pr1quant == 0): ?>
                            <td><form action="" method="post" >
                                <input type="text" name="input1" id="input1" class="quantinput" required>
                                <button class="btninput" name="inputbtn1" id="inputbtn1" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg></button> </form> </td>
<?php else: ?>
                            <td><?php  echo $pr1quant; ?></td>
<?php endif; ?>
                            <td><?php  echo $pr1price; ?></td>
                            <td><?php echo $sum1;?></td>
                            <td>
                              <a class="btn btn-warning" href="php/cartdell/cart1dell.php" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                                  </svg></a></td>

                        </tr>
<?php endif; ?>

<!-- მეორე პროდუქტი კალათაში  -->
<?php if($pr2name != ""): ?>
                        <tr>
                            <td><?php  echo $pr2name; ?></td>
<?php if($pr2quant == 0): ?>
                            <td><form action="" method="post" >
                                <input type="text" name="input2" id="input2" class="quantinput" required>
                                <button class="btninput" name="inputbtn2" id="inputbtn2" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg></button> </form> </td>
<?php else: ?>
                            <td><?php  echo $pr2quant; ?></td>
<?php endif; ?>
                            <td><?php  echo $pr2price; ?></td>
                            <td><?php echo $sum2;?></td>
                            <td>
                                <a class="btn btn-warning" href="php/cartdell/cart2dell.php" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                                    </svg></a></td>
                        </tr>
<?php endif; ?>

<!-- მესამე პროდუქტი კალათაში  -->
<?php if($pr3name != ""): ?>
                        <tr>
                            <td><?php  echo $pr3name; ?></td>
<?php if($pr3quant == 0): ?>
                            <td><form action="" method="post" >
                                <input type="text" name="input3" id="input3" class="quantinput" required>
                                <button class="btninput" name="inputbtn3" id="inputbtn3" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg></button> </form> </td>
<?php else: ?>
                            <td><?php  echo $pr3quant; ?></td>
<?php endif; ?>
                            <td><?php  echo $pr3price; ?></td>
                            <td><?php echo $sum3;?></td>
                            <td>
                                <a class = "btn btn-warning" href="php/cartdell/cart3dell.php" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                                    </svg></a></td>
                        </tr>
<?php endif; ?>

<!-- მეოთხე პროდუქტი კალათაში  -->
<?php if($pr4name != ""): ?>
                        <tr>
                            <td><?php  echo $pr4name; ?></td>
<?php if($pr4quant == 0): ?>
                            <td><form action="" method="post" >
                                <input type="text" name="input4" id="input4" class="quantinput" required>
                                <button class="btninput" name="inputbtn4" id="inputbtn4" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg></button> </form> </td>
<?php else: ?>
                            <td><?php  echo $pr4quant; ?></td>
<?php endif; ?>
                            <td><?php  echo $pr4price; ?></td>
                            <td><?php echo $sum4;?></td>
                            <td><a class = "btn btn-warning" href="php/cartdell/cart4dell.php" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></a></td>
                        </tr>
<?php endif; ?>

<!-- მეხუთე პროდუქტი კალათაში  -->
<?php if($pr5name != ""): ?>
                        <tr>

                            <td><?php  echo $pr5name; ?></td>
<?php if($pr5quant == 0): ?>
                            <td><form action="" method="post" >
                                <input type="text" name="input5" id="input5" class="quantinput" required>
                                <button class="btninput" name="inputbtn5" id="inputbtn5" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg></button> </form> </td>
<?php else: ?>
                            <td><?php  echo $pr5quant; ?></td>
<?php endif; ?>
                            <td><?php  echo $pr5price; ?></td>
                            <td><?php echo $sum5;?></td>
                            <td><a class = "btn btn-warning" href="php/cartdell/cart5dell.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></a></td>
                        </tr>
<?php endif; ?>

<!-- მეექვსე პროდუქტი კალათაში  -->
<?php if($pr6name != ""): ?>
                        <tr>
                            <td><?php  echo $pr6name; ?></td>
<?php if($pr6quant == 0): ?>
                            <td><form action="" method="post" >
                                <input type="text" name="input6" id="input6" class="quantinput" required>
                                <button class="btninput" name="inputbtn6" id="inputbtn6" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg></button> </form> </td>
<?php else: ?>
                            <td><?php  echo $pr6quant; ?></td>
<?php endif; ?>
                            <td><?php  echo $pr6price; ?></td>
                            <td><?php echo $sum6;?></td>
                            <td><a class = "btn btn-warning" href="php/cartdell/cart6dell.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></a></td>
                        </tr>
<?php endif; ?>

<!-- მეშვიდე პროდუქტი კალათაში  -->
<?php if($pr7name != ""): ?>
                        <tr>
                            <td><?php  echo $pr7name; ?></td>
<?php if($pr7quant == 0): ?>
                            <td><form action="" method="post" >
                                <input type="text" name="input7" id="input7" class="quantinput" required>
                                <button class="btninput" name="inputbtn7" id="inputbtn7" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg></button> </form> </td>
<?php else: ?>
                            <td><?php  echo $pr7quant; ?></td>
<?php endif; ?>
                            <td><?php  echo $pr7price; ?></td>
                            <td><?php echo $sum7;?></td>
                            <td><a class = "btn btn-warning" href="php/cartdell/cart7dell.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></a></td>
                        </tr>
<?php endif; ?>

<!-- მერვე პროდუქტი კალათაში  -->
<?php if($pr8name != ""): ?>
                        <tr>
                            <td><?php  echo $pr8name; ?></td>
<?php if($pr8quant == 0): ?>
                            <td><form action="" method="post" >
                                <input type="text" name="input8" id="input8" class="quantinput" required>
                                <button class="btninput" name="inputbtn8" id="inputbtn8" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg></button> </form> </td>
<?php else: ?>
                            <td><?php  echo $pr8quant; ?></td>
<?php endif; ?>
                            <td><?php  echo $pr8price; ?></td>
                            <td><?php echo $sum8;?></td>
                            <td><a class = "btn btn-warning" href="php/cartdell/cart8dell.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></a></td>
                        </tr>
<?php endif; ?>

<!-- მეცხრე პროდუქტი კალათაში  -->
<?php if($pr9name != ""): ?>
                        <tr>
                            <td><?php  echo $pr9name; ?></td>
<?php if($pr9quant == 0): ?>
                            <td><form action="" method="post" >
                                <input type="text" name="input9" id="input9" class="quantinput" required>
                                <button class="btninput" name="inputbtn9" id="inputbtn9" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg></button> </form> </td>
<?php else: ?>
                            <td><?php  echo $pr9quant; ?></td>
<?php endif; ?>
                            <td><?php  echo $pr9price; ?></td>
                            <td><?php echo $sum9;?></td>
                            <td><a class = "btn btn-warning" href="php/cartdell/cart9dell.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></a></td>
                        </tr>
<?php endif; ?>

<!-- მეათე პროდუქტი კალათაში  -->
<?php if($pr10name != ""): ?>
                        <tr>
                            <td><?php  echo $pr10name; ?></td>
<?php if($pr10quant == 0): ?>
                            <td><form action="" method="post" >
                                <input type="text" name="input10" id="input10" class="quantinput" required>
                                <button class="btninput" name="inputbtn10" id="inputbtn10" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg></button> </form> </td>
<?php else: ?>
                            <td><?php  echo $pr10quant; ?></td>
<?php endif; ?>
                            <td><?php  echo $pr10price; ?></td>
                            <td><?php echo $sum10;?></td>
                            <td><a class = "btn btn-warning" href="php/cartdell/cart10dell.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></a></td>
                        </tr>
<?php endif; ?>
<?php endif; ?>
                            </table>
<br>
<?php
$sum = $sum1+$sum2+$sum3+$sum4+$sum5+$sum6+$sum7+$sum8+$sum9+$sum10;
?>
    <br>
<label class="white text" > სულ გადასახდელია თანხა: <?php echo $sum; ?> ლ.</label>
                  <br><br>
                  <button class="btn btn-success" name="sell" id="sell" type="submit">გაყიდვა</button>
                        </form>
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

      <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

<?php

$connect = mysqli_connect('localhost', 'root', 'root', 'projectsdb');
if (!$connect)
{
    die ('ბაზასთან კავშირის შეცდომა');
}
$userkookie = $_COOKIE['wareh_userr'];

$cart = mysqli_query($connect, "SELECT * FROM wareh_users WHERE user = '$userkookie'");
$cart = mysqli_fetch_assoc($cart);
$wpr1quant = $cart['wpr1quant'];
$wpr2quant = $cart['wpr2quant'];
$wpr3quant = $cart['wpr3quant'];
$wpr4quant = $cart['wpr4quant'];
$wpr5quant = $cart['wpr5quant'];
$wpr6quant = $cart['wpr6quant'];
$wpr7quant = $cart['wpr7quant'];
$wpr8quant = $cart['wpr8quant'];
$wpr9quant = $cart['wpr9quant'];
$wpr10quant = $cart['wpr10quant'];



if(isset($_POST['inputbtn1'])){
    $input1 = $_POST['input1'];
    if($wpr1quant >= $input1){
    $query = "UPDATE `wareh_users` SET `pr1quant`='".$input1."' WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
    if($query_run){
    ob_end_clean();
    header('Location: goods.php');
    exit();}
    else{echo "შეცდომა";}
}
else{
    ob_end_clean();
    header('Location: php/errors/quanterror.php');
    exit();}
}


if(isset($_POST['inputbtn2'])){
    $input2 = $_POST['input2'];
     if($wpr2quant >= $input2){
    $query = "UPDATE `wareh_users` SET `pr2quant`='".$input2."' WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
    if($query_run){
    ob_end_clean();
    header('Location: goods.php');
    exit();}
    else{echo "შეცდომა";}
         }
else{
    ob_end_clean();
    header('Location: php/errors/quanterror.php');
    exit();}
}


if(isset($_POST['inputbtn3'])){
    $input3 = $_POST['input3'];
     if($wpr3quant >= $input3){
    $query = "UPDATE `wareh_users` SET `pr3quant`='".$input3."' WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
    if($query_run){
    ob_end_clean();
    header('Location: goods.php');
    exit();}
    else{echo "შეცდომა";}
         }
else{
    ob_end_clean();
    header('Location: php/errors/quanterror.php');
    exit();}
}

if(isset($_POST['inputbtn4'])){
    $input4 = $_POST['input4'];
     if($wpr4quant >= $input4){
    $query = "UPDATE `wareh_users` SET `pr4quant`='".$input4."' WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
    if($query_run){
    ob_end_clean();
    header('Location: goods.php');
    exit();}
    else{echo "შეცდომა";}
         }
else{
    ob_end_clean();
    header('Location: php/errors/quanterror.php');
    exit();}
}

if(isset($_POST['inputbtn5'])){
    $input5 = $_POST['input5'];
     if($wpr5quant >= $input5){
    $query = "UPDATE `wareh_users` SET `pr5quant`='".$input5."' WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
    if($query_run){
    ob_end_clean();
    header('Location: goods.php');
    exit();}
    else{echo "შეცდომა";}
         }
else{
    ob_end_clean();
    header('Location: php/errors/quanterror.php');
    exit();}
}

if(isset($_POST['inputbtn6'])){
    $input6 = $_POST['input6'];
    if($wpr6quant >= $input6){
    $query = "UPDATE `wareh_users` SET `pr6quant`='".$input6."' WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
    if($query_run){
    ob_end_clean();
    header('Location: goods.php');
    exit();}
    else{echo "შეცდომა";}
         }
else{
    ob_end_clean();
    header('Location: php/errors/quanterror.php');
    exit();}
}

if(isset($_POST['inputbtn7'])){
    $input7 = $_POST['input7'];
     if($wpr7quant >= $input7){
    $query = "UPDATE `wareh_users` SET `pr7quant`='".$input7."' WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
    if($query_run){
    ob_end_clean();
    header('Location: goods.php');
    exit();}
    else{echo "შეცდომა";}
         }
else{
    ob_end_clean();
    header('Location: php/errors/quanterror.php');
    exit();}
}

if(isset($_POST['inputbtn8'])){
    $input8 = $_POST['input8'];
    if($wpr8quant >= $input8){
    $query = "UPDATE `wareh_users` SET `pr8quant`='".$input8."' WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
    if($query_run){
    ob_end_clean();
    header('Location: goods.php');
    exit();}
    else{echo "შეცდომა";}
        }
else{
    ob_end_clean();
    header('Location: php/errors/quanterror.php');
    exit();}
}

if(isset($_POST['inputbtn9'])){
    $input9 = $_POST['input9'];
    if($wpr9quant >= $input9){
    $query = "UPDATE `wareh_users` SET `pr9quant`='".$input9."' WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
    if($query_run){
    ob_end_clean();
    header('Location: goods.php');
    exit();}
    else{echo "შეცდომა";}
         }
else{
    ob_end_clean();
    header('Location: php/errors/quanterror.php');
    exit();}
}

if(isset($_POST['inputbtn10'])){
    $input10 = $_POST['input10'];
     if($wpr10quant >= $input10){
    $query = "UPDATE `wareh_users` SET `pr10quant`='".$input10."' WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
    if($query_run){
    ob_end_clean();
    header('Location: goods.php');
    exit();}
    else{echo "შეცდომა";}
         }
else{
    ob_end_clean();
    header('Location: php/errors/quanterror.php');
    exit();}
}

if(isset($_POST['sell'])){

    $query1 = "SELECT * FROM wareh_goods1 WHERE name LIKE '$pr1name'";
    $result1 = $conn->query($query1);
    $row1 = $result1->fetch_object();
     $quant1 = $row1->quantity;
    $quanty1 = $quant1 - $pr1quant;
     $sql1 = "UPDATE `wareh_goods1` SET `quantity`='".$quanty1."' WHERE `name` = '".$pr1name."'";
    $query_run = mysqli_query($conn, $sql1) or die(mysqli_error());


    $query2 = "SELECT * FROM wareh_goods1 WHERE name LIKE '$pr2name'";
    $result2 = $conn->query($query2);
    $row2 = $result2->fetch_object();
     $quant2 = $row2->quantity;
    $quanty2 = $quant2 - $pr2quant;
     $sql2 = "UPDATE `wareh_goods1` SET `quantity`='".$quanty2."' WHERE `name` = '".$pr2name."'";
    $query_run = mysqli_query($conn, $sql2) or die(mysqli_error());


    $query3 = "SELECT * FROM wareh_goods1 WHERE name LIKE '$pr3name'";
    $result3 = $conn->query($query3);
    $row3 = $result3->fetch_object();
     $quant3 = $row3->quantity;
    $quanty3 = $quant3 - $pr3quant;
     $sql3 = "UPDATE `wareh_goods1` SET `quantity`='".$quanty3."' WHERE `name` = '".$pr3name."'";
    $query_run = mysqli_query($conn, $sql3) or die(mysqli_error());



    $query4 = "SELECT * FROM wareh_goods1 WHERE name LIKE '$pr4name'";
    $result4 = $conn->query($query4);
    $row4 = $result4->fetch_object();
     $quant4 = $row4->quantity;
    $quanty4 = $quant4 - $pr4quant;
     $sql4 = "UPDATE `wareh_goods1` SET `quantity`='".$quanty4."' WHERE `name` = '".$pr4name."'";
    $query_run = mysqli_query($conn, $sql4) or die(mysqli_error());


    $query5 = "SELECT * FROM wareh_goods1 WHERE name LIKE '$pr5name'";
    $result5 = $conn->query($query5);
    $row5 = $result5->fetch_object();
     $quant5 = $row5->quantity;
    $quanty5 = $quant5 - $pr5quant;
     $sql5 = "UPDATE `wareh_goods1` SET `quantity`='".$quanty5."' WHERE `name` = '".$pr5name."'";
    $query_run = mysqli_query($conn, $sql5) or die(mysqli_error());


    $query6 = "SELECT * FROM wareh_goods1 WHERE name LIKE '$pr6name'";
    $result6 = $conn->query($query6);
    $row6 = $result6->fetch_object();
     $quant6 = $row6->quantity;
    $quanty6 = $quant6 - $pr6quant;
     $sql6 = "UPDATE `wareh_goods1` SET `quantity`='".$quanty6."' WHERE `name` = '".$pr6name."'";
    $query_run = mysqli_query($conn, $sql6) or die(mysqli_error());


    $query7 = "SELECT * FROM wareh_goods1 WHERE name LIKE '$pr7name'";
    $result7 = $conn->query($query7);
    $row7 = $result7->fetch_object();
     $quant7 = $row7->quantity;
    $quanty7 = $quant7 - $pr7quant;
     $sql7 = "UPDATE `wareh_goods1` SET `quantity`='".$quanty7."' WHERE `name` = '".$pr7name."'";
    $query_run = mysqli_query($conn, $sql7) or die(mysqli_error());


    $query8 = "SELECT * FROM wareh_goods1 WHERE name LIKE '$pr8name'";
    $result8 = $conn->query($query8);
    $row8 = $result8->fetch_object();
     $quant8 = $row8->quantity;
    $quanty8 = $quant8 - $pr8quant;
     $sql8 = "UPDATE `wareh_goods1` SET `quantity`='".$quanty8."' WHERE `name` = '".$pr8name."'";
    $query_run = mysqli_query($conn, $sql8) or die(mysqli_error());


    $query9 = "SELECT * FROM wareh_goods1 WHERE name LIKE '$pr9name'";
    $result9 = $conn->query($query9);
    $row9 = $result9->fetch_object();
     $quant9 = $row9->quantity;
    $quanty9 = $quant9 - $pr9quant;
     $sql9 = "UPDATE `wareh_goods1` SET `quantity`='".$quanty9."' WHERE `name` = '".$pr9name."'";
    $query_run = mysqli_query($conn, $sql9) or die(mysqli_error());


    $query10 = "SELECT * FROM wareh_goods1 WHERE name LIKE '$pr10name'";
    $result10 = $conn->query($query10);
    $row10 = $result10->fetch_object();
     $quant10 = $row10->quantity;
    $quanty10 = $quant10 - $pr10quant;
     $sql10 = "UPDATE `wareh_goods1` SET `quantity`='".$quanty10."' WHERE `name` = '".$pr10name."'";
    $query_run = mysqli_query($conn, $sql10) or die(mysqli_error());


//================================================================================


    date_default_timezone_set('Asia/Tbilisi');
    $dro = date ("d-m-y H:i:s");
    $product = $pr1name." | ".$pr1quant."კგ | ".$pr1price."ლ. | "."<br />"
        .$pr2name." | ".$pr2quant."კგ | ".$pr2price."ლ. | "."<br />"
        .$pr3name." | ".$pr3quant."კგ | ".$pr3price."ლ. | "."<br />"
        .$pr4name." | ".$pr4quant."კგ | ".$pr4price."ლ. | "."<br />"
        .$pr5name." | ".$pr5quant."კგ | ".$pr5price."ლ. | "."<br />"
        .$pr6name." | ".$pr6quant."კგ | ".$pr6price."ლ. | "."<br />"
        .$pr7name." | ".$pr7quant."კგ | ".$pr7price."ლ. | "."<br />"
        .$pr8name." | ".$pr8quant."კგ | ".$pr8price."ლ. | "."<br />"
        .$pr9name." | ".$pr9quant."კგ | ".$pr9price."ლ. | "."<br />"
        .$pr10name." | ".$pr10quant."კგ | ".$pr10price."ლ. | ";
    $allprice = $sum;
    $seller = $username;
$mysql = new mysqli('localhost', 'root', 'root', 'projectsdb');
$mysql->query("INSERT INTO `wareh_orders`
(`dro`,
`product`,
`allprice`,
`seller`)
VALUES
('$dro',
'$product',
'$allprice',
'$seller')");


    $pr1name = ""; $pr1price = 0; $pr1quant = 0;
    $pr2name = ""; $pr2price = 0; $pr2quant = 0;
    $pr3name = ""; $pr3price = 0; $pr3quant = 0;
    $pr4name = ""; $pr4price = 0; $pr4quant = 0;
    $pr5name = ""; $pr5price = 0; $pr5quant = 0;
    $pr6name = ""; $pr6price = 0; $pr6quant = 0;
    $pr7name = ""; $pr7price = 0; $pr7quant = 0;
    $pr8name = ""; $pr8price = 0; $pr8quant = 0;
    $pr9name = ""; $pr9price = 0; $pr9quant = 0;
    $pr10name = ""; $pr10price = 0; $pr10quant = 0;

    $userkookie = $_COOKIE['wareh_userr'];


$query11 = "UPDATE `wareh_users` SET
    `pr1name`='".$pr1name."',
    `pr1price`='".$pr1price."',
    `pr1quant`='".$pr1quant."',
    `pr2name`='".$pr2name."',
    `pr2price`='".$pr2price."',
    `pr2quant`='".$pr2quant."',
    `pr3name`='".$pr3name."',
    `pr3price`='".$pr3price."',
    `pr3quant`='".$pr3quant."',
    `pr4name`='".$pr4name."',
    `pr4price`='".$pr4price."',
    `pr4quant`='".$pr4quant."',
    `pr5name`='".$pr5name."',
    `pr5price`='".$pr5price."',
    `pr5quant`='".$pr5quant."',
    `pr6name`='".$pr6name."',
    `pr6price`='".$pr6price."',
    `pr6quant`='".$pr6quant."',
    `pr7name`='".$pr7name."',
    `pr7price`='".$pr7price."',
    `pr7quant`='".$pr7quant."',
    `pr8name`='".$pr8name."',
    `pr8price`='".$pr8price."',
    `pr8quant`='".$pr8quant."',
    `pr9name`='".$pr9name."',
    `pr9price`='".$pr9price."',
    `pr9quant`='".$pr9quant."',
    `pr10name`='".$pr10name."',
    `pr10price`='".$pr10price."',
    `pr10quant`='".$pr10quant."'
    WHERE `user` = '".$userkookie."'";
    $query_run = mysqli_query($conn, $query11) or die(mysqli_error());

header('Location: goods.php');
    }
?>
