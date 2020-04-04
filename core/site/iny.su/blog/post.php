<?php
$blogPostUrl = $url_p2;
$query_post = "SELECT * FROM blogpost WHERE url = :url";
$var_post = [
    ':url' => $blogPostUrl
];
$postData = dbGetOne($query_post, $var_post);
if ($postData['id']) {
    $authorDataUrl = 'https://iny.su/api.php?_action=user/getInfo&v=0.1&uid='.$postData['uid'];
    $author = json_decode(file_get_contents($authorDataUrl), true);
    $postData['content'] = json_decode($postData['content'], true);
} else {
    echo '<script>nav.go(nav.createLink(\'/blog\'));</script>';
}

?>
<div class="container my-3">
    <div class="row">
        <div class="col-12 d-block my-5 py-3">
            <div class="row my-5">
                <div id="blogPostWrapper" class="col-12">
                    <h2 id="blogPostTitle" class="h2 mb-3"><?= $postData['title'] ?></h2>
                    <h4 id="blogPostPreview" class="mb-3"><?= $postData['preview'] ?></h4>
                    <hr class="w-100 py-1 my-3">
                    <div id="blogPostDefaultFocus" class="d-none"></div>
                    <?php
                    foreach($postData['content'] as $key => $val) {
                        if ($val['type'] == 'h2' or $val['type'] == 'h4' or $val['type'] == 'h5') {
                            if ($val['b'] != 'false') $valB = 'font-weight-bold';
                            echo '<'.$val['type'].' class="theme-text text-'.$val['align'].' '.$valB.' my-3 mark-pre">'.$val['value'].'</'.$val['type'].'>';
                        } else {
                            echo '<'.$val['type'].' class="py-1 my-3"></'.$val['type'].'>';
                        }
                    }
                    ?>
                    <hr class="w-100 py-1 my-3">
                    <span class="d-block theme-text"><a onclick="return nav.go(this);" href="/id<?= $author['uid'] ?>"><?= $author['name'].' '.$author['surname'] ?></a> <?= mb_substr($author['date_create'], 0, 10) ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
init.preload.go(500)
init.js.add('blogPost', 'module/blogPost.js', 1)

if (typeof blogPost == 'object') blogPost.init()
else {
    waitBlogPost = setInterval(() => {
        if (typeof blogEditor == 'object') {
            blogPost.init()
            clearInterval(waitBlogPost)
        }
    }, 100);
}
</script>