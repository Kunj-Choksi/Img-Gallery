<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
.sel{
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
#ti{font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif;font-size:34px}
</style>
<link rel="stylesheet" type="text/css" href="CSS/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="CSS/MyCSS.css">
</head>

<body>
<center><h1 class="sel">Images Gallery</h1></center>

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
        <td id="ti" style="">Title</td>
        <td><input type="text" name="fname" id="box" style="" /></td>
    </tr>
    <tr>
  		<td><input type="submit" id="sub" name="go" ></td>
    </tr>
    
  </form>
</table>
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="JS-fancy/jquery.fancybox.min.js"></script>

<script type="text/javascript">

$(document).ready(function(e) {
    $().fancybox({
		selector:'[data-fancybox="images"]',
		thumbs: false,
		hash: false,
	
	});
	$(".main-slider").slick({
		slidesToShow   : 3,
  slidesToScroll : 3,
  infinite   : true,
  dots       : false,
  arrows     : false,
  responsive : [
    {
      breakpoint: 960,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
  });
});
</script>



</body>
</html>