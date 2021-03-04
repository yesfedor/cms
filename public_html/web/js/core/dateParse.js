let dateParse = {
    data: {
        offset: new Date().getTimezoneOffset(),
        year: 0,
        month: 0,
        day: 0
    },
    updateNowData() {
        let date = new Date()
        this.data.day = (date.getDate().toString().length == 2 ? date.getDate() : '0' + date.getDate())
        this.data.month = ((date.getMonth() + 1).toString().length == 2 ? (date.getMonth() + 1) : '0' + (date.getMonth() + 1))
        this.data.year = date.getFullYear()
        return true
    },
    getActivity() {

    },
    render() {
        $('[data-ctime][data-success != true]').each((i, el) => {
            let timeData = $(el).data('ctime') * 1000
            let format = $(el).data('format') || 'd/m/y h:m:s'
            let strDate = dateParse.format(new Date(timeData), format)
            $(el).html(strDate)
            $(el).attr('data-success', 'true')
        })
        $('[data-time][data-success != true]').each((i, el) => {
            let timeData = dateParse.utcToClient($(el).data('time') * 1000)
            let format = $(el).data('format') || 'd/m/y h:m:s'
            let strDate = dateParse.format(new Date(timeData), format)
            $(el).html(strDate)
            $(el).attr('data-success', 'true')
        })
    },
    utcToClient(utcToClientTime) {
        let result = utcToClientTime + (dateParse.data.offset*60*1000)
        return result
    },
    format(timeObj, format='d/m/y h:m:s') {
        this.updateNowData()
        let strDate = (timeObj.getDate().toString().length == 2 ? timeObj.getDate() : '0' + timeObj.getDate())
        let strMonth = ((timeObj.getMonth() + 1).toString().length == 2 ? (timeObj.getMonth() + 1) : '0' + (timeObj.getMonth() + 1))
        let strYear = timeObj.getFullYear()
        let strHours = (timeObj.getHours().toString().length == 2 ? timeObj.getHours() : '0' + timeObj.getHours())
        let strMinutes = (timeObj.getMinutes().toString().length == 2 ? timeObj.getMinutes() : '0' + timeObj.getMinutes())
        let strSeconds = (timeObj.getSeconds().toString().length == 2 ? timeObj.getSeconds() : '0' + timeObj.getSeconds())

        if (format == 'd/m/y h:m:s') return strDate + '/' + strMonth + '/' + strYear + ' ' + strHours + ':' + strMinutes + ':' + strSeconds
        if (format == 'd/m/y') return strDate + '/' + strMonth + '/' + strYear
        if (format == 'd/m/?y') return strDate + '/' + strMonth + (this.data.year == strYear ? '' : '/' + strYear)
        if (format == 'd/m/?y h:m') return strDate + '/' + strMonth + (this.data.year == strYear ? '' : '/' + strYear) + ' ' + strHours + ':' + strMinutes
        if (format == 'h:m:s') return strHours + ':' + strMinutes + ':' + strSeconds
        if (format == 'h:m') return strHours + ':' + strMinutes
    }
}