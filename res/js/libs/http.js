var Http = function(){
    function initAjax(params){
        var deferred = new $.Deferred();
        $.ajax({
            url: params.url,
            dataType: "JSON",
            success: function(result){
                deferred.resolve(result);
            },
            error: function(e){
                deferred.reject(e);
            }
        });

        return deferred;
    } 

    return {
        ajax: initAjax
    }
}