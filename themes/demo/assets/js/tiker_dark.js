
$(function () {
    var href = location.href;
    var search = href.substr(href.indexOf("?") + 1);

    arr = search.split("&");
    var params = [];

    for (var i = 0; i < arr.length; i++) {
        num = arr[i].indexOf("=");
        if (num > 0) {
            name = arr[i].substring(0, num);
            value = arr[i].substr(num + 1);
            params[name] = value;
        }
    }

    var SymbolData = '',
        widgetTimes = 0,
        closeData = [];

    var data = [],
        symbolList = 'USDJPY,GBPUSD,USDCHF,CADCHF,USDCAD,GBPCHF,EURNZD,EURAUD,AUDUSD';

    $.ajax({
        url: "/controller/widget.php",
        type: "GET",
        data: "symbols=" + symbolList + "&type=1",
        dataType: "json",
        success: function (result) {
            if (result) {
                var widgetHtml = '',
                    data = result['data'];

                closeData = result['close'];

                for (var i = 0; i < data.length; i++) {
                    var symbol = data[i]['symbol'].replace(/\(|\)|\+/g, ''),
                        historyFloat = 0;

                    historyFloat = parseFloat((data[i]['bid'] - closeData[symbol]['close']) / closeData[symbol]['close'] * 100).toFixed(2);

                    data[i]['historyFloat'] = historyFloat;

                    widgetHtml += '<li>' +
                        '<div class="marquee">' +
                        '<span class="bold">' + data[i]['symbol'] + '</span>' +
                        '<span class="' + symbol + 'ask padding-span">' + parseFloat(data[i]['bid']).toFixed(data[i]['digits']) + '</span>' +
                        '<i class="' + symbol + 'arrow arrowIconUp"></i>' +
                        '<span class="' + symbol + 'bid">' + historyFloat + '%</span>' +
                        '</div>' +
                        '</li>';
                }

                SymbolData = data;

                widgetTimes = Math.ceil(document.body.clientWidth / 220 / symbolList.split(',').length);

                for (var i = 0; i < widgetTimes; i++) {
                    widgetHtml += widgetHtml;
                }

                document.getElementById('widgetContainer').innerHTML = widgetHtml

                $("#container").kxbdMarquee({
                    direction: "left",
                    loop: 0
                });
            }
        }
    })

    setInterval(function () {
        $.ajax({
            url: "./controller/widget.php",
            type: "GET",
            data: "symbols=" + symbolList + "&type=2",
            dataType: "json",
            async: true,
            success: function (result) {
                if (result) {
                    var data = result.data

                    for (var i = 0; i < data.length; i++) {
                        var symbol = data[i]['symbol'].replace(/\(|\)|\+/g, '');

                        historyFloat = parseFloat((data[i]['bid'] - closeData[symbol]['close']) / closeData[symbol]['close'] * 100).toFixed(2);

                        data[i]['historyFloat'] = historyFloat;

                        $('.' + symbol + 'ask').html(parseFloat(data[i]['bid']).toFixed(data[i]['digits']));
                        $('.' + symbol + 'bid').html(historyFloat + '%')

                        if (data[i]['bid'] > SymbolData[i]['bid']) {
                            $('.' + symbol + 'ask').addClass('back-green')
                        } else if (data[i]['bid'] < SymbolData[i]['bid']) {
                            $('.' + symbol + 'ask').addClass('back-red')
                        }

                        if (historyFloat < SymbolData[i]['historyFloat']) {
                            $("." + symbol + 'arrow').addClass("arrowIconDown")
                            $("." + symbol + 'arrow').removeClass("arrowIconUp")
                        } else {
                            $("." + symbol + 'arrow').addClass("arrowIconUp")
                            $("." + symbol + 'arrow').removeClass("arrowIconDown")
                        }
                    }

                    SymbolData = data

                    setTimeout(function () {
                        $('.padding-span').removeClass("back-green")
                        $('.padding-span').removeClass("back-red")
                    }, 600)
                }
            }
        })
    }, 2000);
});