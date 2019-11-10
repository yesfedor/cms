<?php
$warp = "warp";
?>
<div class="container my-5 px-3 px-md-5">
    <div class="row">
        <div style="display: none;" id="block_auth_false" class="col-12 white border border-primary rounded text-center my-5 py-5">
            <h2 class="w-100 my-0 py-2 h3">Для того что бы использовать сервис нужно авторизоваться</h2>
            <a href="https://iny.su/auth?to=go.iny.su&_origin=true&api=true" class="btn btn-primary btn-rounded mt-5 mb-2">Войдите, что бы продолжить</a>
        </div>
        <div style="display: none;" id="block_auth_true" class="col-12">
            <div class="card border border-primary rounded">
                <div class="card-body text-center">
                    <h3 class="card-title">Сокращение ссылок</h3>
                    <h5 class="card-text">Сокращение ссылок необходимо в тех случаях, когда пользователю требуется укоротить длинный URL адрес, чтобы получить более короткую и удобную ссылку.</h5>
                    <div class="md-form col-10 offset-1 my-1 py-1">
                        <input type="url" id="url_full" class="form-control">
                        <label class="ml-3 active" for="url_full">Вставьте ссылку</label>
                    </div>
                    <div class="row">
                        <div class="col-10 offset-1 mt-2 mb-3 py-1 text-center">
                            <button onclick="go_cc.create();" class="btn btn-outline-primary btn-rounded">Создать</button>
                        </div>

                        <div id="result" class="col-10 offset-1 my-1 py-1 text-center">
                            <h4 class="d-block h4">Сокращенный вариант</h4>
                            <input type="url" id="url_short" value="https://go.iny.su/" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
if (config.user.auth) {
    $('#block_auth_true').show()
    $('#block_auth_false').hide()
} else {
    $('#block_auth_false').show()
    $('#block_auth_true').hide()
}

function copyToClipboard(elem) {
	  // create hidden text element, if it doesn't already exist
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);
    
    // copy the selection
    var succeed;
    try {
    	  succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }
    
    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    return succeed;
}
function isValidURL(url){
    var RegExp = /(ftp|http|https|tg):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;

    if(RegExp.test(url)){
        return true;
    }else{
        return false;
    }
}

var go_cc = {
    create() {
        url_full = $('#url_full').val()
        if (isValidURL(url_full)) this.createSuccess()
        else toastr.error('Неверный формат ссылки')
    },
    createSuccess() {
        url_full = $('#url_full').val()
        $.ajax({
            type: "POST",
            url: "/api.php?_action=go_cc/create&v=0.1",
            data: {url_full: url_full},
            dataType: "json",
            success: function (data) {
                console.log(data)
                if (data.url_short) {
                    $('#url_short').val('https://go.iny.su/' + data.url_short)
                    copyToClipboard(document.getElementById('url_short'))
                    toastr.success('Ссылка скопирована')
                } else toastr.error('Неверный формат ссылки')
                
            },
            error: function (data) {
                toastr.error('Неверный формат ссылки')
            }
        });
    }
}
</script>