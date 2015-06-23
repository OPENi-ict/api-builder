<?php
namespace app\models;

use yii\base\Model;
use Yii;

/**
 * Swagger Resource as read from URL
 * @link https://github.com/swagger-api/swagger-spec/blob/master/versions/1.2.md#51-resource-listing
 */
class SwaggerResource extends Model
{
    /**
     * @var string
     * @required
     * Specifies the Swagger Specification version being used. It can be used by the Swagger UI and other clients to interpret the API listing. The value MUST be an existing Swagger specification version.
     * Currently, "1.0", "1.1", "1.2" are valid values. The field is a string type for possible non-numeric versions in the future (for example, "1.2a").
     */
    public $swaggerVersion;

    /**
     * @var SwaggerResourceObject[]
     * @required
     * Lists the resources to be described by this specification implementation. The array can have 0 or more elements.
     */
    public $apis;

    /**
     * @var string
     * Provides the version of the application API (not to be confused by the specification version).
     */
    public $apiVersion;

    /**
     * @var SwaggerResourceInfo
     * Provides metadata about the API. The metadata can be used by the clients if needed, and can be presented in the Swagger-UI for convenience.
     */
    public $info;

    /**
     * @var SwaggerResourceAuthorizations
     * Provides information about the authorization schemes allowed on this API.
     */
    public $authorizations;
}

/**
 * Swagger Resource Object
 * @link https://github.com/swagger-api/swagger-spec/blob/master/versions/1.2.md#512-resource-object
 */
class SwaggerResourceObject extends Model
{
    /**
     * @var string
     * @required
     * A relative path to the API declaration from the path used to retrieve this Resource Listing. This path does not necessarily have to correspond to the URL which actually serves this resource in the API but rather where the resource listing itself is served. The value SHOULD be in a relative (URL) path format.
     */
    public $path;

    /**
     * @var string
     * Recommended. A short description of the resource.
     */
    public $description;
}

/**
 * Swagger Resource Info
 * @link https://github.com/swagger-api/swagger-spec/blob/master/versions/1.2.md#513-info-object
 */
class SwaggerResourceInfo extends Model
{
    /**
     * @var string
     * @required
     * The title of the application.
     */
    public $title;

    /**
     * @var string
     * @required
     * A short description of the application.
     */
    public $description;

    /**
     * @var string
     * A URL to the Terms of Service of the API.
     */
    public $termsOfServiceUrl;

    /**
     * @var string
     * An email to be used for API-related correspondence.
     */
    public $contact;

    /**
     * @var string
     * The license name used for the API.
     */
    public $license;

    /**
     * @var string
     * A URL to the license used for the API.
     */
    public $licenseUrl;
}

/**
 * Swagger Resource Authorizations
 * This type is not specific. It cannot be matched exactly.
 * @link https://github.com/swagger-api/swagger-spec/blob/master/versions/1.2.md#514-authorizations-object
 */
class SwaggerResourceAuthorizations extends Model
{
    /**
     * @var SwaggerResourceAuthorizationObject
     * A new authorization definition. The name given to the {Authorization Name} is a friendly name that should be used when referring to the authorization scheme. In many cases, the {Authorization Name} used is the same as its type, but it can be anything.
     */
    public $auth;
}

/**
 * Swagger Resource Authorization Object
 * @link https://github.com/swagger-api/swagger-spec/blob/master/versions/1.2.md#515-authorization-object
 */
class SwaggerResourceAuthorizationObject extends Model
{
    /**
     * @var string
     * @required
     * The type of the authorization scheme. Values MUST be either "basicAuth", "apiKey" or "oauth2".
     */
    public $type;

    /**
     * @var string
     * @required
     * Denotes how the API key must be passed. Valid values are "header" or "query".
     */
    public $passAs;

    /**
     * @var string
     * @required
     * The name of the header or query parameter to be used when passing the API key.
     */
    public $keyname;

