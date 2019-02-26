<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Search IP';
?>

<!-- Map taken from https://developers.google.com/maps/documentation/javascript/adding-a-google-map -->
<head>
	<style>
	#map {
		width: 100%;
		height: 400px;
		background-color: grey;
	}
</style>
</head>



<!-- Search form -->
<div class="row">
	<?php
	$form = ActiveForm::begin([
		'id' => 'search-form',
		'options' => ['class' => 'form-horizontal'],
		'method' => 'post', 
		'action' => ['search'],
	])?>
	<?= $form->field($model, 'address') ?>

	<div class="row">
		<div class="form-group">
			<div class="col-lg-6">
				<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
			</div>
		</div>
	</div>
</div>
<?php ActiveForm::end() ?>

<!-- Displayed information if IP is found -->
<div class="row">
	<!-- Text info about IP -->
	<div class="col-lg-6">
		<?php
		if ($location != null && $location->status == 'success') {
			echo(Html::beginTag('h4'));
			echo('Country: ' . $location->country);
			echo(Html::endTag('h4'));

			echo(Html::beginTag('h4'));
			echo('City: ' . $location->city);
			echo(Html::endTag('h4'));

			echo(Html::beginTag('h4'));
			echo('Latitude: ' . $location->lat);
			echo(Html::endTag('h4'));

			echo(Html::beginTag('h4'));
			echo('Longitude: ' . $location->lon);
			echo(Html::endTag('h4'));
		} else if ($location != null && $location->status == 'fail') {
			echo(Html::beginTag('h4'));
			echo('IP Location Failed');
			echo(Html::endTag('h4'));

		} else {
			echo(Html::beginTag('h4'));
			echo('--');
			echo(Html::endTag('h4'));

		}
		?>
	</div>
	
	<!-- Map to display -->
	<div class="col-lg-6">
		<div id="map"></div>

		<!-- Source: https://developers.google.com/maps/documentation/javascript/examples/map-simple -->
		<script>
			var map;
			function initMap() {
				map = new google.maps.Map(document.getElementById('map'), {
					center: {lat: 
						<?php echo( $location != null && $location->status == 'success' ? $location->lat : 35.7796 ) ?>,
						 	 lng:
						<?php echo( $location != null && $location->status == 'success' ? $location->lon : -78.6382 ) ?> 	 
						},
					zoom: 8
				});
			}
		</script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYX2li1F7APHhEPwkIH8FUIhhBnBVlEM0&callback=initMap"
    async defer></script>
	</div>
</div>



