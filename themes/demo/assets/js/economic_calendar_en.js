let timeZone = String(-new Date().getTimezoneOffset() / 60)

const cityOptions = ['Australia', 'Canada', 'China', 'European Union', 'France', 'Germany', 'Italy', 'Japan', 'New Zealand', 'Switzerland', 
    'United Kingdom', 'United States']

const weekArr = {
        0: 'Sun',
        1: 'Mon',
        2: 'Tue',
        3: 'Wed',
        4: 'Thu',
        5: 'Fri',
        6: 'Sat'
    }

// type 1: 本周 2：上周 3：下周
function getWeekDay(type) {
    var monday = new Date()
    var weekday = monday.getDay()

    if (weekday == 0) {
        weekday = 7
    }
    
    if (type == 'This week') {
        monday.setDate(monday.getDate() - weekday + 1)

        return getForeach(monday)
    } else if (type == 'Last week') {
        monday.setDate(monday.getDate() - weekday + 1 - 7)

        return getForeach(monday)
    } else if (type == 'Next week') {
        monday.setDate(monday.getDate() - weekday + 1 + 7)

        return getForeach(monday)
    }
}

function timeFormat(date) {
    let arr = []
    var y = date.getFullYear(); //年
    var m = date.getMonth() + 1; //月
    var d = date.getDate(); //日

    arr ['simple'] = d + ' ' + date.toDateString().split(' ')[1]
    arr ['all'] = y + '-' + m + '-' + d
    arr ['weekday'] = weekArr[date.getDay()]

    return arr
}

function getForeach(date) {
    let arr = []

    for (let i = 0; i < 7; i++) {
        arr [i] = timeFormat(new Date(Date.parse(date) + (i * 86400 * 1000)))
    }

    return arr
}

