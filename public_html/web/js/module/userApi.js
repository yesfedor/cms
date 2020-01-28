var userApi = {
    data: {
        checkerInterval: 2500,
        checkerApi: servers.api + '/api.php?_action=checker&v=0.1',
        fastLoginInfoApi: servers.api + '/api.php?v=0.1&_action=user/fastLoginInfo',
        fastLoginDeleteApi: servers.api + '/api.php?v=0.1&_action=auth/fastLoginDelete',
        noticeDeleteApi: servers.api + '/api.php?v=0.1&_action=user/notice.delete',
        usersStr: mainTpl.userApi.usersStr
    },
    auth: {
        users: {},
        fastLogin(uid) {
            $.ajax({
                type: "GET",
                url: userApi.data.fastLoginInfoApi,
                data: {'uid': uid, 'hash':config.hash.appRoot},
                dataType: "json",
                success: function (user) {
                    if (user.error == '200') {
                        $('#app-login-callback').html('<span class="text-truncate">'+ language.data.locale.userApi_fastlogin_as +'<b class="text-primary">' + user.name + ' ' + user.surname + '</b></span>')
                        $('#app-login-username').val(user.mail);

                        $('#window-login').attr('style', 'transition-duration: 1s; background-color: #e3f2fd !important;').addClass('animated pulse')

                        setTimeout(() => {
                            $('#window-login').attr('style', 'transition-duration: 1s; background-color: #ffffff !important;').removeClass('animated pulse')
                            $('[for^=app-login-username]').addClass('active')
                            $('[for^=app-login-password]').addClass('active')
                        }, 1000);

                        toastr.info('Enter the password')

                        $('#app-login-username').click(function (e) { 
                            $('#app-login-callback').html('')
                        });

                    } else {
                        toastr.error('User Not Found')
                    }
                }
            });
        },
        fastLoginDelete(uid, num) {
            let num_splice;

            if (num == 0) num_splice = 1
            else num_splice = num

            if (userApi.auth.users.length == 1) userApi.auth.users.length = 0
            userApi.auth.users.splice(num_splice, 1)

            $.ajax({
                type: "POST",
                url: userApi.data.fastLoginDeleteApi,
                data: {'uid': uid},
                dataType: "text",
                success: function (status) {
                    if (status == 'true') {
                        $('#module-fast-login-' + num).fadeOut(400)

                        if (userApi.auth.users.length == 0) {
                            setTimeout(() => {
                                userApi.widget('welcome', '#warp-welcome')
                            }, 500);
                        } 
                    }
                }
            });
        }
    },
    checkerUserApi() {
        $.ajax({
            type: "POST",
            url: userApi.data.checkerApi,
            data: {'uid': config.user.uid},
            dataType: "json",
            success: function (data) {
                if (data.auth != config.user.auth) window.location.reload()
                // notify
                if (data.notice != false) {
                    $('#notice-count').html(data.notice)
                    $('#notice-count-lite').html(data.notice)
                } else {
                    $('#notice-count').html('')
                    $('#notice-count-lite').html('')
                }
            }
        })
    },
    checker() {
        window.checkerUserApiInterval = setInterval(userApi.checkerUserApi , userApi.data.checkerInterval)
        setTimeout(() => {
            userApi.checkerUserApi()
        }, 200);
    },
    init() {
        if (config.user.auth === true) {
            console.log('userApi: init')
        }
        userApi.checker()
    },
    widget(type, element, data={}) {
        userApi.widgetRender[type](element, data)

        setTimeout(() => {
            language.render()
        }, 200);
    },
    widgetRender: {
        data: {
            block: '#module-layout-name'
        },
        welcome(element, data={}) {
            $(userApi.widgetRender.data.block).html('Welcome')
            $(element).html('<div class="col-12 my-1 px-2 text-left"><h5 data-lang="static-welcome-about" class="text-muted">'+ language.data.locale["static-welcome-about"] +'</h5></div>')
        },
        users(element, data={}) {
            userApi.auth.users = data;
            $(userApi.widgetRender.data.block).html('Account')
            var html = '<div class="col-12"><div class="row"><div class="col-12 text-left mt-2"><h5 class="my-0 py-1"><b data-lang="userApi_fastlogin_info"></b></h5><h6 data-lang="userApi_fastlogin_help" class="mt-1 py-1"></h6><hr class="w-100 my-2"></div>'

            html = html + '<div class="col-12"><div id="common-fastlogin-inner" class="row">'
            for(i in data) {
                user = data[i]

                if (user.gender == 'male') icon = '<i class="fas fa-male fa-3x blue-text"></i>'
                if (user.gender == 'female') icon = '<i class="fas fa-female fa-3x teal-text"></i>'

                html = html + userApi.data.usersStr
                    .replace('{%uid%}', user.uid)
                    .replace('{%uidDelete%}', user.uid)
                    .replace('{%i1%}', i)
                    .replace('{%i2%}', i)
                    .replace('{%icon%}', icon)
                    .replace('{%name%}', user.name)
                    .replace('{%surname%}', user.surname)

                i++
            }
            html = html + '</div></div></div></div>'

            $(element).html(html);
        }
    },
    notice: {
        show() {
            id = mainTpl.modal.notice.id
            $('#' + id).modal('show')
            nav.loadMudule('/notice', ()=>{
                $.ajax({
                    type: "POST",
                    url: nav.path.apiModulePath,
                    data: {
                        url_pathname: '/notice',
                        url_query: '',
                        url_hash: ''
                    },
                    dataType: "json",
                    success: function (data) {
                        $('#warp-notice').html(data.html['warp-notice'])
                    }
                });
            })
        },
        delete(id) {
            $.ajax({
                type: "GET",
                url: userApi.data.noticeDeleteApi,
                data: {id: id},
                dataType: "json",
                success: function (data) {
                    block = '#notice-id-' + id
                    if (data.error == 200) $(block).remove()
                    else toastr.error('Notice: Host Error')
                }
            });
        }
    }
}

userApi.init()