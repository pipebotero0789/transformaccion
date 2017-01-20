<body class="nav-md">
	<div class="container body">
      	<div class="main_container">
        <?php
          echo $nav;
        ?>
        	<div class="right_col" role="main">
				<p><?php echo $totalSessions; ?></p>
				<p><?php echo $totalUsers; ?></p>
				<p><?php echo $totalPageViews; ?></p>
				<p><?php echo $totalOrganik; ?></p>
        <p><?php echo $totalBounce; ?></p>
        
			</div>
		</div>
    </div>
    <!-- /page content -->
    <?php 
      echo $footer;
    ?>