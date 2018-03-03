<html>
<head>
<title>Hospital Information </title>
<link rel="stylesheet" href="news_scroll.css" type="text/css">
<link href="print.css" rel="stylesheet" type="text/css" media="print"> 
<link href="home.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<div class="noPrint">
<div>
 <img style="margin-top: 0px" src="uu.png" height="150 px" width="200 px" align="right">

<img style="margin-top: 0px" height="150 px" width="300 px" align="left" src="ss.png" >
</div>
<br><br>
 <h4 style="text-align: center;"> PERSONAL INFORMATION FORM </h4>
<br><br><br><br><br><br><br><br><br><br>
 <form  action="https://www.google.com.pk/?gws_rd=cr&ei=usUpWKnsOcz0UpaRtpAJ" method="post"><br/><br/> 
<label  class="iraj" for="Ptient ID" > <b>Patient ID: <b></label> 
 <input style="margin-left: 20px"  type="text" name="patient ID" required="required" /> </br> </br>  
<label class="iraj" for="Height" > <b>Height: <b></label> 
<input style="margin-left: 43px" type="text" name="Height" required="required" /> </br> </br> 

<label class="iraj" for="Weight" > <b>Weight: <b></label> 
<input style="margin-left: 42px"  type="text" name="Weight" required="required" /> </br> </br> 

<label class="iraj" for="BMI Ratio" > <b>BMI Ratio: <b></label> 
<input style="margin-left: 19px" type="text" name="BMI Ratio" required="required" /> </br> </br> 

<label class="iraj" for="Pulse Rate" > <b>Pulse Rate: <b></label> 
<input style="margin-left: 20px" type="text" name="Pulse Rate" required="required" /> </br> </br>

<label class="iraj" for="Picture" > <b>Picture: <b></label> 
<input  style="margin-left: 42px" type="text" name="Picture" required="required" /> </br> </br> 
</form>
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
     <div>
        <form class="even" action=".php" method="process">
            <p><b>Login:</b> </p>
            <label class="iraj" for=" User Name" > <b>idd <b></label>
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
    echo  $row["id"];
 
echo "<h4>height  :</h4> ";
echo $row["height"];
 
echo ""."<h4>Weight :</h4> ";
echo $row["weight"];
echo""."<h4>BMI Ratio :</h4> ";
echo $row["bmi"];
echo""."<h4>Pulse Rate :</h4> ";
echo $row["pulse"];
echo""."<h4>Picture :</h4> ";
echo $row["pic"];

 
}
?>  
            <input  type="text" name="id" required="required" /> </br> </br></br>
            
            <!-- <input type="submit" value="Submit" /> -->
        </form>
    </div> 
 

</form>

  </div>
  <div class="column right" style="background-color: lightgrey">
    <div id="news_iframe_scroll">
<div class="news_scroll-title">
News and Updates<br>
</div>
<iframe name="NewsIFrame" src="news_scroll.html" frameborder="0" scrolling="no"></iframe>
</div>
<!-- END SCROLLING NEWS WINDOW SAMPLE -->

  </div>
</div>


</div>



</body>
</html>
