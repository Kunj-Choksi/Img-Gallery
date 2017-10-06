<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Img_Gallery</title>
<style type="text/css">
.title{
	color:#FF8600;
}
.con{
	overflow: hidden;
    position: relative;
	background:#F8C882;
    border-radius: 2px;
    float:left;
    padding: .5em;

}
.con [type=file]{
  	cursor: inherit;
  	opacity: 0;
  	position: absolute;
    right: 0;
    text-align: right;
    top: 0;
	cursor:pointer;	
}
#sub{
	height:35px;
	width:70px;
}
#box{
height:30px;
width:450px;
border-color:#6CAFF5;
border-radius:3px;
	}
#p_name{font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;font-size:34px}
</style>
<link rel="stylesheet" type="text/css" href="CSS/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="CSS/MyCSS.css">
</head>

<body>
<center><h1 class="title">Images Gallery</h1></center>

<?php
include('UP.php');
?>
  <form action="index.php" method="post" enctype="multipart/form-data">
  <label class="con">Choose a file
  <input type="file" name="file">
	</label>
<br/><br/><br/><br/>
  
<table>    	
    <tr>
        <td id="p_name" style="">Title</td>
        <td><input type="text" name="fname" id="box" style="" /></td>
    </tr>
    <tr>
  		<td><input type="submit" id="sub" name="go" ></td>
    </tr>
</table>    
  </form>

<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="JS-fancy/jquery.fancybox.min.js"></script>
</body>
</html>
