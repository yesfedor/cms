<?php
$blogBoardPostsData = '';
if ($_GET['category']) $blogBoardPostsData = blogPostsGetByParam('category', intval($_GET['category']), 50, true);
else $blogBoardPostsData = blogPostsGetAll();
?>
<div class="container my-3 my-lg-5 px-3 px-lg-0">
    <div class="row">
         <!-- Blog Header -->
        <div class="col-12 mb-5">
            <h1 class="h1 font-weight-bold"><span class="theme-title">Новости</span>  <span class="theme-panel-primary rounded theme-nav-link p-2">INY.SU</span></h1>
        </div>

        <div class="col-12 mt-5 mb-3">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="row">
                        <!-- Blog Navbar -->
                        <div class="col-12 col-lg-8">
                            <h4 class="my-0 py-3">
                                <a onclick="return nav.go(this);" href="/blog">
                                    <span id="blogNavbarAll" class="my-0 py-3 pr-3">Блог</span>
                                </a>
                                <a onclick="return nav.go(this);" href="/blog?category=1">
                                    <span id="blogNavbarImplementation" class="my-0 py-3 pr-3">В реализации</span>
                                </a>
                            </h4>
                        </div>
                        <div class="col-12 col-lg-4 text-left text-lg-right">
                            <!-- Categories -->
                            <div class="dropdown">
                                <!--Trigger-->
                                <button class="btn btn-outline-primary btn-rounded dropdown-toggle mr-lg-0" type="button" id="dropdownCategoriesToggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span id="dropdownCategoriesToggleCurrent" class="theme-title"></span>
                                </button>
                                <!--Menu-->
                                <div id="dropdownCategoriesToggleMenu" class="dropdown-menu dropdown-primary theme-panel"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog post -->
                    <div id="board-posts" class="row mt-3"></div>
                </div>
                <div class="col-12 col-lg-4">
                    <!-- Blog Helper -->
                    <div class="row">
                        <div class="col-12 text-center">
                            <h4 class="h4 theme-title">Подписка на блог</h4>
                            <h5 class="theme-text">Вы можете получать новости блога по электронной почте, привязанной к Вашему аккаунту.</h5>
                            <button onclick="toastr.info(language.data.locale.string_not_found)" type="button" class="btn btn-outline-primary btn-rounded">Подписаться</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
blogBoardPostsData = <?= json_encode($blogBoardPostsData) ?>

init.js.add('blogBoard', 'module/blogBoard.js', 22)
init.js.add('AppBlogPost', 'wc:AppBlogPost', 24)

if (typeof blogBoard == 'object') blogBoard.init()
else {
    waitBlogBoard = setInterval(() => {
        if (typeof blogBoard == 'object') {
            clearInterval(waitBlogBoard)
            blogBoard.init()
        }
    }, 100);
}
</script>