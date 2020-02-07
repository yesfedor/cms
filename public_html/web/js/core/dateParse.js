dateParse = {
    data: {
        offset: new Date().getTimezoneOffset()
    },
    render() {
        $('[data-ctime][data-success != true]').each((i, el) => {
            let timeData = $(el).attr('data-ctime') * 1000
            let strDate = dateParse.format(new Date(timeData))
            $(el).html(strDate)
            $(el).attr('data-success', 'true')
        })
        $('[data-time][data-success != true]').each((i, el) => {
            let timeData = dateParse.utcToClient($(el).attr('data-time') * 1000)
            let strDate = dateParse.format(new Date(timeData))
            $(el).html(strDate)
            $(el).attr('data-success', 'true')
        })
    },
    utcToClient(utcToClientTime) {
        let result = utcToClientTime + (dateParse.data.offset*60*1000)
        return result
    },
    format(timeObj) {
        let strDate = (timeObj.getDate().toString().length == 2 ? timeObj.getDate() : '0' + timeObj.getDate())
        let strMonth = ((timeObj.getMonth() + 1).toString().length == 2 ? (timeObj.getMonth() + 1) : '0' + (timeObj.getMonth() + 1))
        let strYear = timeObj.getFullYear()
        let strHours = (timeObj.getHours().toString().length == 2 ? timeObj.getHours() : '0' + timeObj.getHours())
        let strMinutes = (timeObj.getMinutes().toString().length == 2 ? timeObj.getMinutes() : '0' + timeObj.getMinutes())
        let strSeconds = (timeObj.getSeconds().toString().length == 2 ? timeObj.getSeconds() : '0' + timeObj.getSeconds())
        let str = strDate + '/' + strMonth + '/' + strYear + ' ' + strHours + ':' + strMinutes + ':' + strSeconds
        return str
    }
}