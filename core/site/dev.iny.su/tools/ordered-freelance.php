<?php
$queryOrdered = "SELECT * FROM ordered_freelance WHERE id != :id";
$varOrdered = [
    ':id' => 0
];
$ordered_freelance_data = dbGetAll($queryOrdered, $varOrdered);
?>
<div class="container my-5">
    <div class="row">
        <div class="col-10 offset-1 mb-2">
            <h3 class="theme-title">Фриланс. Заказы.</h3>
        </div>
        <div id="ordered_freelance_container" class="col-10 offset-1 mb-2">
            <div class="col-12 border py-2">
                <h5 class="theme-text my-0">Показаны все записи</h5>
            </div>
        </div>
    </div>
</div>
<script>
let ordered_freelance_data = <?= json_encode($ordered_freelance_data) ?>

function ordered_freelance_cards(cards) {
    return `
        <div class="col-12 border py-2 mb-2">
            <h4 class="d-block theme-title mb-2 py-0">` + cards.name + ` <small class="theme-text">` + cards.mail + `, ` + cards.number + `</small> (<small data-ctime="` + cards.time + `" class="theme-text"></small>)</h4>
            <h5 class="d-block theme-text mb-2 py-0">
                <span class="d-block mb-1 py-0">Описание</span>
                ` + cards.description + `
            </h5>
            <h5 class="d-block theme-text mb-2 py-0">
                <span class="d-block mb-1 py-0">Задача</span>
                ` + cards.task + `
            </h5>
            <h5 class="d-block theme-text mb-2 py-0">
                <span class="">Бюджет:</span> ` + cards.budget + `
            </h5>
        </div>
    `
}
function ordered_freelance_render(el, data) {
    let html = ``
    for(let i = 0; i < data.length;) {
        html = html + ordered_freelance_cards(data[i])
        i++
    }
    $(el).prepend(html);
}

ordered_freelance_render('#ordered_freelance_container', ordered_freelance_data)
</script>