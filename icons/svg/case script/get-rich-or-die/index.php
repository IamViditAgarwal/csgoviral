<?php
session_start();
if ($_SESSION['auth_admin'] == 'yes_auth')
{
if (isset($_GET["logout"]))
{
	unset($_SESSION['auth_admin']);
	header ("location: login.php");
}
$_SESSION['urlpage'] = "<a href='/'>Site</a>  /  <a>Admin panel</a>";
include("connector.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin panel</title>
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
    <div>
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo"  class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">CSGO-Enemy</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                
               
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/fe/fef49e7fa7e1997310d705b2a6158ff8dc1cdfeb_full.jpg" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs">Ventor</span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="?logout"><i class="fa fa-key"></i>Exit</a></li>
                        </ul>
                    </li>
                                   </ul>
            </div>
        </nav>
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
                <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                     <div class="clearfix"></div>
                    <li><a href="index.php"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Homepage</span></a></li>
                    <li><a href="users.php"><i class="fa fa-users fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i><span class="menu-title">Users</span></a>
                       
                    </li>
                    <li><a href="cases.php"><i class="fa fa-suitcase fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Cases</span></a>
                       
                    </li>

                    <li class="active"><a href="faq.php"><i class="fa fa-question fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">FAQ</span></a>
                      
                    </li>
                       <li><a href="items.php"><i class="fa fa-check-square-o fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Items</span></a>
                      
                    </li>
					<li ><a href="itemserror.php"><i class="fa fa-bomb fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Items Error</span></a>
                      
                    </li>
                    </li>
                    <li><a href="add_faq.php"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Add FAQ</span></a>
                      
                    </li>
					 <li><a href="add_items.php"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Add Items</span></a>
                      
                    </li>
                    <li ><a href="add_cases.php"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Add cases</span></a>
                       
                    </li>
                </ul>
            </div>
        </nav>
            <!--END SIDEBAR MENU-->
          
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                           Adminstrator panel</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<?php echo $_SESSION['urlpage']; ?>&nbsp;&nbsp;</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                        
 <?php
  $sum1=mysql_query("SELECT SUM(price) FROM drops",$bd); 
  $summoney=mysql_result($sum1,0); 
  $sum2=mysql_query("SELECT SUM(profit) FROM users",$bd); 
  $profit=mysql_result($sum2,0); 
  $sum3=mysql_query("SELECT SUM(amount) FROM payments",$bd); 
  $earn=mysql_result($sum3,0); 
  $all_count = mysql_query("SELECT * FROM users",$bd);
  $all_count_rez = mysql_num_rows($all_count);
?>                     
                <!--BEGIN CONTENT-->
                <div class="page-content">
                                            <div id="sum_box" class="row mbl">
                            <div class="col-sm-6 col-md-3">
                                <div class="panel profit db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-shopping-cart"></i>
                                        </p>
                                        <h4 class="value">
                                            <span data-counter="" data-start="10" data-end="50" data-step="1" data-duration="0">
                                            </span> <?php echo $summoney; ?> <span>руб.</span></h4>
                                        <p class="description">
                                            We got users</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 40%;" class="progress-bar progress-bar-success"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel income db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-money"></i>
                                        </p>
                                        <h4 class="value">
                                            <span><?php echo $earn; ?></span><span>руб.</span></h4>
                                        <p class="description">
                                            We spend on cases</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 60%;" class="progress-bar progress-bar-info"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel task db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-signal"></i>
                                        </p>
                                        <h4 class="value">
                                            <span><?php echo $profit; ?></span></h4>
                                        <p class="description">
                                           User Profiles</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 50%;" class="progress-bar progress-bar-danger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel visit db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-group"></i>
                                        </p>
                                        <h4 class="value">
                                            <span><?php echo $all_count_rez; ?></span></h4>
                                        <p class="description">
                                           Registered users</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="3100"
                                                style="width: 5%;" class="progress-bar progress-bar-warning"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-4">
                                <div class="portlet box">
                                    <div class="portlet-header">
                                        <div class="caption">
                                            Latest wins</div>
                                    </div>
                                                 
                                 
                           
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th><center>Case Name</center></th>
                                        <th><center>Value</center></th>
                                    </tr>
                                    </thead>
                                    <tbody>
<?php
$num = 5;
$page =$_GET['page'];
$page =mysql_real_escape_string($page);
$count = mysql_query("SELECT COUNT(*) FROM drops",$bd);
$temp = mysql_fetch_array($count);
$post = $temp[0];

$total =(($post -1)/$num) +1;
$total = intval($total);

$page = intval($page);

if(empty($page) or $page <0) $page =1;
	if($page > $total) $page = $total;

$start = $page * $num - $num;

if ($temp[0] > 0)
{
$result = mysql_query("SELECT * FROM drops ORDER BY id DESC LIMIT $start, $num",$bd);
if (mysql_num_rows($result) > 0)
{
$row = mysql_fetch_array($result);
do

echo '
<tbody align="center">
																				<tr>			<td>'.$row['casename'].'</td>
																								<td >'.$row['price'].'</td>
																								
																								</tr>

																		</tbody>
																			


';
	
while	($row = mysql_fetch_array($result));
}
}
?>	                               
                           
                                    </tbody>
                                </table>
                            
                        </div>
                                </div>
                            </div>
                                                    <div class="col-lg-4">
                                <div class="portlet box">
                                    <div class="portlet-header">
                                        <div class="caption">
                                            Recent items</div>
                                    </div>
                                                 
                                 
                           
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th><center>Item</center></th>
                                        <th><center>Name</center></th>
                                    </tr>
                                    </thead>
                                    <tbody>
<?php
$num = 5;
$page =$_GET['page'];
$page =mysql_real_escape_string($page);
$count = mysql_query("SELECT COUNT(*) FROM items",$bd);
$temp = mysql_fetch_array($count);
$post = $temp[0];

$total =(($post -1)/$num) +1;
$total = intval($total);

$page = intval($page);

if(empty($page) or $page <0) $page =1;
	if($page > $total) $page = $total;

$start = $page * $num - $num;

if ($temp[0] > 0)
{
$result = mysql_query("SELECT * FROM items ORDER BY id DESC LIMIT $start, $num",$bd);
if (mysql_num_rows($result) > 0)
{
$row = mysql_fetch_array($result);
do

echo '
<tbody align="center">
																				<tr>			<td>'.$row['weapon'].'</td>
																								<td >'.$row['name'].'</td>
																								
																								</tr>

																		</tbody>
																			


';
	
while	($row = mysql_fetch_array($result));
}
}
?>	                               
                           
                                    </tbody>
                                </table>
                            
                        </div>
                                </div>
                            </div>
                                                    <div class="col-lg-4">
                                <div class="portlet box">
                                    <div class="portlet-header">
                                        <div class="caption">
                                           Recent users</div>
                                    </div>
                                                 
                                 
                           
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th><center>Steam account</center></th>
                                        <th><center>Login</center></th>
                                    </tr>
                                    </thead>
                                    <tbody>
<?php
$num = 5;
$page =$_GET['page'];
$page =mysql_real_escape_string($page);
$count = mysql_query("SELECT COUNT(*) FROM users",$bd);
$temp = mysql_fetch_array($count);
$post = $temp[0];

$total =(($post -1)/$num) +1;
$total = intval($total);

$page = intval($page);

if(empty($page) or $page <0) $page =1;
	if($page > $total) $page = $total;

$start = $page * $num - $num;

if ($temp[0] > 0)
{
$result = mysql_query("SELECT * FROM users ORDER BY steamid DESC LIMIT $start, $num",$bd);
if (mysql_num_rows($result) > 0)
{
$row = mysql_fetch_array($result);
do

echo '
<tbody align="center">
																				<tr>			<td>'.$row['steamid'].'</td>
																								<td >'.$row['name'].'</td>
																								
																								</tr>

																		</tbody>
																			


';
	
while	($row = mysql_fetch_array($result));
}
}
?>	                               
                           
                                    </tbody>
                                </table>
                            
                        </div>
                                </div>
                            </div>
    
                            
                        </div>
                    </div>
                </div>
                <!--END CONTENT-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src="script/jquery-1.10.2.min.js"></script>
    <script src="script/jquery-migrate-1.2.1.min.js"></script>
    <script src="script/jquery-ui.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/bootstrap-hover-dropdown.js"></script>
    <script src="script/html5shiv.js"></script>
    <script src="script/respond.min.js"></script>
    <script src="script/jquery.metisMenu.js"></script>
    <script src="script/jquery.slimscroll.js"></script>
    <script src="script/jquery.cookie.js"></script>
    <script src="script/icheck.min.js"></script>
    <script src="script/custom.min.js"></script>
    <script src="script/jquery.news-ticker.js"></script>
    <script src="script/jquery.menu.js"></script>
    <script src="script/pace.min.js"></script>
    <script src="script/holder.js"></script>
    <script src="script/responsive-tabs.js"></script>
    <script src="script/jquery.flot.js"></script>
    <script src="script/jquery.flot.categories.js"></script>
    <script src="script/jquery.flot.pie.js"></script>
    <script src="script/jquery.flot.tooltip.js"></script>
    <script src="script/jquery.flot.resize.js"></script>
    <script src="script/jquery.flot.fillbetween.js"></script>
    <script src="script/jquery.flot.stack.js"></script>
    <script src="script/jquery.flot.spline.js"></script>
    <script src="script/zabuto_calendar.min.js"></script>
    <script src="script/index.js"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src="script/highcharts.js"></script>
    <script src="script/data.js"></script>
    <script src="script/drilldown.js"></script>
    <script src="script/exporting.js"></script>
    <script src="script/highcharts-more.js"></script>
    <script src="script/charts-highchart-pie.js"></script>
    <script src="script/charts-highchart-more.js"></script>
    <!--CORE JAVASCRIPT-->
    <script src="script/main.js"></script>
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>
</body>
</html>
<?php
}else
{
	header ("location: login.php");
}
?>