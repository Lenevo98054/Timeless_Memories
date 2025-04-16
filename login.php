<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
body{
    display:flex;
    justify-content: center;
    align-items: center;
    height:100vh;


}
*{
    font-family:sans-serif;
    box-sizing: border-box;
}
form{
    width:500px;
    border:2px solid #ccc;
    padding:30px;
    background: #fff;
    border-radius:15px;
    background-color: rgba(0,0,0,0.5);
}
h2
{
text-align: center;
margin-bottom: 40px;
color: whitesmoke;
}
input{
    display:flex ;
    border:2px solid #ccc;
    width:95%;
    padding:10px ;
    margin:10px auto;
    border-radius:5px;
}
label{
    color:whitesmoke;
    font-size:18px;
    padding:10px;

}
button{
    float:right;
    background: #555;
    padding:10px 15px;
    color:#fff;
    border-radius:5px;
    margin-right:10px;
    border:none;


}
button:hover{
    opacity: .7;
}
body{
    background-repeat: no-repeat;
    background-image: url("image.png");
    background-size: cover;
}
a{
    color: white;
}
select{
    border-radius: 10%;
    width: 96%;
    font-size:18px;
    padding:10px;

}



    </style>
</head>
<body>

    
    <?php
    session_start();
    if (isset($_SESSION['error'])) {
        echo "<p style='color:red;'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);
    }
    ?>

    <form action="login_process.php" method="post">
    
    <h2>LOGIN</h2>
    <label>username</label>
    <input type="username" name="username" placeholder="username" ><BR>

    
    <label>PASSWORD</label>
    <input type="password" name="password" placeholder="password"><BR>


    <button type="submit">login</button>

    </form>
</body>
</html>
