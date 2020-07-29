
<?php
if (isset($_POST['submit']) ) {

$conn=mysqli_connect('remotemysql.com','Vn6HI9swkt','8YEUg3HjYl','Vn6HI9swkt');
$link =$_POST['link'];
$mobile=$_POST['category'];

$query= "INSERT INTO youtube(link,category) VALUES('$link','$mobile')";
mysqli_query($conn,$query);
}


?>
<style>

.row{border:1px solid black;
top:30%;

background-color: #EAEDED;
position: absolute;
 width: 40%;
 padding-top:5%;
 padding-bottom:5%;
 padding-left: 1%;
 padding-right: 1%;
border-radius: 20px;
 left: 30%;
 margin-left: -100px;
 border: 5px solid blue;
text-align: center;}

label{float: left;
font-size: 17px;
color: black;
font-weight: bolder;
letter-spacing: 2px;
margin-top: 4%;
font-family: fantasy;
}
</style>

<html>
<head>
<link rel="stylesheet" href="bootstrap.css"/>
</head>

<!-- BODY -->
<body style="  background-image:url('background.jpg')">
<div class="row">
<form autocomplete="off" method="post" action="">
<div class="col-md-12 ">

<label >Link:</label><input required name="link" placeholder="link" class="form-control" type="text" id="t1"/></div>
<div class="col-md-12 col-xs-12">

  <label >COUNTRY:</label>
<select id="category" required name="category" class="form-control">
  <option selected value="select country">select country </option></div>




<!-- PHP CODE -->

  <?php
  // CONNECTION VARIABLE
  $conn=mysqli_connect('remotemysql.com','Vn6HI9swkt','8YEUg3HjYl','Vn6HI9swkt');

  $query= "select distinct category from youtube";
  $result=mysqli_query($conn,$query);
  while ($row=mysqli_fetch_array($result)) {
  ?>
  <option value="<?php echo $row['category']; ?>"> <?php echo $row['category']; ?></option>
  <?php
}
  ?>
  <!-- END OF PHP CODE -->
</select>


</div>
<input class="btn btn-primary" value="submit" type="submit" name="submit" style="margin-top:2%;" />
</form>
</body>
</html>
