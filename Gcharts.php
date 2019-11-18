<!-- this is another php file that has the connection stablished
 -->
 <?php
	include_once 'mySQLconnection.php';
?>

<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">


// ===============================================================================================
// 										PHP
// ===============================================================================================
		
		// ----------------------------------------------------------------------------------
		// 							PIE - the % of stds in schools 
		// ----------------------------------------------------------------------------------
			//Slass
			<?php
				
				$SlassCountSql = "SELECT COUNT(School) FROM studenttable Where School = 'Slass';";
				$Slassresult = mysqli_query($conn, $SlassCountSql);
				$SlassCount= (mysqli_fetch_assoc($Slassresult));
				
			?>
			// SoB
			<?php
				
				$SoBCountSql = "SELECT COUNT(School) FROM studenttable Where School = 'SoB';";
				$SoBresult = mysqli_query($conn, $SoBCountSql);
				$SoBCount= (mysqli_fetch_assoc($SoBresult));
				
			?>

			// SLS
			<?php
				
				$SLSCountSql = "SELECT COUNT(School) FROM studenttable Where School = 'SLS';";
				$SLSresult = mysqli_query($conn, $SLSCountSql);
				$SLSCount= (mysqli_fetch_assoc($SLSresult));
				
			?>

			// SECS
			<?php
				
				$SECSCountSql = "SELECT COUNT(School) FROM studenttable Where School = 'SECS';";
				$SECSresult = mysqli_query($conn, $SECSCountSql);
				$SECSCount= (mysqli_fetch_assoc($SECSresult));
				
			?>

			// SESM
			<?php
				
				$SESMCountSql = "SELECT COUNT(School) FROM studenttable Where School = 'SESM';";
				$SESMresult = mysqli_query($conn, $SESMCountSql);
				$SESMCount= (mysqli_fetch_assoc($SESMresult));
				
			?>

// ===============================================================================================


      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Students');
        data.addColumn('number', 'count');
        data.addRows([
          ['Slass', <?=$SlassCount['COUNT(School)'] ?>],
          ['SoB', <?=$SoBCount['COUNT(School)'] ?>],
          ['SLS', <?=$SLSCount['COUNT(School)'] ?>],
          ['SECS', <?=$SECSCount['COUNT(School)'] ?>],
          ['SESM', <?=$SESMCount['COUNT(School)'] ?>]
        ]);

        // Set chart options
        var options = {'title':'The Percentage of students in different schools',
                       'width':700,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }

    </script>
<!-- The basic bar chart
 -->  
 <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Copper", 8.94, "#b87333"],
        ["Silver", 10.49, "silver"],
        ["Gold", 19.30, "gold"],
        ["Abrarium", 30.30, "black"],
        ["Platinum", 21.45, "color: #e5e4e2"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Density of Precious Metals, in g/cm^3",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  </script>

  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
	<div id="barchart_values" style="width: 900px; height: 300px;"></div>

  </body>
</html>