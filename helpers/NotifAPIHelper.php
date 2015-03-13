<?php

namespace app\helpers;

use app\models\FollowUserApi;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;

/**
 * NotificationHelper implements the actions that take place when updates occur in Users or APIs.
 */
class NotifAPIHelper
{
	/**
	 * Returns ActiveRecords for FollowUserApi based on an $id
	 * @param integer $id
	 * @return ActiveRecord[] an array of ActiveRecord instances, or an empty array if nothing matches.
	 */
	private function getFollowUserApis($id)
	{
		return FollowUserApi::findAll([
			'api' => $id
		]);
	}

	/**
	 * Returns Number of Followers to be notified
	 * @param integer $id
	 * @return integer
	 */
	private function getFollowUserApisNumber($id)
	{
		return FollowUserApi::find([
			'api' => $id
		])->count();
	}

	/**
	 * Changes all changed_name boolean of FollowUserAPI to true and updates the old_name of the FollowUserAPI
	 * @param integer $id
	 * @param string $old_name
	 * @return integer the number of rows updated
	 */
	public function apiChangedName($id, $old_name)
	{
		$fUAs = $this->getFollowUserApis($id);
		foreach($fUAs as $fUA)
		{
			$fUA->changed_name_old_name = $old_name;
			$fUA->changed_name = true;
			$fUA->save();
		}
		return $this->getFollowUserApisNumber($id);
	}

	/**
	 * Changes all changed_descr boolean of FollowUserAPI to true
	 * @param integer $id
	 * @return integer the number of rows updated
	 */
	public function apiChangedDescription($id)
	{
		$fUAs = $this->getFollowUserApis($id);
		foreach($fUAs as $fUA)
		{
			$fUA->changed_descr = true;
			$fUA->save();
		}
		return $this->getFollowUserApisNumber($id);
	}

	/**
	 * Changes all changed_version boolean of FollowUserAPI to true
	 * @param integer $id
	 * @return integer the number of rows updated
	 */
	public function apiChangedVersion($id)
	{
		$fUAs = $this->getFollowUserApis($id);
		foreach($fUAs as $fUA)
		{
			$fUA->changed_version = true;
			$fUA->save();
		}
		return $this->getFollowUserApisNumber($id);
	}

	/**
	 * Adds 1 to the changed_upvotes integer of FollowUserAPI
	 * @param integer $id
	 * @return integer the number of rows updated
	 */
	public function apiChangedUpvotes($id)
	{
		$fUAs = $this->getFollowUserApis($id);
		foreach($fUAs as $fUA)
		{
			$fUA->changed_upvotes++;
			$fUA->save();
		}
		return $this->getFollowUserApisNumber($id);
	}

	/**
	 * Adds 1 to the changed_downvotes integer of FollowUserAPI
	 * @param integer $id
	 * @return integer the number of rows updated
	 */
	public function apiChangedDownVotes($id)
	{
		$fUAs = $this->getFollowUserApis($id);
		foreach($fUAs as $fUA)
		{
			$fUA->changed_downvotes++;
			$fUA->save();
		}
		return $this->getFollowUserApisNumber($id);
	}

	/**
	 * Changes all changed_proposed boolean of FollowUserAPI to true
	 * @param integer $id
	 * @return integer the number of rows updated
	 */
	public function apiChangedProposed($id)
	{
		$fUAs = $this->getFollowUserApis($id);
		foreach($fUAs as $fUA)
		{
			$fUA->changed_proposed = true;
			$fUA->save();
		}
		return $this->getFollowUserApisNumber($id);
	}

	/**
	 * Changes all changed_published boolean of FollowUserAPI to true
	 * @param integer $id
	 * @return integer the number of rows updated
	 */
	public function apiChangedPublished($id)
	{
		$fUAs = $this->getFollowUserApis($id);
		foreach($fUAs as $fUA)
		{
			$fUA->changed_published = true;
			$fUA->save();
		}
		return $this->getFollowUserApisNumber($id);
	}

	/**
	 * Changes all changed_privacy boolean of FollowUserAPI to true
	 * @param integer $id
	 * @return integer the number of rows updated
	 */
	public function apiChangedPrivacy($id)
	{
		$fUAs = $this->getFollowUserApis($id);
		foreach($fUAs as $fUA)
		{
			$fUA->changed_privacy = true;
			$fUA->save();
		}
		return $this->getFollowUserApisNumber($id);
	}

	/**
	 * Adds 1 to the changed_objects_number integer of FollowUserAPI
	 * @param integer $id
	 * @return integer the number of rows updated
	 */
	public function apiChangedObjectsNumber($id)
	{
		$fUAs = $this->getFollowUserApis($id);
		foreach($fUAs as $fUA)
		{
			$fUA->changed_objects_number++;
			$fUA->save();
		}
		return $this->getFollowUserApisNumber($id);
	}

	/**
	 * Returns ActiveRecords for FollowUserApi based on my $id (This is what APIs I follow)
	 * @param integer $id
	 * @return ActiveDataProvider
	 */
	public function getAllAPIChangesForWhatIFollow($id)
	{
		$query = FollowUserApi::find();
		$query->where([
			'and',
			['follower' => $id],
			['or',
				['changed_name' => 1],
				['changed_descr' => 1],
				['not', ['changed_upvotes' => 0]],
				['not', ['changed_downvotes' => 0]],
				['changed_proposed' => 1],
				['changed_published' => 1],
				['changed_privacy' => 1],
				['not', ['changed_objects_number' => 0]],
			]
		]);

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		return $dataProvider;
	}

	/**
	 * Clears Up all API-related notifications
	 * @param integer $id
	 */
	public function clearAllAPIChangesIFollow($id)
	{
		$query = FollowUserApi::find([
			'follower' => $id,
			['or', [
				'changed_name' => 1,
				'changed_descr' => 1,
				['not', 'changed_upvotes', 0],
				['not', 'changed_downvotes',0],
				'changed_proposed' => 1,
				'changed_published' => 1,
				'changed_privacy' => 1,
				['not', 'changed_objects_number', 0],
			]]
		])->all();
		foreach ($query as $fUA) {
			$fUA->changed_name = 0;
			$fUA->changed_upvotes = 0;
			$fUA->changed_downvotes = 0;
			$fUA->changed_proposed = 0;
			$fUA->changed_published = 0;
			$fUA->changed_privacy = 0;
			$fUA->changed_objects_number = 0;
			$fUA->update();
		}
	}
}