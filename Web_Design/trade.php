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
            <h1 class="brand brand_"><a href="index.php"><img alt="" src="imgs/logo.gif"> </a></h1>
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
                <li class="sub-menu"><a href="help.php">Help</a>
               <ul>
                    <li><a href="weblink.php">Web-Links</a></li>
                   <li><a href="asso.php">Trade Associations</a></li>
                   
                  </ul>
                </li>
               
              
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
      
      <div id="content">
    <div class="container">
<h3>EXPORT</h3>
<form action="query5.php" method="post">
<input type="number" placeholder="ITCHS Code" name ="code">
    <!-- <div class="buttons-wrapper">  <a class="btn btn-1" data-type="submit">Go!!</a></div>-->
<input type="submit" value="Submit">
</form>
<form action="query2.php" method="post">
 <input type="text" placeholder="Items" name="goods">
 <!--<div class="buttons-wrapper">  <a class="btn btn-1" data-type="submit">Go!!</a></div>-->
<input type="submit" value="Submit">
</form>

          <br>
<br>
<br>
<br>
<br><br><br><br>
 
  </div>
    </div>
<!--============================== footer =================================-->
<?php include 'footer.tpl.php'; ?>
</body>
</html>
