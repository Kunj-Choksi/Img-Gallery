<head>
<link rel="stylesheet" type="text/css" href="CSS/MyCSS.css">
<style>
.main-slider{
		height:auto;
		width:auto;
}

.mb{
	height:300px;
	width:300px;
	display:inline-block;
	border-radius: 5px;
	
}

</style>
</head>

<?php
 include("DB.php");
	 
if(isset($_POST['go'])){	

		
	 $name=$_FILES['file']['name'];
	 $temp_name=$_FILES['file']['tmp_name'];
	 $location = 'Uploads/';
	 $target = 'Uploads/'.$name;
	 
	 if(move_uploaded_file($temp_name,$target)){
		 
		 $nam=$_POST['fname'];
		$query = mysqli_query($con,"insert into img_table(Name,Title) VALUES ('".$target."','$nam')");
		
		}
	else{
		/*echo "<script type='text/javascript'>";	
		echo "alert('Showing saved Images');";
		echo "</script>";*/
	}
	
		echo "<div class='main-slider'  style='background: #eee;padding: 20px;'>";
	$query1=mysqli_query($con,"Select * from img_table");
	while($row=mysqli_fetch_array($query1)){
	 echo "<a href='".$row['Name']."' data-fancybox='images'".$row['Title']."'>"."<img src='".$row['Name']."' &nbsp; class='mb'>"."</a>";
	 echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	 
	}

	echo "</div>";
 echo "<br/><br/><br/>";

	
	}
?>