<?php
    $host = 'http://192.168.0.211:8110/metatrader/v1/marketdata';

    $params = [
        'symbols' => $_GET ['symbols']
    ];

    $postData = json_encode($params, JSON_UNESCAPED_SLASHES);

    $getData = http_build_query($params);

    $header [] =  'Content-Type: application/json';
    array_push($header, 'accept: application/json');

    array_push($header, 'Authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJjbGllbnRfaWQiOiJwaHBjbGllbnQiLCJqdGkiOiIzN2VhODA1OWVjOWI1MzNmYzAyYTRkYWJhMzlmN2M5NCIsInVuaXF1ZV9uYW1lIjoiNjY2NiIsIm5iZiI6MTU2NTA1OTEyMiwiZXhwIjoxNTk2NjgxNTIyLCJpYXQiOjE1NjUwNTkxMjIsImlzcyI6IkFnbU1ldGFUcmFkZXJBcGkiLCJhdWQiOiJBZ21NZXRhVHJhZGVyQXBpIn0.b86VGJNO7M8252ZS_1aQgvdLBMoNFlTc6z-R8Ek2wCdy8YOk6ee4B2t6INYKhTVh74yqt3Ih8ONy0eaogGwTX7qyN6ov7i2WDd1Hxjw8WUbvAwuOhanmUNhSuG5b1-YInpxjnTBZBM6Xgdw1cFb51-TOxrFqP8keJKGsDQGa3tZNIZIAcCEZ-HIh-fkXw13u2lKAJfa8LblaRohmURPeJL6KxufoiRr_EuFXjUnE6yUcLCDkOm83DcajYahJkEvS-m1qhpNlPir57u5iV8ELr1ZNy3JPPT8XsoVIV5aU6lLmOgTpl33oXxPFOOUbh8iNGr90xrGjLMTRwf3OhWHjrw');
    
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
        $host = 'http://192.168.0.211:8110/metatrader/v1/charts';

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