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
                language: 'en'
            },
            dataType: "json",
            async: true,
            success: function (result) {
                if (result['Status'] == 200) {
                    newsData = result.Content.data;
                    var htmlInfo = '';

                    for (var i = 0; i < newsData.length; i++) {
                        var author = newsData[i]['author'] == '' ? newsData[i]['source'] : newsData[i]['author'];

                        htmlInfo += '<li class="newsEn">' +
                            // '<i class="icon-password timeIcon gold"></i>' +
                            // '<span class="time"' + color + '>' + newsData[i]['createDt'].split(' ')[1] + '</span>' +
                            '<div class="text">' +
                            '<a class="title-en" target="_blank" href="' + newsData[i]['source_url'] + '">' +
                            '<span>' + newsData[i]['title'] + '</span>' +
                            '</a><br>' +
                            '<span class="author-en">By ' + author + ' - ' + newsData[i]['time_show'] + '</span><br>' +
                            '<a class="content-en" target="_blank" href="' + newsData[i]['source_url'] + '">' +
                            '<span>' + newsData[i]['content'] + '</span>' +
                            '</a>' +
                            '</div>' +
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