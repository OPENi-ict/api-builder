<?php

namespace app\widgets;

use Yii;
use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\i18n\Formatter;
use yii\timeago\TimeAgo;
use yii\widgets\BaseListView;

/**
 * Comments widget displays a comment system for logged users
 *
 * @author Romanos Tsouroplis <rom-dim@hotmail.com>
 */
class Comments extends BaseListView
{
	/**
	 * @var array the HTML attributes for the image element.
	 * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
	 */
	public $imageOptions = ['class' => 'media-object img-circle', 'alt' => 'profile'];
	/**
	 * @var array|Formatter the formatter used to format model attribute values into displayable texts.
	 * This can be either an instance of [[Formatter]] or an configuration array for creating the [[Formatter]]
	 * instance. If this property is not set, the "formatter" application component will be used.
	 */
	public $formatter;
	/**
	 * @var array all comments
	 */
	public $commentsModels = [];
	/**
	 * @var array all comments
	 */
	public $repliesProvider = [];
	/**
	 * @var object Comment model
	 */
	public $model;

	/**
	 * Initializes the grid view.
	 * This method will initialize required property values and instantiate [[columns]] objects.
	 */
	public function init()
	{
		parent::init();
		if ($this->formatter == null) {
			$this->formatter = Yii::$app->getFormatter();
		} elseif (is_array($this->formatter)) {
			$this->formatter = Yii::createObject($this->formatter);
		}
		if (!$this->formatter instanceof Formatter) {
			throw new InvalidConfigException('The "formatter" property must be either a Format object or a configuration array.');
		}
		$this->showOnEmpty = true;
		$this->emptyText = '<p>Currently Empty :(</p><p>Feel free to leave your comment!</p>';
		$this->summary = '';
	}

	public function renderItems()
	{
		// Wrap up the Nav Tabs
		$commentsTabContent = <<<'TAG'
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#comments" role="tab" data-toggle="tab" class="comments-tab btn btn-primary text-capitalize">View Comments</a></li>
                <li><a href="#add-comment" role="tab" data-toggle="tab" class="comments-tab btn btn-primary text-capitalize">Add comment</a></li>
            </ul>
TAG;

		$commentsTabContent .= $this->renderComments();

		$commentsTab = Html::tag('div', $commentsTabContent, ['class' => 'comments-tab']);
		/*$column = Html::tag('div', $commentsTab, ['class' => 'col-sm-10 col-sm-offset-1']);
		$row = Html::tag('div', $column, ['class' => 'row']);
		$container = Html::tag('div', $row, ['class' => 'container']);*/

		return $commentsTab;
	}

	/**
	 * Renders the comments.
	 * @return bool|string the rendered comments element or `false` if no comments element should be rendered.
	 */
	public function renderComments()
	{
		$this->commentsModels = array_values($this->dataProvider->getModels());
		$this->repliesProvider = array_values($this->repliesProvider->getModels());
		$comments = [];
		foreach ($this->commentsModels as $model) {
			// If a Comment is not a reply then render it
			if ($model->reply_to_comment == null) {
				$comments[] = $this->renderCommentWithReplies($model);
			}
		}
		if ($this->dataProvider->getTotalCount() == 0)
			$comments[] = $this->renderEmpty();

		$commentsUl = Html::ul($comments, [
			'encode' => false,
			'class' => 'media-list',
			'item' => function ($item) {
				return "<li class='media'>{$item}</li>";
			}
		]);

		// Make the Tab Pane for wrapping the Comments
		$commentsTabPane = Html::tag('div', $commentsUl, ['class' => 'tab-pane active', 'id' => 'comments']);

		// Add the add comment section
		$commentForm = $this->render('//comments/_form', [
			'model' => $this->model,
		]);
		$commentsTabPane .= Html::tag('div', $commentForm, ['class' => 'tab-pane', 'id' => 'add-comment']);

		// Make the Tab Content for wrapping the Tab Pane
		$commentsTabContent = Html::tag('div', $commentsTabPane, ['class' => 'tab-content']);

		//Mou menei na ftiakso ta nav nav-tabs ul kai meta ta apo pano.. sundesi me vasi kai testing!

		return $commentsTabContent;
	}

