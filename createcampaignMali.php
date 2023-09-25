<!DOCTYPE html>
<html>
<head>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/Firstcampaign.css">
    <script src="js/Firstcampaign.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="source/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <style>
      /* Add your custom styles here */
      /* body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
      } */
/* 
      .head-menu {
        background-color: #f8f9fa;
      } */

      /* .navbar-brand img {
        max-width: 100%;
        height: auto;
      } */

      /* .navbar-toggler {
        border: none;
        background-color: transparent;
        cursor: pointer;
      } */
/* 
      .navbar-toggler i {
        font-size: 20px;
        color: #333;
      }

      .navbar-nav .nav-link {
        color: #333;
        font-size: 16px;
      } */

      /* .navbar-nav .nav-link:hover,
      .navbar-nav .nav-link:focus {
        color: #007bff;
      } */

      .menu-btn a i {
        font-size: 18px;
        color: #333;
      }

      .btn-donate {
        background-color: #ffc107;
        border: none;
        color: #fff;
      }

      .btn-donate:hover,
      .btn-donate:focus {
        background-color: #ff9800;
        color: #fff;
      }

      .basic-grey {
        margin: 20px auto;
        background: #f7f7f7;
        padding: 25px;
        border: 1px solid #e5e5e5;
        max-width: 600px;
        box-shadow: 0 0 5px #ccc;
      }

      .basic-grey input[type="text"],
      .basic-grey textarea,
      .basic-grey select {
        border: 1px solid #dedede;
        color: #888;
        font-size: 16px;
        padding: 10px;
        margin-bottom: 15px;
        width: 100%;
        box-sizing: border-box;
      }

      .basic-grey input[type="file"] {
        margin-top: 10px;
      }

      .basic-grey textarea {
        height: 200px;
      }

      .basic-grey input[type="submit"] {
        background: #3498db;
        border: none;
        color: #fff;
        cursor: pointer;
        padding: 15px;
        font-size: 16px;
        width: auto;
        display: block;
        margin: 0 auto;
      }

      .basic-grey input[type="submit"]:hover {
        background: #008cba;
      }
    </style>
    <title>WithU</title>
  </head>

  <body>
    <header>
      <?php
      include_once 'includes/header.php';
      ?>
 
</header>

<form method="post" class="basic-grey" enctype="multipart/form-data" name="form1" id="form1" action="includes/create.inc.php">
  <table width="377" border="0" align="center">
    <tbody>
      <tr>
        <td colspan="2" class="Textt">Hey There, Please Enter Your Goal</td>
      </tr>
      <tr>
        <td width="88"><span id="Rand">R:</span></td>
        <td width="525"><input type="text" name="cash" id="cash" style="height:80px; width:300px;"></td>
      </tr>
      <tr>
        <td colspan="2" class="Text">My Campaign Title <br><br></td>
      </tr>
      <tr>
        <td colspan="2"><input class="Box1" type="text" name="title" id="title" placeholder="Example: Susie's Medical Fund or I Need A Laptop"><br></td>
      </tr>
      <tr>
        <td colspan="2" class="Text">Category<br><br></td>
      </tr>
      <tr>
        <td colspan="2">
          <select align="center" name="select" class="select" default="Chosse One">
            <option value="Emergency" disabled selected>SELECT ONE</option>
            <option value="ILS">ILS</option>
            <option value="Accounting">Accounting</option>
            <option value="Marketing">Marketing</option>
            <option value="Design">Design</option>
            <option value="Sports">Sports</option>
            <option value="Memorials">Memorials</option>
          </select><br>
        </td>
      </tr>
      <tr>
        <td colspan="2" class="Text">Course<br><br></td>
      </tr>
      <tr>
        <td colspan="2"><input type="text" name="loc" id="loc" placeholder="Enter your Campus..."><br></td>
      </tr>
      <tr>
        <td colspan="2" class="Text">Upload Image<br><br></td>
      </tr>
      <tr>
        <td height="27" colspan="2"><input type="file" name="file" id="file"><br><br><br></td>
      </tr>
      <tr>
        <td colspan="2" class="Text">Description<br><br></td>
      </tr>
      <tr>
        <td colspan="2"><textarea name="textarea" id="textarea" cols="100" rows="30" placeholder="Enter your complete description here"></textarea><br></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input align="center" type="submit" name="submit" id="submit" value="Submit" width="50px"></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </tbody>
  </table>
</form>

<script src="js/Firstcampaign.js"></script>
</body>
</html>
