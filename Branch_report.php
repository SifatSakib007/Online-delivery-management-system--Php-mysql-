<?php
require('db.php');
if (!isset($_SESSION['isUserLoggedIn'])) {
  echo "<script>window.location.href='index.php?user_not_logged_in';</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://kit.fontawesome.com/0a5a931992.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta charset="UTF-8">
  <title>PHP Search</title>
</head>

<body>

  <div class="wrapper">

    <div class="sidebar">

      <h2>Sidebar</h2>
      <ul>
        <li> <a href="admin.php"><i class="fa-solid fa-house"></i>Home</a> </li>
        <li> <a href="delivery_page.php"><i class="fa-solid fa-plus"></i>Add delivery</a> </li>
        <li> <a href="customer_del_report.php"><i class="fa-solid fa-flag"></i>Delivery report</a> </li>
        <?php
        if ($_SESSION['role'] == 'admin') {
          //echo "<script>window.location.href='index.php';</script>";

        ?>

          <li> <a href="staff.php"><i class="fa-sharp fa-solid fa-person-cane"></i>Add Staff</a> </li>
          <li> <a href="report.php"><i class="fa-solid fa-circle-info"></i>Staff Info</a> </li>
          <li> <a href="branch.php"><i class="fa-solid fa-code-branch"></i>Add Branch</a> </li>


        <?php }  ?>
        <li> <a href="branch_report.php"><i class="fa-solid fa-circle-info"></i>Branch report</a> </li>
      </ul>

      <div class="logout">
        <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
      </div>
    </div>


    <div class="main_concent">

      <div class="header">
        <h2>Welcome</h2>
      </div>



    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
        <div class="row">

          <?php
          $connection = mysqli_connect('localhost', 'root', '', 'loginsignup');
          if (isset($_POST['search'])) {
            $searchkey = $_POST['search'];
            $sql = "SELECT * FROM branch WHERE address LIKE '%$searchkey%'";
          } else {
            $sql = "SELECT * FROM branch";
            $searchkey = "";
          }
          $result = mysqli_query($connection, $sql);
          ?>

          <form action="" method="POST">
            <div class="col-md-6">
              <input type="text" name="search" class='form-control' placeholder="Search By Name" value="<?php echo $searchkey; ?>">
            </div>
            <div class="col-md-6 text-left">
              <button class="btn">Search</button>
            </div>
          </form>

          <br>
          <br>
        </div>
        <table class="table table-bordered">
          <tr>
            <th>Address</th>
            <th>Number</th>
            <th>Additional Number</th>
          </tr>

          <?php
          while ($row = mysqli_fetch_object($result)) { ?>
            <tr>
              <td><?php echo $row->address ?></td>
              <td><?php echo $row->number1 ?></td>
              <td><?php echo $row->number2 ?></td>
            </tr>

          <?php } ?>


        </table>
      </div>
    </div>
  </div>
</body>

</html>