	/**
	 * Renders One Comment with its Replies.
	 * @return string the rendered comment element.
	 */
	public function renderCommentWithReplies($model)
	{
		// Render all the Comments along with their Replies
		$replies = [];
		foreach ($this->repliesProvider as $reply){
			if ($reply->reply_to_comment == $model->id)
				$replies[] = $reply;
		}
		return $this->renderOneComment($model, $replies);
	}

	/**
	 * Renders one comment.
	 * @return string the rendered comment element.
	 */
	public function renderOneComment($commentModel, $replies)
	{
		// The comment to build
		$comment = '';

		// Make the Author Profile Pic
		$authorProfilePicture = Yii::getAlias('@web') . "/images/def_avatar.png";
		$authorImage = Html::img($commentModel->createdBy->getImage()->getUrl('100x100'), $this->imageOptions);
		$comment .= Html::a($authorImage, ['/profile/', 'id' => $commentModel->createdBy->id], ['class' => 'pull-left']);

		// Make the Author Name with Date
		$authorName = Html::tag('h5', $commentModel->createdBy->username, ['class' => 'media-heading reviews']);

		$commentDate = TimeAgo::widget(['timestamp' => $commentModel->created_at]);
		$commentDate = Html::tag('p', $commentDate, ['class' => 'media-date text-uppercase reviews list-inline']);
		// Make the actual Comment
		$commentText = Html::tag('p', $commentModel->text, ['class' => 'comment']);
		// Make the Reply Button
		$replyGlyph = Html::tag('span', '', ['class' => 'glyphicon glyphicon-share-alt']);
		$replyButton = Html::a($replyGlyph . ' Reply', '#ReplyTo' . $commentModel->id, ['class' => 'btn btn-sm btn-success btn-circle text-uppercase pull-right reply-btn', 'data' => ['toggle' => 'collapse']]);
		// Make the Show Replies Button if replies do exist
		$repliesGlyph = Html::tag('span', '', ['class' => 'glyphicon glyphicon-comment']);
		if (count($replies) == 1)
			$howManyReplies = ' 1 reply';
		else
			$howManyReplies = ' ' . count($replies) . ' replies';
		$repliesButton = Html::a($repliesGlyph . $howManyReplies, '#RepliesTo' . $commentModel->id, ['class' => 'btn btn-sm btn-primary btn-circle text-uppercase pull-right reply-btn', 'data' => ['toggle' => 'collapse']]);
		// Make the Wrapper for all the above
		$wellDiv = Html::tag('div', $authorName . $commentDate . $commentText . $replyButton . $repliesButton, ['class' => 'well well-lg']);

		// Attach all above into the Comment
		$comment .= Html::tag('div', $wellDiv, ['class' => 'media-body']);

		$this->model->api = $commentModel->api;
		$this->model->object = $commentModel->object;
		$this->model->property = $commentModel->property;
		$this->model->reply_to_comment = $commentModel->id;
		$replyForm = $this->render('//comments/_replyForm', [
			'model' => $this->model,
		]);

		// Attach all above into the Comment
		$comment .= Html::tag('div', $replyForm, ['class' => 'collapse', 'id' => 'ReplyTo'.$commentModel->id]);

		// Make the Replies if they exist
		$repliesUl = '';
		foreach ($replies as $reply)
		{
			$repliesUl .= Html::ul([$this->renderCommentWithReplies($reply)], [
				'encode' => false,
				'class' => 'media-list',
				'item' => function ($item) {
					return "<li class='media media-replied'>{$item}</li>";
				}
			]);
		}

		// Attach replies into the Comment
		$comment .= Html::tag('div', $repliesUl, ['class' => 'collapse', 'id' => 'RepliesTo'.$commentModel->id]);

		return $comment;
	}
}