<?php
$Id=$_REQUEST['Id'];
?>

<html>
<head>
<title>Electronic Product image file Edite</title>
</head>
<body>

<form enctype="multipart/form-data" method="post">
Enter Id:
<input type-="text" name="id" value="<?php echo $Id; ?>"/> <br/>
Select image :
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name="Submit1"> <br/>

<a href="eleimg.php">Image</a>
</form>
<?php
$con=mysqli_connect("localhost","root","","batch6");
if(isset($_POST['Submit1']))
{ 
    $id=$_POST['id'];
$filepath = "image/electronic/" . $_FILES["file"]["name"];

$sql = "update electronic set ImgId=$id,img_path ='$filepath' where ImgId=$Id";
move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
$query =mysqli_query($con, $sql);
if($query) 
{
echo "Data Updated";
} 
else 
{
echo "Error !!";
}
}
?>

</body>
</html>