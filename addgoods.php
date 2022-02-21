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
      ob_end_clean();
      header('location: index.php');
      exit();
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
            <a class="nav-link" aria-current="page" href="goods.php#tab_01">საქონელი</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="addgoods.php#tab_01">საქონლის დამატება</a>
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
            <p class="name5">მომხმარებელი: ... </p> <p class="white text"><?php $row = $result->fetch_object(); echo $row->name ?></p>
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
         <a class="btn btn-primary" href="addgoods.php?id=#tab_01">განახლება</a>
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
         <a class="btn btn-primary" href="addgoods.php?id=#tab_02">განახლება</a>
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
                <a class="btn btn-primary" href="php/goodsdetails.php?id=<?php echo $row->id ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
  <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
  <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
</svg></a>


<?php if($access == "მენეჯერი" || $access =="ადმინისტრატორი"): ?>
                <a class="btn btn-warning" href="php/goodsupdate.php?id=<?php echo $row->id ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a>
<?php endif; ?>
            </td>
        </tr>
<?php endwhile; ?>
                  </table>
                        </div>

                        <!-- მესამე ჩანართი -->
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
         <a class="btn btn-primary" href="addgoods.php?id=#tab_03">განახლება</a>
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
                <a class="btn btn-primary" href="php/goodsdetails.php?id=<?php echo $row->id ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-zoom-in" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
  <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
  <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
</svg></a>


<?php if($access == "მენეჯერი" || $access =="ადმინისტრატორი"): ?>
                <a class="btn btn-warning" href="php/goodsupdate.php?id=<?php echo $row->id ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
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
<h3 class="white text" >ახალი პროდუქტის დამატება</h3>
                  <br>
                  <form action="php/goodschek.php" method="post" enctype="multipart/form-data">
            <select class="form-control" name="category" id="category" required>
        <option value="">კატეგორია *</option>
        <option value="ხილი">ხილი</option>
        <option value="ბოსტნეული">ბოსტნეული</option>
        <option value="ხორცი/თევზი">ხორცი/თევზი</option>
            </select>

            <input type="text" class="form-control" name="name"
                   id="name" placeholder="დასახელება *" required value="">

            <input type="text" class="form-control" name="quantity"
                   id="quantity" placeholder="რაოდენობა *" required value="">

            <input type="text" class="form-control" name="price"
                   id="price" placeholder="ფასი *" required>

            <textarea class="form-control" name="description" placeholder="აღწერა" id="description"></textarea>

            <input type="text" class="form-control" name="supplier"
                   id="supplier" placeholder="მომწოდებელი *" required>

            <textarea class="form-control" name="comment" placeholder="კომენტარი" id="comment"></textarea>

            <input type="text" class="form-control" name="sale"
                   id="sale" placeholder="ფასდაკლება">


        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#009dff" class="bi bi-camera-fill" viewBox="0 0 16 16">
  <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
</svg>
        <label class="white text">ფოტო:</label>
        <input type="file" name="goodsimg" class="form-control" id="goodsimg">
        <br>

        <br>
<?php if($access == "მენეჯერი" || $access =="ადმინისტრატორი"): ?>
            <button class="btn btn-success" type="submit">დამატება</button>
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

      <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