new Vue({
    el: '#app',
    data: function () {
        return {
            listLoading: false,
            nowTime: '',
            temp: {
                page: 1,
                limit: 50,
                type: 1,
                language: 'en',
                time: '',
                date: new Date().getFullYear() + '-' + (new Date().getMonth() + 1) + '-' + new Date().getDate(),
                importance: ['High', 'Middle', 'Low'],
                event: ['Financial Events', 'Economic Data'],
                zone: timeZone,
                country: cityOptions,
                filter: false
            },
            cities: cityOptions,
            nowPage: 1,
            total: 0,
            tableData: [],
            day: 0,
            isIndeterminate: true,
            checkAll: false,
            showSearch: false,
            historyData: [],
            historyTotal: 0,
            historyLoading: false,
            historyTemp: {
                page: 1,
                limit: 10,
                url_id: '',
                id: '',
                language: 'en',
                previous: '',
                reality: '',
                forecast: ''
            },
            currentZone: 8,
            histotyDialog: false,
            historyTitle: '',
            timeArray: getWeekDay('This week'),
            filterType: '',
            showFilter: false
        }
    },
    created() {
        this.getEconomic()
    },
    methods: {
        getEconomic() {
            this.listLoading = true

            limit = this.temp.limit
            page = this.temp.page

            var _this = this

            $.ajax({
                url: "/controller/economic.php",
                type: "POST",
                data: _this.temp,
                dataType: "json",
                async: true,
                success: function (response) {
                    var data = response.Content
                    data.forEach(function (item, key) {
                        item.date = item.date.replace(/\-/g, '/')
                        item.expand = true
                    })

                    if (data.length > 0) {
                        data.unshift({ 'id': '--', 'timeLine': data[0]['date'], 'expand': false })

                        let nowDate = data[0]['timeLine'].split(' ')[0]
                        
                        for (let i = 1; i < data.length; i++) {
                            if (data[i]['date'].split(' ')[0] != nowDate) {
                                nowDate = data[i]['date'].split(' ')[0]
                                data.splice(i, 0, { 'id': '--', 'timeLine': data[i]['date'], 'expand': false })
                            }

                            if (i > 1 && data[i]['id'] != '--' && data[i - 1]['id'] != '--' && 
                            data[i]['date'].split(' ')[1].slice(0, 5) == data[i-1]['date'].split(' ')[1].slice(0, 5) && data[i]['currency'] == data[i-1]['currency']) 
                            {
                                data [i]['show_date'] = ''
                                data [i]['show_currency'] = ''
                            } else if (data[i]['id'] != '--') {
                                data [i]['show_date'] = data[i]['date'].split(' ')[1].slice(0, 5)
                                data [i]['show_currency'] = data[i]['currency']
                            }
                        }
                    }

                    _this.tableData = data
                    _this.total = response.Content.total
                    _this.listLoading = false

                    _this.handleChangeZone()
                }
            })
        },
        handleCheckAllChange(val) {
            this.temp.country = val ? cityOptions : [];
            this.isIndeterminate = false
        },
        handleChangeZone() {
            let data = this.tableData
            for (let i = 0; i < data.length; i++) {
                let pubTime = new Date(data[i]['date'])
                pubTime = new Date(pubTime.valueOf() + this.temp.zone * 60 * 60 * 1000 - this.currentZone * 60 * 60 * 1000)

                data[i]['date'] = pubTime.getFullYear() + '-' + (pubTime.getMonth() + 1) + '-' + pubTime.getDate() + ' '
                    + this.zeroPadding(pubTime.getHours(), 2) + ':' + this.zeroPadding(pubTime.getMinutes(), 2) + ':' + this.zeroPadding(pubTime.getSeconds(), 2)
            }
            this.currentZone = this.temp.zone
        },
        handleCountryChange(value) {
            let checkedCount = value.length
            this.checkAll = checkedCount === this.cities.length;
            this.isIndeterminate = checkedCount > 0 && checkedCount < this.cities.length;
        },
        handleConfirmFilter() {
            this.temp.filter = true
            this.showFilter = false

            this.getEconomic()
        },
        zeroPadding(num, digit) {
            let zero = ''
            for (let i = 0; i < digit; i++) {
                zero += '0'
            }
            return (zero + num).slice(-digit)
        },
        handleShowSearch() {
            this.showSearch = !this.showSearch
        },
        handleDefault() {
            this.temp = {
                page: 1,
                limit: 50,
                type: 1,
                language: 'en',
                time: 'Today',
                date: new Date().getFullYear() + '-' + (new Date().getMonth() + 1) + '-' + new Date().getDate(),
                importance: ['High', 'Middle', 'Low'],
                event: ['Financial Events', 'Economic Data'],
                zone: timeZone,
                country: cityOptions,
                filter: false
            }

            this.showFilter = false

            this.getEconomic()
        },
        formatWeekDay(date) {
            let nowDate = new Date(date)
            let getDay = nowDate.getDay()

            let week = {
                0: 'Sunday',
                1: 'Monday',
                2: 'Tuesday',
                3: 'Wednesday',
                4: 'Thursday',
                5: 'Friday',
                6: 'Saturday'
            }

            let month = {
                'Jan': 'January',
                'Feb': 'February',
                'Mar': 'March',
                'Apr': 'April',
                'May': 'May',
                'Jun': 'June',
                'Jul': 'July',
                'Aug': 'August',
                'Sept': 'September',
                'Oct': 'October',
                'Nov': 'November',
                'Dec': 'December'
            }

            return week[getDay] + ' ' + month[nowDate.toDateString().split(' ')[1]] + ' ' + nowDate.getDate() + ' ' + nowDate.getFullYear()
        },
        rowExpand(row, expandedRows) {
            if (expandedRows != '') {
                this.historyTemp.id = row.id
                this.historyTemp.url_id = row.url_id
                this.historyTemp.previous = row.previous
                this.historyTemp.reality = row.reality
                this.historyTemp.forecast = row.forecast
            }
        },
        getHistoryInfo() {
            this.historyLoading = true

            var _this = this

            $.ajax({
                url: "/controller/economicHistory.php",
                type: "POST",
                data: _this.historyTemp,
                dataType: "json",
                async: true,
                success: function (response) {
                    // var data = response.Content.data
                    // _this.historyData = data
                    // _this.historyTotal = response.Content.total
                    _this.historyLoading = false

                    if (response.chart.time && response.chart.time != '') {
                        var myChart = echarts.init(document.getElementById('historyCharts'))

                        var option = {
                            color: ['#5d83af'],
                            title: {
                                text: ''
                            },
                            tooltip: {
                                formatter: "{a} : <br\>{b} : {c}" + response.unit
                            },
                            legend: {
                                data: ['']
                            },
                            xAxis: {
                                data: response.chart.time
                            },
                            yAxis: {},
                            series: [{
                                name: 'Reality',
                                type: 'bar',
                                data: response.chart.data
                            }]
                        };

                        // 使用刚指定的配置项和数据显示图表。
                        myChart.setOption(option);
                    }
                }
            })
        },
        handleHistoryChange(page) {
            this.historyTemp.page = page
            this.getHistoryInfo()
        },
        handleShowCharts(row) {
            this.historyTemp.id = row.id
            this.historyTemp.url_id = row.url_id
            this.historyTemp.previous = row.previous
            this.historyTemp.reality = row.reality
            this.historyTemp.forecast = row.forecast

            this.historyTitle = row.title
            this.histotyDialog = true

            this.getHistoryInfo()
        },
        handleChangeWeek(type) {
            if (type == 'This week' && this.filterType != 1) {
                this.filterType = 1
                this.timeArray = getWeekDay('This week')
                this.temp.date = '' // new Date().getFullYear() + '-' + (new Date().getMonth() + 1) + '-' + new Date().getDate()
                this.temp.time = 'This week'

                this.getEconomic()
            } else if (type != 4) {
                this.filterType = type
                this.timeArray = getWeekDay(type)
                this.temp.time = type
                this.temp.date = ''

                this.getEconomic()
            }
        },
        handleChangeDate(date) {
            if (date != this.temp.date && !this.listLoading) {
                this.temp.date = date
                this.getEconomic()
            }
        },
        arraySpanMethod({ row, column, rowIndex, columnIndex }) {
            if (row.id == '--') {
                return [1, 3];
            }
        },
        setClassName({ row, index }) {
            // 通过自己的逻辑返回一个class或者空
            return row.expand ? '' : 'expand';
        }
    }
})
