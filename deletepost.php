<?php
						include ("db.php");
						
							$id = $_POST["id"];

							$query_del = 	"DELETE FROM tbl_posts
											 WHERE id = $id";

							//echo $query_del;

							$result_del = mysql_query($query_del);
						
?>
