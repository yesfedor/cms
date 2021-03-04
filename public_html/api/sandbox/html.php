<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Title</title>
        <style>
        html, body {
            display: block;
            margin: 0px;
            padding: 0px;
            color: #fafafa;
            background: #212121;
        }
        .app-header {
            position: sticky;
            top: 0px;
            left: 0px;
            right: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0px;
            padding: 0px;
            color: white;
            background: #181818;
        }
        .app-header-container {
            padding: 1rem;
        }
        .app-logo {
            color: white;
            text-decoration: none;
        }
        .app-layout {
            display: block;
            text-align: center;
            min-height: 86.3vh;
        }
        .app-wrapper-msg {
            width: 50%;
            margin: 0px auto;
            padding: 3rem;
        }
        .msg {
            color: white;
        }
        .app-footer {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin: 0px;
            padding: 0px;
            color: white;
            background: #181818;
        }
        .app-copyright {
            margin: 0px;
            padding: 1rem;
        }
        </style>
    </head>
    <body>
        <app id="app">
            <header id="header" class="app-header">
                <nav class="app-header-container">
                    <a id="bheader" class="app-logo" href="#warp">Site</a>
                </nav>
            </header>
            <main id="main" class="app-layout">
                <div id="hello" class="app-wrapper-msg">
                    <h1 id="msg" class="msg"></h1>
                </div>
            </main>
            <footer id="footer" class="app-footer">
                <h4 class="app-copyright">© Site <span id="app_copyright_year">xxxx</span></h4>
            </footer>
        </app>
        <script>
            let date = new Date()
            msg.textContent = navigator.appVersion
            app_copyright_year.textContent = date.getFullYear()
        </script>
    </body>
</html>