<?php
$warp = 'app';
?>
<style>
body {
    min-height: 110vh;
}
.wrapper-welcome {
    min-height: 94.5vh;
}
.ali-wave {
  color: #fce4ec !important;
  animation: alilogo 1s infinite;
}

@keyframes alilogo {
    50% {
        color: #e91e63;
    }
}

.ali-bg-theme {
    background-color: #121212;
    animation: 2s color;
}

.ali-border {
    border-top: solid 0.5rem #f06292 !important;
    animation: aliborder 4s infinite;
}

@keyframes aliborder {
    0% {
        border-color: #f06292;
    }
    25% {
        border-color: #cfd8dc;
    }
    50% {
        border-color: #e91e63;
    }
    75% {
        border-color: #90a4ae;
    }
    100% {
        border-color: #f06292;
    }
}
#boxFreeText {
    color: white !important;
}
#boxFreeText > span {
    color: white !important;
}

</style>
<div class="container my-0 py-0">
    <div class="row align-items-center justify-content-center wrapper-welcome">
        <div class="col-12 col-md-10 text-center px-3">
            <div class="row">
                <div id="ali-logo-wrapper" class="col-12"><h1 id="ali-logo" class="my-0">@fannalinur</h1></div>
                <div class="col-12"><h3 id="boxFreeText" class="my-0"></h3></div>
            </div>
        </div>
    </div>
    <div class="ali-box row justify-content-center wrapper-welcome mb-1" style="display: none;">
        <div class="col-12 col-md-10 z-depth-3 white rounded border-top ali-border py-5 mt-n5">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="my-0"></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
class TextScramble {
  constructor(el) {
    this.el = el
    this.chars = '!<>-_\\/[]{}—=+*^?#_'
    this.update = this.update.bind(this)
  }
  setText(newText) {
    const oldText = this.el.innerText
    const length = Math.max(oldText.length, newText.length)
    const promise = new Promise((resolve) => this.resolve = resolve)
    this.queue = []
    for (let i = 0; i < length; i++) {
      const from = oldText[i] || ''
      const to = newText[i] || ''
      const start = Math.floor(Math.random() * 40)
      const end = start + Math.floor(Math.random() * 40)
      this.queue.push({ from, to, start, end })
    }
    cancelAnimationFrame(this.frameRequest)
    this.frame = 0
    this.update()
    return promise
  }
  update() {
    let output = ''
    let complete = 0
    for (let i = 0, n = this.queue.length; i < n; i++) {
      let { from, to, start, end, char } = this.queue[i]
      if (this.frame >= end) {
        complete++
        output += to
      } else if (this.frame >= start) {
        if (!char || Math.random() < 0.28) {
          char = this.randomChar()
          this.queue[i].char = char
        }
        output += `<span class="dud">${char}</span>`
      } else {
        output += from
      }
    }
    this.el.innerHTML = output
    if (complete === this.queue.length) {
      this.resolve()
    } else {
      this.frameRequest = requestAnimationFrame(this.update)
      this.frame++
    }
  }
  randomChar() {
    return this.chars[Math.floor(Math.random() * this.chars.length)]
  }
}

let aliya = {
    init() {
        style.setHeaderAppThemeColor('#e91e63')
        this.initBg()
        this.initLogo()
    },
    initLogo() {
        let wrapper = document.querySelector("#ali-logo-wrapper");
        let text = document.querySelector("#ali-logo");
        let textCont = text.textContent;
        text.style.display = "none";
        for (let i = 0; i < textCont.length; i++) {
            (function(i) {
                setTimeout(function() {
                // Created textNode to append
                let texts = document.createTextNode(textCont[i])
                let span = document.createElement('span');
                span.appendChild(texts);

                span.classList.add("ali-wave");
                let textClassSize = (fn.isMobile() ? 'h1':'display-2') 
                span.classList.add(textClassSize);
                span.classList.add("font-weight-bold");
                wrapper.appendChild(span);

                }, 200 * i);
            }(i));
        }
        setTimeout(() => {
            this.initBoxFreeText()
            this.initBox()
        }, textCont.length * 205)
    },
    initBg() {
        $('body').addClass('ali-bg-theme')
    },
    initBox() {
        $('.ali-box').fadeIn(2000)
    },
    initBoxFreeText() {
        const phrases = [
        'Заказ!?',
        'Новая идея?',
        'Я помогу с реализацией',
        'Что по стоимости?',
        'Как со мной связаться?',
        'Смотри ниже',
        ]

        const el = document.querySelector('#boxFreeText')
        const fx = new TextScramble(el)

        let counter = 0
        const next = () => {
        fx.setText(phrases[counter]).then(() => {
            setTimeout(next, 500)
        })
        counter = (counter + 1) % phrases.length
        }

        next()

    }
}

aliya.init()
</script>