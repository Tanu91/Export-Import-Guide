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
            <h1 class="brand brand_"><a href="index.php"><img alt="" src="img/logo.gif"> </a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                <li class="active"><a href="index.php">Home</a></li>
		<li><a href="about.php">About</a></li>
		
                <li class="sub-menu"><a href="service.php">Services</a>
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
        <!--============================== slider =================================-->
        <div class="flexslider">
              <ul class="slides">
            <li> <img src="imgs/8.jpg" alt="" > </li>
            <li> <img src="imgs/9.jpg" alt="" > </li>
            <li> <img src="imgs/10.jpg" alt="" > </li>
            <li> <img src="imgs/11.jpg" alt="" > </li>
            <li> <img src="imgs/12.jpg" alt="" > </li>
          </ul>
            </div>
        <span id="responsiveFlag"></span>
        <div class="block-slogan">
              <h2>Welcome!</h2>
              <div>
            
          </div>
            </div>
      </div>
        </div>
  </div>
      
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
                  <section> <a href="trade.php" class="link-1"><h2>TRADE</h2></a>
                
              </section>
                </div>
        
             <li class="span4">
            <div class="thumbnail thumbnail-1"> <img  src="imgs/Help.jpg" alt="">
                  <section> <a href="help.php" class="link-1"><h2>HELP</h2></a>
                </section>
                </div>
		</li>
              <li class="span4">
            <div class="thumbnail thumbnail-1"> <img  src="imgs/about.jpg" alt="">
                  <section> <a href="about.php" class="link-1"><h2>ABOUT US</h2> </a>
                
              </section>
                </div>
          </li>
             
            
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
