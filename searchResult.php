<?php
    $user = 'root';
    $pass = '';
    $db = 'hardware_store';
    $db = new mysqli('localhost', $user, $pass, $db) or die("Unbale to connect");
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php
    $search=$_POST['search'];
$query = $pdo->prepare("select * from items where name LIKE '%$search%'  LIMIT 0 , 10");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
		 		echo "Search found :<br/>";
				echo "<table style=\"font-family:arial;color:#333333;\">";	
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Title Books</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Author</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Price</td></tr>";				
            while ($results = $query->fetch()) {
				echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";			
                echo $results['name'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo $results['stock'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo "$".$results['price'];
				echo "</td></tr>";				
            }
				echo "</table>";		
        } else {
            echo 'Nothing found';
        }
?>
</body>
</html>