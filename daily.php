<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Update</title>
    <style>
        .container{
            height: 120%;
            width: 35%;
            margin-top: 2%;
            align-items: center;
            display: flex;
            background-color: pink;
            border-radius: 3px;
            justify-content: center;
            margin-left: 30%;
            padding: 1%;

        }
        .upd{
            height: 30px;
            width: 100%;
            background-color:blanchedalmond;
            margin-bottom:5px;
            padding: 5px;   
            
        }
        .form{
           align-items: center;
           display: flex;
           display: block;
           justify-content: center;
            align-items: center;
            font-size: larger;
            text-size-adjust:  none;
        }
        input[type=text], select {
  width: 125%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;

}
input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.row::after {
  content: "";
  display: table;
  clear: both;
}
textarea{
    width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    input[type=text].input[type=date] input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

    </style>

</head>

<body>
    <?php include("header.html")?>
    <h2 class="upd" style="text-align:right; margin-top:2%">Daily Update for <?php echo date('d/m/Y')?></h2>

    <div class="container">
        <form class="form" method="post" action="daily.php">
        <label for="name">Admin Name :</label>
  <select id="name" name="name">
    <option value="VEERA">VEERA</option>
    <option value="AISHWARYA">AISHWARYA</option>
    <option value="SRIDHAR">SRIDHAR</option>
  </select><br><br>
  <label for="name">DATE:</label>

  <input type="date" id="date" name="date"><br><br>
  <label for="name">UPDATE YOUR DAILY WORKS :</label>
<br>
  <textarea class="row" type="text" placeholder="Update.." name="update" style="height: 200px;"></textarea><br><br>

  <input type="submit"  name="submit"><br><br>

        </form>
    </div>
</body>
</html>