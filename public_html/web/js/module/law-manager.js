var law = {
    init() {
        noticeCookieModal = {
                id: 'noticeCookieModal',
                title: `Соглашение`,
                content: `
                    <div class="row">
                        <div class="col-10 offset-1 text-center my-2"><h4 class="text-primary">Соглашение об использовании файлов cookie</h4></div>
                        <div class="col-10 offset-1 text-left my-2">
                            ` + (localStorage.getItem('law_cookie') == 'no' ? '<h5 class="warning-text px-2 px-md-5">Вы запретили использование cookie, что бы дальше использовать сайт нужно принять соглашение, это необходимо для работы сайта</h5>':'') + `
                            <h5 class="black-text px-2 px-md-5">
                                Интернет-сайт https://` + window.location.host + `/ (далее - «Сайт») использует файлы cookie и схожие технологии, чтобы гарантировать максимальное удобство пользователям (далее - «Пользователи»), оперативно предоставляя персонализированную информацию (в том числе логин, в качестве которого пользователем может быть указан email или номер мобильного телефон), запоминая предпочтения в области маркетинга (в том числе принадлежность к партнерским программам) и контента Сайта. При использовании данного сайта, вы подтверждаете свое согласие на использование файлов cookie в соответствии с настоящим уведомлением в отношении данного типа файлов. Если вы не согласны с тем, чтобы мы использовали данный тип файлов, то вы должны соответствующим образом установить настройки вашего браузера или не использовать Сайт.
                            </h5>
                        </div>
                        <div class="col-10 offset-1 text-center my-2">
                            <a href="#" onclick="law.noticeCookieNo(); return false;" class="btn btn-large btn-danger px-3">Запретить</a>
                            <a href="#" onclick="law.noticeCookieYes(); return false;" class="btn btn-large btn-success px-3">Принять соглашение</a>
                        </div>
                    </div>
                `,
                footer: false,
                bg: 'var(--theme-background)'
            }

            init.createModal(noticeCookieModal.id, {'title': noticeCookieModal.title, 'content': noticeCookieModal.content, 'footer': noticeCookieModal.footer}, 'large', noticeCookieModal.bg)
            
            this.noticeCookie()
    },
    noticeCookie() {
        if (localStorage.getItem('law_cookie') == null) {
            setTimeout(() => {
                $('#noticeCookieModal').modal('show')
            }, 500);
        }
        this.noticeCookieRedirect()
    },
    noticeCookieYes() {
        localStorage.setItem('law_cookie', 'yes')
        $('#noticeCookieModal').modal('hide')
    },
    noticeCookieNo() {
        localStorage.setItem('law_cookie', 'no')
        $('#noticeCookieModal').modal('hide')
        this.noticeCookieRedirect()
    },
    noticeCookieRedirect() {
        if (localStorage.getItem('law_cookie') == 'no') {
            setTimeout(() => {
                $('#noticeCookieModal').modal('show')
            }, 500);
        }
    }
}
//law.init()