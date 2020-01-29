function ordered_freelance_cards(cards) {
    return `
        <div class="col-12 border py-2 mb-2">
            <h5 class="d-block theme-title border-bottom pb-2 mb-3"><span class="text-primary">Имя:</span> ` + cards.name + `</h5>
            <h5 class="d-block theme-title border-bottom pb-2 mb-3"><span class="text-primary">Почта:</span> ` + cards.mail + `</h5>
            <h5 class="d-block theme-title border-bottom pb-2 mb-3"><span class="text-primary">Номер:</span> ` + cards.number + `</h5>
            <h5 class="d-block theme-title border-bottom pb-2 mb-3"><span class="text-primary">Дата:</span> <span data-ctime="` + cards.time + `"></span></h5>
            <h5 class="d-block theme-text border-bottom pb-2 mb-3">
                <span class="text-primary mb-1 py-0">Описание:</span> ` + cards.description + `
            </h5>
            <h5 class="d-block theme-text border-bottom pb-2 mb-3">
                <span class="text-primary mb-1 py-0">Задача:</span> ` + cards.task + `
            </h5>
            <h5 class="d-block theme-text">
                <span class="text-primary">Бюджет:</span> ` + cards.budget + `
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