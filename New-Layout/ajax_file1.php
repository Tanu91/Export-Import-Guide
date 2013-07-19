 <!DOCTYPE html>
<html lang="en">
	<head>
<link rel="stylesheet" href="style.css" type="text/css" media="screen">
</head>
<?php 
function callme($para){
			
			$item=$para;
			mysql_connect("localhost","root","12345");
			@mysql_select_db("trade") or die("unable to select database");
			$sql = "SELECT * FROM divya WHERE chapter = $item";
			$result=mysql_query($sql);
			$num=mysql_numrows($result);
			$i=0;

			while ($row=mysql_fetch_array($result)) 
				{

				$field1=$row['itc'];
				$field2=$row['description'];
				
				echo"<div class='element other'>";
				echo"  <h2 class='number'>$field1</h2>";
				echo"  <h3 class='name'>$field2</h3>";
				echo" </div>";
				echo" </a>";
				}
				
}

$val=(int) $_GET['name'];

callme($val);

?>
</html>
