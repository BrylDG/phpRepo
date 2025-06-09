<?php
    require_once("db.php");
    SESSION_START();



    $isbn = "";

    if (!isset($_SESSION["searched"])) {
        $_SESSION["searched"] = false;
    }
    if (!isset($_SESSION["searched"])) {
            $_SESSION["message"] = "";
    }

    if(isset($_POST["add"])) {
        $isbn = $_POST["isbn"];
        $title = $_POST["title"];
        $copyright = $_POST["copyright"];
        $edition = $_POST["edition"];
        $price = $_POST["price"];
        $quantity = $_POST["quantity"];

        $sql = "INSERT INTO books VALUES('$isbn', '$title', '$copyright', '$edition', '$price', '$quantity')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        header("Location: index.php");
        exit();
    }

    if(isset($_POST["search"])) {
        $isbn = $_POST["isbn"];

        $sql = "SELECT * FROM books WHERE ISBN = $isbn";
        if ($book = mysqli_fetch_assoc(mysqli_query($conn, $sql))) {
            $_SESSION["searched"] = true;
            $_SESSION["message"] = "naka search";
            echo "{$_SESSION["searched"]}";
        } else {
            $book = ['ISBN' => '','title' => '','copyright' => '','edition' => '','price' => '', 'quantity' => ''];
        }
    }

    if(isset($_POST["delete"])) {
        if($_SESSION["searched"]) {
            $isbn = $_POST["isbn"];
            $sql = "DELETE FROM books where ISBN = $isbn";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            $_SESSION["searched"] = false;
            $_SESSION["message"] = "nag delete";
            header("Location: index.php");
            exit();
        } else {
            echo "search book first.";
        }
    }

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
            <form action="index.php" method="post">
                <div class="input-field">
                    <label for="isbn">ISBN#</label>
                    <input type="text" name="isbn" id="isbn" value="<?php echo isset($_POST['search']) ? $book['ISBN'] : ''; ?>">
                    <label for="isbn">Title:</label>
                    <input type="text" name="title" id="title" value="<?php echo isset($_POST['search']) ? $book['title'] : ''; ?>">
                    <label for="isbn">Copyright:</label>
                    <input type="text" name="copyright" id="copyright" value="<?php echo isset($_POST['search']) ? $book['copyright'] : ''; ?>">
                    <label for="isbn">Edition:</label>
                    <input type="text" name="edition" id="edition" value="<?php echo isset($_POST['search']) ? $book['edition'] : ''; ?>">
                    <label for="isbn">Price</label>
                    <input type="text" name="price" id="price" value="<?php echo isset($_POST['search']) ? $book['price'] : ''; ?>">
                    <label for="isbn">Quantity</label>
                    <input type="text" name="quantity" id="quantity" value="<?php echo isset($_POST['search']) ? $book['quantity'] : ''; ?>">
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
                    <?php
                        $sql = "SELECT * FROM books";
                        $books = mysqli_fetch_all(mysqli_query($conn, $sql), MYSQLI_ASSOC);
                        foreach ($books as $book) {
                            echo "<tr>
                                    <td style='border: solid 1px black'>{$book["ISBN"]}</td>
                                    <td style='border: solid 1px black'>{$book["title"]}</td>
                                    <td style='border: solid 1px black'>{$book["copyright"]}</td>
                                    <td style='border: solid 1px black'>{$book["edition"]}</td>
                                    <td style='border: solid 1px black'>{$book["price"]}</td>
                                    <td style='border: solid 1px black'>{$book["quantity"]}</td>
                                    <td style='border: solid 1px black'>" . ($book["quantity"] * $book["price"]) . "</td>
                                </tr>";
                        }
                    ?>
                </table>
            </div>
        </div>

        <?php
            echo $_SESSION["message"]; 
        ?>
    </div>
</body>
</html>