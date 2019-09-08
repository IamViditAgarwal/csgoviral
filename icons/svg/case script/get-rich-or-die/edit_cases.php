<?php
session_start();
if ($_SESSION['auth_admin'] == 'yes_auth') {
    if (isset( $_GET['logout'])) {
        unset($_SESSION['auth_admin']);
        header ('Location: login.php');
    }
    $_SESSION['urlpage'] = "<a href='index.php'>Homepage</a> / <a href='cases.php'>Add</a> / <a>Cases </a> ";
    include ('connector.php');
    $id = $_GET["id"];
    $action = $_GET["action"];
    if(isset($action))
    {
	switch ($action) {
		case 'delete':
		if (file_exists("./images/".$_GET["img"]))
		{
			unlink("./images/".$_GET["img"]);
		}
		break;
	    }
    }
    if ($_POST['submit_save']) {
            $error = array();
                if (empty($_POST['upload_image'])) {
                    include('upload-image.php');
                    unset($_POST['upload_image']);
                } else {
                    print "no";
                }
			if (isset($_POST['chk_stock'])) 
			{ 
				$checked2 = "1"; 
			}else{ 
				$checked2 = "0"; 
			}					
			if (isset($_POST['chk_visible'])) 
			{ 
				$checked1 = "1"; 
			}else{ 
				$checked1 = "0"; 
			}
			
            
            if (!empty($error)) {
                $_SESSION['message'] = '<p id="form-error">'.implode('<br />', $error).'</p>';
            } else {
            	$querynew = "class='{$_POST["form_class"]}',name='{$_POST["form_name"]}',title='{$_POST["form_title"]}',price='{$_POST["form_price"]}',lim='{$_POST["form_lim"]}',items='{$_POST["form_items"]}',visible='.$checked1.',red_stock='.$checked2.'";
            	$update = mysql_query("UPDATE cases SET $querynew WHERE id='$id'",$bd);
                $_SESSION['message'] = '<p id="form-success">Case successfully changed!</p>';
               
               
             }
        
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add cases</title>
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
                        
                        
                <!--BEGIN CONTENT-->
                <div class="page-content">     

<?php
$all_count = mysql_query("SELECT * FROM cases",$bd);
$all_count_rez = mysql_num_rows($all_count);
?>
            <?php
            if (isset($msgerror)) echo '<p id="form-error" align="center">'.$msgerror.'</p>';
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }
            ?>
<?php
$result = mysql_query("SELECT * FROM cases WHERE id='$id'",$bd);
if (mysql_num_rows($result) > 0)
{
	$row = mysql_fetch_array($result);
	do
	{
	echo '<div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="panel panel-green">
                                            <div class="panel-heading">
                                                General description</div>
                                            <div class="panel-body pan">
   <form  enctype="multipart/form-data" method="POST">
                                                <div class="form-body pal">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                               <label for="calssCase" class="control-label">
                                                                    Class Case</label>
                                                                <div class="input-icon right">
                                                                    <i class="fa fa-share"></i>
                                                                    <input id="calssCase" type="text" class="form-control" name="form_class"  value="'.$row['class'].'"/></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="caseName" class="control-label">
                                                                    Case name</label>
                                                                <div class="input-icon right">
                                                                    <i class="fa fa-bolt"></i>
                                                                    <input id="caseName" type="text" placeholder="" class="form-control" name="form_name" value="'.$row['name'].'"/></div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="caseSub" class="control-label">
                                                           Description of the case</label>
                                                        <div class="input-icon right">
                                                            <i class="fa fa-pencil"></i>
                                                            <input id="caseSub" type="text" placeholder="" class="form-control" name="form_title" value="'.$row['title'].'"/></div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label for="casePrice" class="control-label">
                                                           The price of case</label>
                                                        <div class="input-icon right">
                                                            <i class="fa fa-credit-card"></i>
                                                            <input id="casePrice" type="text" placeholder="" class="form-control" name="form_price" value="'.$row['price'].'"/></div>
                                                    </div>
													<div class="form-group">
                                                        <label for="caseCount" class="control-label">
                                                           Number of openings</label>
                                                        <div class="input-icon right">
                                                            <i class="fa fa-credit-card"></i>
                                                            <input id="caseCount" type="text" placeholder="" class="form-control" name="form_lim" value="'.$row['lim'].'"/></div>
                                                    </div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-groups">';
																	   if (strlen($row["picture"]) > 0 && file_exists("./images/".$row["picture"])) {
																						$img_path   = './images/'.$row["picture"];       
																		echo '
																						<div id="baseimg">
																							<img src="'.$img_path.'" width="200" height="200"/>
																						   <a href="edit_cases.php?id='.$row["id"].'&img='.$row["picture"].'&action=delete"><img src="http://abali.ru/wp-content/uploads/2011/04/delete_32x32.png" width="32" height="32"/></a>
																						</div>';
																			} else {
																				echo '<label class="stylelabel">Main picture</label>
																						<div id="baseimg-upload">
																							<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
																							<input type="file" name="upload_image" />
																						</div>';
																			}
														echo '</div>
													</div>	
													<div class="col-md-6">';
									if ($row[visible] == 1)$checked1 = "checked";
									if ($row[red_stock] == 1)$checked2 = "checked";
										echo'   												
														<div class="form-group">
															<ul id="checkbox">
															<input class="checkbox" type="checkbox" name="chk_visible" id="chk_visible" '.$checked1.'/><label for="chk_visible">Enable/ Disable Case</label>
															</ul>
														</div>
														<div class="form-group">
															<ul id="checkbox">
															<input class="checkbox" type="checkbox" name="chk_stock" id="chk_stock" '.$checked2.'/><label for="chk_stock">Enable / Disable the ban on red</label>
															</ul>
														</div>
													</div>
												</div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                 <div class="col-lg-4">

                                   <div class="panel panel-green" style="background:#fff;">
                                            <div class="panel-heading">
                                                Items</div>
                                            <div class="panel-body pan">
                                                <div class="form-body pal">
                                                    <div class="row">
                                                       <div class="form-group">
                                                        <label for="inputMessage" class="control-label">
                                                            Items separated by commas</label><textarea rows="5" class="form-control" name="form_items">'.$row['items'].'</textarea></div> 
                                                       </div> 
                                                </div>
                                                <div class="form-actions text-right pal">
                                                     <input id="submit_form" type="submit" name="submit_save" class="btn btn-primary" value="Save changes"/>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
</div>';	
            	}while ($row = mysql_fetch_array($result));
}


        ?>   </div></div>
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