<?php
namespace app\helpers;

use SplFileObject;
use Yii;

class FileManipulation
{
	private $_filename;
	private $_apisDirectory;

	private function _file_exists()
	{
		if (file_exists($this->$_filename)) {
			echo "The file $this->_filename exists";
		} else {
			echo "The file $this->_filename does not exist";
		}
	}

	public function write_file($input)
	{
		$file = new SplFileObject($this->_apisDirectory . $this->_filename, 'w');
		$file->fwrite($input);
	}

	public function get_md5()
	{
		return md5_file($this->_apisDirectory . $this->_filename);
	}

	/**
	 * @return string
	 */
	public function getFilename()
	{
		return $this->_filename;
	}

	/**
	 * @param string $filename
	 */
	public function setFilename($filename)
	{
		$this->_apisDirectory = Yii::getAlias('@apisDirectory') . '\\';
		$this->_filename = $filename;
	}

	public function makeDirectory($dirname)
	{
		$new_dir = $this->_apisDirectory . '/' . $dirname;
		if (!file_exists($new_dir)) {
			mkdir($new_dir, 0700);
		}
	}
} 