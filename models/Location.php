<?php

namespace app\models;

use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
/**
 * Model class for IP address locations
 *
 * @property string location the ip and its physical location 
 */
class Location extends ActiveRecord
{

	// table that this AR is related to
	public static function tableName()
	{
		return 'location';
	}

	// Virtual Attribute: Gets the IP address of the location
	public function getAddress() 
	{
		return trim(explode(':', $this->location)[0]);
	}

	// Virtual Attribute: Gets the Physical Location
	public function getPhysicalLocation()
	{
		return trim(explode(':', $this->location)[1]);
	}

	// Virtual Attribute: Gets the number of wildcards in the ip address
	public function getWildCardCount()
	{
		return substr_count($this->address, '*');
	}

	// Private helper method: returns the list of logs that accessed this location's ip address
	public function getAccessLogs() 
	{
		$matchedLogs = [];
		// Remove all wildcards from this location's ip address
		$compareAddress = implode('.', explode('.', $this->address, -1 * $this->wildCardCount));
		foreach (AccessLog::find()->all() as $log) {
			// Remove all the log's ip groupings that don't need to be compared
			$compareIp = implode('.', explode('.', $log->ip, -1 * $this->wildCardCount));

			if ($compareIp === $compareAddress) {
				array_push($matchedLogs, $log);
			}
		}
		return $matchedLogs;
	}

	// Virtual Attribute: gets all of the valid accesslogs for this location
	public function getValidAccessLogs()
	{
		$validLogs = [];
		foreach($this->getAccessLogs() as $log) {
			if ($log->status != '404') {
				array_push($validLogs, $log);
			}
		}

		return $validLogs;
	}


	// Virtual Attribute: gets all invalid accesslogs for this location
	public function getInvalidAccessLogs()
	{
		$invalidLogs = [];
		foreach($this->getAccessLogs() as $log) {
			if ($log->status == '404') {
				array_push($invalidLogs, $log);
			}
		}
		return $invalidLogs;
	}


	// Search function to retrieve locations from the db
	public function search($id = null)
    {
        $query = Location::find();
        return new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 3,
            ],
        ]);
    }
}


?>
