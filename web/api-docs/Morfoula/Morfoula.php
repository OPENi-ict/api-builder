<?php
/**
 * @SWG\Resource(
 *   apiVersion="2.3",
 *   swaggerVersion="1.2",
 *   basePath="http://localhost/api-builder/web/apis/Morfoula/",
 *   resourcePath="Photos"
 * ,@SWG\Api(
 *   path="Photos",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of Photos",
 *     notes="",
 *     type="list_Photos",
 *     nickname="Get_all_Photos"
 *    )
 *  )
 * ,@SWG\Api(
 *   path="Photos/{id}",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve one Photos",
 *     notes="",
 *     type="Photos",
 *     nickname="Get_one_Photos"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="Photos/{id}",
 *   description=""
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Change a particular Photos",
 *     notes="",
 *     type="Photos",
 *     nickname="Put_Photos"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="Photos",
 *       description="Model of resource",
 *       required=true,
 *       type="Photos_post_put",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="Photos/{id}",
 *   description=""
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete one Photos",
 *     notes="",
 *     type="boolean",
 *     nickname="Delete_one_Photos"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="Photos/{id}/Openi-Demo",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of Photos Openi-Demo",
 *     notes="",
 *     type="list_Openi-Demo",
 *     nickname="Get_all_Openi-Demo"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="body"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Meta"
 *   ,@SWG\Property(
 *     name="previous",
 *     type="string",
 *     format="",
 *     description="Uri of the previous page relative to the current page settings."
 *   )
 *   ,@SWG\Property(
 *     name="next",
 *     type="string",
 *     format="",
 *     description="Uri of the next page relative to the current page settings."
 *   )
 *   ,@SWG\Property(
 *     name="total_count",
 *     type="integer",
 *     format="",
 *     description="Total items count for all the collection."
 *   )
 *   ,@SWG\Property(
 *     name="offset",
 *     type="integer",
 *     format="",
 *     description="Specify the offset to start displaying element on a page."
 *   )
 *   ,@SWG\Property(
 *     name="limit",
 *     type="integer",
 *     format="",
 *     description="Specify the number of element to display per page."
 *   )
 * )
 * @SWG\Model(
 *   id="Photos"
 *   ,@SWG\Property(
 *     name="Source",
 *     type="string",
 *     format="",
 *     description="Source for file"
 *   )
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Photos_post_put"
 *   ,@SWG\Property(
 *     name="Source",
 *     type="string",
 *     format="",
 *     description="Source for file"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects_Photos"
 *   ,@SWG\Property(
 *     name="Photos",
 *     type="array",
 *     format="",
 *     description="",
 *     @SWG\Items("Photos")
 *   )
 * )
 * @SWG\Model(
 *   id="list_Photos"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects_Photos",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="2.3",
 *   swaggerVersion="1.2",
 *   basePath="http://localhost/api-builder/web/apis/Morfoula/",
 *   resourcePath="Likes"
 * ,@SWG\Api(
 *   path="Likes",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of Likes",
 *     notes="",
 *     type="list_Likes",
 *     nickname="Get_all_Likes"
 *    )
 *  )
 * ,@SWG\Api(
 *   path="Likes",
 *   description=""
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete all Likes",
 *     notes="",
 *     type="list_Likes",
 *     nickname="Delete_all_Likes"
 *    )
 *  )
 * ,@SWG\Api(
 *   path="Likes/{id}",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve one Likes",
 *     notes="",
 *     type="Likes",
 *     nickname="Get_one_Likes"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="Likes/{id}",
 *   description=""
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete one Likes",
 *     notes="",
 *     type="boolean",
 *     nickname="Delete_one_Likes"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="body"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Meta"
 *   ,@SWG\Property(
 *     name="previous",
 *     type="string",
 *     format="",
 *     description="Uri of the previous page relative to the current page settings."
 *   )
 *   ,@SWG\Property(
 *     name="next",
 *     type="string",
 *     format="",
 *     description="Uri of the next page relative to the current page settings."
 *   )
 *   ,@SWG\Property(
 *     name="total_count",
 *     type="integer",
 *     format="",
 *     description="Total items count for all the collection."
 *   )
 *   ,@SWG\Property(
 *     name="offset",
 *     type="integer",
 *     format="",
 *     description="Specify the offset to start displaying element on a page."
 *   )
 *   ,@SWG\Property(
 *     name="limit",
 *     type="integer",
 *     format="",
 *     description="Specify the number of element to display per page."
 *   )
 * )
 * @SWG\Model(
 *   id="Likes"
 *   ,@SWG\Property(
 *     name="Photo-Likes",
 *     type="Photos",
 *     format="",
 *     description="These are the Likes of a particular Photo"
 *   )
 *   ,@SWG\Property(
 *     name="User",
 *     type="integer",
 *     format="",
 *     description="Who liked it"
 *   )
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Likes_post_put"
 *   ,@SWG\Property(
 *     name="Photo-Likes",
 *     type="Photos",
 *     format="",
 *     description="These are the Likes of a particular Photo"
 *   )
 *   ,@SWG\Property(
 *     name="User",
 *     type="integer",
 *     format="",
 *     description="Who liked it"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects_Likes"
 *   ,@SWG\Property(
 *     name="Likes",
 *     type="array",
 *     format="",
 *     description="",
 *     @SWG\Items("Likes")
 *   )
 * )
 * @SWG\Model(
 *   id="list_Likes"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects_Likes",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="2.3",
 *   swaggerVersion="1.2",
 *   basePath="http://localhost/api-builder/web/apis/Morfoula/",
 *   resourcePath="Openi-Demo"
 * ,@SWG\Api(
 *   path="Openi-Demo",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of Openi-Demo",
 *     notes="",
 *     type="list_Openi-Demo",
 *     nickname="Get_all_Openi-Demo"
 *    )
 *  )
 * ,@SWG\Api(
 *   path="Openi-Demo",
 *   description=""
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new Openi-Demo object",
 *     notes="",
 *     type="Openi-Demo",
 *     nickname="Post_one_Openi-Demo"
 *     ,@SWG\Parameter(
 *       name="Openi-Demo",
 *       description="Model of resource",
 *       required=true,
 *       type="Openi-Demo_post_put",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Meta"
 *   ,@SWG\Property(
 *     name="previous",
 *     type="string",
 *     format="",
 *     description="Uri of the previous page relative to the current page settings."
 *   )
 *   ,@SWG\Property(
 *     name="next",
 *     type="string",
 *     format="",
 *     description="Uri of the next page relative to the current page settings."
 *   )
 *   ,@SWG\Property(
 *     name="total_count",
 *     type="integer",
 *     format="",
 *     description="Total items count for all the collection."
 *   )
 *   ,@SWG\Property(
 *     name="offset",
 *     type="integer",
 *     format="",
 *     description="Specify the offset to start displaying element on a page."
 *   )
 *   ,@SWG\Property(
 *     name="limit",
 *     type="integer",
 *     format="",
 *     description="Specify the number of element to display per page."
 *   )
 * )
 * @SWG\Model(
 *   id="Openi-Demo"
 *   ,@SWG\Property(
 *     name="prop1",
 *     type="Photos",
 *     format="",
 *     description="gfs"
 *   )
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Openi-Demo_post_put"
 *   ,@SWG\Property(
 *     name="prop1",
 *     type="Photos",
 *     format="",
 *     description="gfs"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects_Openi-Demo"
 *   ,@SWG\Property(
 *     name="Openi-Demo",
 *     type="array",
 *     format="",
 *     description="",
 *     @SWG\Items("Openi-Demo")
 *   )
 * )
 * @SWG\Model(
 *   id="list_Openi-Demo"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects_Openi-Demo",
 *     format="",
 *     description=""
 *   )
 * )
*/