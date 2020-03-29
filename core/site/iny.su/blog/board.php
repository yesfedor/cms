<?php
$blogBoardPostsData = '';
if ($_GET['category']) $blogBoardPostsData = blogPostsGetByParam('category', intval($_GET['category']), 50, true);
else $blogBoardPostsData = blogPostsGetAll();
?>
<div class="container my-3 my-lg-5 px-3 ">
    <div class="row">
         <!-- Blog Header -->
        <div class="col-12 mb-5">
            <h1 class="h1 font-weight-bold not-select"><span class="theme-title p-2">Новости</span>  <span class="theme-panel-primary rounded theme-nav-link p-2">INY.SU</span></h1>
        </div>

        <!-- Blog Navbar -->
        <div class="col-12 mt-5 mb-3">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h4 class="my-0 py-3">
                        <a onclick="return nav.go(this);" href="/blog">
                            <span id="blogNavbarAll" class="my-0 py-3 pl-3">Блог</span>
                        </a>
                        <a onclick="return nav.go(this);" href="/blog?category=1">
                            <span id="blogNavbarImplementation" class="my-0 py-3 pl-3">В реализации</span>
                        </a>
                    </h4>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- Categories -->
                    <div class="dropdown text-center">
                        <!--Trigger-->
                        <button class="btn btn-outline-primary btn-rounded dropdown-toggle" type="button" id="dropdownCategoriesToggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span id="dropdownCategoriesToggleCurrent" class="theme-title"></span>
                        </button>
                        <!--Menu-->
                        <div id="dropdownCategoriesToggleMenu" class="dropdown-menu dropdown-primary theme-panel"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog post -->
        <div class="col-12 my-3">
            <div id="board-posts" class="row"></div>
        </div>
    </div>
</div>

<script>
nav.onunload = () => {
    blogBoardPostsData = false
    delete blogBoardPostsData
}

blogBoardPostsData = <?= json_encode($blogBoardPostsData) ?>

init.js.add('blogBoard', 'module/blogBoard.js', 3)
init.js.add('AppBlogPost', 'wc:AppBlogPost', 1)

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