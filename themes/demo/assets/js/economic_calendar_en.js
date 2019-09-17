const cityOptions = ['China', 'United States', 'Japan', 'Britain', 'Switzerland', 'Germany', 'Spain', 'Canada', 'New Zealand',
    'France', 'Australia', 'Italy', 'Euro Zone', 'Singapore', 'Greece', 'Portugal', 'Brazil', 'Norway', 'India', 'Sweden', 'Hong Kong',
    'Ireland', 'Finland', 'South Afric', 'Belgium', 'United Kingdom']

// var href = location.href;
// var search = href.substr(href.indexOf("?") + 1);

// arr = search.split("&");
// var params = [];

// for (var i = 0; i < arr.length; i++) {
//     num = arr[i].indexOf("=");
//     if (num > 0) {
//         name = arr[i].substring(0, num);
//         value = arr[i].substr(num + 1);
//         params[name] = value;
//     }
// }

// let language = params.language == undefined ? 'cn' : params.language != 'en' && params.language != 'cn' ? 'cn' : params.language

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
                time: 'Today',
                importance: ['High', 'Middle', 'Low'],
                event: ['Financial Events', 'Economic Data'],
                zone: '8',
                country: cityOptions
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
                language: 'en'
            }
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
                url: "./controller/economic.php",
                type: "POST",
                data: _this.temp,
                dataType: "json",
                async: true,
                success: function (response) {
                    var data = response.Content.data
                    data.forEach(function (item, key) {
                        item.date = item.date.replace(/\-/g, '/')
                    })

                    _this.tableData = data
                    _this.total = response.Content.total
                    _this.listLoading = false
                }
            })
        },
        handleCurrentChange(currentPage) {
            this.temp.page = currentPage
            this.getEconomic()
        },
        handleCheckAllChange(val) {
            this.temp.country = val ? cityOptions : [];
            this.isIndeterminate = false

            this.getEconomic()
        },
        handleChange(type) {
            if (type == 3) {
                let data = this.tableData
                for (let i = 0; i < data.length; i++) {
                    let pubTime = new Date(data[i]['date'])
                    pubTime = new Date(pubTime.valueOf() + this.temp.zone * 60 * 60 * 1000)

                    data[i]['date'] = pubTime.getFullYear() + '-' + (pubTime.getMonth() + 1) + '-' + pubTime.getDate() + ' '
                        + this.zeroPadding(pubTime.getHours(), 2) + ':' + this.zeroPadding(pubTime.getMinutes(), 2) + ':' + this.zeroPadding(pubTime.getSeconds(), 2)
                }
            } else {
                this.getEconomic()
            }
        },
        handleCountryChange(value) {
            let checkedCount = value.length
            this.checkAll = checkedCount === this.cities.length;
            this.isIndeterminate = checkedCount > 0 && checkedCount < this.cities.length;

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
                importance: ['High', 'Middle', 'Low'],
                event: ['Financial Events', 'Economic Data'],
                zone: '0',
                country: cityOptions
            }

            this.getEconomic()
        },
        formatWeekDay(date) {
            var date = new Date(date)
            date = date.getDay()

            var week = {
                0: 'Sunday',
                1: 'Monday',
                2: 'Tuesday',
                3: 'Wednesday',
                4: 'Thursday',
                5: 'Friday',
                6: 'Saturday'
            }

            return week[date]
        },
        rowExpand(row, expandedRows) {
            this.historyTemp.id = row.id
            this.historyTemp.url_id = row.url_id

            this.getHistoryInfo()
        },
        getHistoryInfo() {
            this.historyLoading = true

            var _this = this

            $.ajax({
                url: "./controller/economicHistory.php",
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
                        var myChart = echarts.init(document.getElementById(`charts-${_this.historyTemp.id}`))

                        var option = {
                            color: ['#5d83af'],
                            title: {
                                text: ''
                            },
                            tooltip: {
                                formatter: "{a} : <br\>{b} : {c}%"
                            },
                            legend: {
                                data: ['']
                            },
                            xAxis: {
                                data: response.chart.time
                            },
                            yAxis: {},
                            series: [{
                                name: '今值',
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
        }
    }
})