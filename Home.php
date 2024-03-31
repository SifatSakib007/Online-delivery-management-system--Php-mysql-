<?php
require('db.php');
if (!isset($_SESSION['isUserLoggedIn'])) {
  echo "<script>window.location.href='index.php?user_not_logged_in';</script>";
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
  <style>
    .container {
      margin: 40px auto;
      font-family: 'Ubuntu', sans-serif;
      font-size: 90px;
      color: #121212;
      text-align: center;
      letter-spacing: 5px;
      text-shadow: 0 2px 1px #747474,
        -1px 3px 1px #767676,
        -2px 5px 1px #787878,
        -3px 7px 1px #7a7a7a,
        -4px 9px 1px #7f7f7f,
        -5px 11px 1px #838383,
        -6px 13px 1px #878787,
        -7px 15px 1px #8a8a8a,
        -8px 17px 1px #8e8e8e,
        -9px 19px 1px #949494,
        -10px 21px 1px #989898,
        -11px 23px 1px #9f9f9f,
        -12px 25px 1px #a2a2a2,
        -13px 27px 1px #a7a7a7,
        -14px 29px 1px #adadad,
        -15px 31px 1px #b3b3b3,
        -16px 33px 1px #b6b6b6,
        -17px 35px 1px #bcbcbc,
        -18px 37px 1px #c2c2c2,
        -19px 39px 1px #c8c8c8,
        -20px 41px 1px #cbcbcb,
        -21px 43px 1px #d2d2d2,
        -22px 45px 1px #d5d5d5,
        -23px 47px 1px #e2e2e2,
        -24px 49px 1px #e6e6e6,
        -25px 51px 1px #eaeaea,
        -26px 53px 1px #efefef;

    }
  </style>

</head>

<body>

  <div class="wrapper">

    <div class="sidebar">

      <h2>Sidebar</h2>
      <ul>
        <li> <a href="admin.php"><i class="fa-solid fa-house"></i>Home</a> </li>
        <li> <a href="delivery_page.php"><i class="fa-solid fa-plus"></i>Add delivery</a> </li>
        <li> <a href="admin_del_report.php"><i class="fa-solid fa-plus"></i>Delivery report</a> </li>
        <li> <a href="staff.php"><i class="fa-solid fa-flag"></i>Add Staff</a> </li>
        <li> <a href="report.php"><i class="fa-solid fa-flag"></i>Staff Info</a> </li>
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
</body>