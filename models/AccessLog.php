<?php

namespace app\models;

/**
 * Model class for an Access Log
 *
 * @property string log string representing access log
 */
class AccessLog extends \yii\db\ActiveRecord
{

	// table that this AR is related to
	public static function tableName()
	{
		return 'accesslog';
	}

	// Gets all of the logs with an invalid http status
	public static function getAllInvalidLogs() 
	{

		$invalidLogs = [];
		foreach(parent::find()->all() as $log) {
			if ($log->status == '404') {
				array_push($invalidLogs, $log);
			}
		}	
		return $invalidLogs;
	}

	// Gets the status of the access log
	public function getStatus()
	{

		// Match the HTTP code within the log
		if (preg_match( '/[[:space:]][1-5]{1}[0-9]{2}[[:space:]]/', $this->log, $matches)) {			
			return trim($matches[0]);
		} else {
			return 'HTTP CODE NOT FOUND';
		}
	}	

	// Gets the ip address from the access log
	public function getIP () 
	{
		// Match IPv4 (and possibly IPv6) addresses
		if (preg_match('/[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}(\.[0-9]{1,3}\.[0-9]{1,3})? /', $this->log, $matches)) {
			return trim($matches[0]);
		} else {
			return 'IP NOT FOUND';
		}
	}
}


?>
