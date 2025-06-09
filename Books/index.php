<?php
    require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div class="main-div">
        <div class="menu-div">
            <form action="index.php">
                <div class="input-field">
                    <label for="isbn">ISBN#</label>
                    <input type="text" name="isbn" id="isbn">
                    <label for="isbn">Title:</label>
                    <input type="text" name="title" id="title">
                    <label for="isbn">Copyright:</label>
                    <input type="text" name="copyright" id="copyright">
                    <label for="isbn">Edition:</label>
                    <input type="text" name="edition" id="edition">
                    <label for="isbn">Price</label>
                    <input type="text" name="price" id="price">
                    <label for="isbn">Quantity</label>
                    <input type="text" name="quantity" id="quantity">
                </div>
                <div class="button-field">
                    <input type="submit" id="search" name="search" value="search">
                    <input type="submit" id="edit" name="edit" value="edit">
                    <input type="submit" id="add" name="add" value="add">
                    <input type="submit" id="delete" name="delete" value="delete">
                </div>
            </form>

            <div class="table-div">
                <table>
                    <tr>
                        <th>ISBN</th>
                        <th>Title</th>
                        <th>Copyright</th>
                        <th>Edition</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>TOTAL</th>
                    </tr>

                    
                </table>
            </div>
        </div>
    </div>
</body>
</html>