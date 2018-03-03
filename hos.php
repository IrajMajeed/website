<html>
<head>
<title>Hospital Information </title>
<link rel="stylesheet" href="news_scroll.css" type="text/css">
<link href="print.css" rel="stylesheet" type="text/css" media="print"> 
<link href="home.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
<div class ="noprint">
  
<div>
 <img style="margin-top: 0px" src="uu.png" height="150 px" width="200 px" align="right">

<img style="margin-top: 0px" height="150 px" width="300 px" align="left" src="ss.png" >
</div>
<br><br>
<b> <h4 style="text-align: center;"> PERSONAL INFORMATION FORM </h4>
<br><br><br><br><br>
    
<?php
$id= $_POST['id'];
$id = stripcslashes($id);
$id = mysql_real_escape_string($id);
// Create connection"
$con = mysql_connect("localhost", "root","");
mysql_select_db("fyp");
// Check connection

 
$query = mysql_query("SELECT * FROM `info` where id='$id'") or die("failed to querry databse".mysql_error());
$row= mysql_fetch_array($query);
if($row['id']== $id)
{    
	$array = $row;
	echo ""."ID No : ";
    echo  $row["id"];
echo ""."<br>";
echo ""."<br>";
 
echo ""."Height  : " ;
echo $row["height"];
 echo ""."<br>";
echo ""."<br>";

echo ""."Weight : ";
echo $row["weight"];
echo ""."<br>";
echo ""."<br>";

echo""."BMI Ratio : ";
echo $row["bmi"];
echo ""."<br>";
echo ""."<br>";

echo""."Pulse Rate : ";
echo $row["pulse"];
echo ""."<br>";
echo ""."<br>";

echo""."Picture : ";
echo $row["pic"];

 
}
?> 
</b>
</div>

<div class="nodisplay" style="background-color: lightgrey">

<div class="a">

<img style="margin-left: 5px" src="gg.jpeg" height="290 px" width="1334 px" align="center">

</div>


<div >
<ul position="fixed" ; style="margin-left: 5px; margin-right: 10px" >
 <li> <a href="home.html" target="_self">
<img id="home" src="img.png"></a></li>
  <li  ><a href="https://www.youtube.com" target="_self">Personal Information</a></li>
  <li><a href="https://www.youtube.com" target="_self">Prescriptions</a></li>

</ul>
</div>
<div class="row">
  <div class="column left" style="background-color: lightgrey">
  <div style="text-align: center;">
        <form class="even" action="hos.php" method="post">
            <p><b>Enter Your ID Number:</b> </p>
            <label class="iraj" for=" User Name" > <b>ID No <b></label> 
            <input  type="text" name="id" required="required" /> </br> </br></br>
            
            <!-- <input type="submit" value="Submit" /> -->
        </form>
    
<?php
$id= $_POST['id'];
$id = stripcslashes($id);
$id = mysql_real_escape_string($id);
// Create connection"
$con = mysql_connect("localhost", "root","");
mysql_select_db("fyp");
// Check connection

 
$query = mysql_query("SELECT * FROM `info` where id='$id'") or die("failed to querry databse".mysql_error());
$row= mysql_fetch_array($query);
if($row['id']== $id)
{    
	$array = $row;
	echo "ID No : ";
    echo  $row["id"];
echo ""."<br>";
echo ""."<br>";
 
echo ""."Height  : ";
echo $row["height"];
 echo ""."<br>";
echo ""."<br>";

echo ""."Weight : ";
echo $row["weight"];
echo ""."<br>";
echo ""."<br>";

echo""."BMI Ratio : ";
echo $row["bmi"];
echo ""."<br>";
echo ""."<br>";

echo""."Pulse Rate : ";
echo $row["pulse"];
echo ""."<br>";
echo ""."<br>";

echo""."Picture : ";
echo $row["pic"];

 
}
?> 
</div>
</div>
<div class="column right" style="background-color: lightgrey">
    <div id="news_iframe_scroll">
<div class="news_scroll-title">
News and Updates<br>
</div>
<iframe name="NewsIFrame" src="news_scroll.html" frameborder="0" scrolling="no"></iframe>
</div>
</div>
<!-- END SCROLLING NEWS WINDOW SAMPLE -->
</body>
</html>