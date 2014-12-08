<?php

namespace app\helpers;

class BuildSwaggerAnnotationsOnly {

	private $_swaggerJSON = '';

	public function BuildJSON()
	{
		$this->_swaggerJSON .=
'<?php
/**';
	}

	public function BuildResource($apiVersion, $swaggerVersion, $basePath, $resourcePath)
	{
		$this->_swaggerJSON .= '
 * @SWG\Resource(
 *   apiVersion="'.$apiVersion.'",
 *   swaggerVersion="1.2",
 *   basePath="'.$basePath.'",
 *   resourcePath="'.$resourcePath.'"';
	}

//	public function BuildClass($apiName)
//	{
//		$this->_swaggerJSON .= '
//class '.$apiName.'
//{
//';
//	}

	public function BuildAPI($path, $apiDesc)
	{
		$this->_swaggerJSON .= '
 * ,@SWG\Api(
 *   path="'.$path.'",
 *   description="'.$apiDesc.'"';
	}

	public function BuildOperation($method, $summary, $notes, $responseClass, $nickname)
	{
		$responseClass = ($responseClass === 'Object') ? strtolower($responseClass) : $responseClass;
		$this->_swaggerJSON .= '
 *   ,@SWG\Operation(
 *     method="'.$method.'",
 *     summary="'.$summary.'",
 *     notes="'.$notes.'",
 *     type="'.$responseClass.'",
 *     nickname="'.$nickname.'"';
	}

	public function BuildParameter($name, $description, $required, $dataType, $paramType)
	{
		$dataType = ($dataType === 'int') ? "integer" : $dataType;
		$dataType = ($dataType === 'Object') ? strtolower($dataType) : $dataType;
		$required = ($required) ? "true" : "false";
		$this->_swaggerJSON .= '
 *     ,@SWG\Parameter(
 *       name="'.$name.'",
 *       description="'.$description.'",
 *       required='.$required.',
 *       type="'.$dataType.'",
 *       paramType="'.$paramType.'"
 *     )';
	}

	public function CloseOperation()
	{
		$this->_swaggerJSON .= '
 *    )';
	}

	public function CloseAPI()
	{
		$this->_swaggerJSON .= '
 *  )';
	}

	public function CloseResource()
	{
		$this->_swaggerJSON .= '
 *)
 *';
	}

	public function BuildModel($id)
	{
		$this->_swaggerJSON .= '
 * @SWG\Model(
 *   id="'.$id.'"';
	}

	public function BuildProperty($name, $desc, $type, $items = "", $_format = "")
	{
		$type = ($type === 'int') ? "integer" : $type;
		if ($type === 'datetime')
		{
			$type = "string";
			$_format = "date-format";
		}
		$this->_swaggerJSON .= '
 *   ,@SWG\Property(
 *     name="'.$name.'",
 *     type="'.$type.'",
 *     format="'.$_format.'",
 *     description="'.htmlspecialchars($desc).'"';

		if ($items != "")
			$this->_swaggerJSON .= ',
 *     @SWG\Items("'.$items.'")';

		$this->_swaggerJSON .= '
 *   )';
	}

	public function CloseModel()
	{
		$this->_swaggerJSON .= '
 * )';
	}

	public function CloseJSON()
	{
		$this->_swaggerJSON .= '
*/';
	}

	/**
	 * @return string
	 */
	public function getSwaggerJSON()
	{
		return $this->_swaggerJSON;
	}

} 