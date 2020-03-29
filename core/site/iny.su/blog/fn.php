<?php
// set, get, update -> db_table @blogpost
/*
    category
    0. Все
    1. В реализации
*/
function blogPostsRender($data) {
    if ($data[0]) {
        $html = '';
        foreach($data as $key => $card) {
            $html .= '
                <blog-post post-id="'.$card['id'].'" url="'.$card['url'].'" uid="'.$card['uid'].'" category="'.$card['category'].'" date_create="'.$card['date_create'].'" title="'.$card['title'].'" poster_url="'.$card['poster_url'].'" preview="'.$card['preview'].'"><blog-post/>
            ';
        }
        return $html;
    }
    else return false;
}

function blogPostsGetByParam($param, $value, $limit=1, $render=false) {
    $query = "SELECT * FROM blogpost WHERE $param = :$param LIMIT $limit";
    $var = [
        $param => ':'.$value
    ];
    $result = dbGetAll($query, $var);
    if ($render) return blogPostsRender($result);
    else return $result;
}

function blogPostsGetAll() {
    $query = "SELECT * FROM blogpost WHERE id != :id ORDER BY id DESC LIMIT 50";
    $var = [
        'id' => 0
    ];
    $result = dbGetAll($query, $var);
    if ($render) return blogPostsRender($result);
    else return $result;
}
?>