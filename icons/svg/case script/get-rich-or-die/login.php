<?php
session_start();
include("connector.php");

if ($_POST["submit_enter"])
{
$login = $_POST["input_login"];
$pass = $_POST["input_pass"];

if ($login && $pass)
{
$pass = md5($pass);
$pass = strtolower("md103fq1".$pass."m9iuwa");
$result = mysql_query("SELECT * FROM reg_admin WHERE login = '$login' AND pass = '$pass'",$bd);
if (mysql_num_rows($result) > 0)
{
$row = mysql_fetch_array($result);
$_SESSION['auth_admin'] = 'yes_auth';
echo "<script>function GoRefresh(){ location=\"index.php\"; 
} setTimeout( 'GoRefresh()', 300 );  alert(\"You have successfully logged into the admin panel!\");</script>";

}else
{
$msgerror = "Incorrect Username / Password.";
}
}else
{
$msgerror = "Fill out the field.";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Administrative panel domain.com</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="styles/animate.css">
    <link type="text/css" rel="stylesheet" href="styles/all.css">
    <link type="text/css" rel="stylesheet" href="styles/main.css">
    <link type="text/css" rel="stylesheet" href="styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="styles/pace.css">
    <link type="text/css" rel="stylesheet" href="styles/jquery.news-ticker.css">
</head>
<body>
<?php
if ($msgerror) {
echo '<p id="msgerror">'.$msgerror.'</p>';
}
?>

 <center><div class="col-lg-4">
									
                                       <div class="panel panel-yellow">
                                            <div class="panel-heading">
                                                Login form</div>
                                            <div class="panel-body pan">
                                                <form method="post" class="form-horizontal">
                                                <div class="form-body pal">
                                                    <div class="form-group">
                                                        <label for="inputName" class="col-md-3 control-label">
                                                            Login</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-user"></i>
                                                                <input id="inputName" name="input_login" type="text" placeholder="" class="form-control" /></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPassword" class="col-md-3 control-label">
                                                            Password</label>
                                                        <div class="col-md-9">
                                                            <div class="input-icon right">
                                                                <i class="fa fa-lock"></i>
                                                                <input id="inputPassword" name="input_pass" type="password" placeholder="" class="form-control" /></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions pal">
                                                    <div class="form-group mbn">
                                                        <div class="col-md-offset-3 col-md-6">
                                                            <input type="submit" name="submit_enter" class="btn btn-primary" value="Вход"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div></center>



</body>
</html>
