<!DOCTYPE html>
<html lang="en">
	<?php include 'header.tpl.php';?> 

	<body>
    <div class="spinner"></div> 
<!--============================== header =================================-->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href="navik.html"><img alt="" src="imgs/logo.gif"> </a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                <li ><a href="index.html">Home</a></li>
		<li><a href="about.html">About</a></li>
		
                <li class="sub-menu, active"><a href="service.html">Services</a>
                      <ul>
                    <li><a href="import.html">Import</a></li>
                    <li><a href="export.html">Export</a></li>
                    <li><a href="map.html">Maps</a></li>
                  </ul>
                    </li>
                <li><a href="help.html">Help</a></li>
               
              </ul>
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
    </header>
<div class="bg-content">
      <div class="container">
    <div class="row">
          <div class="span12"> 

 <!--============================== content =================================-->
<body>
<br><br>
<?php

$item=$_POST ["goods"];
$search_term_esc = AddSlashes($item);

mysql_connect("localhost","root","12345");
@mysql_select_db("trade") or die("unable to select database");
$sql = "SELECT * FROM itc_code WHERE des LIKE '%$search_term_esc%'";
$result=mysql_query($sql);
$num=mysql_numrows($result);
$i=0;

echo "<div id='no-more-tables'><table class='table table-hover'>";

echo "<div id='no-more-tables'> <thead>";

echo"<div id='no-more-tables'><th >ITC(HS)</th>";
echo"<div id='no-more-tables'><th >Item Description</th>";
//echo"<div id='no-more-tables'><th>HS(4)</th>";
echo"<div id='no-more-tables'><th>HS(5)</th>";
echo"<div id='no-more-tables'><th>HS(6)</th>";
echo"<div id='no-more-tables'><th>HS(8)</th>";
echo"<div id='no-more-tables'><th>Policy</th>";
echo"<div id='no-more-tables'><th>Condition</th>";
echo "</thead>";
while ($i<$num) {
$field1=mysql_result($result,$i,"itc");
$field2=mysql_result($result,$i,"des");
$field3=mysql_result($result,$i,"hs4");
$field4=mysql_result($result,$i,"hs5");
$field5=mysql_result($result,$i,"hs6");
$field6=mysql_result($result,$i,"hs8");
$field7=mysql_result($result,$i,"policy");
$field8=mysql_result($result,$i,"con");
echo "<div id='no-more-tables'><tr><td:before>";

echo "<div id='no-more-tables'><td data-title='ITC(HS)'> ".$field1."</td>";
echo "<div id='no-more-tables'><td data-title='Item'> ".$field2."</td>";
//echo "<div id='no-more-tables'><td data-title='HS(4)'> ".$field3."</td>";
echo "<div id='no-more-tables'><td data-title='HS(5)'> ".$field4."</td>";
echo "<div id='no-more-tables'><td data-title='HS(6)'> ".$field5."</td>";
echo "<div id='no-more-tables'><td data-title='HS(8)'>".$field6."</td>";
echo "<div id='no-more-tables'><td data-title='Policy'>".$field7."</td>";
echo "<div id='no-more-tables'><td data-title='Condition'>".$field7."</td>";
echo "</tr>";


//echo $field1;
//echo " ";
//echo $field2;
//echo "<br>";


$i++;

}
echo "</table>";

?>

<!--============================== footer =================================-->
<?php include 'footer.tpl.php'; ?>

</body>
</html>
