function selectText() {
    var iframeText = document.getElementById("iframeText");
    iframeText.select();
}

function changeFrameHeight() {
    var ifm = document.getElementById('jcFrame');
    ifm.height = document.documentElement.scrollHeight
}