    /**
     * @var SwaggerResourceScopeObject[]
     * A list of supported OAuth2 scopes.
     */
    public $scopes;

    /**
     * @var SwaggerResourceGrantTypesObject
     * @required
     * Detailed information about the grant types supported by the OAuth2 authorization scheme.
     */
    public $grantTypes;
}

/**
 * Swagger Resource Scope Object
 * @link https://github.com/swagger-api/swagger-spec/blob/master/versions/1.2.md#516-scope-object
 */
class SwaggerResourceScopeObject extends Model
{
    /**
     * @var string
     * @required
     * The name of the scope.
     */
    public $scope;

    /**
     * @var string
     * Recommended. A short description of the scope.
     */
    public $description;
}

/**
 * Swagger Resource Grant Types Object
 * @link https://github.com/swagger-api/swagger-spec/blob/master/versions/1.2.md#517-grant-types-object
 */
class SwaggerResourceGrantTypesObject extends Model
{
    /**
     * @var SwaggerResourceImplicitObject
     * The Implicit Grant flow definition.
     */
    public $implicit;

    /**
     * @var SwaggerResourceAuthorizationCodeObject
     * The Authorization Code Grant flow definition.
     */
    public $authorization_code;
}

/**
 * Swagger Resource Implicit Object
 * @link https://github.com/swagger-api/swagger-spec/blob/master/versions/1.2.md#518-implicit-object
 *
 */
class SwaggerResourceImplicitObject extends Model
{
    /**
     * @var SwaggerResourceLoginEndpointObject
     * @required
     * The login endpoint definition.
     */
    public $loginEndpoint;

    /**
     * @var string
     * An optional alternative name to standard "access_token" OAuth2 parameter.
     */
    public $tokenName;
}

/**
 * Swagger Resource Authorization Code Object
 * @link https://github.com/swagger-api/swagger-spec/blob/master/versions/1.2.md#519-authorization-code-object
 */
class SwaggerResourceAuthorizationCodeObject extends Model
{
    /**
     * @var SwaggerResourceTokenRequestEndpointObject
     * @required
     * The token request endpoint definition.
     */
    public $tokenRequestEndpoint;

    /**
     * @var SwaggerResourceTokenEndpointObject
     * @required
     * The token endpoint definition.
     */
    public $tokenEndpoint;
}

/**
 * Swagger Resource Login Endpoint Object
 * @link https://github.com/swagger-api/swagger-spec/blob/master/versions/1.2.md#5110-login-endpoint-object
 */
class SwaggerResourceLoginEndpointObject extends Model
{
    /**
     * @var string
     * @required
     * The URL of the authorization endpoint for the implicit grant flow. The value SHOULD be in a URL format.
     */
    public $url;
}

/**
 * Swagger Resource Token Request Endpoint Object
 * @link https://github.com/swagger-api/swagger-spec/blob/master/versions/1.2.md#5111-token-request-endpoint-object
 */
class SwaggerResourceTokenRequestEndpointObject extends Model
{
    /**
     * @var string
     * @required
     * The URL of the authorization endpoint for the authentication code grant flow. The value SHOULD be in a URL format.
     */
    public $url;

    /**
     * @var string
     * An optional alternative name to standard "client_id" OAuth2 parameter.
     */
    public $clientIdName;

    /**
     * @var string
     * An optional alternative name to the standard "client_secret" OAuth2 parameter.
     */
    public $clientSecretName;
}

/**
 * Swagger Resource Token Endpoint Object
 * @link https://github.com/swagger-api/swagger-spec/blob/master/versions/1.2.md#5112-token-endpoint-object
 */
class SwaggerResourceTokenEndpointObject extends Model
{
    /**
     * @var string
     * @required
     * The URL of the token endpoint for the authentication code grant flow. The value SHOULD be in a URL format.
     */
    public $url;

    /**
     * @var string
     * An optional alternative name to standard "access_token" OAuth2 parameter.
     */
    public $tokenName;
}