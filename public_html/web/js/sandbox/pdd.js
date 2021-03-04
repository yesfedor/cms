/*
$.getScript('//go.iny.su/pdd')
*/
function questCommentGet() {
    setInterval(() => {
        let text = $questComment.textContent;
        $output.innerHTML = text;
        console.log(text);
    }, 1000);
}
function questCommentSwitcher() {
    let opacity = this.getAttribute('data-opacity');
    switch(opacity) {
        case 'init':
            this.setAttribute('data-opacity', 'v');
            this.style.opacity = 0;
            break;
        case 'v':
            this.setAttribute('data-opacity', 'h');
            this.style.opacity = 0;
            break;
        case 'h':
            this.setAttribute('data-opacity', 'v');
            this.style.opacity = 1;
            break;
    }
}

let $questComment = document.getElementById('questComment');
let $output = document.getElementById('descriptionid');
$output.setAttribute('data-opacity', 'init');
$output.classList.add('text-muted')

$questComment.onchange = questCommentGet;
$output.onclick = questCommentSwitcher;

questCommentGet();
questCommentSwitcher();

console.log('Hack by yesfedor');