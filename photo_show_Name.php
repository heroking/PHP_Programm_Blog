
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Rain_Blog</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->
</head>
<body>

<div class="main"><?php include '/menu/head.php';?> <br>
<br>
<br>
<br>
<div class="content">
<div class="content_resize">
<div class="mainbar">
<?php
require_once 'config/photo_db.php';
$photo_db = new  PHOTO_DB();
$result = $photo_db->mysql_db();
?>

<div class="article">
						<h2>
							<span>相册</span> 
						</h2>
						<?php
 $i = 0;
 while($row = mysql_fetch_array($result)){ ?>
	<img src="<?php $i++; echo $row['p_src'];?>" width="180" height="180" alt="pix" />
<?php if($i==3){
	$i = 0;
	?><br> <?php
}
?>
<?php 
  } 
?>
						<div class="clr"></div>
						<p></p>
						
					</div>
</div>
<div class="sidebar">
<div class="searchform">
<form id="formsearch" name="formsearch" method="post" action=""><span><input
	name="editbox_search" class="editbox_search" id="editbox_search"
	maxlength="80" value="Search our ste:" type="text" /></span> <input
	name="button_search" src="images/search_btn.gif" class="button_search"
	type="image" /></form>
</div>
<div class="gadget">
<h2 class="star"><span>Blog_</span> Menu</h2>
<div class="clr"></div>
<ul class="sb_menu">
<?php include '/menu/head2.php'?>
</ul>
</div>
<div class="gadget">
<h2 class="star"><span>Introduce</span></h2>
<div class="clr"></div>
<ul class="ex_menu">
<?php include '/menu/professional_menu.php'?>
</ul>
</div>
</div>
<div class="clr"></div>
</div>
</div>
<?php include '/menu/foot.php';?></div>
</body>
</html>
