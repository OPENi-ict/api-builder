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
 *     type="ListView",
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
 *   id="Objects"
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
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
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Address"
 * ,@SWG\Api(
 *   path="/v.04/Address/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of address models",
 *     notes="",
 *     type="ListView",
 *     nickname="Address_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new address model",
 *     notes="",
 *     type="Address",
 *     nickname="Address_list"
 *     ,@SWG\Parameter(
 *       name="Address",
 *       description="",
 *       required=true,
 *       type="Address_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Address/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single address model by ID",
 *     notes="",
 *     type="Address",
 *     nickname="Address_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing address model",
 *     notes="",
 *     type="Address",
 *     nickname="Address_detail"
 *     ,@SWG\Parameter(
 *       name="Address",
 *       description="",
 *       required=true,
 *       type="Address_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing address model",
 *     notes="",
 *     type="Address",
 *     nickname="Address_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Address",
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
 *   id="Address"
 *   ,@SWG\Property(
 *     name="city",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="apartment",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="street",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="zip",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="locality",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="country",
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
 *   ,@SWG\Property(
 *     name="number",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="id",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 * )
 * @SWG\Model(
 *   id="Address_put"
 *   ,@SWG\Property(
 *     name="city",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="apartment",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="street",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="zip",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="locality",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="country",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="number",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Address_post"
 *   ,@SWG\Property(
 *     name="city",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="apartment",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="street",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="zip",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="locality",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="country",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="number",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Application"
 * ,@SWG\Api(
 *   path="/v.04/Application/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of organization models",
 *     notes="",
 *     type="ListView",
 *     nickname="Application_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new organization model",
 *     notes="",
 *     type="Application",
 *     nickname="Application_list"
 *     ,@SWG\Parameter(
 *       name="Application",
 *       description="",
 *       required=true,
 *       type="Application_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Application/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single organization model by ID",
 *     notes="",
 *     type="Application",
 *     nickname="Application_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing organization model",
 *     notes="",
 *     type="Application",
 *     nickname="Application_detail"
 *     ,@SWG\Parameter(
 *       name="Application",
 *       description="",
 *       required=true,
 *       type="Application_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing organization model",
 *     notes="",
 *     type="Application",
 *     nickname="Application_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Application"
 *   ,@SWG\Property(
 *     name="founded",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="address",
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
 *   ,@SWG\Property(
 *     name="id",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Application",
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
 *   id="Application_post"
 *   ,@SWG\Property(
 *     name="founded",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="address",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Application_put"
 *   ,@SWG\Property(
 *     name="founded",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="address",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Article"
 * ,@SWG\Api(
 *   path="/v.04/Article/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of Article",
 *     notes="",
 *     type="ListView",
 *     nickname="Article_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new Article",
 *     notes="",
 *     type="Article",
 *     nickname="Article_list"
 *     ,@SWG\Parameter(
 *       name="Article",
 *       description="",
 *       required=true,
 *       type="Article_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Article/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single Article by ID",
 *     notes="",
 *     type="Article",
 *     nickname="Article_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing Article",
 *     notes="",
 *     type="Article",
 *     nickname="Article_detail"
 *     ,@SWG\Parameter(
 *       name="Article",
 *       description="",
 *       required=true,
 *       type="Article_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing Article",
 *     notes="",
 *     type="Article",
 *     nickname="Article_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Article",
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
 *   id="Article_post"
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="BaseTag",
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
 *     name="BaseFile",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="Article_put"
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="BaseTag",
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
 *     name="BaseFile",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="Article"
 *   ,@SWG\Property(
 *     name="BaseTag",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="From",
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
 *     name="service",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="BaseFile",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="url",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="object_type",
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
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Audio"
 * ,@SWG\Api(
 *   path="/v.04/Audio/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of Audio",
 *     notes="",
 *     type="ListView",
 *     nickname="Audio_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new Audio",
 *     notes="",
 *     type="Audio",
 *     nickname="Audio_list"
 *     ,@SWG\Parameter(
 *       name="Audio",
 *       description="",
 *       required=true,
 *       type="Audio_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Audio/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single Audio by ID",
 *     notes="",
 *     type="Audio",
 *     nickname="Audio_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing Audio",
 *     notes="",
 *     type="Audio",
 *     nickname="Audio_detail"
 *     ,@SWG\Parameter(
 *       name="Audio",
 *       description="",
 *       required=true,
 *       type="Audio_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing Audio",
 *     notes="",
 *     type="Audio",
 *     nickname="Audio_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Audio_post"
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="BaseTag",
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
 *     name="BaseFile",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Audio",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Audio_put"
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="BaseTag",
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
 *     name="BaseFile",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Audio"
 *   ,@SWG\Property(
 *     name="BaseTag",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="From",
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
 *     name="service",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="BaseFile",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="url",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="object_type",
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
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Badge"
 * ,@SWG\Api(
 *   path="/v.04/Badge/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of Badge",
 *     notes="",
 *     type="ListView",
 *     nickname="Badge_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new Badge",
 *     notes="",
 *     type="Badge",
 *     nickname="Badge_list"
 *     ,@SWG\Parameter(
 *       name="Badge",
 *       description="",
 *       required=true,
 *       type="Badge_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Badge/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single Badge by ID",
 *     notes="",
 *     type="Badge",
 *     nickname="Badge_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing Badge",
 *     notes="",
 *     type="Badge",
 *     nickname="Badge_detail"
 *     ,@SWG\Parameter(
 *       name="Badge",
 *       description="",
 *       required=true,
 *       type="Badge_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing Badge",
 *     notes="",
 *     type="Badge",
 *     nickname="Badge_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Badge",
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
 *   id="Badge_post"
 *   ,@SWG\Property(
 *     name="icon",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Badge"
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="From",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="service",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="title",
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
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="icon",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Badge_put"
 *   ,@SWG\Property(
 *     name="icon",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="BaseFile"
 * ,@SWG\Api(
 *   path="/v.04/BaseFile/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of base file models",
 *     notes="",
 *     type="ListView",
 *     nickname="BaseFile_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new base file model",
 *     notes="",
 *     type="BaseFile",
 *     nickname="BaseFile_list"
 *     ,@SWG\Parameter(
 *       name="BaseFile",
 *       description="",
 *       required=true,
 *       type="BaseFile_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/BaseFile/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single base file model by ID",
 *     notes="",
 *     type="BaseFile",
 *     nickname="BaseFile_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing base file model",
 *     notes="",
 *     type="BaseFile",
 *     nickname="BaseFile_detail"
 *     ,@SWG\Parameter(
 *       name="BaseFile",
 *       description="",
 *       required=true,
 *       type="BaseFile_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing base file model",
 *     notes="",
 *     type="BaseFile",
 *     nickname="BaseFile_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="BaseFile_put"
 *   ,@SWG\Property(
 *     name="size",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="format",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="icon",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
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
 *   id="BaseFile_post"
 *   ,@SWG\Property(
 *     name="size",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="format",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="icon",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="BaseFile"
 *   ,@SWG\Property(
 *     name="size",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="icon",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="format",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="id",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 *   ,@SWG\Property(
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="BaseFile",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="BasePlace"
 * ,@SWG\Api(
 *   path="/v.04/BasePlace/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of place models",
 *     notes="",
 *     type="ListView",
 *     nickname="BasePlace_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new place model",
 *     notes="",
 *     type="BasePlace",
 *     nickname="BasePlace_list"
 *     ,@SWG\Parameter(
 *       name="BasePlace",
 *       description="",
 *       required=true,
 *       type="BasePlace_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/BasePlace/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single place model by ID",
 *     notes="",
 *     type="BasePlace",
 *     nickname="BasePlace_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing place model",
 *     notes="",
 *     type="BasePlace",
 *     nickname="BasePlace_detail"
 *     ,@SWG\Parameter(
 *       name="BasePlace",
 *       description="",
 *       required=true,
 *       type="BasePlace_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing place model",
 *     notes="",
 *     type="BasePlace",
 *     nickname="BasePlace_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="BasePlace_put"
 *   ,@SWG\Property(
 *     name="category",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="picture",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
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
 *   id="BasePlace_post"
 *   ,@SWG\Property(
 *     name="category",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="picture",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="BasePlace",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="BasePlace"
 *   ,@SWG\Property(
 *     name="category",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="picture",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
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
 *   ,@SWG\Property(
 *     name="id",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="BaseProduct"
 * ,@SWG\Api(
 *   path="/v.04/BaseProduct/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of product models",
 *     notes="",
 *     type="ListView",
 *     nickname="BaseProduct_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new product model",
 *     notes="",
 *     type="BaseProduct",
 *     nickname="BaseProduct_list"
 *     ,@SWG\Parameter(
 *       name="BaseProduct",
 *       description="",
 *       required=true,
 *       type="BaseProduct_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/BaseProduct/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single product model by ID",
 *     notes="",
 *     type="BaseProduct",
 *     nickname="BaseProduct_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing product model",
 *     notes="",
 *     type="BaseProduct",
 *     nickname="BaseProduct_detail"
 *     ,@SWG\Parameter(
 *       name="BaseProduct",
 *       description="",
 *       required=true,
 *       type="BaseProduct_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing product model",
 *     notes="",
 *     type="BaseProduct",
 *     nickname="BaseProduct_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="BaseProduct_put"
 *   ,@SWG\Property(
 *     name="category",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="picture",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="year",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="BaseProduct",
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
 *   id="BaseProduct_post"
 *   ,@SWG\Property(
 *     name="category",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="picture",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="year",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="BaseProduct"
 *   ,@SWG\Property(
 *     name="category",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="picture",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="year",
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
 *   ,@SWG\Property(
 *     name="id",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="BaseService"
 * ,@SWG\Api(
 *   path="/v.04/BaseService/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of service models",
 *     notes="",
 *     type="ListView",
 *     nickname="BaseService_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new service model",
 *     notes="",
 *     type="BaseService",
 *     nickname="BaseService_list"
 *     ,@SWG\Parameter(
 *       name="BaseService",
 *       description="",
 *       required=true,
 *       type="BaseService_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/BaseService/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single service model by ID",
 *     notes="",
 *     type="BaseService",
 *     nickname="BaseService_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing service model",
 *     notes="",
 *     type="BaseService",
 *     nickname="BaseService_detail"
 *     ,@SWG\Parameter(
 *       name="BaseService",
 *       description="",
 *       required=true,
 *       type="BaseService_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing service model",
 *     notes="",
 *     type="BaseService",
 *     nickname="BaseService_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="BaseService_post"
 *   ,@SWG\Property(
 *     name="category",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="picture",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="year",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="BaseService",
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
 *   id="BaseService_put"
 *   ,@SWG\Property(
 *     name="category",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="picture",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="year",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="BaseService"
 *   ,@SWG\Property(
 *     name="category",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="picture",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="year",
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
 *   ,@SWG\Property(
 *     name="id",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="BaseTags"
 * ,@SWG\Api(
 *   path="/v.04/BaseTags/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of tags models",
 *     notes="",
 *     type="ListView",
 *     nickname="BaseTags_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new tags model",
 *     notes="",
 *     type="BaseTags",
 *     nickname="BaseTags_list"
 *     ,@SWG\Parameter(
 *       name="BaseTags",
 *       description="",
 *       required=true,
 *       type="BaseTags_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/BaseTags/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single tags model by ID",
 *     notes="",
 *     type="BaseTags",
 *     nickname="BaseTags_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing tags model",
 *     notes="",
 *     type="BaseTags",
 *     nickname="BaseTags_detail"
 *     ,@SWG\Parameter(
 *       name="BaseTags",
 *       description="",
 *       required=true,
 *       type="BaseTags_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing tags model",
 *     notes="",
 *     type="BaseTags",
 *     nickname="BaseTags_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="BaseTags"
 *   ,@SWG\Property(
 *     name="y_location",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="x_location",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="id",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 *   ,@SWG\Property(
 *     name="tag_id",
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
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="BaseTags",
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
 *   id="BaseTags_post"
 *   ,@SWG\Property(
 *     name="x_location",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="y_location",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="tag_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="BaseTags_put"
 *   ,@SWG\Property(
 *     name="x_location",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="y_location",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="tag_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Card"
 * ,@SWG\Api(
 *   path="/v.04/Card/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi cards",
 *     notes="",
 *     type="ListView",
 *     nickname="Card_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi card",
 *     notes="",
 *     type="Card",
 *     nickname="Card_list"
 *     ,@SWG\Parameter(
 *       name="Card",
 *       description="",
 *       required=true,
 *       type="Card_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Card/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi card by ID",
 *     notes="",
 *     type="Card",
 *     nickname="Card_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi card",
 *     notes="",
 *     type="Card",
 *     nickname="Card_detail"
 *     ,@SWG\Parameter(
 *       name="Card",
 *       description="",
 *       required=true,
 *       type="Card_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi card",
 *     notes="",
 *     type="Card",
 *     nickname="Card_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Card",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Card"
 *   ,@SWG\Property(
 *     name="From",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="card_owner_date_of_birth",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
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
 *     name="expiration_date",
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
 *     name="number",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="card_type",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="card_verification_number",
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
 *   id="Card_put"
 *   ,@SWG\Property(
 *     name="card_type",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="card_verification_number",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="card_owner_date_of_birth",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="expiration_date",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="number",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Card_post"
 *   ,@SWG\Property(
 *     name="card_type",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="card_verification_number",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="card_owner_date_of_birth",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="expiration_date",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="number",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Cart"
 * ,@SWG\Api(
 *   path="/v.04/Cart/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi carts",
 *     notes="",
 *     type="ListView",
 *     nickname="Cart_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi cart",
 *     notes="",
 *     type="Cart",
 *     nickname="Cart_list"
 *     ,@SWG\Parameter(
 *       name="Cart",
 *       description="",
 *       required=true,
 *       type="Cart_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Cart/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi cart by ID",
 *     notes="",
 *     type="Cart",
 *     nickname="Cart_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi cart",
 *     notes="",
 *     type="Cart",
 *     nickname="Cart_detail"
 *     ,@SWG\Parameter(
 *       name="Cart",
 *       description="",
 *       required=true,
 *       type="Cart_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi cart",
 *     notes="",
 *     type="Cart",
 *     nickname="Cart_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Cart",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Cart"
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
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
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
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
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
 *   id="Cart_put"
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Cart_post"
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Checkin"
 * ,@SWG\Api(
 *   path="/v.04/Checkin/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi checkins",
 *     notes="",
 *     type="ListView",
 *     nickname="Checkin_list"
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
 *       description="Foursquare",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi checkin",
 *     notes="",
 *     type="Checkin",
 *     nickname="Checkin_list"
 *     ,@SWG\Parameter(
 *       name="Checkin",
 *       description="",
 *       required=true,
 *       type="Checkin_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="pending",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Checkin/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi checkin by ID",
 *     notes="",
 *     type="Checkin",
 *     nickname="Checkin_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook, Google",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi checkin",
 *     notes="",
 *     type="Checkin",
 *     nickname="Checkin_detail"
 *     ,@SWG\Parameter(
 *       name="Checkin",
 *       description="",
 *       required=true,
 *       type="Checkin_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi checkin",
 *     notes="",
 *     type="Checkin",
 *     nickname="Checkin_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Checkin/{id}/likes",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of Checkin Likes",
 *     notes="",
 *     type="object",
 *     nickname="likes"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Checkin/{id}/likes",
 *   description=""
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Like a Checkin",
 *     notes="",
 *     type="object",
 *     nickname="likes"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Checkin/{id}/comments",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of Checkin Comments",
 *     notes="",
 *     type="object",
 *     nickname="comments"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi, Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Checkin/{id}/comments",
 *   description=""
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new Checkin Comment",
 *     notes="",
 *     type="object",
 *     nickname="comments"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="text",
 *       description="Text of the Comment",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenticated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="title",
 *       description="Title of the Comment",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Checkin",
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
 *   id="Checkin_put"
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Place",
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
 * )
 * @SWG\Model(
 *   id="Checkin_post"
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Place",
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
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Checkin"
 *   ,@SWG\Property(
 *     name="From",
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
 *     name="text",
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
 *     name="Place",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Comment"
 * ,@SWG\Api(
 *   path="/v.04/Comment/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi comments",
 *     notes="",
 *     type="ListView",
 *     nickname="Comment_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi comment",
 *     notes="",
 *     type="Comment",
 *     nickname="Comment_list"
 *     ,@SWG\Parameter(
 *       name="Comment",
 *       description="",
 *       required=true,
 *       type="Comment_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Comment/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi comment by ID",
 *     notes="",
 *     type="Comment",
 *     nickname="Comment_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi comment",
 *     notes="",
 *     type="Comment",
 *     nickname="Comment_detail"
 *     ,@SWG\Parameter(
 *       name="Comment",
 *       description="",
 *       required=true,
 *       type="Comment_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi comment",
 *     notes="",
 *     type="Comment",
 *     nickname="Comment_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Comment"
 *   ,@SWG\Property(
 *     name="From",
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
 *     name="service",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="title",
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
 *     name="text",
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
 *     name="target_id",
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
 * @SWG\Model(
 *   id="Comment_put"
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Comment",
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Comment_post"
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Context"
 * ,@SWG\Api(
 *   path="/v.04/Context/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi contexts",
 *     notes="",
 *     type="ListView",
 *     nickname="Context_list"
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
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi context by ID",
 *     notes="",
 *     type="Context",
 *     nickname="Context_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi context",
 *     notes="",
 *     type="Context",
 *     nickname="Context_detail"
 *     ,@SWG\Parameter(
 *       name="Context",
 *       description="",
 *       required=true,
 *       type="Context_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi context",
 *     notes="",
 *     type="Context",
 *     nickname="Context_detail"
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/location",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve context location of an object",
 *     notes="",
 *     type="object",
 *     nickname="location"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/location",
 *   description=""
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update a context location",
 *     notes="",
 *     type="object",
 *     nickname="location"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="latitude",
 *       description="latitude of the location",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="longitude",
 *       description="longitude of the location",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="height",
 *       description="height of the location",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/time",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve context time of an object",
 *     notes="",
 *     type="object",
 *     nickname="time"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/time",
 *   description=""
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update context time of an object",
 *     notes="",
 *     type="object",
 *     nickname="time"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="deleted",
 *       description="time of object deletion",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="edited",
 *       description="time of object update",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="created",
 *       description="time of object creation",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/duration",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve context duration of an object",
 *     notes="",
 *     type="object",
 *     nickname="duration"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/duration",
 *   description=""
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update context duration of an object",
 *     notes="",
 *     type="object",
 *     nickname="duration"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="time_ended",
 *       description="the time the object ended",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="time_started",
 *       description="the time the object started",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/address",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve context location address",
 *     notes="",
 *     type="object",
 *     nickname="address"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/address",
 *   description=""
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update context location address of an object",
 *     notes="",
 *     type="object",
 *     nickname="address"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="city",
 *       description="the context location city",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="apartment",
 *       description="the context location apartment",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="zip",
 *       description="the context location zip code",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="locality",
 *       description="the context location locality",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="country",
 *       description="the context location country",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="number",
 *       description="the context location street number",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="street",
 *       description="the context location street",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/current_location",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve context current location",
 *     notes="",
 *     type="object",
 *     nickname="current_location"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/current_location",
 *   description=""
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update context current location",
 *     notes="",
 *     type="object",
 *     nickname="current_location"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="latitude",
 *       description="latitude of the current location",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="longitude",
 *       description="longitude of the current location",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="height",
 *       description="height of the current location",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/rating",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve context object rating",
 *     notes="",
 *     type="object",
 *     nickname="rating"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/rating",
 *   description=""
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update context object rating",
 *     notes="",
 *     type="object",
 *     nickname="rating"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="value",
 *       description="value of rating",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/mood",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve context object mood",
 *     notes="",
 *     type="object",
 *     nickname="mood"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/mood",
 *   description=""
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update context object mood",
 *     notes="",
 *     type="object",
 *     nickname="mood"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="value",
 *       description="value of mood",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/device",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve context object device",
 *     notes="",
 *     type="object",
 *     nickname="device"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/device",
 *   description=""
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update context object device",
 *     notes="",
 *     type="object",
 *     nickname="device"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="sms_log",
 *       description="sms recipients phones list, in comma-separated list",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="battery_status",
 *       description="the battery status (e.g. low, medium, full)",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="running_applications",
 *       description="list of running applications, in comma-separated list",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="installed_applications",
 *       description="list of installed applications, in comma-separated list",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="cell_log",
 *       description="list of device cell identifiers, in comma-separated list",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="screen_state",
 *       description="the screen state",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="wireless_channel_quality",
 *       description="wireless channel quality (e.g. good,bad,excelent,very good)",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="wireless_network_type",
 *       description="wireless network type e.g. 3G,LTE",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/application",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve context object application",
 *     notes="",
 *     type="object",
 *     nickname="application"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/application",
 *   description=""
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update context object application",
 *     notes="",
 *     type="object",
 *     nickname="application"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="box",
 *       description="application's box",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="classification",
 *       description="application's classification",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="background",
 *       description="application's background ",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="format",
 *       description="application's background color",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="color",
 *       description="application's  color",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="text",
 *       description="application's text",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="font",
 *       description="application's background color",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="background_color",
 *       description="application's background color",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="text_copy",
 *       description="application's text copy",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/personalization",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve context object personalization",
 *     notes="",
 *     type="object",
 *     nickname="personalization"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/personalization",
 *   description=""
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update context object personalization",
 *     notes="",
 *     type="object",
 *     nickname="personalization"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="age_range",
 *       description="application's text copy",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="application_id",
 *       description="application id",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="handset",
 *       description="application's text copy",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="customer_tag",
 *       description="e.g. Any, Those who received, Those who interacted with For Past Campaigns, Those who interacted with For Launched Campaigns",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="postal_code",
 *       description="application's text copy",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="device_type",
 *       description="the device model e.g. Samsung S4",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="household_size",
 *       description="Any, Exactly 1 Exactly 2 Exactly 3 Exactly 4, 2 or fewer, 2 or more, 3 or more, 4 or more , 5 or more",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="education",
 *       description="education",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="roaming",
 *       description="application's text copy",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="ethnicity",
 *       description="ethnicity",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="opt_out",
 *       description="application's text copy",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="income",
 *       description="ethnicity",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="users_language",
 *       description="language iso code",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="interests",
 *       description="interests",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="has_children",
 *       description="",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user_ids",
 *       description="application's text copy",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="device_os",
 *       description="the device operatin system e.g Android",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="device_id",
 *       description="device's UUID or UDID",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="town",
 *       description="application's text copy",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="country",
 *       description="application's text copy",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="region",
 *       description="application's text copy",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="carrier",
 *       description="application's text copy",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="gender",
 *       description="gender e.g. any, male, female",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/location_visits",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve context location visits",
 *     notes="",
 *     type="object",
 *     nickname="location_visits"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/location_visits_item",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve context location visits object",
 *     notes="",
 *     type="object",
 *     nickname="location_visits_item"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="location_visits_id",
 *       description="context location visits id",
 *       required=true,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/location_visits_item",
 *   description=""
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update Context visit location",
 *     notes="",
 *     type="object",
 *     nickname="location_visits_item"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="location_visits_id",
 *       description="context location visits id",
 *       required=true,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="data",
 *       description="data value",
 *       required=true,
 *       type="array",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/location_visits_item",
 *   description=""
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="create Context visit location",
 *     notes="",
 *     type="object",
 *     nickname="location_visits_item"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="data",
 *       description="data value",
 *       required=true,
 *       type="array",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/location_visits_item",
 *   description=""
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="delete context location visits object",
 *     notes="",
 *     type="object",
 *     nickname="location_visits_item"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="location_visits_id",
 *       description="context location visits id",
 *       required=true,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/groups",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve context groups",
 *     notes="",
 *     type="object",
 *     nickname="groups"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/groups",
 *   description=""
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update context groups",
 *     notes="",
 *     type="object",
 *     nickname="groups"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/groups_item",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a group",
 *     notes="",
 *     type="object",
 *     nickname="groups_item"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="group_id",
 *       description="group id",
 *       required=true,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/groups_item",
 *   description=""
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a group",
 *     notes="",
 *     type="object",
 *     nickname="groups_item"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="data",
 *       description="data value",
 *       required=true,
 *       type="array",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/groups_item",
 *   description=""
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update a group",
 *     notes="",
 *     type="object",
 *     nickname="groups_item"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="group_id",
 *       description="group id",
 *       required=true,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="data",
 *       description="data value",
 *       required=true,
 *       type="array",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Context/{id}/groups_item",
 *   description=""
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="delete a group",
 *     notes="",
 *     type="object",
 *     nickname="groups_item"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="group_id",
 *       description="group id",
 *       required=true,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Context_put"
 *   ,@SWG\Property(
 *     name="application_box",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="address_number",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_handset",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="current_location_time",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="time_created",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="address_apartment",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="device_wireless_channel_quality",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="time_deleted",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="current_location_longitude",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_interests",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_carrier",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="device_running_applications",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_opt_out",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_postal_code",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="application_text_copy",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="current_location_latitude",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="objectid",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="duration_time_ended",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="address_country",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_ethnicity",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="location_longitude",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="location_height",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_device_type",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_user_ids",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_town",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="application_font",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="application_color",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_roaming",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_household_size",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="address_street",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="device_screen_state",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_customer_tag",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="application_background",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="device_battery_status",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_region",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_country",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_has_children",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_income",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="current_location_height",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="location_latitude",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="device_wireless_network_type",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="device_accelerometers",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="time_edited",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_application_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="address_city",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_age_range",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_users_language",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_gender",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="application_format",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="device_installed_applications",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="application_text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_device_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="address_zip",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_education",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="device_cell_log",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="application_background_color",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="application_classification",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="address_locality",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="device_sms_log",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_device_os",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="rating_value",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="device_call_log",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="duration_time_started",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="mood_value",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Context",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Context"
 *   ,@SWG\Property(
 *     name="application_box",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="address_number",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_handset",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="current_location_time",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="time_created",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="address_apartment",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="device_wireless_channel_quality",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="time_deleted",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="current_location_longitude",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_interests",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_carrier",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="device_running_applications",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="address_country",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="id",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_postal_code",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="application_text_copy",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="current_location_latitude",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="objectid",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="duration_time_ended",
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
 *   ,@SWG\Property(
 *     name="personalization_opt_out",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_ethnicity",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="location_longitude",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="location_height",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_device_type",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_user_ids",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_town",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="application_font",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="application_color",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_roaming",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_household_size",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="address_street",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="device_screen_state",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_customer_tag",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="application_background",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="device_battery_status",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_region",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_country",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_has_children",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_income",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="current_location_height",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="location_latitude",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="device_wireless_network_type",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="device_accelerometers",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="time_edited",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_application_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="address_city",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_age_range",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_users_language",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_gender",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="application_format",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="device_installed_applications",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="application_text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_device_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="address_zip",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_education",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="device_cell_log",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="application_background_color",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="application_classification",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="address_locality",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="device_sms_log",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="personalization_device_os",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="rating_value",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="device_call_log",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="duration_time_started",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="mood_value",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
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
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Delivery"
 * ,@SWG\Api(
 *   path="/v.04/Delivery/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi deliverys",
 *     notes="",
 *     type="ListView",
 *     nickname="Delivery_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi delivery",
 *     notes="",
 *     type="Delivery",
 *     nickname="Delivery_list"
 *     ,@SWG\Parameter(
 *       name="Delivery",
 *       description="",
 *       required=true,
 *       type="Delivery_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Delivery/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi delivery by ID",
 *     notes="",
 *     type="Delivery",
 *     nickname="Delivery_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi delivery",
 *     notes="",
 *     type="Delivery",
 *     nickname="Delivery_detail"
 *     ,@SWG\Parameter(
 *       name="Delivery",
 *       description="",
 *       required=true,
 *       type="Delivery_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi delivery",
 *     notes="",
 *     type="Delivery",
 *     nickname="Delivery_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Delivery_post"
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="signature",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Delivery"
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
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="signature",
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
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Delivery",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Delivery_put"
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="signature",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Dislike"
 * ,@SWG\Api(
 *   path="/v.04/Dislike/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi dislikes",
 *     notes="",
 *     type="ListView",
 *     nickname="Dislike_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi dislike",
 *     notes="",
 *     type="Dislike",
 *     nickname="Dislike_list"
 *     ,@SWG\Parameter(
 *       name="Dislike",
 *       description="",
 *       required=true,
 *       type="Dislike_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Dislike/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi dislike by ID",
 *     notes="",
 *     type="Dislike",
 *     nickname="Dislike_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi dislike",
 *     notes="",
 *     type="Dislike",
 *     nickname="Dislike_detail"
 *     ,@SWG\Parameter(
 *       name="Dislike",
 *       description="",
 *       required=true,
 *       type="Dislike_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi dislike",
 *     notes="",
 *     type="Dislike",
 *     nickname="Dislike_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Dislike",
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
 *   id="Dislike_put"
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="Dislike_post"
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Dislike"
 *   ,@SWG\Property(
 *     name="From",
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
 *     name="target_id",
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
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Duration"
 * ,@SWG\Api(
 *   path="/v.04/Duration/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of duration models",
 *     notes="",
 *     type="ListView",
 *     nickname="Duration_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new duration model",
 *     notes="",
 *     type="Duration",
 *     nickname="Duration_list"
 *     ,@SWG\Parameter(
 *       name="Duration",
 *       description="",
 *       required=true,
 *       type="Duration_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Duration/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single duration model by ID",
 *     notes="",
 *     type="Duration",
 *     nickname="Duration_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing duration model",
 *     notes="",
 *     type="Duration",
 *     nickname="Duration_detail"
 *     ,@SWG\Parameter(
 *       name="Duration",
 *       description="",
 *       required=true,
 *       type="Duration_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing duration model",
 *     notes="",
 *     type="Duration",
 *     nickname="Duration_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="integer",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Duration"
 *   ,@SWG\Property(
 *     name="ends_time",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="id",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 *   ,@SWG\Property(
 *     name="starts_time",
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
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Duration",
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
 *   id="Duration_post"
 *   ,@SWG\Property(
 *     name="ends_time",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="starts_time",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Duration_put"
 *   ,@SWG\Property(
 *     name="ends_time",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="starts_time",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Event"
 * ,@SWG\Api(
 *   path="/v.04/Event/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi events",
 *     notes="",
 *     type="ListView",
 *     nickname="Event_list"
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
 *       description="Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi event",
 *     notes="",
 *     type="Event",
 *     nickname="Event_list"
 *     ,@SWG\Parameter(
 *       name="Event",
 *       description="",
 *       required=true,
 *       type="Event_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Event/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi event by ID",
 *     notes="",
 *     type="Event",
 *     nickname="Event_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook, Foursquare",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi event",
 *     notes="",
 *     type="Event",
 *     nickname="Event_detail"
 *     ,@SWG\Parameter(
 *       name="Event",
 *       description="",
 *       required=true,
 *       type="Event_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi event",
 *     notes="",
 *     type="Event",
 *     nickname="Event_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Event/{id}/rsvp",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve rsvp for an event",
 *     notes="",
 *     type="object",
 *     nickname="rsvp"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Event/{id}/rsvp",
 *   description=""
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create rsvp for an event",
 *     notes="",
 *     type="object",
 *     nickname="rsvp"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Event_put"
 *   ,@SWG\Property(
 *     name="picture",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Place",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
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
 *   id="Event_post"
 *   ,@SWG\Property(
 *     name="picture",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Place",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Event",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Event"
 *   ,@SWG\Property(
 *     name="picture",
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
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="service",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="title",
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
 *     name="Place",
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
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Favorite"
 * ,@SWG\Api(
 *   path="/v.04/Favorite/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi favorites",
 *     notes="",
 *     type="ListView",
 *     nickname="Favorite_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi favorite",
 *     notes="",
 *     type="Favorite",
 *     nickname="Favorite_list"
 *     ,@SWG\Parameter(
 *       name="Favorite",
 *       description="",
 *       required=true,
 *       type="Favorite_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Favorite/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi favorite by ID",
 *     notes="",
 *     type="Favorite",
 *     nickname="Favorite_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi favorite",
 *     notes="",
 *     type="Favorite",
 *     nickname="Favorite_detail"
 *     ,@SWG\Parameter(
 *       name="Favorite",
 *       description="",
 *       required=true,
 *       type="Favorite_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi favorite",
 *     notes="",
 *     type="Favorite",
 *     nickname="Favorite_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Favorite_put"
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Favorite",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Favorite_post"
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Favorite"
 *   ,@SWG\Property(
 *     name="From",
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
 *     name="target_id",
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
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="File"
 * ,@SWG\Api(
 *   path="/v.04/File/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of File",
 *     notes="",
 *     type="ListView",
 *     nickname="File_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new File",
 *     notes="",
 *     type="File",
 *     nickname="File_list"
 *     ,@SWG\Parameter(
 *       name="File",
 *       description="",
 *       required=true,
 *       type="File_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/File/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single File by ID",
 *     notes="",
 *     type="File",
 *     nickname="File_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing File",
 *     notes="",
 *     type="File",
 *     nickname="File_detail"
 *     ,@SWG\Parameter(
 *       name="File",
 *       description="",
 *       required=true,
 *       type="File_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing File",
 *     notes="",
 *     type="File",
 *     nickname="File_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="File_put"
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Tag",
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
 *     name="BaseFile",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="File",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="File"
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="Tag",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="From",
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
 *     name="service",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="BaseFile",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="url",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="text",
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
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="File_post"
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Tag",
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
 *     name="BaseFile",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Folder"
 * ,@SWG\Api(
 *   path="/v.04/Folder/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of Folder",
 *     notes="",
 *     type="ListView",
 *     nickname="Folder_list"
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
 *       description="Facebook",
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
 *     summary="Create a new Folder",
 *     notes="",
 *     type="Folder",
 *     nickname="Folder_list"
 *     ,@SWG\Parameter(
 *       name="Folder",
 *       description="",
 *       required=true,
 *       type="Folder_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook",
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
 * ,@SWG\Api(
 *   path="/v.04/Folder/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single Folder by ID",
 *     notes="",
 *     type="Folder",
 *     nickname="Folder_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing Folder",
 *     notes="",
 *     type="Folder",
 *     nickname="Folder_detail"
 *     ,@SWG\Parameter(
 *       name="Folder",
 *       description="",
 *       required=true,
 *       type="Folder_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing Folder",
 *     notes="",
 *     type="Folder",
 *     nickname="Folder_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Folder",
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
 *   id="Folder_post"
 *   ,@SWG\Property(
 *     name="BaseFile",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="data",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Folder_put"
 *   ,@SWG\Property(
 *     name="BaseFile",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="data",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="Folder"
 *   ,@SWG\Property(
 *     name="From",
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
 *     name="BaseFile",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="object_type",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="data",
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
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Friendship"
 * ,@SWG\Api(
 *   path="/v.04/Friendship/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi friendships",
 *     notes="",
 *     type="ListView",
 *     nickname="Friendship_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi friendship",
 *     notes="",
 *     type="Friendship",
 *     nickname="Friendship_list"
 *     ,@SWG\Parameter(
 *       name="Friendship",
 *       description="",
 *       required=true,
 *       type="Friendship_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Friendship/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi friendship by ID",
 *     notes="",
 *     type="Friendship",
 *     nickname="Friendship_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi friendship",
 *     notes="",
 *     type="Friendship",
 *     nickname="Friendship_detail"
 *     ,@SWG\Parameter(
 *       name="Friendship",
 *       description="",
 *       required=true,
 *       type="Friendship_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi friendship",
 *     notes="",
 *     type="Friendship",
 *     nickname="Friendship_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Friendship",
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
 *   id="Friendship"
 *   ,@SWG\Property(
 *     name="From",
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
 *     name="target_id",
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
 * @SWG\Model(
 *   id="Friendship_put"
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Friendship_post"
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="From"
 * ,@SWG\Api(
 *   path="/v.04/From/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of from models",
 *     notes="",
 *     type="ListView",
 *     nickname="From_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new from model",
 *     notes="",
 *     type="From",
 *     nickname="From_list"
 *     ,@SWG\Parameter(
 *       name="From",
 *       description="",
 *       required=true,
 *       type="From_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/From/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single from model by ID",
 *     notes="",
 *     type="From",
 *     nickname="From_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing from model",
 *     notes="",
 *     type="From",
 *     nickname="From_detail"
 *     ,@SWG\Parameter(
 *       name="From",
 *       description="",
 *       required=true,
 *       type="From_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing from model",
 *     notes="",
 *     type="From",
 *     nickname="From_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="From",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="From"
 *   ,@SWG\Property(
 *     name="name",
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
 *     name="id",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 *   ,@SWG\Property(
 *     name="from_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
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
 *   id="From_put"
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="from_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="From_post"
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="from_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Game"
 * ,@SWG\Api(
 *   path="/v.04/Game/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi games",
 *     notes="",
 *     type="ListView",
 *     nickname="Game_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi game",
 *     notes="",
 *     type="Game",
 *     nickname="Game_list"
 *     ,@SWG\Parameter(
 *       name="Game",
 *       description="",
 *       required=true,
 *       type="Game_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Game/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi game by ID",
 *     notes="",
 *     type="Game",
 *     nickname="Game_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi game",
 *     notes="",
 *     type="Game",
 *     nickname="Game_detail"
 *     ,@SWG\Parameter(
 *       name="Game",
 *       description="",
 *       required=true,
 *       type="Game_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi game",
 *     notes="",
 *     type="Game",
 *     nickname="Game_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Game/{id}/scores",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve the user scores for a game",
 *     notes="",
 *     type="object",
 *     nickname="scores"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook, OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Game/{id}/scores",
 *   description=""
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete scores for a Game",
 *     notes="",
 *     type="object",
 *     nickname="scores"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook, OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Game"
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="From",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="result",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="service",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="title",
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
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="metric",
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
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Game",
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
 *   id="Game_post"
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="metric",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="result",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Game_put"
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="metric",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="result",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Group"
 * ,@SWG\Api(
 *   path="/v.04/Group/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of groups",
 *     notes="",
 *     type="ListView",
 *     nickname="Group_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new group",
 *     notes="",
 *     type="Group",
 *     nickname="Group_list"
 *     ,@SWG\Parameter(
 *       name="Group",
 *       description="",
 *       required=true,
 *       type="Group_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Group/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single group by ID",
 *     notes="",
 *     type="Group",
 *     nickname="Group_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing group",
 *     notes="",
 *     type="Group",
 *     nickname="Group_detail"
 *     ,@SWG\Parameter(
 *       name="Group",
 *       description="",
 *       required=true,
 *       type="Group_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing group",
 *     notes="",
 *     type="Group",
 *     nickname="Group_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Group_post"
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Group",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Group"
 *   ,@SWG\Property(
 *     name="From",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Group_put"
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Invoice"
 * ,@SWG\Api(
 *   path="/v.04/Invoice/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi invoices",
 *     notes="",
 *     type="ListView",
 *     nickname="Invoice_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi invoice",
 *     notes="",
 *     type="Invoice",
 *     nickname="Invoice_list"
 *     ,@SWG\Parameter(
 *       name="Invoice",
 *       description="",
 *       required=true,
 *       type="Invoice_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Invoice/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi invoice by ID",
 *     notes="",
 *     type="Invoice",
 *     nickname="Invoice_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi invoice",
 *     notes="",
 *     type="Invoice",
 *     nickname="Invoice_detail"
 *     ,@SWG\Parameter(
 *       name="Invoice",
 *       description="",
 *       required=true,
 *       type="Invoice_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi invoice",
 *     notes="",
 *     type="Invoice",
 *     nickname="Invoice_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Invoice",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Invoice_put"
 *   ,@SWG\Property(
 *     name="currency",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="amount",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="vat",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="total_amount",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="Invoice"
 *   ,@SWG\Property(
 *     name="currency",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="amount",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="From",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="total_amount",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
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
 *     name="vat",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Invoice_post"
 *   ,@SWG\Property(
 *     name="currency",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="amount",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="vat",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="total_amount",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Like"
 * ,@SWG\Api(
 *   path="/v.04/Like/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi likes",
 *     notes="",
 *     type="ListView",
 *     nickname="Like_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi like",
 *     notes="",
 *     type="Like",
 *     nickname="Like_list"
 *     ,@SWG\Parameter(
 *       name="Like",
 *       description="",
 *       required=true,
 *       type="Like_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Like/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi like by ID",
 *     notes="",
 *     type="Like",
 *     nickname="Like_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi like",
 *     notes="",
 *     type="Like",
 *     nickname="Like_detail"
 *     ,@SWG\Parameter(
 *       name="Like",
 *       description="",
 *       required=true,
 *       type="Like_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi like",
 *     notes="",
 *     type="Like",
 *     nickname="Like_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Like_post"
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
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
 *   id="Like"
 *   ,@SWG\Property(
 *     name="From",
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
 *     name="target_id",
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
 * @SWG\Model(
 *   id="Like_put"
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Like",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Location"
 * ,@SWG\Api(
 *   path="/v.04/Location/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of location models",
 *     notes="",
 *     type="ListView",
 *     nickname="Location_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new location model",
 *     notes="",
 *     type="Location",
 *     nickname="Location_list"
 *     ,@SWG\Parameter(
 *       name="Location",
 *       description="",
 *       required=true,
 *       type="Location_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Location/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single location model by ID",
 *     notes="",
 *     type="Location",
 *     nickname="Location_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing location model",
 *     notes="",
 *     type="Location",
 *     nickname="Location_detail"
 *     ,@SWG\Parameter(
 *       name="Location",
 *       description="",
 *       required=true,
 *       type="Location_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing location model",
 *     notes="",
 *     type="Location",
 *     nickname="Location_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Location"
 *   ,@SWG\Property(
 *     name="latitude",
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
 *   ,@SWG\Property(
 *     name="id",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 *   ,@SWG\Property(
 *     name="longitude",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="height",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
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
 *   id="Location_post"
 *   ,@SWG\Property(
 *     name="latitude",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="longitude",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="height",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Location",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Location_put"
 *   ,@SWG\Property(
 *     name="latitude",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="longitude",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="height",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Measurement"
 * ,@SWG\Api(
 *   path="/v.04/Measurement/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi measurements",
 *     notes="",
 *     type="ListView",
 *     nickname="Measurement_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi measurement",
 *     notes="",
 *     type="Measurement",
 *     nickname="Measurement_list"
 *     ,@SWG\Parameter(
 *       name="Measurement",
 *       description="",
 *       required=true,
 *       type="Measurement_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Measurement/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi measurement by ID",
 *     notes="",
 *     type="Measurement",
 *     nickname="Measurement_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi measurement",
 *     notes="",
 *     type="Measurement",
 *     nickname="Measurement_detail"
 *     ,@SWG\Parameter(
 *       name="Measurement",
 *       description="",
 *       required=true,
 *       type="Measurement_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi measurement",
 *     notes="",
 *     type="Measurement",
 *     nickname="Measurement_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="The CBS you want to make a call to",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Measurement_post"
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="metric",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="result",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Measurement",
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
 *   id="Measurement_put"
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="metric",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="result",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Measurement"
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="From",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="result",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="service",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="title",
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
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="metric",
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
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Note"
 * ,@SWG\Api(
 *   path="/v.04/Note/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi notes",
 *     notes="",
 *     type="ListView",
 *     nickname="Note_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi note",
 *     notes="",
 *     type="Note",
 *     nickname="Note_list"
 *     ,@SWG\Parameter(
 *       name="Note",
 *       description="",
 *       required=true,
 *       type="Note_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Note/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi note by ID",
 *     notes="",
 *     type="Note",
 *     nickname="Note_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi note",
 *     notes="",
 *     type="Note",
 *     nickname="Note_detail"
 *     ,@SWG\Parameter(
 *       name="Note",
 *       description="",
 *       required=true,
 *       type="Note_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi note",
 *     notes="",
 *     type="Note",
 *     nickname="Note_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Note/{id}/comments",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve comments for a single openi note by id",
 *     notes="",
 *     type="object",
 *     nickname="comments"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Note/{id}/comments",
 *   description=""
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create comment for a single openi note by id",
 *     notes="",
 *     type="object",
 *     nickname="comments"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="text",
 *       description="text of the comment",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="title",
 *       description="title for the comment",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Note/{id}/likes",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve likes for a single openi note by id",
 *     notes="",
 *     type="object",
 *     nickname="likes"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Note/{id}/likes",
 *   description=""
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Likes a note by id",
 *     notes="",
 *     type="object",
 *     nickname="likes"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Note_post"
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Note"
 *   ,@SWG\Property(
 *     name="From",
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
 *     name="service",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="title",
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
 *     name="text",
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
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Note",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Note_put"
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Notebook"
 * ,@SWG\Api(
 *   path="/v.04/Notebook/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi notebooks",
 *     notes="",
 *     type="ListView",
 *     nickname="Notebook_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi notebook",
 *     notes="",
 *     type="Notebook",
 *     nickname="Notebook_list"
 *     ,@SWG\Parameter(
 *       name="Notebook",
 *       description="",
 *       required=true,
 *       type="Notebook_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Notebook/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi notebook by ID",
 *     notes="",
 *     type="Notebook",
 *     nickname="Notebook_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi notebook",
 *     notes="",
 *     type="Notebook",
 *     nickname="Notebook_detail"
 *     ,@SWG\Parameter(
 *       name="Notebook",
 *       description="",
 *       required=true,
 *       type="Notebook_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi notebook",
 *     notes="",
 *     type="Notebook",
 *     nickname="Notebook_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="The CBS you want to make a call to",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Notebook",
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
 *   id="Notebook_post"
 *   ,@SWG\Property(
 *     name="Notes",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Notebook"
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="From",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="service",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="title",
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
 *     name="Notes",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="object_type",
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
 * @SWG\Model(
 *   id="Notebook_put"
 *   ,@SWG\Property(
 *     name="Notes",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Nutrition"
 * ,@SWG\Api(
 *   path="/v.04/Nutrition/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi nutritions",
 *     notes="",
 *     type="ListView",
 *     nickname="Nutrition_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi nutrition",
 *     notes="",
 *     type="Nutrition",
 *     nickname="Nutrition_list"
 *     ,@SWG\Parameter(
 *       name="Nutrition",
 *       description="",
 *       required=true,
 *       type="Nutrition_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Nutrition/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi nutrition by ID",
 *     notes="",
 *     type="Nutrition",
 *     nickname="Nutrition_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi nutrition",
 *     notes="",
 *     type="Nutrition",
 *     nickname="Nutrition_detail"
 *     ,@SWG\Parameter(
 *       name="Nutrition",
 *       description="",
 *       required=true,
 *       type="Nutrition_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi nutrition",
 *     notes="",
 *     type="Nutrition",
 *     nickname="Nutrition_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Nutrition"
 *   ,@SWG\Property(
 *     name="fiber",
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
 *     name="sodium",
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
 *     name="calories",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="fat",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="water",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="protein",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="meal",
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
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Nutrition",
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
 *   id="Nutrition_put"
 *   ,@SWG\Property(
 *     name="water",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="fiber",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="sodium",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="protein",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="calories",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="meal",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="fat",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Nutrition_post"
 *   ,@SWG\Property(
 *     name="water",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="fiber",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="sodium",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="protein",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="calories",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="meal",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="fat",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Offer"
 * ,@SWG\Api(
 *   path="/v.04/Offer/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi offers",
 *     notes="",
 *     type="ListView",
 *     nickname="Offer_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi offer",
 *     notes="",
 *     type="Offer",
 *     nickname="Offer_list"
 *     ,@SWG\Parameter(
 *       name="Offer",
 *       description="",
 *       required=true,
 *       type="Offer_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Offer/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi offer by ID",
 *     notes="",
 *     type="Offer",
 *     nickname="Offer_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi offer",
 *     notes="",
 *     type="Offer",
 *     nickname="Offer_detail"
 *     ,@SWG\Parameter(
 *       name="Offer",
 *       description="",
 *       required=true,
 *       type="Offer_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi offer",
 *     notes="",
 *     type="Offer",
 *     nickname="Offer_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Offer_put"
 *   ,@SWG\Property(
 *     name="currency",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="price",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Offer",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Offer_post"
 *   ,@SWG\Property(
 *     name="currency",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="price",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
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
 *   id="Offer"
 *   ,@SWG\Property(
 *     name="currency",
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
 *     name="context",
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
 *     name="price",
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
 *     name="target_id",
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
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Order"
 * ,@SWG\Api(
 *   path="/v.04/Order/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi orders",
 *     notes="",
 *     type="ListView",
 *     nickname="Order_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi order",
 *     notes="",
 *     type="Order",
 *     nickname="Order_list"
 *     ,@SWG\Parameter(
 *       name="Order",
 *       description="",
 *       required=true,
 *       type="Order_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Order/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi order by ID",
 *     notes="",
 *     type="Order",
 *     nickname="Order_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi order",
 *     notes="",
 *     type="Order",
 *     nickname="Order_detail"
 *     ,@SWG\Parameter(
 *       name="Order",
 *       description="",
 *       required=true,
 *       type="Order_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi order",
 *     notes="",
 *     type="Order",
 *     nickname="Order_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Order_put"
 *   ,@SWG\Property(
 *     name="currency",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="amount",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="vat",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="total_amount",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
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
 *   id="Order_post"
 *   ,@SWG\Property(
 *     name="currency",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="amount",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="vat",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="total_amount",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Order",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Order"
 *   ,@SWG\Property(
 *     name="currency",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="amount",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="From",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="total_amount",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
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
 *     name="vat",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Page"
 * ,@SWG\Api(
 *   path="/v.04/Page/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of Page",
 *     notes="",
 *     type="ListView",
 *     nickname="Page_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new Page",
 *     notes="",
 *     type="Page",
 *     nickname="Page_list"
 *     ,@SWG\Parameter(
 *       name="Page",
 *       description="",
 *       required=true,
 *       type="Page_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Page/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single Page by ID",
 *     notes="",
 *     type="Page",
 *     nickname="Page_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing Page",
 *     notes="",
 *     type="Page",
 *     nickname="Page_detail"
 *     ,@SWG\Parameter(
 *       name="Page",
 *       description="",
 *       required=true,
 *       type="Page_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing Page",
 *     notes="",
 *     type="Page",
 *     nickname="Page_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
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
 *   id="Page"
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
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
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
 *     name="data",
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
 * @SWG\Model(
 *   id="Page_post"
 *   ,@SWG\Property(
 *     name="data",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Page",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Page_put"
 *   ,@SWG\Property(
 *     name="data",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Payment"
 * ,@SWG\Api(
 *   path="/v.04/Payment/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi payments",
 *     notes="",
 *     type="ListView",
 *     nickname="Payment_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi payment",
 *     notes="",
 *     type="Payment",
 *     nickname="Payment_list"
 *     ,@SWG\Parameter(
 *       name="Payment",
 *       description="",
 *       required=true,
 *       type="Payment_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Payment/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi payment by ID",
 *     notes="",
 *     type="Payment",
 *     nickname="Payment_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi payment",
 *     notes="",
 *     type="Payment",
 *     nickname="Payment_detail"
 *     ,@SWG\Parameter(
 *       name="Payment",
 *       description="",
 *       required=true,
 *       type="Payment_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi payment",
 *     notes="",
 *     type="Payment",
 *     nickname="Payment_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
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
 *   id="Payment_put"
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="Payment_post"
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Payment",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Payment"
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
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
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
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Person"
 * ,@SWG\Api(
 *   path="/v.04/Person/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of person models",
 *     notes="",
 *     type="ListView",
 *     nickname="Person_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new person model",
 *     notes="",
 *     type="Person",
 *     nickname="Person_list"
 *     ,@SWG\Parameter(
 *       name="Person",
 *       description="",
 *       required=true,
 *       type="Person_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Person/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single person model by ID",
 *     notes="",
 *     type="Person",
 *     nickname="Person_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing person model",
 *     notes="",
 *     type="Person",
 *     nickname="Person_detail"
 *     ,@SWG\Parameter(
 *       name="Person",
 *       description="",
 *       required=true,
 *       type="Person_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing person model",
 *     notes="",
 *     type="Person",
 *     nickname="Person_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Person"
 *   ,@SWG\Property(
 *     name="surname",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="middlename",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="id",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 *   ,@SWG\Property(
 *     name="birthdate",
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
 * @SWG\Model(
 *   id="Person_post"
 *   ,@SWG\Property(
 *     name="middlename",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="surname",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="birthdate",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Person",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Person_put"
 *   ,@SWG\Property(
 *     name="middlename",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="surname",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="birthdate",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Photo"
 * ,@SWG\Api(
 *   path="/v.04/Photo/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of Photo",
 *     notes="",
 *     type="ListView",
 *     nickname="Photo_list"
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
 *       description="Facebook, Flickr, Foursquare, Instagram",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new Photo",
 *     notes="",
 *     type="Photo",
 *     nickname="Photo_list"
 *     ,@SWG\Parameter(
 *       name="Photo",
 *       description="",
 *       required=true,
 *       type="Photo_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="url",
 *       description="Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="source",
 *       description="Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Photo/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single Photo by ID",
 *     notes="",
 *     type="Photo",
 *     nickname="Photo_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook, Flickr, Foursquare, Instagram",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing Photo",
 *     notes="",
 *     type="Photo",
 *     nickname="Photo_detail"
 *     ,@SWG\Parameter(
 *       name="Photo",
 *       description="",
 *       required=true,
 *       type="Photo_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing Photo",
 *     notes="",
 *     type="Photo",
 *     nickname="Photo_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook, Instagram",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Photo/{id}/Comments",
 *   description=""
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Post a new comment on target Photo on CBS",
 *     notes="",
 *     type="object",
 *     nickname="Comments"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="attachment_url",
 *       description="Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="attachment_id",
 *       description="Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="url",
 *       description="Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook, Flickr, Instagram",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="comment_text",
 *       description="Flickr",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="message",
 *       description="Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Photo/{id}/Comments",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="GET comments from Photo on CBS",
 *     notes="",
 *     type="object",
 *     nickname="Comments"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook, Flickr, Instagram",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Photo/{id}/Likes",
 *   description=""
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Post a new like on target Photo on CBS",
 *     notes="",
 *     type="object",
 *     nickname="Likes"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook, Instagram",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Photo/{id}/Likes",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="GET likes from Photo on CBS",
 *     notes="",
 *     type="object",
 *     nickname="Likes"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook, Instagram",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Photo/{id}/Likes",
 *   description=""
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete likes from Photo on CBS",
 *     notes="",
 *     type="object",
 *     nickname="Likes"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook, Instagram",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
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
 *   id="Photo"
 *   ,@SWG\Property(
 *     name="From",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="BaseTag",
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
 *     name="BaseFile",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="object_type",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="height",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="width",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Location",
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
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Photo_post"
 *   ,@SWG\Property(
 *     name="width",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Location",
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
 *     name="BaseFile",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="BaseTag",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="height",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Photo",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Photo_put"
 *   ,@SWG\Property(
 *     name="width",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Location",
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
 *     name="BaseFile",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="BaseTag",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="height",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Place"
 * ,@SWG\Api(
 *   path="/v.04/Place/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi places",
 *     notes="",
 *     type="ListView",
 *     nickname="Place_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi place",
 *     notes="",
 *     type="Place",
 *     nickname="Place_list"
 *     ,@SWG\Parameter(
 *       name="Place",
 *       description="",
 *       required=true,
 *       type="Place_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="name",
 *       description="Google",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="language",
 *       description="Google",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Google, Citygrid",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="lat_lng",
 *       description="Google",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="types",
 *       description="Google",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="accuracy",
 *       description="Google",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Place/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi place by ID",
 *     notes="",
 *     type="Place",
 *     nickname="Place_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Google, Citygrid",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi place",
 *     notes="",
 *     type="Place",
 *     nickname="Place_detail"
 *     ,@SWG\Parameter(
 *       name="Place",
 *       description="",
 *       required=true,
 *       type="Place_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi place",
 *     notes="",
 *     type="Place",
 *     nickname="Place_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Google, OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Place_post"
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Place",
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
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Place",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Place"
 *   ,@SWG\Property(
 *     name="From",
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
 *     name="text",
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
 *     name="Place",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Place_put"
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Place",
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Playlist"
 * ,@SWG\Api(
 *   path="/v.04/Playlist/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of Playlist",
 *     notes="",
 *     type="ListView",
 *     nickname="Playlist_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new Playlist",
 *     notes="",
 *     type="Playlist",
 *     nickname="Playlist_list"
 *     ,@SWG\Parameter(
 *       name="Playlist",
 *       description="",
 *       required=true,
 *       type="Playlist_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Playlist/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single Playlist by ID",
 *     notes="",
 *     type="Playlist",
 *     nickname="Playlist_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing Playlist",
 *     notes="",
 *     type="Playlist",
 *     nickname="Playlist_detail"
 *     ,@SWG\Parameter(
 *       name="Playlist",
 *       description="",
 *       required=true,
 *       type="Playlist_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing Playlist",
 *     notes="",
 *     type="Playlist",
 *     nickname="Playlist_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Playlist"
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
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
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
 *     name="data",
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
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Playlist",
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
 *   id="Playlist_post"
 *   ,@SWG\Property(
 *     name="data",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Playlist_put"
 *   ,@SWG\Property(
 *     name="data",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Product"
 * ,@SWG\Api(
 *   path="/v.04/Product/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi products",
 *     notes="",
 *     type="ListView",
 *     nickname="Product_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi product",
 *     notes="",
 *     type="Product",
 *     nickname="Product_list"
 *     ,@SWG\Parameter(
 *       name="Product",
 *       description="",
 *       required=true,
 *       type="Product_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Product/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi product by ID",
 *     notes="",
 *     type="Product",
 *     nickname="Product_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi product",
 *     notes="",
 *     type="Product",
 *     nickname="Product_detail"
 *     ,@SWG\Parameter(
 *       name="Product",
 *       description="",
 *       required=true,
 *       type="Product_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi product",
 *     notes="",
 *     type="Product",
 *     nickname="Product_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Product_put"
 *   ,@SWG\Property(
 *     name="currency",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="price",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="code",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="amount",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="Product_post"
 *   ,@SWG\Property(
 *     name="currency",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="price",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="code",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="amount",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Product",
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Product"
 *   ,@SWG\Property(
 *     name="currency",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="amount",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 *   ,@SWG\Property(
 *     name="code",
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
 *     name="context",
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
 *     name="price",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="object_type",
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
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Question"
 * ,@SWG\Api(
 *   path="/v.04/Question/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi questions",
 *     notes="",
 *     type="ListView",
 *     nickname="Question_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi question",
 *     notes="",
 *     type="Question",
 *     nickname="Question_list"
 *     ,@SWG\Parameter(
 *       name="Question",
 *       description="",
 *       required=true,
 *       type="Question_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Question/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi question by ID",
 *     notes="",
 *     type="Question",
 *     nickname="Question_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi question",
 *     notes="",
 *     type="Question",
 *     nickname="Question_detail"
 *     ,@SWG\Parameter(
 *       name="Question",
 *       description="",
 *       required=true,
 *       type="Question_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi question",
 *     notes="",
 *     type="Question",
 *     nickname="Question_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Question_put"
 *   ,@SWG\Property(
 *     name="QuestionOption",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="question",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Question",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Question_post"
 *   ,@SWG\Property(
 *     name="QuestionOption",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="question",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Question"
 *   ,@SWG\Property(
 *     name="QuestionOption",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="question",
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
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="QuestionOption"
 * ,@SWG\Api(
 *   path="/v.04/QuestionOption/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi question options",
 *     notes="",
 *     type="ListView",
 *     nickname="QuestionOption_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi question option",
 *     notes="",
 *     type="QuestionOption",
 *     nickname="QuestionOption_list"
 *     ,@SWG\Parameter(
 *       name="QuestionOption",
 *       description="",
 *       required=true,
 *       type="QuestionOption_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/QuestionOption/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi question option by ID",
 *     notes="",
 *     type="QuestionOption",
 *     nickname="QuestionOption_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi question option",
 *     notes="",
 *     type="QuestionOption",
 *     nickname="QuestionOption_detail"
 *     ,@SWG\Parameter(
 *       name="QuestionOption",
 *       description="",
 *       required=true,
 *       type="QuestionOption_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi question option",
 *     notes="",
 *     type="QuestionOption",
 *     nickname="QuestionOption_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
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
 *   id="QuestionOption_post"
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="option_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="QuestionOption"
 *   ,@SWG\Property(
 *     name="target_id",
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
 *     name="context",
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
 *     name="text",
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
 *     name="option_id",
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
 * @SWG\Model(
 *   id="QuestionOption_put"
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="option_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="QuestionOption",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="RSVP"
 * ,@SWG\Api(
 *   path="/v.04/RSVP/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi rsvps",
 *     notes="",
 *     type="ListView",
 *     nickname="RSVP_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi rsvp",
 *     notes="",
 *     type="RSVP",
 *     nickname="RSVP_list"
 *     ,@SWG\Parameter(
 *       name="RSVP",
 *       description="",
 *       required=true,
 *       type="RSVP_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/RSVP/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi rsvp by ID",
 *     notes="",
 *     type="RSVP",
 *     nickname="RSVP_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi rsvp",
 *     notes="",
 *     type="RSVP",
 *     nickname="RSVP_detail"
 *     ,@SWG\Parameter(
 *       name="RSVP",
 *       description="",
 *       required=true,
 *       type="RSVP_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi rsvp",
 *     notes="",
 *     type="RSVP",
 *     nickname="RSVP_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="RSVP"
 *   ,@SWG\Property(
 *     name="From",
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
 *     name="service",
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
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="rsvp",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="RSVP",
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="RSVP_post"
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="rsvp",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="RSVP_put"
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="rsvp",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Refund"
 * ,@SWG\Api(
 *   path="/v.04/Refund/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi refunds",
 *     notes="",
 *     type="ListView",
 *     nickname="Refund_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi refund",
 *     notes="",
 *     type="Refund",
 *     nickname="Refund_list"
 *     ,@SWG\Parameter(
 *       name="Refund",
 *       description="",
 *       required=true,
 *       type="Refund_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Refund/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi refund by ID",
 *     notes="",
 *     type="Refund",
 *     nickname="Refund_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi refund",
 *     notes="",
 *     type="Refund",
 *     nickname="Refund_detail"
 *     ,@SWG\Parameter(
 *       name="Refund",
 *       description="",
 *       required=true,
 *       type="Refund_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi refund",
 *     notes="",
 *     type="Refund",
 *     nickname="Refund_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Refund"
 *   ,@SWG\Property(
 *     name="currency",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="amount",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="From",
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
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="reason",
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
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Refund",
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
 *   id="Refund_post"
 *   ,@SWG\Property(
 *     name="currency",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="amount",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="reason",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Refund_put"
 *   ,@SWG\Property(
 *     name="currency",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="amount",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="reason",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Registeredapplication"
 * ,@SWG\Api(
 *   path="/v.04/Registeredapplication/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of registered applications",
 *     notes="",
 *     type="ListView",
 *     nickname="Registeredapplication_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new registered application",
 *     notes="",
 *     type="Registeredapplication",
 *     nickname="Registeredapplication_list"
 *     ,@SWG\Parameter(
 *       name="Registeredapplication",
 *       description="",
 *       required=true,
 *       type="Registeredapplication_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Registeredapplication/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single registered application by ID",
 *     notes="",
 *     type="Registeredapplication",
 *     nickname="Registeredapplication_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing registered application",
 *     notes="",
 *     type="Registeredapplication",
 *     nickname="Registeredapplication_detail"
 *     ,@SWG\Parameter(
 *       name="Registeredapplication",
 *       description="",
 *       required=true,
 *       type="Registeredapplication_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing registered application",
 *     notes="",
 *     type="Registeredapplication",
 *     nickname="Registeredapplication_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Registeredapplication",
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
 *   id="Registeredapplication_put"
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Registeredapplication_post"
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="Registeredapplication"
 *   ,@SWG\Property(
 *     name="From",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Review"
 * ,@SWG\Api(
 *   path="/v.04/Review/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi reviews",
 *     notes="",
 *     type="ListView",
 *     nickname="Review_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi review",
 *     notes="",
 *     type="Review",
 *     nickname="Review_list"
 *     ,@SWG\Parameter(
 *       name="Review",
 *       description="",
 *       required=true,
 *       type="Review_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Review/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi review by ID",
 *     notes="",
 *     type="Review",
 *     nickname="Review_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi review",
 *     notes="",
 *     type="Review",
 *     nickname="Review_detail"
 *     ,@SWG\Parameter(
 *       name="Review",
 *       description="",
 *       required=true,
 *       type="Review_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi review",
 *     notes="",
 *     type="Review",
 *     nickname="Review_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Review",
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
 *   id="Review_post"
 *   ,@SWG\Property(
 *     name="rating",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="scale",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Review_put"
 *   ,@SWG\Property(
 *     name="rating",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="scale",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Review"
 *   ,@SWG\Property(
 *     name="rating",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="scale",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
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
 *     name="title",
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
 *     name="text",
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
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Route"
 * ,@SWG\Api(
 *   path="/v.04/Route/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi routes",
 *     notes="",
 *     type="ListView",
 *     nickname="Route_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi route",
 *     notes="",
 *     type="Route",
 *     nickname="Route_list"
 *     ,@SWG\Parameter(
 *       name="Route",
 *       description="",
 *       required=true,
 *       type="Route_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Route/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi route by ID",
 *     notes="",
 *     type="Route",
 *     nickname="Route_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi route",
 *     notes="",
 *     type="Route",
 *     nickname="Route_detail"
 *     ,@SWG\Parameter(
 *       name="Route",
 *       description="",
 *       required=true,
 *       type="Route_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi route",
 *     notes="",
 *     type="Route",
 *     nickname="Route_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Route_post"
 *   ,@SWG\Property(
 *     name="picture",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Route",
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
 *   id="Route_put"
 *   ,@SWG\Property(
 *     name="picture",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Route"
 *   ,@SWG\Property(
 *     name="picture",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="From",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="service",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="title",
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
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Score"
 * ,@SWG\Api(
 *   path="/v.04/Score/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi scores",
 *     notes="",
 *     type="ListView",
 *     nickname="Score_list"
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
 *       description="Facebook, OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi score",
 *     notes="",
 *     type="Score",
 *     nickname="Score_list"
 *     ,@SWG\Parameter(
 *       name="Score",
 *       description="",
 *       required=true,
 *       type="Score_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="score",
 *       description="Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Score/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi score by ID",
 *     notes="",
 *     type="Score",
 *     nickname="Score_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi score",
 *     notes="",
 *     type="Score",
 *     nickname="Score_detail"
 *     ,@SWG\Parameter(
 *       name="Score",
 *       description="",
 *       required=true,
 *       type="Score_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi score",
 *     notes="",
 *     type="Score",
 *     nickname="Score_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Score",
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
 *   id="Score_post"
 *   ,@SWG\Property(
 *     name="score",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Score"
 *   ,@SWG\Property(
 *     name="score",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="From",
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
 *     name="target_id",
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
 * @SWG\Model(
 *   id="Score_put"
 *   ,@SWG\Property(
 *     name="score",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Service"
 * ,@SWG\Api(
 *   path="/v.04/Service/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi services",
 *     notes="",
 *     type="ListView",
 *     nickname="Service_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi service",
 *     notes="",
 *     type="Service",
 *     nickname="Service_list"
 *     ,@SWG\Parameter(
 *       name="Service",
 *       description="",
 *       required=true,
 *       type="Service_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Service/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi service by ID",
 *     notes="",
 *     type="Service",
 *     nickname="Service_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi service",
 *     notes="",
 *     type="Service",
 *     nickname="Service_detail"
 *     ,@SWG\Parameter(
 *       name="Service",
 *       description="",
 *       required=true,
 *       type="Service_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi service",
 *     notes="",
 *     type="Service",
 *     nickname="Service_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Service",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Service_put"
 *   ,@SWG\Property(
 *     name="currency",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="price",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="code",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="amount",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="Service"
 *   ,@SWG\Property(
 *     name="currency",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="amount",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 *   ,@SWG\Property(
 *     name="code",
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
 *     name="context",
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
 *     name="price",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="object_type",
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
 * @SWG\Model(
 *   id="Service_post"
 *   ,@SWG\Property(
 *     name="currency",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="price",
 *     type="float",
 *     format="",
 *     description="Floating point numeric data. Ex: 26.73"
 *   )
 *   ,@SWG\Property(
 *     name="code",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="amount",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Shipping"
 * ,@SWG\Api(
 *   path="/v.04/Shipping/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi shippings",
 *     notes="",
 *     type="ListView",
 *     nickname="Shipping_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi shipping",
 *     notes="",
 *     type="Shipping",
 *     nickname="Shipping_list"
 *     ,@SWG\Parameter(
 *       name="Shipping",
 *       description="",
 *       required=true,
 *       type="Shipping_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Shipping/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi shipping by ID",
 *     notes="",
 *     type="Shipping",
 *     nickname="Shipping_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi shipping",
 *     notes="",
 *     type="Shipping",
 *     nickname="Shipping_detail"
 *     ,@SWG\Parameter(
 *       name="Shipping",
 *       description="",
 *       required=true,
 *       type="Shipping_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi shipping",
 *     notes="",
 *     type="Shipping",
 *     nickname="Shipping_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Shipping",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Shipping"
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="From",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="details",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="service",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Address",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="url",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="object_type",
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
 *   id="Shipping_put"
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="details",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="Address",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Shipping_post"
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="details",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="Address",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Shop"
 * ,@SWG\Api(
 *   path="/v.04/Shop/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi shops",
 *     notes="",
 *     type="ListView",
 *     nickname="Shop_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi shop",
 *     notes="",
 *     type="Shop",
 *     nickname="Shop_list"
 *     ,@SWG\Parameter(
 *       name="Shop",
 *       description="",
 *       required=true,
 *       type="Shop_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Shop/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi shop by ID",
 *     notes="",
 *     type="Shop",
 *     nickname="Shop_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi shop",
 *     notes="",
 *     type="Shop",
 *     nickname="Shop_detail"
 *     ,@SWG\Parameter(
 *       name="Shop",
 *       description="",
 *       required=true,
 *       type="Shop_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi shop",
 *     notes="",
 *     type="Shop",
 *     nickname="Shop_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Shop_post"
 *   ,@SWG\Property(
 *     name="currency",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="region",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="Shop"
 *   ,@SWG\Property(
 *     name="currency",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="From",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
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
 *     name="region",
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
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Shop",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Shop_put"
 *   ,@SWG\Property(
 *     name="currency",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="region",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Size"
 * ,@SWG\Api(
 *   path="/v.04/Size/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of size models",
 *     notes="",
 *     type="ListView",
 *     nickname="Size_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new size model",
 *     notes="",
 *     type="Size",
 *     nickname="Size_list"
 *     ,@SWG\Parameter(
 *       name="Size",
 *       description="",
 *       required=true,
 *       type="Size_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Size/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single size model by ID",
 *     notes="",
 *     type="Size",
 *     nickname="Size_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing size model",
 *     notes="",
 *     type="Size",
 *     nickname="Size_detail"
 *     ,@SWG\Parameter(
 *       name="Size",
 *       description="",
 *       required=true,
 *       type="Size_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing size model",
 *     notes="",
 *     type="Size",
 *     nickname="Size_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Size"
 *   ,@SWG\Property(
 *     name="width",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="depth",
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
 *   ,@SWG\Property(
 *     name="id",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 *   ,@SWG\Property(
 *     name="height",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Size",
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Size_post"
 *   ,@SWG\Property(
 *     name="width",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="depth",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="height",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Size_put"
 *   ,@SWG\Property(
 *     name="width",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="depth",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="height",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Sleep"
 * ,@SWG\Api(
 *   path="/v.04/Sleep/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi sleeps",
 *     notes="",
 *     type="ListView",
 *     nickname="Sleep_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi sleep",
 *     notes="",
 *     type="Sleep",
 *     nickname="Sleep_list"
 *     ,@SWG\Parameter(
 *       name="Sleep",
 *       description="",
 *       required=true,
 *       type="Sleep_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Sleep/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi sleep by ID",
 *     notes="",
 *     type="Sleep",
 *     nickname="Sleep_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi sleep",
 *     notes="",
 *     type="Sleep",
 *     nickname="Sleep_detail"
 *     ,@SWG\Parameter(
 *       name="Sleep",
 *       description="",
 *       required=true,
 *       type="Sleep_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi sleep",
 *     notes="",
 *     type="Sleep",
 *     nickname="Sleep_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Sleep_post"
 *   ,@SWG\Property(
 *     name="awake",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="rem",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="light",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="times_woken",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="deep",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Sleep",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Sleep"
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
 *     name="light",
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
 *     name="deep",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="awake",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="rem",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="times_woken",
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
 * @SWG\Model(
 *   id="Sleep_put"
 *   ,@SWG\Property(
 *     name="awake",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="rem",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="light",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="times_woken",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="deep",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="SocialAccount"
 * ,@SWG\Api(
 *   path="/v.04/SocialAccount/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of social accounts",
 *     notes="",
 *     type="ListView",
 *     nickname="SocialAccount_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new social account",
 *     notes="",
 *     type="SocialAccount",
 *     nickname="SocialAccount_list"
 *     ,@SWG\Parameter(
 *       name="SocialAccount",
 *       description="",
 *       required=true,
 *       type="SocialAccount_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/SocialAccount/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single social account by ID",
 *     notes="",
 *     type="SocialAccount",
 *     nickname="SocialAccount_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing social account",
 *     notes="",
 *     type="SocialAccount",
 *     nickname="SocialAccount_detail"
 *     ,@SWG\Parameter(
 *       name="SocialAccount",
 *       description="",
 *       required=true,
 *       type="SocialAccount_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing social account",
 *     notes="",
 *     type="SocialAccount",
 *     nickname="SocialAccount_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="SocialAccount",
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
 *   id="SocialAccount_put"
 *   ,@SWG\Property(
 *     name="extra_data",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="provider",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="last_login",
 *     type="string",
 *     format="date-format",
 *     description="A date &amp; time as a string. Ex: &quot;2010-11-10T03:07:43&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="uid",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="date_joined",
 *     type="string",
 *     format="date-format",
 *     description="A date &amp; time as a string. Ex: &quot;2010-11-10T03:07:43&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="SocialAccount_post"
 *   ,@SWG\Property(
 *     name="extra_data",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="provider",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="last_login",
 *     type="string",
 *     format="date-format",
 *     description="A date &amp; time as a string. Ex: &quot;2010-11-10T03:07:43&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="uid",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="date_joined",
 *     type="string",
 *     format="date-format",
 *     description="A date &amp; time as a string. Ex: &quot;2010-11-10T03:07:43&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="SocialAccount"
 *   ,@SWG\Property(
 *     name="last_login",
 *     type="string",
 *     format="date-format",
 *     description="A date &amp; time as a string. Ex: &quot;2010-11-10T03:07:43&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="uid",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="provider",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="extra_data",
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
 *   ,@SWG\Property(
 *     name="date_joined",
 *     type="string",
 *     format="date-format",
 *     description="A date &amp; time as a string. Ex: &quot;2010-11-10T03:07:43&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="SocialToken"
 * ,@SWG\Api(
 *   path="/v.04/SocialToken/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of social application tokens",
 *     notes="",
 *     type="ListView",
 *     nickname="SocialToken_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new social application token",
 *     notes="",
 *     type="SocialToken",
 *     nickname="SocialToken_list"
 *     ,@SWG\Parameter(
 *       name="SocialToken",
 *       description="",
 *       required=true,
 *       type="SocialToken_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/SocialToken/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single social application token by ID",
 *     notes="",
 *     type="SocialToken",
 *     nickname="SocialToken_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing social application token",
 *     notes="",
 *     type="SocialToken",
 *     nickname="SocialToken_detail"
 *     ,@SWG\Parameter(
 *       name="SocialToken",
 *       description="",
 *       required=true,
 *       type="SocialToken_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing social application token",
 *     notes="",
 *     type="SocialToken",
 *     nickname="SocialToken_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="SocialToken",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="SocialToken_post"
 *   ,@SWG\Property(
 *     name="token",
 *     type="string",
 *     format="",
 *     description="&quot;oauth_token&quot; (OAuth1) or access token (OAuth2)"
 *   )
 *   ,@SWG\Property(
 *     name="expires_at",
 *     type="string",
 *     format="date-format",
 *     description="A date &amp; time as a string. Ex: &quot;2010-11-10T03:07:43&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="token_secret",
 *     type="string",
 *     format="",
 *     description="&quot;oauth_token_secret&quot; (OAuth1) or refresh token (OAuth2)"
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="SocialToken"
 *   ,@SWG\Property(
 *     name="token",
 *     type="string",
 *     format="",
 *     description="&quot;oauth_token&quot; (OAuth1) or access token (OAuth2)"
 *   )
 *   ,@SWG\Property(
 *     name="expires_at",
 *     type="string",
 *     format="date-format",
 *     description="A date &amp; time as a string. Ex: &quot;2010-11-10T03:07:43&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="token_secret",
 *     type="string",
 *     format="",
 *     description="&quot;oauth_token_secret&quot; (OAuth1) or refresh token (OAuth2)"
 *   )
 *   ,@SWG\Property(
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="SocialToken_put"
 *   ,@SWG\Property(
 *     name="token",
 *     type="string",
 *     format="",
 *     description="&quot;oauth_token&quot; (OAuth1) or access token (OAuth2)"
 *   )
 *   ,@SWG\Property(
 *     name="expires_at",
 *     type="string",
 *     format="date-format",
 *     description="A date &amp; time as a string. Ex: &quot;2010-11-10T03:07:43&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="token_secret",
 *     type="string",
 *     format="",
 *     description="&quot;oauth_token_secret&quot; (OAuth1) or refresh token (OAuth2)"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Socialapp"
 * ,@SWG\Api(
 *   path="/v.04/Socialapp/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of social applications",
 *     notes="",
 *     type="ListView",
 *     nickname="Socialapp_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new social application",
 *     notes="",
 *     type="Socialapp",
 *     nickname="Socialapp_list"
 *     ,@SWG\Parameter(
 *       name="Socialapp",
 *       description="",
 *       required=true,
 *       type="Socialapp_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Socialapp/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single social application by ID",
 *     notes="",
 *     type="Socialapp",
 *     nickname="Socialapp_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing social application",
 *     notes="",
 *     type="Socialapp",
 *     nickname="Socialapp_detail"
 *     ,@SWG\Parameter(
 *       name="Socialapp",
 *       description="",
 *       required=true,
 *       type="Socialapp_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing social application",
 *     notes="",
 *     type="Socialapp",
 *     nickname="Socialapp_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Socialapp_post"
 *   ,@SWG\Property(
 *     name="key",
 *     type="string",
 *     format="",
 *     description="Key"
 *   )
 *   ,@SWG\Property(
 *     name="secret",
 *     type="string",
 *     format="",
 *     description="API secret, client secret, or consumer secret"
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="client_id",
 *     type="string",
 *     format="",
 *     description="App ID, or consumer key"
 *   )
 *   ,@SWG\Property(
 *     name="provider",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Socialapp",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Socialapp_put"
 *   ,@SWG\Property(
 *     name="key",
 *     type="string",
 *     format="",
 *     description="Key"
 *   )
 *   ,@SWG\Property(
 *     name="secret",
 *     type="string",
 *     format="",
 *     description="API secret, client secret, or consumer secret"
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="client_id",
 *     type="string",
 *     format="",
 *     description="App ID, or consumer key"
 *   )
 *   ,@SWG\Property(
 *     name="provider",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Socialapp"
 *   ,@SWG\Property(
 *     name="secret",
 *     type="string",
 *     format="",
 *     description="API secret, client secret, or consumer secret"
 *   )
 *   ,@SWG\Property(
 *     name="client_id",
 *     type="string",
 *     format="",
 *     description="App ID, or consumer key"
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="key",
 *     type="string",
 *     format="",
 *     description="Key"
 *   )
 *   ,@SWG\Property(
 *     name="provider",
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
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Status"
 * ,@SWG\Api(
 *   path="/v.04/Status/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi statuss",
 *     notes="",
 *     type="ListView",
 *     nickname="Status_list"
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
 *       description="available:Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=true,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi status",
 *     notes="",
 *     type="Status",
 *     nickname="Status_list"
 *     ,@SWG\Parameter(
 *       name="Status",
 *       description="",
 *       required=true,
 *       type="Status_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="available:Twitter, Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="message",
 *       description="Facebook message",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="text",
 *       description="Twitter text",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Status/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi status by ID",
 *     notes="",
 *     type="Status",
 *     nickname="Status_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="available:Facebook,Foursquare",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=true,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi status",
 *     notes="",
 *     type="Status",
 *     nickname="Status_detail"
 *     ,@SWG\Parameter(
 *       name="Status",
 *       description="",
 *       required=true,
 *       type="Status_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi status",
 *     notes="",
 *     type="Status",
 *     nickname="Status_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="The CBS you want to make a call to",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Status/{id}/like",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve likes for a status by id",
 *     notes="",
 *     type="object",
 *     nickname="like"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="available:Facebook, OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=true,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Status/{id}/comment",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve comments for a status by id",
 *     notes="",
 *     type="object",
 *     nickname="comment"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="available:Facebook, OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=true,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Status/{id}/dislike",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve dislikes for a status by id",
 *     notes="",
 *     type="object",
 *     nickname="dislike"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="available:OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=true,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Status/{id}/favorite",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve favorites for a status by id",
 *     notes="",
 *     type="object",
 *     nickname="favorite"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="available:OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=true,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Status/{id}/comment",
 *   description=""
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Post comment for a status by id",
 *     notes="",
 *     type="object",
 *     nickname="comment"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="attachment_url",
 *       description="Facebook attachment_url",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="attachment_id",
 *       description="Facebook attachment_id",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="available:Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="text",
 *       description="Facebook text",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="source",
 *       description="Facebook source",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=true,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Status/{id}/like",
 *   description=""
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Like a status by id",
 *     notes="",
 *     type="object",
 *     nickname="like"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="available:Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=true,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Status/{id}/favorites",
 *   description=""
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Favorite a status by id",
 *     notes="",
 *     type="object",
 *     nickname="favorites"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="available:Twitter",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=true,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Status/{id}/like",
 *   description=""
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete like for a status by id",
 *     notes="",
 *     type="object",
 *     nickname="like"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="available:Facebook, OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=true,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Status/{id}/dislike",
 *   description=""
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete dislike for a status by id",
 *     notes="",
 *     type="object",
 *     nickname="dislike"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="available:OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=true,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Status/{id}/favorite",
 *   description=""
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete favorite for a status by id",
 *     notes="",
 *     type="object",
 *     nickname="favorite"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="available:OPENi, Twitter",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=true,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Status"
 *   ,@SWG\Property(
 *     name="From",
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
 *     name="service",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="title",
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
 *     name="text",
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
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Status",
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
 *   id="Status_post"
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Status_put"
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Tag"
 * ,@SWG\Api(
 *   path="/v.04/Tag/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi tags",
 *     notes="",
 *     type="ListView",
 *     nickname="Tag_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi tag",
 *     notes="",
 *     type="Tag",
 *     nickname="Tag_list"
 *     ,@SWG\Parameter(
 *       name="Tag",
 *       description="",
 *       required=true,
 *       type="Tag_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Tag/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi tag by ID",
 *     notes="",
 *     type="Tag",
 *     nickname="Tag_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi tag",
 *     notes="",
 *     type="Tag",
 *     nickname="Tag_detail"
 *     ,@SWG\Parameter(
 *       name="Tag",
 *       description="",
 *       required=true,
 *       type="Tag_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi tag",
 *     notes="",
 *     type="Tag",
 *     nickname="Tag_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Tag"
 *   ,@SWG\Property(
 *     name="From",
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
 *     name="text",
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
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="tagged_id",
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
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Tag",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Tag_put"
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="tagged_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Tag_post"
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="target_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="tagged_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Time"
 * ,@SWG\Api(
 *   path="/v.04/Time/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of time models",
 *     notes="",
 *     type="ListView",
 *     nickname="Time_list"
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
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new time model",
 *     notes="",
 *     type="Time",
 *     nickname="Time_list"
 *     ,@SWG\Parameter(
 *       name="Time",
 *       description="",
 *       required=true,
 *       type="Time_post",
 *       paramType="body"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Time/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single time model by ID",
 *     notes="",
 *     type="Time",
 *     nickname="Time_detail"
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing time model",
 *     notes="",
 *     type="Time",
 *     nickname="Time_detail"
 *     ,@SWG\Parameter(
 *       name="Time",
 *       description="",
 *       required=true,
 *       type="Time_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing time model",
 *     notes="",
 *     type="Time",
 *     nickname="Time_detail"
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Time"
 *   ,@SWG\Property(
 *     name="created_time",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="deleted_time",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="id",
 *     type="integer",
 *     format="",
 *     description="Integer data. Ex: 2673"
 *   )
 *   ,@SWG\Property(
 *     name="edited_time",
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
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Time",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Time_post"
 *   ,@SWG\Property(
 *     name="created_time",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="deleted_time",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="edited_time",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Time_put"
 *   ,@SWG\Property(
 *     name="created_time",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="deleted_time",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="edited_time",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Travel"
 * ,@SWG\Api(
 *   path="/v.04/Travel/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi travels",
 *     notes="",
 *     type="ListView",
 *     nickname="Travel_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi travel",
 *     notes="",
 *     type="Travel",
 *     nickname="Travel_list"
 *     ,@SWG\Parameter(
 *       name="Travel",
 *       description="",
 *       required=true,
 *       type="Travel_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Travel/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi travel by ID",
 *     notes="",
 *     type="Travel",
 *     nickname="Travel_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi travel",
 *     notes="",
 *     type="Travel",
 *     nickname="Travel_detail"
 *     ,@SWG\Parameter(
 *       name="Travel",
 *       description="",
 *       required=true,
 *       type="Travel_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi travel",
 *     notes="",
 *     type="Travel",
 *     nickname="Travel_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Travel",
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
 *   id="Travel_post"
 *   ,@SWG\Property(
 *     name="picture",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Travel_put"
 *   ,@SWG\Property(
 *     name="picture",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="title",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Travel"
 *   ,@SWG\Property(
 *     name="picture",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="From",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="service",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="title",
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
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="User"
 * ,@SWG\Api(
 *   path="/v.04/User/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of users",
 *     notes="",
 *     type="ListView",
 *     nickname="User_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new user",
 *     notes="",
 *     type="User",
 *     nickname="User_list"
 *     ,@SWG\Parameter(
 *       name="User",
 *       description="",
 *       required=true,
 *       type="User_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/User/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single user by ID",
 *     notes="",
 *     type="User",
 *     nickname="User_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing user",
 *     notes="",
 *     type="User",
 *     nickname="User_detail"
 *     ,@SWG\Parameter(
 *       name="User",
 *       description="",
 *       required=true,
 *       type="User_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing user",
 *     notes="",
 *     type="User",
 *     nickname="User_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="User_post"
 *   ,@SWG\Property(
 *     name="username",
 *     type="string",
 *     format="",
 *     description="Required. 30 characters or fewer. Letters, numbers and @/./+/-/_ characters"
 *   )
 *   ,@SWG\Property(
 *     name="first_name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="last_name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="is_active",
 *     type="boolean",
 *     format="",
 *     description="Designates whether this user should be treated as active. Unselect this instead of deleting accounts."
 *   )
 *   ,@SWG\Property(
 *     name="is_superuser",
 *     type="boolean",
 *     format="",
 *     description="Designates that this user has all permissions without explicitly assigning them."
 *   )
 *   ,@SWG\Property(
 *     name="is_staff",
 *     type="boolean",
 *     format="",
 *     description="Designates whether the user can log into this admin site."
 *   )
 *   ,@SWG\Property(
 *     name="last_login",
 *     type="string",
 *     format="date-format",
 *     description="A date &amp; time as a string. Ex: &quot;2010-11-10T03:07:43&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="password",
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
 *     name="date_joined",
 *     type="string",
 *     format="date-format",
 *     description="A date &amp; time as a string. Ex: &quot;2010-11-10T03:07:43&quot;"
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
 *   id="User"
 *   ,@SWG\Property(
 *     name="username",
 *     type="string",
 *     format="",
 *     description="Required. 30 characters or fewer. Letters, numbers and @/./+/-/_ characters"
 *   )
 *   ,@SWG\Property(
 *     name="first_name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="last_name",
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
 *     name="resource_uri",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="is_active",
 *     type="boolean",
 *     format="",
 *     description="Designates whether this user should be treated as active. Unselect this instead of deleting accounts."
 *   )
 *   ,@SWG\Property(
 *     name="is_superuser",
 *     type="boolean",
 *     format="",
 *     description="Designates that this user has all permissions without explicitly assigning them."
 *   )
 *   ,@SWG\Property(
 *     name="is_staff",
 *     type="boolean",
 *     format="",
 *     description="Designates whether the user can log into this admin site."
 *   )
 *   ,@SWG\Property(
 *     name="last_login",
 *     type="string",
 *     format="date-format",
 *     description="A date &amp; time as a string. Ex: &quot;2010-11-10T03:07:43&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="password",
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
 *     name="date_joined",
 *     type="string",
 *     format="date-format",
 *     description="A date &amp; time as a string. Ex: &quot;2010-11-10T03:07:43&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="User_put"
 *   ,@SWG\Property(
 *     name="username",
 *     type="string",
 *     format="",
 *     description="Required. 30 characters or fewer. Letters, numbers and @/./+/-/_ characters"
 *   )
 *   ,@SWG\Property(
 *     name="first_name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="last_name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="is_active",
 *     type="boolean",
 *     format="",
 *     description="Designates whether this user should be treated as active. Unselect this instead of deleting accounts."
 *   )
 *   ,@SWG\Property(
 *     name="is_superuser",
 *     type="boolean",
 *     format="",
 *     description="Designates that this user has all permissions without explicitly assigning them."
 *   )
 *   ,@SWG\Property(
 *     name="is_staff",
 *     type="boolean",
 *     format="",
 *     description="Designates whether the user can log into this admin site."
 *   )
 *   ,@SWG\Property(
 *     name="last_login",
 *     type="string",
 *     format="date-format",
 *     description="A date &amp; time as a string. Ex: &quot;2010-11-10T03:07:43&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="password",
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
 *     name="date_joined",
 *     type="string",
 *     format="date-format",
 *     description="A date &amp; time as a string. Ex: &quot;2010-11-10T03:07:43&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="User",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Video"
 * ,@SWG\Api(
 *   path="/v.04/Video/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of Video",
 *     notes="",
 *     type="ListView",
 *     nickname="Video_list"
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
 *       description="Facebook, OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new Video",
 *     notes="",
 *     type="Video",
 *     nickname="Video_list"
 *     ,@SWG\Parameter(
 *       name="Video",
 *       description="",
 *       required=true,
 *       type="Video_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="url",
 *       description="Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook, OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="source",
 *       description="Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Video/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single Video by ID",
 *     notes="",
 *     type="Video",
 *     nickname="Video_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook, OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing Video",
 *     notes="",
 *     type="Video",
 *     nickname="Video_detail"
 *     ,@SWG\Parameter(
 *       name="Video",
 *       description="",
 *       required=true,
 *       type="Video_put",
 *       paramType="body"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing Video",
 *     notes="",
 *     type="Video",
 *     nickname="Video_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook, OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Video/{id}/Comments",
 *   description=""
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Post a new comment on target Video on CBS",
 *     notes="",
 *     type="object",
 *     nickname="Comments"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="attachment_url",
 *       description="Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="attachment_id",
 *       description="Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="attachment_source",
 *       description="Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook, OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="message",
 *       description="Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Video/{id}/Comments",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="GET comments from Video on CBS",
 *     notes="",
 *     type="object",
 *     nickname="Comments"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Video/{id}/Likes",
 *   description=""
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Post a new like on target Video on CBS",
 *     notes="",
 *     type="object",
 *     nickname="Likes"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Video/{id}/Likes",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="GET likes from Video on CBS",
 *     notes="",
 *     type="object",
 *     nickname="Likes"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Video/{id}/Likes",
 *   description=""
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete likes from Video on CBS",
 *     notes="",
 *     type="object",
 *     nickname="Likes"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="Facebook",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Video_post"
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="BaseTag",
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
 *     name="BaseFile",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Video",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Video"
 *   ,@SWG\Property(
 *     name="BaseTag",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="From",
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
 *     name="service",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="BaseFile",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="url",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="object_type",
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
 * @SWG\Model(
 *   id="Video_put"
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="BaseTag",
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
 *     name="BaseFile",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Wallet"
 * ,@SWG\Api(
 *   path="/v.04/Wallet/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi wallets",
 *     notes="",
 *     type="ListView",
 *     nickname="Wallet_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi wallet",
 *     notes="",
 *     type="Wallet",
 *     nickname="Wallet_list"
 *     ,@SWG\Parameter(
 *       name="Wallet",
 *       description="",
 *       required=true,
 *       type="Wallet_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Wallet/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi wallet by ID",
 *     notes="",
 *     type="Wallet",
 *     nickname="Wallet_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi wallet",
 *     notes="",
 *     type="Wallet",
 *     nickname="Wallet_detail"
 *     ,@SWG\Parameter(
 *       name="Wallet",
 *       description="",
 *       required=true,
 *       type="Wallet_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi wallet",
 *     notes="",
 *     type="Wallet",
 *     nickname="Wallet_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Wallet"
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="From",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="service",
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
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Wallet_put"
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
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
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Wallet_post"
 *   ,@SWG\Property(
 *     name="name",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="context",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="description",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Wallet",
 *     type="List",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Resource(
 *   apiVersion="Unknown",
 *   swaggerVersion="1.2",
 *   basePath="https://demo2.openi-ict.eu",
 *   resourcePath="Workout"
 * ,@SWG\Api(
 *   path="/v.04/Workout/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a list of openi workouts",
 *     notes="",
 *     type="ListView",
 *     nickname="Workout_list"
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
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="Create a new openi workout",
 *     notes="",
 *     type="Workout",
 *     nickname="Workout_list"
 *     ,@SWG\Parameter(
 *       name="Workout",
 *       description="",
 *       required=true,
 *       type="Workout_post",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Workout/{id}/",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="Retrieve a single openi workout by ID",
 *     notes="",
 *     type="Workout",
 *     nickname="Workout_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="PUT",
 *     summary="Update an existing openi workout",
 *     notes="",
 *     type="Workout",
 *     nickname="Workout_detail"
 *     ,@SWG\Parameter(
 *       name="Workout",
 *       description="",
 *       required=true,
 *       type="Workout_put",
 *       paramType="body"
 *     )
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *   ,@SWG\Operation(
 *     method="DELETE",
 *     summary="Delete an existing openi workout",
 *     notes="",
 *     type="Workout",
 *     nickname="Workout_detail"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Workout/{id}/comments",
 *   description=""
 *   ,@SWG\Operation(
 *     method="GET",
 *     summary="",
 *     notes="",
 *     type="object",
 *     nickname="comments"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 * ,@SWG\Api(
 *   path="/v.04/Workout/{id}/comments",
 *   description=""
 *   ,@SWG\Operation(
 *     method="POST",
 *     summary="",
 *     notes="",
 *     type="object",
 *     nickname="comments"
 *     ,@SWG\Parameter(
 *       name="id",
 *       description="Primary key of resource",
 *       required=true,
 *       type="undefined",
 *       paramType="path"
 *     )
 *     ,@SWG\Parameter(
 *       name="cbs",
 *       description="OPENi",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *     ,@SWG\Parameter(
 *       name="user",
 *       description="Registered and authenicated user",
 *       required=false,
 *       type="string",
 *       paramType="query"
 *     )
 *    )
 *  )
 *)
 *
 * @SWG\Model(
 *   id="Objects"
 *   ,@SWG\Property(
 *     name="Workout",
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
 *   id="Workout_put"
 *   ,@SWG\Property(
 *     name="equipment",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Location",
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
 *     name="distance",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="metric",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="previous_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="next_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="Workout_post"
 *   ,@SWG\Property(
 *     name="equipment",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Location",
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
 *     name="distance",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="metric",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="previous_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="next_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 * )
 * @SWG\Model(
 *   id="ListView"
 *   ,@SWG\Property(
 *     name="meta",
 *     type="Meta",
 *     format="",
 *     description=""
 *   )
 *   ,@SWG\Property(
 *     name="objects",
 *     type="Objects",
 *     format="",
 *     description=""
 *   )
 * )
 * @SWG\Model(
 *   id="Workout"
 *   ,@SWG\Property(
 *     name="distance",
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
 *     name="text",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="metric",
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
 *     name="equipment",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="Location",
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
 *     name="Duration",
 *     type="related",
 *     format="",
 *     description="A single related resource. Can be either a URI or set of nested resource data."
 *   )
 *   ,@SWG\Property(
 *     name="previous_id",
 *     type="string",
 *     format="",
 *     description="Unicode string data. Ex: &quot;Hello World&quot;"
 *   )
 *   ,@SWG\Property(
 *     name="next_id",
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