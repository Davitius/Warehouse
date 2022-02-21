<?php
error_reporting(E_ERROR);
require_once 'connect.php';
ob_start();
$name_id = $_GET['id'];
$user = mysqli_query($connect, "SELECT * FROM wareh_goods1 WHERE id = '$name_id'");
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
            <a class="nav-link active" href="../addgoods.php#tab_01">საქონლის დამატება</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="../suppliers.php">მომწოდებლები</a>
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
            <p class="name5">მომხმარებელი: ...</p> <p class="white text"><?php $row = $result->fetch_object(); echo $row->name ?></p>
        </ul>
      </div>
    </div>
  </nav>
  </header>

  <main class="px-3">
      <div class="container cv col-md-12">
          <br>
    <div class="row centered">
        <h3 class="white text" >პროდუქტის მონაცემები</h3>


        <!-- //საქონლის ფოტო.  -->
<div class="col-md-6" >
    <div class="block flex-container3">
    <div class="block__element flex-element3">

<?php
$showimg=$user['goodsimg'];
if(!$showimg == ""): ?>
<?php   $show_img = base64_encode($showimg); ?>
        <img class="userphoto" src="data:image/jpeg;base64, <?php echo $show_img ?>" alt="ფოტო">
<?php else: ?>
        <img class="userphoto" src="../img/nophoto1.png">
<?php endif; ?>
    </div>
        </div>
        </div>


        <!-- //პროდუქტის მონაცემები.  -->
<div class="col-md-6">
          <div class="block flex-container2">
              <div class="block__element flex-element2">
          <form action="" method="post" enctype="multipart/form-data">
              <label class="white text">კატეგორია:</label>
              <select class="form-control" name="category" id="category" required>
        <option value="<?= $user['category']?>">კატეგორია -> <?= $user['category']?></option>
        <option value="ხილი">ხილი</option>
        <option value="ბოსტნეული">ბოსტნეული</option>
        <option value="ხორცი/თევზი">ხორცი/თევზი</option>
            </select>

              <label class="white text">დასახელება:</label>
            <input type="text" class="form-control" name="name"
                   id="name" placeholder="" required value="<?= $user['name'] ?>">


              <label class="white text">რაოდენობა:</label>
            <input type="text" class="form-control" name="quantity"
                   id="quantity" placeholder="" required value="<?= $user['quantity'] ?>">


              <label class="white text">ფასი:</label>
            <input type="text" class="form-control" name="price"
                   id="price" placeholder="" value="<?= $user['price'] ?>">


            <label class="white text">აღწერა:</label>
            <textarea class="form-control" name="description" id="description"><?= $user['description']?></textarea>


              <label class="white text">კომენტარი:</label>
              <textarea class="form-control" name="comment" id="comment"><?= $user['comment']?></textarea>



             <label class="white text">ფასდაკლება:</label>
            <input type="text" class="form-control" name="sale"
                   id="sale" placeholder="" value="<?= $user['sale']?>">



             <label class="white text">მომწოდებელი:</label>
            <input type="text" class="form-control" name="supplier"
                   id="supplier" placeholder="" required value="<?= $user['supplier']?>">

              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#009dff" class="bi bi-camera-fill" viewBox="0 0 16 16">
  <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
</svg>
              <label class="white text">ფოტო:</label>
              <br>
              <input class="form-control" type="file" name="goodsimg" id="goodsimg">
              <br>
<?php if($access == "მენეჯერი" || $access == "ადმინისტრატორი"): ?>
              <label class="white text">ვეთანხმები: </label>
              <input type="checkbox" name="" required>
              <br><br>
                <div class="btn-group">
                    <button class="btn btn-warning" name="goodsupdate"type="submit">შეცვლა</button>
                  <input type="submit" class="btn btn-danger" name="goodsdelete" value="წაშლა">
                    <a class="btn btn-success" href="../addgoods.php#tab_01">დაბრუნება</a>
                      <a class="btn btn-primary" href="">Reset</a>
                </div>
<?php endif; ?>
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

      <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

<?php

if (!$connect)
{
    die ('ბაზასთან კავშირის შეცდომა');
}

/* პროდუქტის მონაცემის განახლება */
if(isset($_POST['goodsupdate']))
{

$id = $_GET['id'];
$category = $_POST['category'];
$name = $_POST['name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$description = $_POST['description'];
$comment = $_POST['comment'];
$sale = $_POST['sale'];
$supplier = $_POST['supplier'];



    if(!empty($_FILES['goodsimg']['tmp_name'])){
$goodsimg = addslashes(file_get_contents($_FILES['goodsimg']['tmp_name']));


    $query = "UPDATE `wareh_goods1` SET
    `category`='".$category."',
    `name`='".$name."',
    `quantity`='".$quantity."',
    `price`='".$price."',
    `description`='".$description."',
    `comment`='".$comment."',
    `sale`='".$sale."',
    `supplier`='".$supplier."',
    `goodsimg`='".$goodsimg."'
    WHERE `id` = $id";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
    }

else{
    $query = "UPDATE `wareh_goods1` SET
    `category`='".$category."',
    `name`='".$name."',
    `quantity`='".$quantity."',
    `price`='".$price."',
    `description`='".$description."',
    `comment`='".$comment."',
    `sale`='".$sale."',
    `supplier`='".$supplier."'
    WHERE `id` = $id";
    $query_run = mysqli_query($connect, $query) or die(mysqli_error());
}

     if($query_run)
    {
        ob_end_clean();
        header('Location: ../php/errors/goodsupdateconfirm.php');
        exit();
    }
    else
    {
        echo "მონაცემები არ განახლდა";
    }
}

/* პროდუქტის წაშლა */
if(isset($_POST['goodsdelete'])){
        $id = $_GET['id'];
        $querry = "DELETE FROM `wareh_goods1` WHERE `id` = $id";
            $querry_run = mysqli_query($connect, $querry) or die(mysqli_error());
    }
    if($querry_run)
    {
        header('Location: ../php/errors/goodsdeleteconfirm.php');
    }
?>
