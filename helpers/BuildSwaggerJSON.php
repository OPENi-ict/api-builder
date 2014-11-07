<?php

namespace app\helpers;


class BuildSwaggerJSON {

	private $_swaggerJSON;

	public function BuildResource($apiVersion, $swaggerVersion, $basePath)
	{
		$this->_swaggerJSON = '
namespace app\Resources;
/**
 * @SWG\Resource(
 *   apiVersion="'.$apiVersion.'",
 *   swaggerVersion="'.$swaggerVersion.'",
 *   basePath="'.$basePath.'",
 *   produces="[\'application/json\']"
 ';
	}

//	public function BuildClass($apiName)
//	{
//		$this->_swaggerJSON .= '
//class '.$apiName.'
//{
//';
//	}

	public function BuildAPI($path, $apiDesc, $method, $summary, $notes, $responseClass, $nickname)
	{
		$this->_swaggerJSON .= ',
	 * @SWG\Api(
	 *   path="'.$path.'",
	 *   description='.$apiDesc.'
	 *   @SWG\Operation(
	 *     method="'.$method.'",
	 *     summary="'.$summary.'",
	 *     notes="'.$notes.'",
	 *     type="'.$responseClass.'",
	 *     nickname="'.$nickname.'"
';
	}

	public function BuildParameter($name, $description, $required, $dataType, $paramType)
	{
		$required = ($required) ? "true" : "false";
		$this->_swaggerJSON .= ',
	*     @SWG\Parameter(
	*       name="'.$name.'",
	*       description="'.$description.'",
	*       required='.$required.',
	*       type="'.$dataType.'",
	*       paramType="'.$paramType.'"
	*     )
';
	}

	public function CloseAPI($method)
	{
		$this->_swaggerJSON .= '
	*   )
	* )
	*/
';
	}

	public function CloseResource()
	{
		$this->_swaggerJSON .= '
* )
*
';
	}

	public function BuildModel($id)
	{
		$this->_swaggerJSON .= '
 * @SWG\Model(
 *   id="'.$id.'"
';
	}

	public function BuildProperty($name, $desc, $type)
	{
		$this->_swaggerJSON .= ',
 *   @SWG\Property(
 *     name="'.$name.'",
 *     type="'.$type.'",
 *     description="'.$desc.'"
 *   )
';
	}

	public function CloseModel(){
		$this->_swaggerJSON .= '
 * )
 */
';
	}

	/**
	 * @return string
	 */
	public function getSwaggerJSON()
	{
		return $this->_swaggerJSON;
	}

} 