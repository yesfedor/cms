class AppMsgMessage extends HTMLElement {
    constructor() {
        super()
    }
    connectedCallback() {
        this.render(this)
    }
    render(el) {
        el.classList = 'row'
        let data = el.data
        let is_author = this.is_author()
        let content = this.contentRender()
        let wrapper = `
        <div class="d-flex justify-content-between text-left m-3 p-3 theme-panel rounded">
            ${content}
        </div>`
        let messageBox = ``

        el.innerHTML = wrapper
    }
    is_author() {
        return (this.data.uid == config.user.uid ? true:false)
    }
    contentRender() {
        // message.type = [text|emoji|sticker|voice]
        let wrapper = ``
        switch(this.data.type) {
            case 'text':
                wrapper = `<h5 class="theme-text my-0">${this.data.content}</h5>`
                break
            case 'emoji':

                break
            case 'sticker':

                break
            case 'voice':

                break
        }

        return wrapper
    }
}
customElements.define('msg-message', AppMsgMessage);