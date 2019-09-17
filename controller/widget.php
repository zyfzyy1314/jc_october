<?php
    $host = 'http://47.100.162.172:8089/metatrader/v1/marketdata';

    $params = [
        'symbols' => $_GET ['symbols']
    ];

    $postData = json_encode($params, JSON_UNESCAPED_SLASHES);

    $getData = http_build_query($params);

    $header [] =  'Content-Type: application/json';
    array_push($header, 'accept: application/json');

    array_push($header, 'Authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJjbGllbnRfaWQiOiJwaHBjbGllbnQiLCJqdGkiOiJiYWRhNGQzMzg3ZGZiOGVlNmQ5YTIwODQ5MDJhYmE2OSIsInVuaXF1ZV9uYW1lIjoiMTEwOSIsIm5iZiI6MTU2Mzc4NDc0MSwiZXhwIjoxODc5NDAzOTQxLCJpYXQiOjE1NjM3ODQ3NDEsImlzcyI6IkFnbU1ldGFUcmFkZXJBcGkiLCJhdWQiOiJBZ21NZXRhVHJhZGVyQXBpIn0.D94ApwoT-CM5QiXQU57_dX3vhedyYUsdjAWwrd38i3eWGLAUDoPBkYCEDt23rm0ovuwwjnBOA6KRS5LgvOiuJemwk9u1JAlRi241tiYFMfocLBM95KUxbWtSdz9sLvuRxxR3KPzRed-C14jlsGcaZpF9wRiQScv8kkrRiBgN51TdkLYNUGUWhADoOUYcCErXO5HvLFHBcLTkiW_74kSq3ze2dQzBwEEWo4pbNMrS2PrI2fRH5YdGrzqXF9P768oneb4JOVoUb30CD-DqapQxQsNPxT6iGen-pfuPiIXQBiEZHnhtTzkM4kTekE6zFmBd_BUocd9kLWHDKYqng5TFfA');
    
    $method = $_SERVER ['REQUEST_METHOD'];
    
    $ch = curl_init();

    curl_setopt_array($ch, array(
        CURLOPT_URL => $method == 'GET' ? ($host . '?' . $getData) : $host,
        CURLOPT_RETURNTRANSFER => 1, //设定返回字符串
        CURLOPT_HEADER => 0, //不返回头部信息
        CURLOPT_CONNECTTIMEOUT => 60, //超时时间
    ));

    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

    if ($method == 'POST') {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    }

    if (stristr($host, 'https://')) {
        //跳过SSL验证
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, '0');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, '0');
    }

    // 处理返回信息
    $outPut = curl_exec($ch);

    // 关闭请求
    curl_close($ch);

    $data ['data'] = json_decode($outPut, true)['data'];

    if ($_GET ['type'] == 1) { // 查询历史开盘价
        $host = 'http://47.100.162.172:8089/metatrader/v1/charts';

        $weekDay = date("w");

        if ($weekDay > 6 || $weekDay == 1) {
            $friday = strtotime('last Friday');
            $from = strtotime(date('Y-m-d', $friday));
            $to = strtotime(date('Y-m-d', $friday + 86400));
        } else {
            $from = strtotime(date('Y-m-d', strtotime('-1 day')));
            $to = strtotime(date('Y-m-d', time()));
        }

        $params = [
            'symbols' => $_GET ['symbols'],
            'from' => $from,
            'to' => $to
        ];

        $getData = http_build_query($params);

        $ch = curl_init();

        curl_setopt_array($ch, array(
            CURLOPT_URL => $method == 'GET' ? ($host . '?' . $getData) : $host,
            CURLOPT_RETURNTRANSFER => 1, //设定返回字符串
            CURLOPT_HEADER => 0, //不返回头部信息
            CURLOPT_CONNECTTIMEOUT => 60, //超时时间
        ));

        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

        if ($method == 'POST') {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        }

        if (stristr($host, 'https://')) {
            //跳过SSL验证
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, '0');
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, '0');
        }

        // 处理返回信息
        $outPut = curl_exec($ch);

        // 关闭请求
        curl_close($ch);

        $closeInfo = json_decode($outPut, true)['data'];
        $close = [];

        foreach($closeInfo as $key => $value) {
            $symbol = str_replace(['(', ')', '+'], ['', '', ''], $value ['symbol']);
            $close [$symbol] = $value;
        }

        $data ['close'] = $close;
    }

    echo json_encode($data);