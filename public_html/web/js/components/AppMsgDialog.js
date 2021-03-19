class AppMsgDialog extends HTMLElement {
    constructor() {
        super()
    }
    connectedCallback() {
        this.nextTick = true
        this.AppMsgDialog(this)
        this.apiEvent()
        this.apiTick()
    }
    disconnectedCallback() {
        msg.poolDependence('deleteByKey', {component: 'AppMsgDialog', key: 'cid', value: this.data.cid})
        this.nextTick = false
    }
    AppMsgDialog(el) {
        el.style.cursor = 'pointer'
        el.classList = 'col-12 border-bottom border-primary m-0 p-0'
        let data = el.data
        let headline = ''
        let unreadBlock = 0
        if (data.unreadCount != 0) unreadBlock = 1
        if (data.unreadCount > 999) data.unreadCount = 999
        
        let msgPreviewBefore = ''
        
        switch(data.type) {
            case 'personal':
                headline = data.name + ' ' + data.surname
                el.onclick = () => {
                    nav.changeUrl('/msg?self=u' + data.uid, true)
                    msg.wrapper('chat', data.uid)
                }

                if (config.user.uid == data.msgPreview.uid) msgPreviewBefore = 'Вы:'
                break
            case 'conversation':
                headline = data.title

                if (config.user.uid == data.msgPreview.uid) msgPreviewBefore = 'Вы:'
                else msgPreviewBefore = data.msgPreview.name + ' ' + data.msgPreview.surname + ':'
                break
            case 'channel':
                headline = data.title

                if (config.user.uid == data.msgPreview.uid) msgPreviewBefore = 'Вы:'
                break
        }

        let timeData = data.dateLast  * 1000
        let time = dateParse.format(new Date(timeData), 'd/m/?y h:m')

        let html = `
            <div class="row justify-content-center align-items-center m-3">
                <div class="col-12 col-md-8 mb-2">
                    <h6>
                        <b class="d-block w-75 float-left text-truncate theme-title text-left mb-0">${headline}</b>
                        <span class="d-block w-25 float-left text-muted text-right">${time}</span>
                    </h6>
                </div>
                <div class="col-12 col-md-8 text-right" style="opacity: ${unreadBlock};">
                    <span class="badge badge-primary badge-pill">${data.unreadCount}</span>
                </div>
                <div class="col-12 col-md-8 mt-n3">
                    <h6 class="d-block w-75 float-left text-truncate my-0 text-muted pl-3">${msgPreviewBefore} ${(data.msgPreview.text ? data.msgPreview.text:'')}</h6>
                </div>
            </div>
        `
        el.innerHTML = html
    }
    apiEvent() {
        msg.data.$wrapper.addEventListener('msg-pool', (event) => {
            if (event.detail.component == 'AppMsgDialog' && event.detail?.cid == this.data.cid) this.apiParse(event)
        })
    }
    apiTick() {
        // msg.vendor.is_visible(this)
        if (this.nextTick) msg.poolDependence('set', {component: 'AppMsgDialog', cid: this.data.cid})
    }
    apiParse(event) {
        // reload
        this.apiTick()

        // code
        this.data = event.detail
        this.AppMsgDialog(this)
    }
}
customElements.define('msg-dialog', AppMsgDialog)