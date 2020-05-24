let animationTextDisplay = {
    init(timeStep=200, callback=()=>{}) {
        let $els = document.getElementsByClassName('display-logo')
        for(let length = 0; length < $els.length; length++) {
            let $el = $els.item(length)
            this.print($el, timeStep, callback)
        }
    },
    print($el, timeStep, callback) {
        $el.style.display = 'block'
        let text = $el.textContent
        $el.innerHTML = ''
        let timer = timeStep;
        let allTime = (timeStep*2) + (text.length*200)
        setTimeout(() => {
            callback()
        }, allTime);
        for(let i = 0; i < text.length; i++) {
            timer += 200
            let symbol = text[i]
            let span = document.createElement('span')
            span.textContent = symbol
            span.classList.add('display-symbol-passive')
            $el.append(span)
            setTimeout(() => {
                span.classList.remove('display-symbol-passive')
                span.classList.add('display-symbol')
            }, timer)
            setTimeout(() => {
                span.setAttribute('style', 'color:white!important')
            }, allTime);
        }
    }
}