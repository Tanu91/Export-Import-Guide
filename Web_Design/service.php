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
      
      <div id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November19, 2012!</div>
    <div class="container">
          <div class="row">
        <article class="span12">
              <h3>Services</h3>
            </article>
        <div class="clear"></div>
        <ul class="thumbnails thumbnails-1 list-services">
              <li class="span4">
            <div class="thumbnail thumbnail-1"> <img  src="imgs/Export.jpg" alt="">
                  <section> <a href="trade.php" class="link-1">TRADE</a>
                
              </section>
                </div>
          </li>
              <li class="span4">
            <div class="thumbnail thumbnail-1"> <img  src="imgs/import.jpg" alt="">
                  <section> <a href="tarrif.php" class="link-1">TARRIF</a>
                
              </section>
                </div>
          </li>
              <li class="span4">
            <div class="thumbnail thumbnail-1"> <img  src="imgs/map.jpg" alt="">
                  <section> <a href="map.html" class="link-1">MAPS</a>
                
              </section>
                </div>
          </li>
             
             
             
            </ul>
      </div>
        </div>
  </div>
    </div>


<!--============================== footer =================================-->
<?php include 'footer.tpl.php'; ?>
</body>
</html>