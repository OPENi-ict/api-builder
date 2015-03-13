<?php

namespace app\helpers;

use app\models\FollowUserUser;
use yii\db\ActiveRecord;

/**
 * NotificationHelper implements the actions that take place when updates occur in Users or APIs.
 */
class NotifUserHelper
{
	/**
	 * Returns ActiveRecords for FollowUserUser based on an $id
	 * @param integer $id
	 * @return ActiveRecord[] an array of ActiveRecord instances, or an empty array if nothing matches.
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

	/**
	 * Changes all changed_photo boolean of FollowUserUser to true
	 * @param integer $id
	 * @return integer the number of rows updated
	 */
	public function userChangedPhoto($id)
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
	public function userChangedLinkedIn($id)
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
	public function userChangedGithub($id)
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
	 * Updates created_api of FollowUserUser to contain the newly created api
	 * @param integer $id
	 * @return integer the number of rows updated
	 */
	public function userChangedCreatedApi($id)
	{
		$fUUs = $this->getFollowUserUsers($id);
		foreach($fUUs as $fUU)
		{
			if ($fUU->created_api == null)
				$fUU->created_api = $id;
			else
				$fUU->created_api .= ','.$id;
			$fUU->save();
		}
		return $this->getFollowUserUsersNumber($id);
	}

	/**
	 * Updates changed_upvotes_api of FollowUserUser to contain the new upvoted api
	 * @param integer $id
	 * @return integer the number of rows updated
	 */
	public function userChangedUpvotesApis($id)
	{
		$fUUs = $this->getFollowUserUsers($id);
		foreach($fUUs as $fUU)
		{
			if ($fUU->changed_upvotes_apis == null)
				$fUU->changed_upvotes_apis = $id;
			else
				$fUU->changed_upvotes_apis .= ','.$id;
			$fUU->save();
		}
		return $this->getFollowUserUsersNumber($id);
	}

	/**
	 * Updates changed_downvotes_api of FollowUserUser to contain the new downvoted api
	 * @param integer $id
	 * @return integer the number of rows updated
	 */
	public function userChangedDownvotesApis($id)
	{
		$fUUs = $this->getFollowUserUsers($id);
		foreach($fUUs as $fUU)
		{
			if ($fUU->changed_downvotes_apis == null)
				$fUU->changed_downvotes_apis = $id;
			else
				$fUU->changed_downvotes_apis .= ','.$id;
			$fUU->save();
		}
		return $this->getFollowUserUsersNumber($id);
	}
}