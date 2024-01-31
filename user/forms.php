<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="../encode.php" method="post">
            <h1>test JWT</h1>
            <input type="text" name="name" placeholder="enter your name..." />
            <input type="number" name="price" placeholder="enter your price..." />
            <input type="submit" value="add item" />
        </form>
        <form method="post" action="create.php">
            <h1>CREATE USER</h1>
            <input type="text" name="name" placeholder="enter your name..." />
            <input type="number" name="price" placeholder="enter your price..." />
            <input type="submit" value="add item" />
        </form>
        <form method="post" action="delete.php">
            <h1>DELETE USER</h1>
            <input type="number" name="id" placeholder="type your id...">
            <input type="submit" value="delete">
        </form>
        <form action="getUsers.php" method="post">
            <h1>GET USER</h1>
            <input type="number" name="id" placeholder="type your id...">
            <input type="submit" value="get users">
        </form>
        <form action="update.php" method="post">
            <h1>UPDATE USER</h1>
            <input type="text" name="name" placeholder="enter your name...">
            <input type="number" name="price" placeholder="enter your price...">
            <input type="number" name="id" placeholder="type your id...">
            <input type="submit" value="update item">
        </form>
    </div>
</body>

</html>