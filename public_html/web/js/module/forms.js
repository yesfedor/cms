var appForms = {
    data: {
        apiPath: servers.api + '/api.php?v=0.1&_action='
    },
    go(id, url) {
        url_go = appForms.data.apiPath + url,
        form = $('#'+id);
        msg = form.serialize();
        $.ajax({
            type: 'POST',
            url: url_go,
            dataType: 'json',
            data: msg,
            success: function(data) {
                appForms.parse(data)
            },
            error: function(){
                console.log('forms data error')
            }
        });
    },
    parse(data) {
        if (typeof data != 'undefined') {
            if (typeof data.html != 'undefined') {
                if (typeof data.html.use != 'undefined') {
                    $(data.html.id).html(data.html.code)
                }
            }
            if (typeof data.js != 'undefined') {
                if (typeof data.js.use != 'undefined') {
                    eval(data.js.code)
                }
            }
        }
    }
}