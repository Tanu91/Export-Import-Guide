<!DOCTYPE html>
<html>
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
            <h1 class="brand brand_"><a href="navik.html"><img alt="" src="imgs/logo.gif"> </a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                <li ><a href="index.php">Home</a></li>
		<li><a href="about.php">About</a></li>
		
                <li class="sub-menu, active"><a href="service.php">Services</a>
                      <ul>
                    <li><a href="trade.php">Trade</a></li>
                   <li><a href="tarrif.php">Tarrif</a></li>
                    <li><a href="map.php">Maps</a></li>
                  </ul>
                    </li>
                <li><a href="help.php">Help</a></li>
               
              
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
  <div id="content">
    <div class="container"<br><br><br><br>
<form action="" method="post">
<input type="number" placeholder="ITC(HS)" name ="code">
   

<input type="number" placeholder="Enter CIF Value" name ="value">
   
<input type="submit" value="Submit">
</form>

<?php
include 'connect.php';
$value=$_POST[value];
$itc=$_POST[code];
$av=$value+(0.01)*$value;

echo " Assesable Value = ".$av;
$query= mysql_query("select * from tarrif where code = $itc");
$row=mysql_fetch_array($query);
$bd=$row['basic_duty'];
/*echo "<form action='' method='post'>";
echo "<input type='number' value='$bd' name ='code1'>";
echo "</form>";*/
$bd=($av*$bd)/100;
echo "<br>";
echo "Basic Duty of Customs=                         &nbsp;" .$bd;
$bd_pref=$row['basic_pref'];
$bd1=($av*$bd_pref)/100;
$bd_amt=$bd+$bd_pref;
echo "<br>";
echo "Basic Duty Pref =                               &nbsp;" .$bd_amt;
$cvd=$row['cvd'];
$cvd_amt=($av+$bd_amt)*($cvd/100);
echo "<br>";
echo "Additional Duty of Customs(CVD)=              &nbsp;".$cvd_amt;
$edu_cess=0;
$edu_amt=$cvd_amt*($edu_cess/100);
$cus_cess=$row['cess'];
$cus_amt=($bd_amt+$cvd_amt+$edu_amt)*($cus_cess/100);
echo "<br>";
echo "Customs Education Cess=                         &nbsp; ". $cus_amt;
$spl_cvd=$row['spl_cvd'];
$spl_cvd_amt=($av+$bd_amt+$cvd_amt+$edu_amt+$cus_amt)*($spl_cvd/100);
echo "<br>";
echo " Special Additional Duty of Customs(Spl.CVD) =              &nbsp;".$spl_cvd_amt;
$total=$bd_amt+$cvd_amt+$edu_amt+$cus_amt+$spl_cvd_amt;
echo "<br>";
echo "Total Customs Duty=                                      &nbsp; ".$total;


/*echo "<table>";
echo "<th>Value and Duty Description </th>";
echo "<th> Custom Duty Rates </th>";
echo "<th>Calculated Amount </th>";
echo "<tr>";
echo "<td>Assesable Value(AV)</td>";
echo "<td></td>";
echo "<td>Assesable Value(AV)</td>";*/
?>
</div>
</div>
<!--============================== footer =================================-->
<?php include 'footer.tpl.php'; ?>
</body>
</html>
