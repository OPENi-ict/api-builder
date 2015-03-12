<?php

namespace app\helpers;

use app\models\FollowUserApi;
use app\models\FollowUserUser;

/**
 * NotificationHelper implements the actions that take place when updates occur in Users or APIs.
 */
class NotificationHelper
{
	/**
	 * Returns ActiveRecords for FollowUserApi based on an $id
	 * @param integer $id
	 * @return static[] an array of ActiveRecord instances, or an empty array if nothing matches.
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
	 * Returns ActiveRecords for FollowUserUser based on an $id
	 * @param integer $id
	 * @return static[] an array of ActiveRecord instances, or an empty array if nothing matches.
	 */
	private function getFollowUserUsers($id)
	{
		return FollowUserUser::findAll([
			'followee' => $id
		]);
	}

	/**
	 * Returns Number of Followers to be notified
	 * @param integer $id
	 * @return integer
	 */
	private function getFollowUserUsersNumber($id)
	{
		return FollowUserUser::find([
			'followee' => $id
		])->count();
	}

	/** FollowUserApi */

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


	/** FollowUserUser */

	/**
	 * Changes all changed_photo boolean of FollowUserUser to true
	 * @param integer $id
	 * @return integer the number of rows updated
	 */
	public function apiChangedPhoto($id)
	{
		$fUUs = $this->getFollowUserUsers($id);
		foreach($fUUs as $fUU)
		{
			$fUU->changed_photo = true;
			$fUU->save();
		}
		return $this->getFollowUserUsersNumber($id);
	}

	/**
	 * Changes all changed_linkedin boolean of FollowUserUser to true
	 * @param integer $id
	 * @return integer the number of rows updated
	 */
	public function apiChangedLinkedIn($id)
	{
		$fUUs = $this->getFollowUserUsers($id);
		foreach($fUUs as $fUU)
		{
			$fUU->changed_linkedin = true;
			$fUU->save();
		}
		return $this->getFollowUserUsersNumber($id);
	}

	/**
	 * Changes all changed_github boolean of FollowUserUser to true
	 * @param integer $id
	 * @return integer the number of rows updated
	 */
	public function apiChangedGithub($id)
	{
		$fUUs = $this->getFollowUserUsers($id);
		foreach($fUUs as $fUU)
		{
			$fUU->changed_github = true;
			$fUU->save();
		}
		return $this->getFollowUserUsersNumber($id);
	}

	/**
	 * Changes all changed_created_api boolean of FollowUserUser to true
	 * @param integer $id
	 * @return integer the number of rows updated
	 */
	public function apiChangedCreatedApi($id)
	{
		$fUUs = $this->getFollowUserUsers($id);
		foreach($fUUs as $fUU)
		{
			if ($fUU->changed_created_api == null)
				$fUU->changed_created_api = $id;
			else
				$fUU->changed_created_api .= ','.$id;
			$fUU->save();
		}
		return $this->getFollowUserUsersNumber($id);
	}

	/**
	 * Updates changed_upvotes_api of FollowUserUser to contain the new upvoted api
	 * @param integer $id
	 * @return integer the number of rows updated
	 */
	public function apiChangedUpvotesApis($id)
	{
		$fUUs = $this->getFollowUserUsers($id);
		foreach($fUUs as $fUU)
		{
			if ($fUU->changed_upvotes_api == null)
				$fUU->changed_upvotes_api = $id;
			else
				$fUU->changed_upvotes_api .= ','.$id;
			$fUU->save();
		}
		return $this->getFollowUserUsersNumber($id);
	}

	/**
	 * Updates changed_downvotes_api of FollowUserUser to contain the new downvoted api
	 * @param integer $id
	 * @return integer the number of rows updated
	 */
	public function apiChangedDownvotesApis($id)
	{
		$fUUs = $this->getFollowUserUsers($id);
		foreach($fUUs as $fUU)
		{
			if ($fUU->changed_downvotes_api == null)
				$fUU->changed_downvotes_api = $id;
			else
				$fUU->changed_downvotes_api .= ','.$id;
			$fUU->save();
		}
		return $this->getFollowUserUsersNumber($id);
	}
}