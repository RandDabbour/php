<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: 1px solid black;
            padding: 5px;
        }
        .heide{
            display: none;
        }
    </style>
</head>
<body>
    <button onclick="showtable()" id="btn-Table">show table</button>
    <?php

    session_start();

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(!isset($_SESSION["users"]))
        {
        $_SESSION['users']=[];
        }
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $newUser=[
            "name"=>$name,
            "email"=>$email,
            "password"=>$password,
        ];
        $_SESSION["users"][]=$newUser;

        echo '<table id = "Showtable">';
        foreach($_SESSION["users"] as $user){
            echo "<tr><td>Name:</td><td>";
            echo $user["name"];
            echo "</td></tr>";
            echo "<tr><td>email:</td><td>";
            echo $user["email"];
            echo "</td></tr>";
            echo "<tr><td>password:</td><td>";
            echo $user["password"];
            echo "</td></tr>";
        }
        echo "</table>";
        echo "<br><br><br><br>";
    }


?>

<!-- <button onclick="show-table()" id="Showtable">show table</button> -->
<script>
    function showtable()
    {
        var table = document.getElementById("Showtable");

        if (table.style.display == "none")
    {
        table.style.display ="block";
        document.getElementById("btn-Table").value="hey";

    }
    else{
        table.style.display = "none";
    }
    }
    </script>


</body>
</html>



