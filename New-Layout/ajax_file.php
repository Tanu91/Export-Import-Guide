 <!DOCTYPE html>
<html lang="en">
	<head>
<link rel="stylesheet" href="style.css" type="text/css" media="screen">
</head>
<script type="text/javascript">

function loadXMLDoc1(url,para)
{ alert("h");
    var xmlhttp;
    if (window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest();
    }
    else
    {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function()
    {
           document.getElementById("my"+para).innerHTML=xmlhttp.responseText;
       }
    xmlhttp.open("GET",url+"?name="+para,true);
    xmlhttp.send();
}
</script>


</head>

<?php 
function call($para){
			
			$item=$para;
			mysql_connect("localhost","root","12345");
			@mysql_select_db("trade") or die("unable to select database");
			$sql = "SELECT * FROM chapter WHERE section_no = $item";
			$result=mysql_query($sql);
			$num=mysql_numrows($result);
			$i=0;
echo"<div  class='super-list variable-sizes '>";
echo"<div id='mydiv'><h2></h2></div>";
			while ($row=mysql_fetch_array($result)) 
				{

				$field1=$row['chapter_no'];
				$field2=$row['chapter_name'];?>
				 <a href="#" onclick="loadXMLDoc1('ajax_file1.php',' <?php echo $field1 ?>')"  >    
				
				<?php echo"   <div class='element feature halogen width2 height2 '>";
				echo"  <h2 class='number'>".$field1."</h2>";
				echo"  <h3 class='name'>".$field2."</h3>";
				echo"  <h3 class='weight'>"."</h3>";
				echo" </div>";
				echo" </a>";
    
				}
echo"</div>";				
}

$val=(int) $_GET['name'];

call($val);

?>
</html>
