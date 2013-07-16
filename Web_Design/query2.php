

<!DOCTYPE html>
<html lang="en">
	<?php include 'header.tpl.php'; ?>
	<body>
    <div class="spinner"></div> 
   <!--============================== header =================================-->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href="index.html"><img alt="" src="imgs/logo.gif"> </a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                <li><a href="index.html">Home</a></li>
		<li><a href="about.html">About</a></li>
		
                <li class="sub-menu, active"><a href="service.html">Services</a>
                      <ul>
                    <li><a href="import.html">Import</a></li>
                    <li><a href="export.html">Export</a></li>
                    <li><a href="map.html">Maps</a></li>
                  </ul>
                    </li>
                <li><a href="help.html">Help</a></li>
               
                <li><a href="data.html">Data</a></li>
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
 
<! siteground.com/tutorials/php-mysql/execute_server_commands.htm>
<body>
<?php
include 'connect.php';
$item=$_POST ["goods"];
$search_term_esc = AddSlashes($item);

$query1=mysql_query("SELECT * FROM master WHERE desription LIKE '%$search_term_esc%'or hs4_des LIKE '%$search_term_esc%' or hs5_des LIKE '%$search_term_esc%' or hs6_des LIKE '%$search_term_esc%'");

$chaptest=-1;
$sub=-1;
$hs6=-1;
$hs8=-1;
while($row1=mysql_fetch_array($query1))
{
	$chap=(int)($row1['itc']/1000000);
	$chapter_note=(string)$chap;
	$row2=mysql_fetch_array(mysql_query("select chapter_no,chapter_name from chapter where chapter_no=$chap"));
	if($row2['chapter_no']!=$chaptest)
	{
		echo"<br>";
		echo "<b>Chapter-".$row2['chapter_no']."--------"."<i>".$row2['chapter_name']."</i>"."</b>";
		
		if($chap<10)
		{
			echo"<br>";
			echo"<a  target=_blank href=http://dgftcom.nic.in/licasp/itchs2012/"."0".$row2['chapter_no']."head.pdf>Chapter Notes</a>";
			echo"<br>";
			echo"<a target=_blank href=http://dgftcom.nic.in/licasp/itchs2012/"."0".$row2['chapter_no']."foot.pdf>Policy Notes</a>"."<br>";
			
		}
		else
		{
			echo"<br>";
			echo"<a  target=_blank href=http://dgftcom.nic.in/licasp/itchs2012/".$row2['chapter_no']."head.pdf>Chapter Notes</a>";
			echo "<br>";
			echo"<a target=_blank href=http://dgftcom.nic.in/licasp/itchs2012/".$row2['chapter_no']."foot.pdf>Policy Notes</a>"."<br>";
			
		}
		
	}
	$chaptest=$chap;
	if($sub!=$row1['hs4_no'])
	{
		echo "Subheading"."    &nbsp; ".$row1['hs4_no']."    &nbsp; "."   &nbsp;"."<br>".$row1['hs4_des'];	
		echo"<br>";
		
		
	}
	$sub=$row1['hs4_no'];
	
	
		
	if($hs6!=$row1['$hs6_no'])
	{
		
		echo "<td><b>"."HS6"."    &nbsp; ".$row1['hs6_no']."    &nbsp; "."   &nbsp;".$row1['hs6_des']."</b></td>";
		
	}
	
		echo "<div id='no-more-tables'><table class='table table-hover'><table >";
		echo "<div id='no-more-tables'> <thead>";
		
		echo"<div id='no-more-tables'><th>ITC(HS)</th>";
		echo"<div id='no-more-tables'><th>Item Description</th>";
		echo"<div id='no-more-tables'><th>Policy</th>";
		echo"<div id='no-more-tables'><th>Condition</th>";
	echo "</thead>";
	if($hs8!=$row1['$hs8_no'])
	{	
		echo "<div id='no-more-tables'><tr><td:before>";
		
		echo "<div id='no-more-tables'><td data-title='ITC(HS)'>".$row1['itc']."</td>";
		echo "<div id='no-more-tables'><td data-title='HS(8)'>".$row1['hs8_des']."</td>";
		if(trim($row1['policy'])=="Free")
		echo"<div id='no-more-tables'><td data-title='Policy'>Permitted</td>";
		elseif($row1['policy']=="")
		echo"<div id='no-more-tables'><td data-title='Policy'>N/A</td>";
		else
		echo "<div id='no-more-tables'><td data-title='Policy'>".$row1['policy']."</td>";
		if($row1['conditions']=="")
		echo"<div id='no-more-tables'><td data-title='Condition'>N/A</td>";
		else
		echo "<div id='no-more-tables'><td data-title='Condition'>".$row1['conditions']."</td>";
		echo "</tr>";
		
		
	}	
	echo"</table>";
	echo"<br>";

}




?>
</body>
</html>
