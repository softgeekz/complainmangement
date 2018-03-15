<?php include_once("admin_header.php");?>


	<div class="content">
		<?php include("sidebar_user.php");?>

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
          ['Web',     11],
          ['Network',      2],
          ['Sales',  2],
          ['Store', 2]
        ]);

        var options = {
          title: 'Unsolved Problem'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
		
<?php include_once("../footer.php");?>	

		
