class AppMsgMessage extends HTMLElement {
    constructor() {
        super()
    }
    connectedCallback() {
        this.nextTick = true
        this.render(this)
        this.apiEvent()
        this.apiTick()
    }
    disconnectedCallback() {
        msg.poolDependence('deleteByKey', {component: 'AppMsgMessage', key: 'id', value: this.data.id})
        this.nextTick = false
    }
    render(el) {
        el.classList = `row ${(this.is_author() ? 'justify-content-end':'justify-content-start')}`
        if (this.data.is_delited == '1') this.remove()
        let content = this.contentRender()
        let wrapper = `
        <div class="d-flex justify-content-between text-left my-2 p-3 theme-panel rounded msg-w-max">
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
    apiEvent() {
        msg.data.$wrapper.addEventListener('msg-pool', (event) => {
            if (event.detail.component == 'AppMsgMessage' && event.detail?.id == this.data.id) this.apiParse(event)
        })
    }
    apiTick() {
        //msg.vendor.is_visible(this)
        console.log('apiTick')
        if (this.nextTick) msg.poolDependence('set', {component: 'AppMsgMessage', id: this.data.id})
    }
    apiParse(event) {
        // reload
        this.apiTick()

        // code
        this.data = event.detail
        this.render(this)
    }
}
customElements.define('msg-message', AppMsgMessage)