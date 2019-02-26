<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use app\models\Accesslog;
use yii\widgets\Pjax;

/* @var $this yii\web\View */

$this->title = 'IP Locator';

?>


<!-- donut pie chart from https://developers.google.com/chart/interactive/docs/gallery/piechart#donut-->
<head>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
		google.charts.load("current", {packages:["corechart"]});
		google.charts.setOnLoadCallback(drawChart);
		function drawChart() {
			var data = google.visualization.arrayToDataTable([
				['Location', 'Count'],
				// Get the infromation for each location
				<?php
					foreach($model::find()->all() as $loc) {
						echo('[\'' . $loc->physicalLocation . '\', ' . count($loc->validAccessLogs) . '],');
					} 
				?>
				]);

			var options = {
				title: 'Location Pie Chart',
				pieHole: 0.4,
			};

			var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
			chart.draw(data, options);
		}
	</script>
</head>

<!-- Row for displaying the Location table and the graph-->
<div class="row">
	<!-- Column for displaying the table -->
	<div class="col-md-6">
		<?php Pjax::begin(); ?>
		<?= GridView::widget([
		    'dataProvider' => $model->search(),
		    'columns' => [
		    	[
		    		'header' => 'Location',
		    		'format' => 'raw',
		    		'value' => function($data) {
		    			return Html::a($data->physicalLocation, Url::to(['/site/location/', 'id' => $data->id]));
		    		}
		    	],
		    	[ 
		    		'header' => 'Access Count',
		    		'format' => 'raw',
		    		'value' => function($data) {
		    			return Html::encode(count($data->validAccessLogs));
		    		}
		    	],
		    ],
		]) ?>
		<?php Pjax::end(); ?>
	</div>

	<!-- Column for displaying the graph -->
	<div class="col-md-6">
		<div id="donutchart" style="width: 800px; height: 300px;"></div>
	</div>
</div>


<!-- Row for displaying the invalid logs table -->
<div class="row">
	<!-- Column for the invalud logs table -->
	<div class="col-md-6">
		<?php
			echo(Html::beginTag('h4'));
			echo('IP Addresses with 404 status');
			echo(Html::endTag('h4'));
			$invalid = [];
			foreach(AccessLog::getAllInvalidLogs() as $log) {
				array_push($invalid, $log->ip . ' - ' . $log->status);
			}
			echo(Html::ul($invalid));

		?>
	</div>

</div>



