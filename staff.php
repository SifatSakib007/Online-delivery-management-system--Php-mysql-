<?php
require('db.php');
if (!isset($_SESSION['isUserLoggedIn'])) {
  echo "<script>window.location.href='index.php?user_not_logged_in';</script>";
}
if ($_SESSION['role'] != 'admin') {
  echo "<script>window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>

  <script src="https://kit.fontawesome.com/0a5a931992.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="staff.css">
  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->

</head>

<body>


  <div class="wrapper">
    <div class="sidebar">
      <h2>Sidebar</h2>
      <ul>
        <li> <a href="admin.php"><i class="fa-solid fa-house"></i>Home</a> </li>
        <li> <a href="delivery_page.php"><i class="fa-solid fa-plus"></i>Add dekivery</a> </li>
        <li> <a href="admin_del_report.php"><i class="fa-solid fa-flag"></i>Delivery report</a> </li>
        <li> <a href="staff.php"><i class="fa-sharp fa-solid fa-person-cane"></i>Add Staff</a> </li>
        <li> <a href="report.php"><i class="fa-solid fa-circle-info"></i>Staff Info</a> </li>
        <li> <a href="branch.php"><i class="fa-solid fa-code-branch"></i>Add Branch</a> </li>
        <li> <a href="branch_report.php"><i class="fa-solid fa-circle-info"></i>Branch report</a> </li>
      </ul>


      <div class="logout">
        <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
      </div>

    </div>

    <div class="main_concent">
      <div class="header">Welcome</div>




      <div class="stf">
        <div class="form-popup" id="myForm">
          <form class="form-container" action="staff_conn_page.php" method="post">
            <h1>Add Staff</h1>

            <input type="number" placeholder="Enter employee id" name="id" required>

            <!--<label for="name"><b>name</b></label>-->
            <input type="text" placeholder="Enter full name" name="name" required>

            <!--<label for="email"><b>Email</b></label>-->
            <input type="email" placeholder="Enter email" name="email" required>

            <!--<label for="psw"><b>Password</b></label>-->
            <input type="number" placeholder="Enter mobile number" name="Pnumber" required>

            <input type="text" placeholder="Enter city" name="city" required>
            <input type="text" placeholder="Enter branch" name="branch" required>
            <input type="number" placeholder="Enter salary" name="salary" required>
            <!--<a href="staff.php"><button type="submit" class="btn">Add</button></a>-->
            <a href="staff.php"><input type="submit" name="submit" value="Add" class="btn"></a>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
          </form>
        </div>
        <button class="open-button" onclick="openForm()">Open Form</button>
        <script>
          function openForm() {
            document.getElementById("myForm").style.display = "block";
          }

          function closeForm() {
            document.getElementById("myForm").style.display = "none";
          }
        </script>
      </div>

    </div>

  </div>



</body>

</html>