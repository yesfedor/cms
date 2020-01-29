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
init.js.add('ordered_freelance_render', 'module/ordered-freelance.js', 1);
toastr.info('Загрузка заказов')
setTimeout(() => {
    ordered_freelance_render('#ordered_freelance_container', <?= json_encode($ordered_freelance_data) ?>)
}, 1000);

</script>