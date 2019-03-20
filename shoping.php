<?php
    include 'user.php';
    $query2 = "SELECT product,img,price,Id FROM phone ORDER BY Id";
    $result = $connection->query($query2);
?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <div id="body">
            <form method="post" action="cart.php">
                <div>
                    
                        <tr>
                            <th>Product Id</th>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Product price</th>
                            <th>Quantity</th>
                        </tr>
                        <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                        <td>
                           <span name="id" value="<?=$row['Id']?>"> <?=$row['Id']?></span>
                        </td>
                        <td>
                           <span> <img src="<?=$row['img']?>" width='45px' height='45px'></span>
                        </td>
                        <td>
                            <span name="product"><?=$row['product']?> 
                        </td>
                        <td>
                           <span name="price"> <?=$row['price']?> 
                        </td>
                        <td>
                        <input type="number" name="quantity" min="1" max="10">
                        </td>
                        </tr>
                        <?php endWhile;?>
                    </table>
                </div>
                <div>
                    <input type="submit" name="submit" value="Add to Cart" >
                </div>
            </form>
        </div>
    </body>
</html>
<?php
$result->close();
$connection->close();
?>
