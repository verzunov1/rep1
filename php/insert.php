<?php
$conn = new mysqli('localhost', 'root', '', 'insert');
$product_n=$_POST['product_n'];
$amount=$_POST['amount'];
$sql="INSERT INTO `table1` (`id`, `product_n`, `amount`) VALUES (NULL, '$product_n', '$amount')";
if ($conn->query($sql) === TRUE) {
    echo "data inserted";
}
else 
{
    echo "failed";
}
?>