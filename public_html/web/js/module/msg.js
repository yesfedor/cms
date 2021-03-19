/**
 * @author Fedor Garanin, 2021
 * @version 0.1.0
 */

let msg = {
    vendor: {
        is_visible($element) {
            /*
            $(document).scroll(() => {
                this.is_visible($element)
            })
            $(window).resize(() => {
                this.is_visible($element)
            })
            */

            let div_position = $($element).offset()
            let div_top = div_position.top
            let div_left = div_position.left
            let div_width = $($element).width()
            let div_height = $($element).height()
            let top_scroll = $(document).scrollTop()
            let left_scroll = $(document).scrollLeft()
            let screen_width = $(window).width()
            let screen_height = $(window).height()
            
            let see_x1 = left_scroll
            let see_x2 = screen_width + left_scroll
            let see_y1 = top_scroll
            let see_y2 = screen_height + top_scroll
            
            let div_x1 = div_left
            let div_x2 = div_left + div_height
            let div_y1 = div_top
            let div_y2 = div_top + div_width
            
            if( div_x1 >= see_x1 && div_x2 <= see_x2 && div_y1 >= see_y1 && div_y2 <= see_y2 ) {
                return true  
            } else {
                return false    
            }
        }
    },

    /** Msg data 
     * @param {HTMLElement} $wrapper - App: Wrapper
     * @param {HTMLElement} $expansionBlock - App: Additional block
     * @param {HTMLElement} $expansionBlockDialogsAll - menu item All
     * @param {HTMLElement} $expansionBlockDialogsUnread - menu item Unread
     * @param {HTMLElement} $expansionBlockDialogsFavorite - menu item Favorite
     * @param {HTMLElement} $expansionBlockDialogsActive - menu item Active chats
     * @param {HTMLElement} $msgChatMain - Chat header: main wrapper
     * @param {HTMLElement} $msgChatSearch - Chat header: Search message
     * @param {HTMLElement} $msgChatMenu - Chat header: menu
     * @param {HTMLElement} $msgChatMessageSelected - Chat header: selected message box
     * @param {HTMLElement} $dialogsBody - dialogsBody box include msg-dialog
     * @param {HTMLElement} $chatBody - chatBody box include msg-message
    */
    data: {
        $wrapper: undefined,
        $expansionBlock: undefined,
        $expansionBlockDialogsAll: undefined,
        $expansionBlockDialogsUnread: undefined,
        $expansionBlockDialogsFavorite: undefined,
        $expansionBlockDialogsActive: undefined,
        $msgChatMain: undefined,
        $msgChatSearch: undefined,
        $msgChatMenu: undefined,
        $msgChatMessageSelected: undefined,
        $msgMessageSend: undefined,
        $dialogsBody: undefined,
        $chatBody: undefined,
        $currentMessageAttach: undefined,
        $currentMessageText: undefined
    },

    settngs: {
        wrapper_id: 'msg-wrapper',
        expansion_id: 'warp-page-helper'
    },

    /** Global Store */
    store: {
        expansionChats: [],
        dependence: {
            api: '/api.php?_action=msg.pool&v=0.1',
            checker: undefined,
            time: 2500,
            subscriptions: []
        },
        msgRecipient: 0,
        msgContainer: {},
        msgObservation: {
            offset: 0,
            cid: 0
        }
    },

    /** Init msg application
     * @param {Object} settngs - Use {settngs.use = true} to enable the setting
    */
    init(settngs={use: false}) {
        /* Init app settngs */
        if (settngs.use) this.settngs = settngs

        /* Init Elements */
        this.data.$wrapper = document.getElementById(this.settngs.wrapper_id)

        /* Init expansionBlockRender */
        this.expansionBlockRender('init')

        /* Init wrapper */
        let self = nav.url.query('self') || 0
        let sort = nav.url.query('sort') || 0
        if (self != 0) {
            this.wrapper('chat', self)
        } else {
            if (sort != 0) this.wrapper('dialogs.' + sort)
            else this.wrapper('dialogs')
        }

        /* Init transport pool */
        this.pool('init')

        /* Init Observation */
        this.messageManage('observationInit')

        /* FN unload */
        this.onunload()
    },

    onunload() {
        nav.onunload = () => {
            this.data.$expansionBlock.innerHTML = ''
            this.store.expansionChats = []
            this.pool('destroy')
        }
    },

    /** Act api
     * @param {String} act - [dialogs.get|chat.get|chat.send]
     * @param {string} obj.sort - [asc|desc]
     * @param {string} obj.self - uid who do you want to open a chat with
     * @param {Object} obj - Setting Object
     * 
     * @todo Реализовать хранение в store
     */
    api(act, obj={}) {
        let data = false
        let path = {
            dialogs: '/api.php?_action=msg.dialogs&v=0.1',
            chat: '/api.php?_action=msg.chat&v=0.1',
            send: '/api.php?_action=msg.send&v=0.1'
        }

        switch(act) {
            default:
                return false
                break
            
            // dialogs
            case 'dialogs.get':
                // return dialog info

                $.ajax({
                    async: false,
                    type: 'POST',
                    url: path.dialogs,
                    data: {sort: obj.sort},
                    dataType: 'json'
                }).done((responce) => {
                    data = responce
                })

                return data
                break
            // chat
            case 'chat.get':
                // return chat info by id
                $.ajax({
                    async: false,
                    type: 'POST',
                    url: path.chat,
                    data: {sort: obj.sort, self: obj.self},
                    dataType: 'json'
                }).done((responce) => {
                    data = responce
                })

                return data
                break
            case 'chat.send':
                $.ajax({
                    async: false,
                    type: 'POST',
                    url: path.send,
                    data: {recipient: this.store.msgRecipient, message: {type: obj.type, content: obj.content}},
                    dataType: 'json'
                }).done((responce) => {
                    data = responce
                })

                return data
                break
            case 'chat.edit':

                break;
            case 'chat.delete':

                break;
            
        }
    },

    /**
     *  Transport pool
     * @param {String} act - [init|destroy]
     * @param {Object} obj 
     */
    pool(act, obj) {
        switch(act) {
            case 'init':
                console.log('pool:init')
                this.store.dependence.checker = setInterval(() => {   
                    let dependence = this.poolDependence('get')
                    if (dependence) {
                        $.ajax({
                            async: false,
                            type: 'POST',
                            url: this.store.dependence.api,
                            data: {objects: dependence},
                            dataType: 'json'
                        }).done((res) => {
                            this.poolDependence('update', res)
                        })
                    }
                }, this.store.dependence.time)
                break
            
            case 'destroy':
                clearInterval(this.store.dependence.checker)
                break
        }
    },

    /**
     * poolDependence
     * @param {String} act - [set|get|update|deleteByKey]
     * @param {Object} data - data for act
     * @property {act.set} - Set Dependence include data.type [user|dialog|chat]
     */
    poolDependence(act, data) {
        switch(act) {
            case 'set':
                this.store.dependence.subscriptions.push(data)
                break
            case 'get':
                if (this.store.dependence.subscriptions.length == 0) return false
                else {
                    let objects = this.store.dependence.subscriptions
                    this.store.dependence.subscriptions = []
                    return objects
                }
            case 'update':
                data.forEach(item => {
                    let ce = new CustomEvent('msg-pool', {
                        detail: item
                    })

                    this.data.$wrapper.dispatchEvent(ce)
                })
                break
            case 'deleteByKey':
                this.store.dependence.subscriptions.map((obj, index) => {
                    if (obj.component == data.component && obj[data.key] == data.value) this.store.dependence.subscriptions.splice(index, 1)
                })
                break
        } 
    },

    /** 
     * Main window Settings 
     @param {String} act - [dialogs|dialogs.unread|dialogs.favorite|chat]
     @param {Integer} self - uid who do you want to open a chat with
     */
    wrapper(act, self=0) {
        let dialogsData = {}
        let chatData = {}

        this.messageManage('observationRemove')
    
        switch(act) {
            default:
            case 'dialogs':
                nav.changeUrl('/msg', true)

                dialogsData = this.api('dialogs.get', {sort:'desc'})
                this.expansionBlockManage('all')
                this.dialogsRender(dialogsData)
                break
            case 'dialogs.unread':
                nav.changeUrl('/msg?sort=unread', true)

                dialogsData = this.api('dialogs.get', {sort:'unread'})
                this.expansionBlockManage('unread')
                this.dialogsRender(dialogsData)
                break
            case 'dialogs.favorite':
                nav.changeUrl('/msg?sort=favorite', true)

                dialogsData = this.api('dialogs.get', {sort:'favorite'})
                this.expansionBlockManage('favorite')
                this.dialogsRender(dialogsData)
                break
            case 'chat':
                nav.changeUrl('/msg?self=' + self, true)
                this.store.msgRecipient = self

                chatData = this.api('chat.get', {sort:'desc', self: self})
                this.store.msgContainer = chatData?.chat?.msgContainer
                this.store.msgObservation.cid = chatData?.chat?.cid

                if (typeof chatData.chat.msgContainer == 'object') {
                    chatData.chat.msgContainer.forEach(message => {
                        if (this.store.msgObservation.offset < message.date) this.store.msgObservation.offset = message.date
                    })
                    this.chatRender(chatData)
                }

                this.messageManage('observationSet')

                this.expansionBlockManage('active', {uid: chatData.chat.uid, name: chatData.chat.name, surname: chatData.chat.surname})
                break
        }
    },

    /**
     * @method expansionBlockRender - Managing the state of an additional block
     * @param {String} act - [init|dialogs.add|dialogs.remove]
     * @param {Object} obj - Data for dialogs
     */
    expansionBlockRender(act, obj={}) {
        this.data.$expansionBlock = document.getElementById(this.settngs.expansion_id)
        this.data.$expansionBlock.innerHTML = `
        <div class="col-12 px-0 pt-2 border border-primary rounded text-center">
            <span id="expansionBlock-dialogs-all" class="d-block msg-cursor-pointer my-0 py-3" onclick="msg.wrapper('dialogs');">All</span>
            <span id="expansionBlock-dialogs-unread" class="d-block msg-cursor-pointer my-0 py-3" onclick="msg.wrapper('dialogs.unread');">Unread</span>
            <span id="expansionBlock-dialogs-favorite" class="d-block msg-cursor-pointer my-0 py-3 border-bottom border-primary" onclick="msg.wrapper('dialogs.favorite');">Favorite</span>
            <div class="row px-3">
                <div id="expansionBlock-dialogs-active" class="col-12 px-0"></div>
            </div>
        </div>
        `

        this.data.$expansionBlockDialogsAll = document.getElementById('expansionBlock-dialogs-all')
        this.data.$expansionBlockDialogsUnread = document.getElementById('expansionBlock-dialogs-unread')
        this.data.$expansionBlockDialogsFavorite = document.getElementById('expansionBlock-dialogs-favorite')
        this.data.$expansionBlockDialogsActive = document.getElementById('expansionBlock-dialogs-active')
    },

    /**
     * @method expansionBlockManage - Managing data of an additional block
     * @param {String} act - [all|unread|favorite|active]
     * @param {Object} obj - {uid, name, surname}
     */
    expansionBlockManage(act, obj={}) {
        this.data.$expansionBlockDialogsAll.classList.remove('theme-panel')
        this.data.$expansionBlockDialogsUnread.classList.remove('theme-panel')
        this.data.$expansionBlockDialogsFavorite.classList.remove('theme-panel')
        this.expansionBlockActiveManage('removeActive')

        switch (act) {
            case 'all':
                this.data.$expansionBlockDialogsAll.classList.add('theme-panel')
                break
            case 'unread':
                this.data.$expansionBlockDialogsUnread.classList.add('theme-panel')
                break
            case 'favorite':
                this.data.$expansionBlockDialogsFavorite.classList.add('theme-panel')
                break
            case 'active':
                this.expansionBlockActiveManage('setActive', obj)
                break
        }
    },
    
    expansionBlockActiveManage(act, obj={}) {
        switch(act) {
            case 'removeItem':
                if (typeof this.store.expansionChats[obj.uid] == 'object') {
                    if (this.store.expansionChats[obj.uid].is_active) this.wrapper('dialogs')
                    this.store.expansionChats[obj.uid].$.remove()
                    delete this.store.expansionChats[obj.uid]
                }
                break
            case 'removeActive':
                this.store.expansionChats.forEach(chat => {
                    if (chat.is_active) {
                        this.store.expansionChats[chat.uid].is_active = false
                        this.store.expansionChats[chat.uid].$.classList.remove('theme-panel')
                    }
                })
                break
            case 'setActive':
                if (typeof this.store.expansionChats[obj.uid] != 'object') {
                    // создаем
                    let $innerHeadline = document.createElement('span')
                    $innerHeadline.classList.value = 'text-truncate px-0 msg-cursor-pointer msg-expansion-user--info'
                    $innerHeadline.textContent = obj.name + ' ' + obj.surname
                    $innerHeadline.onclick = () => {
                        msg.wrapper('chat', obj.uid)
                    }

                    let $innerDelete = document.createElement('i')
                    $innerDelete.classList.value = 'far fa-times-circle px-0 msg-cursor-pointer msg-expansion-user--delete'
                    $innerDelete.setAttribute('onclick', `msg.expansionBlockActiveManage('removeItem', {uid: ${obj.uid}})`)

                    let $currentItem = document.createElement('span')
                    $currentItem.classList.value = 'msg-expansion-user my-0 p-3'

                    $currentItem.append($innerHeadline)
                    $currentItem.append($innerDelete)

                    let chat = {
                        $: $currentItem,
                        uid: obj.uid,
                        name: obj.name,
                        surname: obj.surname,
                        is_active: false
                    }
                    this.store.expansionChats[obj.uid] = chat
                    this.data.$expansionBlockDialogsActive.append(this.store.expansionChats[obj.uid].$)
                }
                // делаем активным
                this.store.expansionChats[obj.uid].is_active = true
                this.store.expansionChats[obj.uid].$.classList.add('theme-panel')
                break
        }
    },

    /**
     * @param {Object} dialog - dialog info 
     */
    dialogdBodyRender(dialog) {
        let dialogData = {}
        let $msgDialog = document.createElement('msg-dialog')

        if (dialog.type == 'personal') {
            dialogData = {
                type: 'personal',
                cid: dialog.cid,
                uid: dialog.uid,
                name: dialog.name,
                surname: dialog.surname,
                unreadCount: dialog.unreadCount,
                dateCreate: dialog.dateCreate,
                dateLast: dialog.dateLast,
                msgPreview: dialog.msgPreview
            }
        }

        if (dialog.type == 'conversation') {
            dialogData = {
                type: 'conversation',
                cid: dialog.cid,
                title: dialog.title,
                unreadCount: dialog.unreadCount,
                dateCreate: dialog.dateCreate,
                dateLast: dialog.dateLast,
                msgPreview: dialog.msgPreview
            }
        }

        if (dialog.type == 'channel') {
            dialogData = {
                type: 'channel',
                cid: dialog.cid,
                title: dialog.title,
                unreadCount: dialog.unreadCount,
                dateCreate: dialog.dateCreate,
                dateLast: dialog.dateLast,
                msgPreview: dialog.msgPreview
            }
        }
        
        $msgDialog.data = dialogData

        this.data.$dialogsBody.append($msgDialog)
    },

    /**
     * @param {Array} data  - Array with dialogs data
     */
    dialogsRender(data) {
        let dialogs = data.dialogs
        let count = data.count

        if (count == 0) {
            this.data.$wrapper.classList = 'row h80vh justify-content-center align-items-center'
            this.data.$wrapper.innerHTML = `
            <div class="col-12 text-center">
                <h4 data-lang="ui_msg_there_are_no_dialogs" class="text-muted my-0 py-0"></h4>
            </div>
            `
        } else {
            this.data.$wrapper.classList = 'row h80vh'
            this.data.$wrapper.innerHTML = `
            <div class="col-12">
                <div class="row"> 
                    <div class="col-12 text-center">
                        <div id="msg-dialogs-main" class="row align-items-center border-bottom border-primary">
                            <!-- Dialogs search message -->
                            <div class="md-form col-8 my-0">
                                <input placeholder="Search message" theme-panel theme-title type="text" id="msg-dialogs-search" class="form-control my-0">
                            </div>

                            <!-- Dialogs favorite -->
                            <div class="col-2 text-right">
                                <button onclick="" class="btn btn-link theme-title"><i class="far fa-star fa-lg theme-title"></i></button>
                            </div>

                            <!-- Dialogs search user -->
                            <div class="col-2 text-left">
                                <button onclick="" class="btn btn-link theme-title"><i class="far fa-address-book fa-lg theme-title"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 h70vh">
                        <div id="dialogsBody" class="row"></div>
                    </div>
                    <div class="col-12 text-center">
                        <div class="row align-items-center border-top border-primary">
                            <div class="col-8 text-center">
                                <h5 class="theme-link msg-cursor-pointer my-0 text-truncate" onclick="msg.wrapper('dialogs.unread');">Show unread messages</h5>
                            </div>
                            <div class="col-2 text-left">
                                <button onclick="" class="btn btn-link theme-title"><i class="fas fa-cog fa-lg theme-title"></i></button>
                            </div>
                            <div class="col-2 text-left">
                                <button onclick="" data-toggle="tooltip" title="Всего диалогов: ${count}" class="btn btn-link theme-title"><i class="fas fa-info fa-lg theme-title"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `

            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })

            // dialogs -> dialog into to $dialogsBody, render dialogs
            this.data.$dialogsBody = document.getElementById('dialogsBody')
            
            dialogs.forEach(dialog => {
                this.dialogdBodyRender(dialog)
            }) 
            /* invert
            for (let i = dialogs.length - 1; i >= 0; i--) {
                this.dialogdBodyRender(dialogs[i])
            }
            */
        }
    },

    /**
     * @param {Object} data - Array with chat data
     */
    chatRender(data) {
        let chat = data.chat
        let count = data.count
        let headline = ''

        //console.log(data)

        if (chat.type == 'personal') headline = `<a onclick="return nav.away(this);" class="theme-title" href="/id${chat.uid}">${chat.name} ${chat.surname}</a>`
        if (chat.type == 'conversation') headline = chat.title
        if (chat.type == 'channel') headline = chat.title

        this.data.$wrapper.classList = 'row h80vh'
        this.data.$wrapper.innerHTML = `
        <div class="col-12">
            <div class="row"> 
                <div class="col-12">
                    <!-- Main Wrapper -->
                    <div id="msg-chat-main" class="row align-items-center">
                        <div class="col-4 text-left">
                            <button onclick="msg.wrapper('dialogs');" class="btn btn-link theme-title waves-effect waves-light"><i class="fas fa-angle-left fa-lg theme-title"></i> Back</button>
                        </div>
                        <div class="col-4 text-center">
                            <span class="font-weight-bold text-truncate">${headline}</span>
                        </div>
                        <div class="col-4 text-right">
                            <i onclick="msg.chatManage('search');" class="d-inline fa-lg fas fa-search theme-title mr-3 msg-cursor-pointer"></i>
                            <i onclick="msg.chatManage('menu');" class="d-inline fa-lg fas fa-ellipsis-h theme-title ml-3 msg-cursor-pointer"></i>
                        </div>
                    </div>
                    <!-- Search Wrapper -->
                    <div id="msg-chat-search" class="row align-items-center">
                        <div class="col-4 text-left">
                            <button onclick="msg.wrapper('dialogs');" class="btn btn-link theme-title waves-effect waves-light"><i class="fas fa-angle-left fa-lg theme-title"></i> Back</button>
                        </div>
                        <div class="md-form col-7 my-0">
                            <input placeholder="Search message" theme-panel theme-title type="text" id="msg-chat-search-message" class="form-control my-0">
                        </div>
                        <div class="col-1 text-center">
                            <i onclick="msg.chatManage('main');" class="fas fa-times fa-lg theme-title msg-cursor-pointer"></i>
                        </div>
                    </div>
                    
                    <!-- Chat Menu Wrapper -->
                    <div id="msg-chat-menu" class="row align-items-center">
                        <div class="col-4 text-left">
                            <button onclick="msg.wrapper('dialogs');" class="btn btn-link theme-title waves-effect waves-light"><i class="fas fa-angle-left fa-lg theme-title"></i> Back</button>
                        </div>
                        <div class="col-7 text-center">
                            Чат меню
                        </div>
                        <div class="col-1 text-right">
                            <i onclick="msg.chatManage('main');" class="fas fa-times fa-lg theme-title msg-cursor-pointer"></i>
                        </div>
                    </div>

                    <!-- Selected Wrapper -->
                    <div id="msg-chat-message_selected" class="row align-items-center">
                        <div class="col-4 text-left">
                            <button onclick="msg.wrapper('dialogs');" class="btn btn-link theme-title waves-effect waves-light"><i class="fas fa-angle-left fa-lg theme-title"></i> Back</button>
                        </div>
                        <div class="col-7 text-center">
                            Вы выделили сообщение(я)
                        </div>
                        <div class="col-1 text-right">
                            <i onclick="msg.chatManage('main');" class="fas fa-times fa-lg theme-title msg-cursor-pointer"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex align-items-end border-top border-bottom border-primary h70vh">
                    <div id="chatBody" class="col-12 my-2">
                        <div class="col-12 text-center">
                            <div class="row justify-content-center align-items-center h70vh">
                                <div class="col-12 text-center">
                                    <h4 class="text-muted my-0 py-0">Здесь будет выводиться история переписки.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="row align-items-center">
                        <div class="col text-center px-0">
                            <button class="btn btn-link theme-title waves-effect waves-light"><i class="fas fa-paperclip fa-lg theme-title"></i></button>
                        </div>
                        <div class="form-group col-8 my-0 px-0">
                            <textarea placeholder="New message" type="text" id="msg-new-message" class="msg-textarea form-control theme-title my-0"></textarea>
                            <div id="msg-new-attach" class="row align-items-center justify-content-center"></div>
                        </div>
                        <div class="col text-center px-0">
                            <button id="msg-message-send" onclick="msg.messageManage('send', this);" class="btn btn-link theme-title waves-effect waves-light"><i class="far fa-paper-plane fa-lg theme-title"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `

        /**
         * @desc Init data element
         */
        this.data.$msgChatMain = document.getElementById('msg-chat-main')
        this.data.$msgChatSearch = document.getElementById('msg-chat-search')
        this.data.$msgChatMenu = document.getElementById('msg-chat-menu')
        this.data.$msgChatMessageSelected = document.getElementById('msg-chat-message_selected')
        this.data.$currentMessageText = document.getElementById('msg-new-message')
        this.data.$currentMessageAttach = document.getElementById('msg-new-attach')
        this.data.$msgMessageSend = document.getElementById('msg-message-send')
        msg.chatManage('main');

        this.data.$chatBody = document.getElementById('chatBody')
        this.messageRender(chat.msgContainer, count, true)
    },

    /**
     * @param {String} act show: [main|search|menu|selected]
     */
    chatManage(act) {
        this.data.$msgChatMain.style.display = 'none'
        this.data.$msgChatSearch.style.display = 'none'
        this.data.$msgChatMenu.style.display = 'none'
        this.data.$msgChatMessageSelected.style.display = 'none'

        switch(act) {
            case 'main':
                this.data.$msgChatMain.style.display = 'flex'
                break
            case 'search':
                this.data.$msgChatSearch.style.display = 'flex'
                break
            case 'menu':
                this.data.$msgChatMenu.style.display = 'flex'
                break
            case 'selected':
                this.data.$msgChatMessageSelected.style.display = 'flex'
                break
        }
    },

    /**
     * the separator is used to cut off blocks
     */
    messageHTMLSeparator() {
        let $HTMLSeparator = document.createElement('hr')
        $HTMLSeparator.style.opacity = 0
        this.data.$chatBody.append($HTMLSeparator)
    },

    /**
     * @param {Object} message - msgContainer once item push to $chatBody
     */
    messageBodyRender(message) {
        let $msgMessage = document.createElement('msg-message')
        $msgMessage.data = {
            type: message.type,
            id: message.id,
            cid: message.cid,
            uid: message.uid,
            name: message.name,
            surname: message.surname,
            is_read: message.is_read,
            is_favorite: message.is_favorite,
            is_spam: message.is_spam,
            is_delited: message.is_delited,
            is_edited: message.is_edited,
            date: message.date,
            content: message.content
        }

        this.data.$chatBody.append($msgMessage)
    },

     /**
      * @param {Array} data - msgContainer
      * @param {Integer} count - msgContainer.length
      * @param {Boolean} is_clear - do I need to clean the container before adding it
      */
    messageRender(data, count, is_clear=false) {    
        if (count > 0) {
            if (is_clear) this.data.$chatBody.innerHTML = ''

            for (let i = data.length - 1; i >= 0; i--) {
                this.messageBodyRender(data[i])
                // this.messageHTMLSeparator()
            }
        }
    },

    /**
     * @param {String} act - [observationInit|observationSet|observationRemove] 
     */
    messageManage(act, button=false) {
        switch(act) {
            case 'observationInit':
                msg.data.$wrapper.addEventListener('msg-pool', (event) => {
                    if (event.detail.component == 'AppMsgObservation') {
                        if (event.detail.count > 0) {
                            if (typeof event.detail.data == 'object') {
                                event.detail.data.forEach(message => {
                                    if (this.store.msgObservation.offset < message.date) this.store.msgObservation.offset = message.date
                                })
                            }
                            this.messageRender(event.detail.data, event.detail.count, false)

                            this.data.$msgMessageSend.classList.remove('disabled')
                        }
                        this.messageManage('observationSet')
                    }
                })
                break
            case 'observationSet':
                // слежка за новыми сообщениями
                if (this.store.msgObservation.cid != false) this.poolDependence('set', {component: 'AppMsgObservation', cid: this.store.msgObservation.cid, offset: this.store.msgObservation.offset})
                break
            case 'observationRemove':
                // удаление слежки за новыми сообщениями
                this.store.msgObservation.cid = false
                break
            case 'send':
                if (msg.data.$currentMessageText.value != '') {
                    this.api('chat.send', {type: 'text', content: msg.data.$currentMessageText.value})

                    msg.data.$currentMessageText.value = ''
                    this.data.$msgMessageSend.classList.add('disabled')
                }
                break
        }
    }
}

msg.init()
