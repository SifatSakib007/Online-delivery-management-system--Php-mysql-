<?php
require('db.php');
if (!isset($_SESSION['isUserLoggedIn'])) {
  echo "<script>window.location.href='index.php?user_not_logged_in';</script>";
}
if($_SESSION['role']!='customer'){
  echo "<script>window.location.href='index.php';</script>";
  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Dashboard</title>
  <script src="https://kit.fontawesome.com/0a5a931992.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>

<body>

  <div class="wrapper">

    <div class="sidebar">

      <h2>Sidebar</h2>
      <ul>
        <li> <a href="admin.php"><i class="fa-solid fa-house"></i>Home</a> </li>
        <li> <a href="delivery_page.php"><i class="fa-solid fa-plus"></i>Add delivery</a> </li>
        <li> <a href="customer_del_report.php"><i class="fa-solid fa-flag"></i>Delivery report</a> </li>
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


  <!-- Retrieve data code start from here  -->
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h2>
            <th> SAF delivery Information </th>
          </h2>
          <h2><? $_SESSION['emailId'];

              ?></h2>
        </div>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">S name</th>
              <th scope="col">S Email</th>
              <th scope="col">S num</th>
              <th scope="col">S street</th>
              <th scope="col">S City</th>
              <th scope="col">S division</th>

              <th scope="col">R name</th>
              <th scope="col">R email</th>
              <th scope="col">R num</th>
              <th scope="col">R street</th>
              <th scope="col">R city</th>
              <th scope="col">R division</th>
              
              <th scope="col">Price</th>

            </tr>
          </thead>
          <tbody>
            <?php include 'retrieve_del_page_cus.php'; ?>

            <?php if ($result->num_rows > 0) : ?>

              <?php while ($array = mysqli_fetch_row($result)) : ?>

                <tr>
                  <th scope="row"><?php echo $array[0]; ?></th>
                  <td><?php echo $array[1]; ?></td>
                  <td><?php echo $array[2]; ?></td>
                  <td><?php echo $array[3]; ?></td>
                  <td><?php echo $array[4]; ?></td>
                  <td><?php echo $array[5]; ?></td>
                  <td><?php echo $array[6]; ?></td>
                  <td><?php echo $array[7]; ?></td>
                  <td><?php echo $array[8]; ?></td>
                  <td><?php echo $array[9]; ?></td>
                  <td><?php echo $array[10]; ?></td>
                  <td><?php echo $array[11]; ?></td>
                  <td><?php echo $array[12]; ?></td>
                  <td><?php echo $array[13]; ?></td>


                </tr>

              <?php endwhile; ?>

            <?php else : ?>
              <tr>
                <td colspan="2" rowspan="1" headers="">No Data Found</td>
              </tr>
            <?php endif; ?>

            <?php mysqli_free_result($result); ?>



          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Retrieve data code end here  -->




</body>