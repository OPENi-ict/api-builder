$(function () {
    var url = window.location.href;
    //var url = window.location.search.match(/url=([^&]+)/);
    if (url && url.length > 1) {
        //url = url[1];
        if (url.indexOf('#') != -1)
            url = url.substr(0, url.indexOf('#'));

        if (url.indexOf('swagger/?url=') != -1)
            url = url.replace('swagger/?url=', 'api-docs/');
        else if (url.indexOf('swagger?url=') != -1)
            url = url.replace('swagger?url=', 'api-docs/');
        else if (url.indexOf('swagger/index?url=') != -1)
            url = url.replace('swagger/index?url=', 'api-docs/');
        else if (url.indexOf('swagger/') != -1)
            url = url.replace('swagger/', 'api-docs/Core');
        else if (url.indexOf('swagger/index') != -1)
            url = url.replace('swagger/index', 'api-docs/Core');
        else
            url = url.replace('swagger', 'api-docs/Core');
        url = url + '/api-docs.json';
    } else {
        url = "http://imagine.epu.ntua.gr:1234/api-builder/web/api-docs/Core/api-docs.json";
    }
    window.swaggerUi = new SwaggerUi({
        url: url,
        dom_id: "swagger-ui-container",
        supportedSubmitMethods: ['get', 'post', 'put', 'delete'],
        onComplete: function(swaggerApi, swaggerUi){
            log("Loaded SwaggerUI");
            if(typeof initOAuth == "function") {
                /*
                 initOAuth({
                 clientId: "your-client-id",
                 realm: "your-realms",
                 appName: "your-app-name"
                 });
                 */
            }
            $('pre code').each(function(i, e) {
                hljs.highlightBlock(e)
            });
        },
        onFailure: function(data) {
            log("Unable to Load SwaggerUI");
        },
        docExpansion: "none",
        sorter : "alpha"
    });

    function addApiKeyAuthorization() {
        var key = $('#input_apiKey')[0].value;
        log("key: " + key);
        if(key && key.trim() != "") {
            log("added key " + key);
            window.authorizations.add("api_key", new ApiKeyAuthorization("api_key", key, "query"));
        }
    }

    $('#input_apiKey').change(function() {
        addApiKeyAuthorization();
    });

    // if you have an apiKey you would like to pre-populate on the page for demonstration purposes...
    /*
     var apiKey = "myApiKeyXXXX123456789";
     $('#input_apiKey').val(apiKey);
     addApiKeyAuthorization();
     */

    window.swaggerUi.load();
});