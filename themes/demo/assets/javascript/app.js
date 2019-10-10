/*
 * Application
 */

$(document).tooltip({
    selector: "[data-toggle=tooltip]"
})

/*
 * Auto hide navbar
 */
jQuery(document).ready(function($){
    var $header = $('.navbar-autohide'),
        scrolling = false,
        previousTop = 0,
        currentTop = 0,
        scrollDelta = 10,
        scrollOffset = 150

    $(window).on('scroll', function(){
        if (!scrolling) {
            scrolling = true

            if (!window.requestAnimationFrame) {
                setTimeout(autoHideHeader, 250)
            }
            else {
                requestAnimationFrame(autoHideHeader)
            }
        }
    })

    function autoHideHeader() {
        var currentTop = $(window).scrollTop()

        // Scrolling up
        if (previousTop - currentTop > scrollDelta) {
            $header.removeClass('is-hidden')
        }
        else if (currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
            // Scrolling down
            $header.addClass('is-hidden')
        }

        previousTop = currentTop
        scrolling = false
    }

    // 显示当前时区时间
    var nowTime = new Date()

    var y = nowTime.getFullYear() //年
    var m = nowTime.getMonth() + 1 //月
    var d = nowTime.getDate() //日

    var zone = String(-new Date().getTimezoneOffset() / 60)

    if (zone > 0) {
        zone = '+' + zone
    } else {
        zone = '-' + zone
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
    
    nowTime = month[nowTime.toDateString().split(' ')[1]] + ' ' + d + ', ' + y + ' GMT' + zone

    $('#nowTimeZone').html('<i class="iconfont icon-shijian"></i> ' + nowTime)
});