<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <style>
       .container{
        margin-top: 1.5%;
        position: relative;
        text-align: center;
        color:red;
        font-weight: bold;
        font-size: xx-large;
        background-color: black;
        
       }
       .ada{
        position: absolute;
        bottom: 250px;
        left:100px;
       }
       .reg{
        position: absolute;
        bottom: 120px;
        left: 250px;
        height: 50px;
        width: 200px;
        background-color: green;
        text-align: center;
        font-size: large;
       }
       
    </style>
</head>
<body>
    <?php include ("header.html");?>
    <div class="container">
            <img src="images/logo.png" height="500px" width="50%" style="padding-left: 50%;" alt="banner">
            <div   class="ada"><i style="color:white">ZENIFYTECH </i>ADMIN PANEL <br>TO VIEW &  REPORT THEIR WORK<br> WITHIN A TIME </div>
            <button class="reg"> ADD MEMBER</button>
        </div>
</body>
</html>