<?php

namespace app\helpers;

use yii\base\Object;

class BuildSwaggerAll {

	private $_partialAnnotations = '';
	private $_swaggerClass = '';
	private $_swaggerModels = '';

	private $_objectName;

	private function _Types($type)
	{
		$response = [
			'type' => '',
			'format' => ''
		];
		switch ($type) {
			case 'int':
			case 'integer':
				$response['type'] = 'integer';
				$response['format'] = 'int32';
				break;
			case 'long':
				$response['type'] = 'integer';
				$response['format'] = 'int64';
				break;
			case 'float':
				$response['type'] = 'number';
				$response['format'] = 'float';
				break;
			case 'double':
				$response['type'] = 'number';
				$response['format'] = 'double';
				break;
			case 'string':
				$response['type'] = 'string';
				break;
			case 'byte':
				$response['type'] = 'string';
				$response['format'] = 'byte';
				break;
			case 'boolean':
				$response['type'] = 'boolean';
				break;
			case 'date':
				$response['type'] = 'string';
				$response['format'] = 'date';
				break;
			case 'dateTime':
				$response['type'] = 'string';
				$response['format'] = 'date-time';
				break;
			case 'Object':
				$response['type'] = 'object';
				break;
			default :
				$response['type'] = $type;
				break;
		}
		return $response;
	}

	/**
	 * @param string $objectName
	 */
	public function setObjectName($objectName)
	{
		$this->_objectName = $objectName;
	}

	public function BuildPartialResponses()
	{
		$this->_partialAnnotations =
'
/**
 * @SWG\ResponseMessage(partial_id="error404", code=404, message="Entity not found")
 */
';
	}

	public function BuildResource($apiVersion = '0.1', $basePath = '')
	{
		$this->_swaggerClass .=
'<?php

namespace app\\'.$this->_objectName.'\Resources;

use Swagger\Annotations as SWG;

/**
 * @SWG\Resource(
 *   swaggerVersion="1.2",
 *   apiVersion="'.$apiVersion.'",
 *   basePath="'.$basePath.'",
 *   resourcePath="'.$this->_objectName.'",
 *   produces="[\'application/json\',\'application/xml\',\'text/plain\',\'text/html\']"
 * )
 */
class '.$this->_objectName.'
{';
	}

	public function BuildAPI($path, $apiDesc, $method, $summary, $notes, $operationType, $nickname, $dataType, $name, $description, $required, $dataType, $paramType)
	{
		$operationType = $this->_Types($operationType);
		$dataType = $this->_Types($dataType);
		$required = ($required) ? "true" : "false";


		/** @var array $pathParts contains null, version, objectName, null or {id} (, null or connection)*/
		$pathParts = explode('/', $path);
		$functionName = strtolower($method).$pathParts[2];
		if ($pathParts[3] !== "")
		{
			if ($pathParts[4] !== "")
				$functionName .= $pathParts[4];
			else
				$functionName .= 'ById';
		}

		$this->_swaggerClass .= '
	/**
	 * @SWG\Api(
	 *   path="'.$path.'",
	 *   description="'.$apiDesc.'",
	 *   @SWG\Operation(
	 *     method="'.$method.'",
	 *     summary="'.$summary.'",
	 *     notes="'.$notes.'",
	 *     type="'.$operationType["type"].'",
	 *	   nickname="'.$nickname.'",
	 *     authorizations={},
	 *     @SWG\Parameter(
	 *       name="'.$name.'",
	 *       description="'.$description.'",
	 *       required='.$required.',
	 *       type="'.$dataType["type"].'",
	 *       format="'.$dataType["format"].'",
	 *       paramType="'.$paramType.'"
	 *     ),
 	 *     @SWG\Partial("error404"),
	 *   )
	 * )
	 */
    public function '.$functionName.'() {

    }
';
	}

	public function CloseResource()
	{
		$this->_swaggerClass .= '
}';
	}

	public function BuildModel($apiVersion = '0.1', $basePath = '', $resourcePath, $className)
	{
		$this->_swaggerClass .=
'<?php

namespace app\\'.$className.'\Models;

use Swagger\Annotations as SWG;

/**
 * @package
 * @category
 * @subpackage
 *
 * @SWG\Model(id="Pet",required="id, name")
 */
class Pet
{

/**
 * @SWG\Resource(
 *   swaggerVersion="1.2",
 *   apiVersion="'.$apiVersion.'",
 *   basePath="'.$basePath.'",
 *   resourcePath="'.$resourcePath.'",
 *   produces="[\'application/json\',\'application/xml\',\'text/plain\',\'text/html\']"
 * )
 */
class '.$className.'
{';
	}

	public function BuildProperty($name, $desc, $type)
	{
		$_format = "";
		$type = ($type === 'int') ? "integer" : $type;
		if ($type === 'datetime')
		{
			$type = "string";
			$_format = "date-format";
		}
		$this->_swaggerClass .= '
 *   ,@SWG\Property(
 *     name="'.$name.'",
 *     type="'.$type.'",
 *     format="'.$_format.'",
 *     description="'.htmlspecialchars($desc).'"
 *   )';
	}

	public function CloseModel()
	{
		$this->_swaggerClass .= '
 * )';
	}

	public function CloseJSON()
	{
		$this->_swaggerClass .= '
*/';
	}

	/**
	 * @return string
	 */
	public function getPartialAnnotations()
	{
		return $this->_partialAnnotations;
	}

	/**
	 * @return string
	 */
	public function getSwaggerClass()
	{
		return $this->_swaggerClass;
	}

	/**
	 * @return string
	 */
	public function getSwaggerModels()
	{
		return $this->_swaggerModels;
	}

} 