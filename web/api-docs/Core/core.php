<?php
/**
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Account"
 * ,@SWG\Api(
 *   path="/v.04/Account/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi accounts",
 *     notes="",
 *     type="ListView_Account",
 *     nickname="Account_list"
 *     ,@SWG\Parameter(
 *       name="limit",
 *       description="Specify the number of element to display per page.",
 *       required=false,
 *       type="integer",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="offset",
 *       description="Specify the offset to start displaying element on a page.",
 *       required=false,
 *       type="integer",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook, Foursquare, Google",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Current user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi account",
 *     notes="",
 *     type="Account",
 *     nickname="Account_list"
 *     ,@SWG\Parameter(
 *       name="Account",
 *       description="",
 *       required=true,
 *       type="Account_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Account/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi account by ID",
 *     notes="",
 *     type="Account",
 *     nickname="Account_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook, Foursquare, Google",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Current user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi account",
 *     notes="",
 *     type="Account",
 *     nickname="Account_detail"
 *     ,@SWG\Parameter(
 *       name="Account",
 *       description="",
 *       required=true,
 *       type="Account_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi account",
 *     notes="",
 *     type="Account",
 *     nickname="Account_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook, Foursquare, Google",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Current user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Account_put"
 *   ,@SWG\Property(
 *     name="username",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Person",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="active",
 *     type="boolean",
 *     format="",
 *     description="Boolean data. Ex: True"
 *   )
 *   ,@SWG\Property(
 *     name="validated",
 *     type="boolean",
 *     format="",
 *     description="Boolean data. Ex: True"
 *   )
 *   ,@SWG\Property(
 *     name="cbsid",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="email",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Account_post"
 *   ,@SWG\Property(
 *     name="username",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Person",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="active",
 *     type="boolean",
 *     format="",
 *     description="Boolean data. Ex: True"
 *   )
 *   ,@SWG\Property(
 *     name="validated",
 *     type="boolean",
 *     format="",
 *     description="Boolean data. Ex: True"
 *   )
 *   ,@SWG\Property(
 *     name="cbsid",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="email",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects_Account"
 *   ,@SWG\Property(
 *     name="Account",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Meta"
 *   ,@SWG\Property(
 *     name="previous",
 *     type="string",
 *     format="",
 *     description="Uri of the previous page relative to the current page settings."
 *   )
 *   ,@SWG\Property(
 *     name="total_count",
 *     type="integer",
 *     format="",
 *     description="Total items count for the all collection"
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
 *   ,@SWG\Property(
 *     name="next",
 *     type="string",
 *     format="",
 *     description="Uri of the next page relative to the current page settings."
 *   )
 * )
 * @SWG\Model(
 *   id="ListView_Account"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects_Account",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Account"
 *   ,@SWG\Property(
 *     name="username",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="From",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="service",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="url",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="object_type",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Person",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="active",
 *     type="boolean",
 *     format="",
 *     description="Boolean data. Ex: True"
 *   )
 *   ,@SWG\Property(
 *     name="validated",
 *     type="boolean",
 *     format="",
 *     description="Boolean data. Ex: True"
 *   )
 *   ,@SWG\Property(
 *     name="cbsid",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="email",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
*/