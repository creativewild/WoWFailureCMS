<html>
  <head></head>
<body>
<h1><img src="../wow/static/images/logos/wof-logo.png" height="21px" width="260px"/><br />
        <span>Admin Login Panel</span></h1>
        <ul id="menu">
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="viewnews.php">News</a></li>
          <li><a href="fcategory.php">Forums</a></li>
          <li><a href="#">Users</a></li>
          <li class="ddm"><a>Account</a>
            <ul class="ddl">
              <li><a href="#">Account</a></li>
              <li><a href="#">Information</a></li>
              <li><a href="#">Edit</a></li>
              <li><a href="#">Log Out</a></li>
            </ul>
          </li>
        </ul>
        <ul id="tablist">
          <li><a href="#a"><span>Web Functions</span></a></li>
	        <li><a href="#b"><span>Server Functions</span></a></li>
	        <li><a href="#c"><span>Account Services</span></a></li>
        </ul>
        <div id="tabsPanel">
          <div id="a" class="tab_content">
            <div class='carousel_container'>
              <div class='left_scroll'><img src='images/leftArrow.png' alt="" /></div>
              <div class='carousel_inner'>
              <ul class='carousel_ul'>
                <li><span rel="tooltip" title="<strong style='color:#8c1e18'>Write News</strong>" style="color:#ff9200;font-weight:bold;font-size:14px;"><a class="ico1" href='writenews.php'></a></span></li>
				        <li><span rel="tooltip" title="<strong style='color:#8c1e18'>View/Edit News</strong>" style="color:#ff9200;font-weight:bold;font-size:14px;"><a class="ico3" href='viewnews.php'></a></span></li>
			         	<li><span rel="tooltip" title="<strong style='color:#8c1e18'>Manage Media</strong>" style="color:#ff9200;font-weight:bold;font-size:14px;"><a class="ico10" href='mediaall.php'></a></span></li>
				        <li><span rel="tooltip" title="<strong style='color:#8c1e18'>Unapproved Media</strong>" style="color:#ff9200;font-weight:bold;font-size:14px;"><a class="icom2" href='mediaun.php'></a></span></li>
				        <li><span rel="tooltip" title="<strong style='color:#8c1e18'>Forums</strong>" style="color:#ff9200;font-weight:bold;font-size:14px;"><a class="icof" href='fcategory.php'></a></span></li>                   
						    
                <li><span rel="tooltip" title="<strong style='color:#8c1e18'>View the Website</strong>" style="color:#ff9200;font-weight:bold;font-size:14px;"><a class="ico4" href='viewwebsite.php'></a></span></li>
						    <li><span rel="tooltip" title="<strong style='color:#8c1e18'>Connectivity</strong>" style="color:#ff9200;font-weight:bold;font-size:14px;"><a class="ico2" href='#'></a></span></li>
                <li><span rel="tooltip" title="<strong style='color:#8c1e18'>Information</strong>" style="color:#ff9200;font-weight:bold;font-size:14px;"><a class="ico9" href='info.php'></a></span></li>
              </ul>
              </div>
              <div class='right_scroll'><img src='images/rightArrow.png' alt="" /></div>
            </div>
          </div>
				  <div id="b" class="tab_content">
            <div class='carousel_container'>
              <div class='left_scroll'><img src='images/leftArrow.png' alt="" /></div>
              <div class='carousel_inner'>
                <ul class='carousel_ul2'>
                  <!-- To do It'll be visible just to superadmins-->
                  <li><span rel="tooltip" title="<strong style='color:#8c1e18'>Users Panel</strong>" style="color:#ff9200;font-weight:bold;font-size:14px;"><a class="ico5" href='users.php'></a></span></li>
						      <li><span rel="tooltip" title="<strong style='color:#8c1e18'>Notes and Dates</strong>" style="color:#ff9200;font-weight:bold;font-size:14px;"><a class="ico6" href='calendarandnotes.php'></a></span></li>
						      <li><span rel="tooltip" title="<strong style='color:#8c1e18'>Edit the DB</strong>" style="color:#ff9200;font-weight:bold;font-size:14px;"><a class="ico7" href='editdb.php'></a></span></li>
						      <li><span rel="tooltip" title="<strong style='color:#8c1e18'>Delete your DB</strong>" style="color:#ff9200;font-weight:bold;font-size:14px;"><a class="ico8" href='deletedb.php'></a></span></li>
                  <li><span rel="tooltip" title="<strong style='color:#8c1e18'>Information</strong>" style="color:#ff9200;font-weight:bold;font-size:14px;"><a class="ico9" href='info.php'></a></span></li>
                </ul>
              </div>
              <div class='right_scroll'><img src='images/rightArrow.png' alt="" /></div>
            </div>
          </div>
				  <div id="c" class="tab_content">
            <div class='carousel_container'>
              <div class='left_scroll'><img src='images/leftArrow.png' alt="" /></div>
              <div class='carousel_inner'>
                <ul class='carousel_ul3'>
                  <li><span rel="tooltip" title="<strong style='color:#8c1e18'>Account Information</strong>" style="color:#ff9200;font-weight:bold;font-size:14px;"><a class="ico9" href='info.php'></a></span></li>
                  <li><span rel="tooltip" title="<strong style='color:red'>Log Out</strong>" style="color:#ff9200;font-weight:bold;font-size:14px;"><a class="ico5" href='logout.php'></a></span></li>
                  </ul>
              </div>
              <div class='right_scroll'><img src='images/rightArrow.png' alt="" /></div>
            </div>
          </div>
        <!--Tab End-->  
      </div>
      <img src="images/shadow.png" class="shadow" alt="" />
</body>
</html>