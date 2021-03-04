/**
 * @author Fedor Garanin, 2021
 * @version 0.0.9
 */

let msg = {
    /** Msg data 
     * @param {HTMLElement} $wrapper - App: Wrapper
     * @param {HTMLElement} $expansionBlock - App: Additional block
     * @param {HTMLElement} $msgChatMain - Chat header: main wrapper
     * @param {HTMLElement} $msgChatSearch - Chat header: Search message
     * @param {HTMLElement} $msgChatMenu - Chat header: menu
     * @param {HTMLElement} $msgChatMessageSelected - Chat header: selected message box
    */
    data: {
        $wrapper: undefined,
        $expansionBlock: undefined,
        $msgChatMain: undefined,
        $msgChatSearch: undefined,
        $msgChatMenu: undefined,
        $msgChatMessageSelected: undefined
    },

    settngs: {
        wrapper_id: 'msg-wrapper',
        expansion_id: 'warp-page-helper'
    },

    /** Global Store */
    store: {

    },

    /** Init msg application
     * @param {Object} settngs - Use {settngs.use = true} to enable the setting
    */
    init(settngs={use: false}) {
        /* Init app settngs */
        if (settngs.use) this.settngs = settngs

        /* Init Elements */
        this.data.$wrapper = document.getElementById(this.settngs.wrapper_id)

        /* Init wrapper */
        let self = nav.url.query('self') || 0
        this.wrapper('init', self)
        this.expansionBlockRender('init')

        nav.onunload = () => {
            this.data.$expansionBlock.innerHTML = ''
        }
    },

    /** Act api
     * @param {String} act - [dialogs.get|chat.get]
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
            chat: '/api.php?_action=msg.chat&v=0.1'
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

                break;
            case 'chat.edit':

                break;
            case 'chat.delete':

                break;
            
        }
    },

    /** 
     * Main window Settings 
     @param {String} act - [init|dialogs|chat]
     @param {Integer} self - uid who do you want to open a chat with
     */
    wrapper(act, self=0) {
        let dialogsData = {}
        let chatData = {}

        if (self == 0) act = 'dialogs'
        else act = 'chat'
    
        switch(act) {
            case 'dialogs':
                nav.changeUrl('/msg', true)

                dialogsData = this.api('dialogs.get', {sort:'desc'})
                this.dialogsRender(dialogsData)
                break
            case 'chat':
                nav.changeUrl('/msg?self=' + self, true)

                chatData = this.api('chat.get', {sort:'desc', self: self})
                this.chatRender(chatData)
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
            <span id="expansionBlock-dialogs-all" class="d-block msg-cursor-pointer my-0 py-3 theme-panel" onclick="msg.wrapper('dialogs');">All</span>
            <span id="expansionBlock-dialogs-unread" class="d-block msg-cursor-pointer my-0 py-3" onclick="msg.wrapper('dialogs');">Unread</span>
            <span id="expansionBlock-dialogs-favorite" class="d-block msg-cursor-pointer my-0 py-3 border-bottom border-primary" onclick="msg.wrapper('dialogs');">Favorite</span>
            <div class="row px-3">
                <div id="expansionBlock-dialogs-active" class="col-12">
                    <span class="d-block msg-cursor-pointer my-0 py-3 text-truncate" onclick="msg.wrapper('dialogs');">Администрация сайта</span>
                </div>
            </div>
        </div>
        `
    },

    /**
     * @method expansionBlockManage - Managing data of an additional block
     * @param {String} act - []
     * @param {Object} obj 
     */
    expansionBlockManage(act, obj={}) {

    },

    /**
     * @param {Object} data - Array with dialogs data
     */
    dialogsRender(data) {
        let dialogs = data.dialogs
        let count = data.count

        //console.log(data)

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
                                <h5 class="theme-link msg-cursor-pointer my-0 text-truncate">Show unread messages</h5>
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

            let $dialogsBody = document.getElementById('dialogsBody')

            dialogs.forEach(dialog => {
                let dialogData = {}
                let $msgDialog = document.createElement('msg-dialog')

                if (dialog.type == 'personal') {
                    dialogData = {
                        type: 'personal',
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

                $dialogsBody.append($msgDialog)
            }) 
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

        if (chat.type == 'personal') headline = `<a onclick="return nav.go(this);" class="theme-title" href="/id${chat.uid}">${chat.name} ${chat.surname}</a>`
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
                <div id="chatBody" class="d-flex col-12 align-items-end border-top border-bottom border-primary h70vh">
                    <div class="row justify-content-center align-items-center h70vh">
                        <div class="col-12 text-center">
                            <h4 class="text-muted my-0 py-0">Здесь будет выводиться история переписки.</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="row align-items-center">
                        <div class="col-2 text-center">
                            <button class="btn btn-link theme-title waves-effect waves-light"><i class="fas fa-paperclip fa-lg theme-title"></i></button>
                        </div>
                        <div class="md-form col-6 my-0">
                            <input placeholder="New message" theme-panel theme-title type="text" id="msg-new-message" class="form-control my-0">
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
        msg.chatManage('main');

        this.messageRender(chat.msgContainer, count)
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

    messageRender(data, count) {
        let $chatBody = document.getElementById('chatBody')

        if (count > 0) {
            $chatBody.innerHTML = ''
            data.forEach(message => {
                let $msgMessage = document.createElement('msg-message')
                $msgMessage.data = {
                    type: message.type,
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

                $chatBody.append($msgMessage)
            })
        }
    }
}

msg.init()