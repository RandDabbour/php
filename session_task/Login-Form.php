<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            background-color: pink;
            height: auto;
            width: 300px;
            
            justify-content: center;
            align-items: center;
            margin:0;
            padding: 0;
           
        }
        input {
            display: flex;
            flex-direction: row;
            margin-bottom: 20px;
            color: gray;
            height: 20px;

        }
    </style>
</head>
<body>
    <div>
    <form action="View-form.php" method="POST">
        <label for="name">name:</label>
        <input type="text" name="name">
        <label for="email">Email:</label>
        <input type="email" name="email">
        <label for="password">password:</label>
        <input type="password" name="password">
        <input type="submit" value="submit">
    </form>
</div>
</body>
</html>