<?php
error_reporting(E_ERROR);
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



    <link href="css/cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
     <!-- სესიის შემოწმება. სესია არაა აქტიური -->
<?php
        if(!isset($_COOKIE['wareh_userr']) || $_COOKIE['wareh_userr'] == ''):
      header('location: index.php');
?>

<!-- სესია აქტიურია. -->
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
            <a class="nav-link" aria-current="page" href="goods.php#tab_01">საქონელი</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addgoods.php#tab_01">საქონლის დამატება</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="suppliers.php">მომწოდებლები</a>
          </li>
            <li class="nav-item">
            <a class="nav-link active" href="users.php">თანამშრომლები</a>
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
<h3 class="white text" >თანამშრომლები</h3>

<!-- //axali tanamshromelis damateba (pirveli sveti) -->
        <div class="col-md-5" style="background-color:#red">
          <div class="block flex-container2">
              <div class="block__element flex-element2">
<label class="white text">ახალი თანამშრომლის დამატება</label>
    <form action="php/userchek.php" method="post" enctype="multipart/form-data">
        <br>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#009dff" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
        <label class="white text">სახელი გვარი:</label>
        <input type="text" class="form-control" name="name"
                   id="name" placeholder="" required value="">

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#009dff" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg>
        <label class="white text">E-mail:</label>
        <input type="email" class="form-control" name="user"
                   id="user" placeholder="" required value="">

        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#009dff" class="bi bi-key-fill" viewBox="0 0 16 16">
  <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>
        <label class="white text">პაროლი:</label>
        <input type="password" class="form-control" name="pass"
                   id="pass" placeholder="" required>

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#009dff" class="bi bi-award-fill" viewBox="0 0 16 16">
  <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
</svg>
        <label class="white text">პოზიცია:</label>
        <input type="text" class="form-control" name="position"
                   id="position" placeholder="" required>

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#009dff" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>
        <label class="white text">მობ.ნომერი:</label>
        <input type="text" class="form-control" name="phone"
                   id="phone" placeholder="">

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#009dff" class="bi bi-shield-fill-exclamation" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm-.55 8.502L7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0zM8.002 12a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
</svg>
        <label class="white text">წვდომა:</label>
        <select class="form-control" name="status" id="status" required>
        <option value=""></option>
        <option value="უფროსი">უფროსი</option>
        <option value="მენეჯერი">მენეჯერი</option>
        <option value="თანამშრომელი">თანამშრომელი</option>
        </select>

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#009dff" class="bi bi-camera-fill" viewBox="0 0 16 16">
  <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
</svg>
        <label class="white text">ფოტო:</label>
        <input type="file" name="userimg" class="form-control" id="userimg">
        <br><br>
<?php if($access == "უფროსი" || $access =="ადმინისტრატორი"): ?>
            <button class="btn btn-success" type="submit">დამატება</button>
<?php endif; ?>
            </form>
      </div>
          </div>
          </div>

<!-- //მომხმარებლების სია (meore sveti) -->

      <div class="col-md-7" style="background-color:#red">
          <div class="block flex-container3">
              <div class="block__element flex-element3">
<label class="white text">თანამშრომლების სია</label><br>
                  <br>
<?php
      $conn = new mysqli('localhost', 'root', 'root', 'projectsdb');
     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM wareh_users WHERE name LIKE '%$searchKey%'";
     }else
     $sql = "SELECT * FROM wareh_users";
     $result = $conn->query($sql);

?>
<!-- თანამშრომლის ძებნა  -->
                  <form action="" method="GET">
                      <div class="btn-group">
        <input type="text" name="search" class='form-control' placeholder="ძებნა" value=<?php echo @$_GET['search']; ?> >
      <input class="btn btn-primary" type="submit" value="ძებნა"/>
         <a class="btn btn-primary" href="users.php">განახლება</a>
</div>
   </form>

    <table id="users" border="2">
                  <thead>
                      <tr>
                          <th>id</th>
                          <th>სახელი</th>
                          <th>პოზიცია</th>
                          <th>ტელ.ნომერი</th>
                          <th></th>
                      </tr>
        </thead>
        <?php while( $row = $result->fetch_object() ): ?>
        <tr>
            <td><?php echo $row->id ?></td>
            <td><?php echo $row->name ?></td>
            <td><?php echo $row->position ?></td>
            <td><?php echo $row->phone ?></td>
            <td>
                <?php if($access == "უფროსი" || $access =="ადმინისტრატორი"): ?>
                <a class="btn btn-warning" href="php/userupdate.php?id=<?php echo $row->id ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a> <?php endif; ?>
            </td>
        </tr>
<?php endwhile; ?>
                  </table>
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

