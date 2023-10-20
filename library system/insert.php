<!DOCTYPE html>
<html>
<head>
    <h1>Insert Data into Library Database</h1>
</head>
<body>
    <center>
        <?php
        // Call your database connection file
        require "dbconnect.php";

        // Get data from the user
        $username = $_REQUEST['username'];
        $adm_no = $_REQUEST['adm_no'];
        $book_title = $_REQUEST['book_title'];
        $book_number = $_REQUEST['book_number'];
        $author = $_REQUEST['author'];

        // Insert data into the table
        $sql = "INSERT INTO lib (username, adm_no, book_title, book_number, author) VALUES ('$username', '$adm_no', '$book_title', '$book_number', '$author')";

        if ($conn->query($sql) === true) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $conn->error;
        }

        // Close the database connection
        $conn->close();
        ?>
    </center>
</body>
</html>
