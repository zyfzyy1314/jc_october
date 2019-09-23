$(function () {
    var newsData = '',
        date = new Date(),
        limit = 50,
        page = 1;

    date = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate();

    function getNewsInfo() {
        $('#loading').css('display', 'inline');

        $.ajax({
            url: "/controller/marketNews.php",
            type: "POST",
            data: {
                date: date,
                limit: limit,
                page: page,
                type: 0,
                source: 'fx678',
                language: 'cn'
            },
            dataType: "json",
            async: true,
            success: function (result) {
                if (result['Status'] == 200) {
                    newsData = result.Content.data;
                    var htmlInfo = '';

                    for (var i = 0; i < newsData.length; i++) {
                        var color = '';
                        if (newsData[i]['fontColor'] == 0 && newsData[i]['fontColor'] != null) {
                            color = 'style="color: #48a047;"';
                        }

                        htmlInfo += '<li class="timeBox">' +
                            // '<i class="icon-password timeIcon gold"></i>' +
                            '<span class="time"' + color + '>' + newsData[i]['createDt'].split(' ')[1] + '</span>' +
                            '<div class="text"' + color + '>' + newsData[i]['content'] + '</div>' +
                            '</li>';
                    }

                    $('#loading').css('display', 'none');

                    $('.dateBox').append(htmlInfo);
                }
            }
        })
    }

    $('#loadMore').on('click', function () {
        page++;

        getNewsInfo()
    })

    getNewsInfo()
})