<?php
$name = "";
$nameErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
  } else {
    $name =$_POST["name"];
    // check if name only contains letters and whitespace
  }

  }
  
?>
<!DOCTYPE html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>D e m o n  S u m m o n e r  L o g i n</title>

<link rel="stylesheet" type="text/css" href="site2.css">

</head>

<body>
<div class="MainClass">
<div class="darker">
<div class="dark">

<div class="opacity">
<div class="container">
    <div class="row">
<div class="nav">
        | <a href="http://csc412sfsu.com/~stama/" style="font-size: 15px">index</a> | 
        <a href="http://csc412sfsu.com/~stama/about" style="font-size: 15px">about</a> | 
        <a href="http://csc412sfsu.com/~stama/vglist" style="font-size: 15px">video game list</a>  | 
        <a href="http://csc412sfsu.com/~stama/login" style="font-size: 15px">demon summoner login</a>  | 
  </div>
    </div>
<div class="opacityContent">
    
<img src="https://66.media.tumblr.com/a3626d53cb184d88ac0dcb4915683957/tumblr_nyk8sr5bKs1t95vo6o5_400.gif" alt="" style="box-shadow: none; width:150px; height:150px;"/>
<h1 id="intro">Welcome</h1><h1 id="intro">Demon</h1><h1 id="intro">Summoner!</h1>
<hr>
</div>

<div class="opacityContent2">
<br>
<br>
<form name="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<p>User ID:</p><input class="text" type="text" name="myForm" size="25" placeholder="AKHKARU"  value="<?php echo $name;?>">
<br>
<p>Password:</p>
<input class="text" type="password" size="25" name="userID">
<span class="error">* <?php echo $nameErr;?></span>
<br>
    <?php
    if (empty($_POST["name"])){
        echo "Please enter name.";
    }
    else{
    echo "Not a verified user. Please try a different login or get a login from an existing user.";
    echo "<br>";
    }
    ?>
<br>
<input class="button" type="submit" value="Login">
</form>
<p>NOTE: We select our new users with care. The only way to obtain a login is to obtain a permission code from an existing user.</p>
</div>
</div>
</div>
</div>
</div>
    <div>All images © 1992-2018 ATLUS.</div>
    </div>
</body>
</html>

</form>
</div>
</body>

</html>