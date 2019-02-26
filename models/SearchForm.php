<?php
namespace app\models;


// Form that allows input from the user dealing with IP addresses
class SearchForm extends \yii\base\Model
{
 	public $address;


 	// Ensures that input from the user is correct
 	public function rules() 
 	{
 		return [
 			[['address'], 'required'],
 			['address', 'ip']
 		];
 	}

}
?>