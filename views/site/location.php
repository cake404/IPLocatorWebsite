<?php
use yii\helpers\Html;
$this->title = 'Location';


echo(Html::beginTag('h3'));
echo('Location: ' . $model->physicalLocation);
echo(Html::endTag('h3'));
echo(Html::beginTag('h4'));
echo('Address: ' . $model->address);
echo(Html::endTag('h4'));
?>

<br>
<div class="row">
	<!-- List of all of the valid access logs -->
	<div class="col-md-6">
		<?php
			echo(Html::beginTag('h4'));
			echo('Valid Addresses');
			echo(Html::endTag('h4'));
			$valid = [];
			foreach($model->validAccessLogs as $log) {
				array_push($valid, $log->ip . ' - ' . $log->status);
			}
			echo(Html::ul($valid, ['style' => ['padding-left' => '20px']]));
		?>
	</div>
	<!-- List of all of the invalid access logs -->
	<div class="col-md-6">
		<?php
			echo(Html::beginTag('h4'));
			echo('Invalid Addresses');
			echo(Html::endTag('h4'));
			$invalid = [];
			foreach($model->invalidAccessLogs as $log) {
				array_push($invalid, $log->ip . ' - ' . $log->status);
			}
			echo(Html::ul($invalid, ['style' => ['padding-left' => '20px']]));
		?>
	</div>

</div>