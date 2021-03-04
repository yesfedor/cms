<?php
$warp = "warp";

function validation_user_name() {

}
?>
<div class="container">
    <div class="row">
        <div class="col-12 white border border-primary rounded text-center my-5">
            <h2 class="mt-3 mb-3"><b class="text-primary px-2">INY</b> <span class="primary-color white-text rounded p-2">Developer</span></h2>
            <hr class="w-100 border-primary my-3">
            <div class="row">
                <div class="col-12 text-center">
                    <h4 class="black-text">Здесь вы можете одобрять или отклонять заявки на смену имени.</h4>
                    <h4 class="text-primary">Будьте максимально внимательны!</h4>
                </div>
                <div class="col-12">
                    <div id="warp-render" class="row px-3"></div>
                </div>
                <hr class="w-100 border-primary my-3">
                <div id="warp-load" class="col-12 text-center">
                    <button onclick="validation_user_name.load();" type="button" class="btn btn-primary rounded mb-3">Загрузить список</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
var validation_user_name = {
    load() {
        $.ajax({
            type: "POST",
            url: "/api.php?_action=user/validation_user_name&v=0.9",
            data: {act: 'load'},
            dataType: "json",
            success: function (data) {
                console.log(data)
                if (typeof data != 'undefined') {
                    validation_user_name.render(data)
                    $('#warp-load').fadeOut(500)
                } else toastr.info('Нет данных с сервера')
            },
            error: function (data) {
                toastr.info('Нет данных с сервера')
                console.log(data)
            }
        });
    },
    render(data) {
        simple = `
<div id="user_ns_{id}" class="col-12 col-md-4 col-lg-3 card border-primary m-2 p-0">
    <div class="card-header primary-color text-center">
        <span class="white-text">{undate}</span>
    </div>
    <div class="card-body text-primary">
        <h5 class="card-title black-text mb-3">Now: {name} {surname}<span class="d-block black-text">Replace: {new_name} {new_surname}</span></h5>
        <h6 class="card-subtitle black-text mb-4"><a class="black-text" onclick="return nav.away(this);" target="_blank" href="https://iny.su/id{uid}">View Profile</a>, {gender}</h6>
        <a data-id="{id}" data-uid="{uid}" onclick="validation_user_name.do(this, 'approved')" class="my-1 mx-2 text-success" style="cursor: pointer;">Approved</a>
        <a data-id="{id}" data-uid="{uid}" onclick="validation_user_name.do(this, 'disapprove')" class="my-1 mx-2 text-danger" style="cursor: pointer;">Disapprove</a>
    </div>
</div>
        `
        output = '<hr class="w-100 border-primary my-3">'

        for(key in data.user) {
            id = data.user[key].id
            uid = data.user[key].uid
            name = data.user[key].name
            surname = data.user[key].surname
            new_name = data.user[key].new_name
            new_surname = data.user[key].new_surname
            gender = data.user[key].gender
            undate = data.user[key].date

            output = output + simple
                .replace('{id}', id).replace('{id}', id).replace('{id}', id)
                .replace('{uid}', uid).replace('{uid}', uid).replace('{uid}', uid)
                .replace('{name}', name).replace('{surname}', surname)
                .replace('{new_name}', new_name).replace('{new_surname}', new_surname)
                .replace('{gender}', gender).replace('{undate}', undate)
        }

        $('#warp-render').hide()
        $('#warp-render').html(output)
        $('#warp-render').fadeIn(500)

        $('#warp-load').html('Загрузить еще').fadeIn(500)
    },
    do(el, act) {
        id = $(el).attr('data-id')
        uid = $(el).attr('data-uid')

        $('#user_ns_' + id).fadeOut(500)

        switch(act) {
            case 'approved':
                act = 'approved'
            break;
            case 'disapprove':
                act = 'disapprove'
            break;
        }
        
        $.ajax({
            type: "POST",
            url: "/api.php?_action=user/validation_user_name&v=0.9",
            data: {act: act, id: id, uid: uid},
            dataType: "json",
            success: function (data) {
                if (data.text == 'error') toastr.error('Произошла ошибка API')
                else toastr.info('Выполнено')
            }
        });
    }
}
</script>