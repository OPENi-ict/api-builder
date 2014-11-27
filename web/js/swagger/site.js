$(function () {
    var url = window.location.href;
    //var url = window.location.search.match(/url=([^&]+)/);
    if (url && url.length > 1) {
        //url = url[1];
        url = url.substr(0, url.indexOf('#'));
        url = url.replace('swagger/?url=', 'apis/') + '/api-docs.json';
    } else {
        url = "http://localhost/api-builder/web/swagger/Core/api-docs.json";
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