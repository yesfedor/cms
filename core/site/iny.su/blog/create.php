<div class="container my-3">
    <div class="row">
        <!-- Header -->
        <div class="col-12 d-block fixed-top mt-3 py-3">
            <div class="row d-flex justify-content-between align-items-center">
                <!-- User Profile -->
                <div class="col text-center px-3">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col text-right">
                            <a class="d-inline-block" onclick="return nav.go(this);" href="/id<?= $_SESSION['user']['uid'] ?>">
                                <i class="fas fa-user-edit fa-2x theme-link"></i>
                            </a>
                        </div>
                        <div class="col text-left">
                            <a class="d-inline-block text-muted" onclick="return nav.go(this);" href="/id<?= $_SESSION['user']['uid'] ?>"><?= $_SESSION['user']['name'].' '.$_SESSION['user']['surname'] ?></a>
                        </div>
                    </div>
                </div>

                <!-- Default Action -->
                <div class="col text-center px-3">
                    <div class="row d-flex justify-content-between align-items-center">
                        <!-- Category Action -->
                        <div class="col text-right">
                            <div class="dropdown d-inline-block">
                                <!--Trigger-->
                                <a class="dropdown-toggle text-muted" type="button" id="blogEditorCategoriesToggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Категория
                                </a>
                                <!--Menu-->
                                <div id="blogEditorCategoriesMenu" class="dropdown-menu dropdown-menu-right theme-panel"></div>
                            </div>
                        </div>

                        <!-- Publish Button -->
                        <div class="col text-center">
                            <div class="dropdown d-inline-block">
                                <a class="dropdown-toggle theme-link" href="#" role="button" id="blogEditorPublish" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Публикация
                                </a>
                                <div class="dropdown-menu dropdown-menu-right theme-panel" style="width: max-content;">
                                    <h5 class="h5 dropdown-header theme-title">Подготовка к публикации</h5>
                                    <div class="dropdown-divider"></div>
                                    <div class="form-group">
                                        <label for="blogEditorPublishPoster">Обложка</label>
                                        <input type="text" class="form-control" id="blogEditorPublishPoster" placeholder="https://iny.su/poster.png">
                                    </div>
                                    <div class="form-group">
                                        <label for="blogEditorPublishUrl">Статья будет доступна по ссылке:</label>
                                        <input type="text" class="form-control" id="blogEditorPublishUrl" placeholder="https://iny.su/blog/post/">
                                    </div>
                                    <a onclick="return false;" class="dropdown-item theme-link" href="#publish">Опубликовать</a>
                                </div>
                            </div>
                        </div>

                        <!-- Close Button -->
                        <div class="col text-left">
                            <a onclick="return nav.go(this);" href="/blog">
                                <i class="fas fa-times fa-2x text-muted"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="col-12 d-block my-5 py-3">
            <div class="row my-5">
                <div id="blogEditorWrapper" class="col-12">
                    <h2 id="blogEditorTitle" class="h2 mb-3" contenteditable>Хотите сделать мир лучше?</h2>
                    <h4 id="blogEditorPreview" class="mb-3" contenteditable>Подарите ему хороший текст</h4>
                    <hr class="w-100 py-1 my-3">
                    <div id="blogEditorDefaultFocus" class="d-none"></div>
                </div>
            </div>
        </div>
        
        <!-- Action Button -->
        <div class="col-12 d-block fixed-bottom my-5 py-3">
            <div class="row">
                <!-- blogEditorActionMain -->
                <div id="blogEditorActionMain" class="col-12 text-center">
                    <button onclick="blogEditor.addEl('h2', true);" class="btn btn-outline-primary btn-rounded mx-3">H1</button>
                    <button onclick="blogEditor.addEl('h4', true);" class="btn btn-outline-primary btn-rounded mx-3">H2</button>
                    <button onclick="blogEditor.addEl('h5', true);" class="btn btn-outline-primary btn-rounded mx-3">H3</button>
                    <button onclick="blogEditor.addEl('hr');" class="btn btn-outline-primary btn-rounded mx-3">Line</button>
                </div>

                <!-- blogEditorActionText -->
                <div id="blogEditorActionElement" class="col-12 text-center" style="display: none;">
                    <button onclick="blogEditor.editEl('left');" class="btn btn-outline-primary btn-rounded mx-3">Left</button>
                    <button onclick="blogEditor.editEl('center');" class="btn btn-outline-primary btn-rounded mx-3">Center</button>
                    <button onclick="blogEditor.editEl('right');" class="btn btn-outline-primary btn-rounded mx-3">Right</button>
                    <button onclick="blogEditor.editEl('b');" class="btn btn-outline-primary btn-rounded mx-3">B</button>
                    <button onclick="blogEditor.btnRemoveEl();" class="btn btn-outline-danger btn-rounded mx-3">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
init.header('none')
init.footer('none')
nav.onunload = ()=> {
    init.header()
    init.footer()
}

init.js.add('blogBoard', 'module/blogBoard.js', 22)
init.js.add('blogEditor', 'module/blogEditor.js', 49)

if (typeof blogEditor == 'object') blogEditor.init()
else {
    waitBlogEditor = setInterval(() => {
        if (typeof blogEditor == 'object') {
            blogEditor.init()
            clearInterval(waitBlogEditor)
        }
    }, 100);
}
</script>