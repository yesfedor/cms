<?php
// set, get, update -> db_table @blogpost
/*
    category
    0. Все
    1. В реализации
*/
function blogPostsGetByParam($param, $value, $limit=1, $render=false) {
    $query = "SELECT * FROM blogpost WHERE $param = :$param LIMIT $limit";
    $var = [
        ':'.$param => $value
    ];
    $result = dbGetAll($query, $var);
    if ($render) return $result;
    else return $result;
}

function blogPostsGetAll() {
    $query = "SELECT * FROM blogpost WHERE id != :id ORDER BY id DESC LIMIT 50";
    $var = [
        ':id' => 0
    ];
    $result = dbGetAll($query, $var);
    if ($render) return $result;
    else return $result;
}
?>