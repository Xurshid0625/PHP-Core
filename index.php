<?php

$host = "localhost";
$username = "postgres";
$password = "postgres";
$dbname = "mydb";

try {
    $connect = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "connect failed:" . $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $body = $_POST['body'];


    $statement = $connect->prepare("INSERT INTO posts (title, body) VALUES (:title, :body)");

    $statement->execute([
            'title' => $title,
            'body' => $body,
    ]);
}

?>



<?php

$statement = $connect->prepare("SELEct * from posts");

$statement->execute();

$posts = $statement->fetchAll();
?>


    <!DOCTYPE html>
    <html>
    <head>
        <title>Page Title</title>
    </head>
    <body>
    <ul>
        <form method="POST" action="">
            <div style="margin-bottom: 40px">
                <input name="title" type="text">
            </div>

            <div>
                <input name="body" type="text">
            </div>
            <button type="submit">Yubor</button>
        </form>
    </ul>

    </body>
    </html>
