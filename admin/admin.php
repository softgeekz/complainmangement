<?php include_once("admin_header.php");?>


	<div class="content">
		<?php include("sidebar.php");?>

		<div class="right_content">
				Total Users: <?php echo countrows($connection,"SELECT `id` FROM `users`");?> 
				<br/>
				Total Employee : <?php echo  countrows($connection,"SELECT `id` FROM `employee`");?> 
				
				
				<!--https://developers.google.com/chart/interactive/docs/gallery/piechart-->
				 <div id="piechart" style="width: 900px; height: 500px;"></div>
				<script type="text/javascript" src="../js/charts/loader.js"></script>
		</div>	
	</div>	
			
 <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Unsolved'],
          ['Web',     <?php echo countrows($connection,"SELECT `id` FROM `complain` WHERE `department_id`='1'");?> ],
          ['Network',      <?php echo countrows($connection,"SELECT `id` FROM `complain` WHERE `department_id`='2'");?> ],
          ['Sales',    <?php echo countrows($connection,"SELECT `id` FROM `complain` WHERE `department_id`='3'");?>],
          ['Store',   <?php echo countrows($connection,"SELECT `id` FROM `complain` WHERE `department_id`='4'");?>]
        ]);

        var options = {
          title: 'Unsolved Problem'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
		
<?php include_once("../footer.php");?>	

		
