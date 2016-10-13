
<!-- header starts-->
<!DOCTYPE html>

<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Dropbox Form</title>
  <link rel="shortcut icon" href="images/favicon.ico"/>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
 <!-- header ends-->
 <body style="background-color: #fff">
 <div style="background-color: #3d9ae8">
 <br/>
 <center>
 <h1 class="white-text">
 All Details
 </h1>
 </center>
 <br/>
 </div>
 <div class="row">
 <div class="col s1">
  &nbsp;
 </div>
   <div class="col s10">
   <br>
      <div class="row container form_init">
	  
     <br>
     <table class="striped highlight centered responsive-table bordered">
         <thead>
             <tr>
         <th>
             S.No.
         </th>
         <th>
             Name
         </th>
         <th>
             Email
         </th>
         <th>
	     Date of Birth
         </th>
         <th>
             Gender
         </th>
         </tr>
         </thead>
         <tbody>
<?php

$con = mysql_connect('localhost', 'root', 'rootpassword');

$db = mysql_select_db('reg_form',$con);

$sql=mysql_query("SELECT * FROM users");

$i=1;

while($row=mysql_fetch_row($sql))
{
	
?>

<tr>
    <td>
       <?php echo $i;?> 
    </td>
    <td>
        <?=$row[0];?>&nbsp;<?=$row[1];?>
    </td>
    <td>
        <?=$row[2];?>
    </td>
	<td>
        <?=$row[4];?>
    </td>
	<td>
        <?=$row[5];?>
    </td>
</tr>

<?php
    $i++;
}
?>
     </tbody>
     </table>
     <br><br>
    </div>
  </div>
 <div class="col s1">
   &nbsp;
 </div>
  </div>

  <!-- footer starts-->
  <script type="text/javascript" src="js/jquery.min.js"></script>
 <script src="js/material.min.js"></script> 
 <script type="text/javascript" src="js/materialize.js"></script>
 <script src="js/materialize.min.js"></script> 

<hr/>

    <center>
   &#169; 2016 | All Rights Reserved | Privacy Policy.
    </center>
	
  <!--footer ends-->
</body>
</html>

