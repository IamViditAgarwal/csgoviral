<?php
session_start();
if ($_SESSION['auth_admin'] == 'yes_auth')
{
if (isset($_GET["logout"]))
{
	unset($_SESSION['auth_admin']);
	header ("location: login.php");
}
$_SESSION['urlpage'] = "<a href='http://domain.com/'>Site</a> / <a href='index.php'>Homepage</a> / <a>Users</a>";
include("connector.php");
$action = $_GET["action"];
if (isset($action))
{
$id=(int)$_GET["id"];
switch ($action) {
case 'delete':
$delete = mysql_query("DELETE FROM users WHERE steamid='$id'",$bd);
break;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Users | Adminstrator panel</title>
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
                <a id="logo"  class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">AdminPanel</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                
               
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/fe/fef49e7fa7e1997310d705b2a6158ff8dc1cdfeb_full.jpg" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs">Admin</span>&nbsp;<span class="caret"></span></a>
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
                    <li class="active"><a href="users.php"><i class="fa fa-users fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i><span class="menu-title">Users</span></a>
                       
                    </li>
                    <li><a href="cases.php"><i class="fa fa-suitcase fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Cases</span></a>
                       
                    </li>

                    <li><a href="faq.php"><i class="fa fa-question fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">FAQ</span></a>
                      
                    </li>
                       <li><a href="items.php"><i class="fa fa-check-square-o fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Items</span></a>
                      
                    </li>
					<li ><a href="itemserror.php"><i class="fa fa-bomb fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Item error</span></a>
                      
                    </li>
                    </li>
                    <li><a href="add_faq.php"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Add FAQ</span></a>
                      
                    </li>
					 <li><a href="add_items.php"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Add items</span></a>
                      
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
                        
                        
                <!--BEGIN CONTENT-->
                <div class="page-content">
<?php
$all_clients = mysql_query("SELECT * FROM users",$bd);
$result_clients = mysql_num_rows($all_clients);
?>
<span class="h2class">Total members <span class="badge bg-theme"><b><?php echo $result_clients; ?></b></span>
<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped">
																		<thead>
																				<tr>
																								<th><center>Steam ID</center></th>
																								<th><center>Nick</center></th>
																								<th><center>Balance</center></th>
																								<th><center>TRADE link</center></th>
																								
																								<th><center>Status</center></th>	
																								<th><center>Edit</center></th>																						
																				</tr>
																		</thead>
<?php
$num = 25;
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
<div class="block-clients">
<tbody align="center">
																				<tr>																								<td>'.$row['steamid'].'</td>
																								<td valign="middle">'.$row["name"].'</td>
																								<td>'.$row['money'].'</td>
																								<td><span class="label label-success">'.$row['tradelink'].'</span></td>
																							    <td>'.$row['status'].'</td><td><span class="tooltip-area">
																									<a  role="button" class="btn btn-primary" href="edit_users.php?id='.$row["steamid"].'">Edit</a>  <a role="button" class="btn btn-danger" href="users.php?'.$url.'id='.$row['steamid'].'&action=delete" class="delete">Delete</a>
																									</span>
</td></tr>

</div>

';

while	($row = mysql_fetch_array($result));
}
} 

if ($page != 1) $prevpage =' <ul data-hover="" class="pagination mtm mbm"><li><a href="users.php?'.$url.'page='.($page -1).'">&laquo;</a></li></ul>';
if ($page != $total) $nextpage ='<ul data-hover="" class="pagination mtm mbm"><li><a href="users.php?'.$url.'page='.($page + 1).'">&lt;</a></li></ul>';

if($page - 5 > 0) $page5left = '<ul data-hover="" class="pagination mtm mbm"><li><a href="users.php?'.$url.'page='. ($page -5) .'">'.($page - 5).'</a></li></ul>';
if($page - 4 > 0) $page4left = '<ul data-hover="" class="pagination mtm mbm"><li><a href="users.php?'.$url.'page='. ($page -4) .'">'.($page - 4).'</a></li></ul>';
if($page - 3 > 0) $page3left = '<ul data-hover="" class="pagination mtm mbm"><li><a href="users.php?'.$url.'page='. ($page -3) .'">'.($page - 3).'</a></li></ul>';
if($page - 2 > 0) $page2left = '<ul data-hover="" class="pagination mtm mbm"><li><a href="users.php?'.$url.'page='. ($page -2) .'">'.($page - 2).'</a></li></ul>';
if($page - 1 > 0) $page1left = '<ul data-hover="" class="pagination mtm mbm"><li><a href="users.php?'.$url.'page='. ($page -1) .'">'.($page - 1).'</a></li></ul>';

if($page + 5 > 0) $page5right = '<ul data-hover="" class="pagination mtm mbm"><li><a href="users.php?'.$url.'page='. ($page +5) .'">'.($page + 5).'</a></li></ul>';
if($page + 4 > 0) $page4right = '<ul data-hover="" class="pagination mtm mbm"><li><a href="users.php?'.$url.'page='. ($page +4) .'">'.($page + 4).'</a></li></ul>';
if($page + 3 > 0) $page3right = '<ul data-hover="" class="pagination mtm mbm"><li><a href="users.phpp?'.$url.'page='. ($page +3) .'">'.($page + 3).'</a></li></ul>';
if($page + 2 > 0) $page2right = '<ul data-hover="" class="pagination mtm mbm"><li><a href="users.php?'.$url.'page='. ($page +2) .'">'.($page + 2).'</a></li></ul>';
if($page + 1 > 0) $page1right = '<ul data-hover="" class="pagination mtm mbm"><li><a href="users.php?'.$url.'page='. ($page +1) .'">'.($page + 1).'</a></li></ul>';

if ($page+5 < $total)
{
$strtotal = '<p class="nav-point">...</p>?<ul data-hover="" class="pagination mtm mbm"><a href="users.php?'.$url.'page='.$total.'">'.$total.'</a></ul> ';
}else
{
$strtotal = "";
}

if ($total > 1)
{
echo $prevpage.$page5left.$page4left.$page3left.$page2left.$page1left."<ul data-hover='' class='pagination mtm mbm'><li><a href='users.php?'.$url.'page=".$page."'>".$page."</a></li></ul>".$page1right.$page2right.$page3right.$page4right.$page5right;
}
?></div>
              
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