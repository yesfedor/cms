<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Константин Мельник</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
        html, body, .theme-header, .theme-header-color, .theme-title, .theme-text, .theme-link {
            transition-property: background-color, color, border-color;
            transition-duration: 0.8s;
        }
        html, body {
            margin: 0px;
            padding: 0px;
            background-color: var(--bg-color);
        }
        .theme-header {
            background-color: var(--header-color);
        }
        .theme-header-color {
            color: var(--header-text) !important;
        }
        .theme-title {
            color: var(--title-text) !important;
        }
        .theme-text {
            color: var(--text) !important;
        }
        .theme-link {
            color: var(--link) !important;
        }
        .theme-link:hover {
            color: var(--link-hover) !important;
        }
        </style>
    </head>
    <body>
        <app id="app" style="display:none;">
            <nav class="navbar navbar-expand-lg fixed-top theme-header py-2">
                <div class="container">
                    <a class="navbar-brand theme-header-color" href="#main">Константин Мельник</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigatorMain" aria-controls="navigatorMain" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon theme-header-color"></span>
                        <i class="navbar-toggler-icon theme-header-color fas fa-bars fa-lg"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navigatorMain">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link theme-header-color" href="#main">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link theme-header-color" href="#about-me">Обо мне</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link theme-header-color" href="#individual-lesson">Индивидуальные занятия</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link theme-header-color" href="#group-class">Групповые занятия</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link theme-header-color" href="#retellings">Пересказы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link theme-header-color" href="#faq">F.A.Q</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link theme-header-color" href="#contacts">Контакты</a>
                            </li>
                        </ul>
                        <div class="row d-block-sm d-md-none">
                            <div class="col-12">
                                <hr class="w-100 my-1 py-0" style="border-color: var(--header-text);">
                            </div>
                        </div>
                        <span class="navbar-text">
                            <a class="px-2 theme-header-color" href="#vk"><i class="fab fa-vk fa-lg"></i></a>
                            <a class="px-2 theme-header-color" href="#youtube"><i class="fab fa-youtube fa-lg"></i></a>
                        </span>
                    </div>
                </div>
            </nav>
            <main id="warp" class="container">
                <section id="nav-main" class="row">
                    <div class="col-12 text-center">
                        <h2 class="theme-title">Главная</h2>
                        <br>
                        <h5 class="theme-text">Кстати, можно сменить тему на: <a onclick="return app.theme('dark')" href="!" class="theme-link">темную</a> или <a onclick="return app.theme('light')" href="!" class="theme-link">светлую</a></h5>
                        <br>
                        <h5 class="theme-text">Или если нужно, сделать смену языка</h5>
                        <br>
                        <h4 class="theme-text">Можное многое, главне желание, сайт будет состоять всего из 1 файла! Или 3 для большего трафика</h4>
                        <br>
                        <h4 class="theme-text">Наполнить сайт информацией можно после Вашего согласия</h4>
                        <br>
                        <h5 class="theme-text">А тут можно посмотреть <a href="https://iny.su/landings/yesfedor" class="theme-link" target="_blank" rel="noopener noreferrer">мое портфолио</a></h5>
                    </div>
                </section>
                <section id="nav-about-me" class="row">
                    <div class="col-12 text-center">
                        <h2 class="theme-title">Обо мне</h2>
                    </div>
                </section>
                <section id="nav-individual-lesson" class="row">
                    <div class="col-12 text-center">
                        <h2 class="theme-title">Индивидуальные занятия</h2>
                    </div>
                </section>
                <section id="nav-group-class" class="row">
                    <div class="col-12 text-center">
                        <h2 class="theme-title">Групповые занятия</h2>
                    </div>
                </section>
                <section id="nav-retellings" class="row">
                    <div class="col-12 text-center">
                        <h2 class="theme-title">Пересказы</h2>
                    </div>
                </section>
                <section id="nav-faq" class="row">
                    <div class="col-12 text-center">
                        <h2 class="theme-title">F.A.Q</h2>
                    </div>
                </section>
                <section id="nav-contacts" class="row">
                    <div class="col-12 text-center">
                        <h2 class="theme-title">Контакты</h2>
                    </div>
                </section>
            </main>
        </app>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>    
        <script src="https://iny.su/web/vendor/js/icon.js"></script>
        <script>
        app = {
            data: {
                navActive: '#nav-main'
            },
            init () {
                $('section').hide()

                $(document).on('click touchstart', 'a', function() {
                    href = $(this).attr('href')
                    if (href.substr(0, 1) == "#") app.navMenu(href)
                    return true
                });

                if (window.location.hash != "") {
                    app.navMenu(window.location.hash)
                } else {
                    app.navMenu('#main')
                }

                $('#warp').css('margin-top', '100px')
                
                if (localStorage.getItem('root-theme') == null) app.theme('light')
                else app.theme(localStorage.getItem('root-theme'))

                $('#app').show()
            },
            theme(name) {
                switch(name) {
                    default:
                    case 'light':
                        appStyle = `
                    <style id="theme-data">
                    :root {
                        --bg-color: #f5f5f5;
                        --header-color: #bcaaa4;
                        --header-text: #212121;
                        --title-text: #212121;
                        --text: #2E2E2E;
                        --link: #4285F4;
                        --link-hover: #3F729B;
                    }
                    </style>
                        `
                    break;
                    case 'dark':
                        appStyle = `
                    <style id="theme-data">
                    :root {
                        --bg-color: #343434;
                        --header-color: #212121;
                        --header-text: white;
                        --title-text: #fafafa;
                        --text: #e6e6e6;
                        --link: #78a8f8;
                        --link-hover: #3F729B;
                    }
                    </style>
                        `
                    break;
                }
                localStorage.setItem('root-theme', name)
                $('#theme-data').remove()
                $('head').append(appStyle)

                return false
            },
            navMenu(href) {
                if (href == '#vk') {
                    window.open('https://vk.com/id3985075', '_blank')
                    return false
                }
                if (href == '#youtube') {
                    window.open('https://www.youtube.com/user/zaver2010', '_blank')
                    return false
                }

                sectionName = '#nav-' + href.substr(1)
                $(app.data.navActive).hide(500)
                $(sectionName).show(500)

                console.log('Nav to ' + sectionName)
                app.data.navActive = sectionName
                return false
            }
        }

        $(function () {
            app.init()
        });
        </script>
    </body>
</html>