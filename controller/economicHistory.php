<?php
    $host = 'http://arena.com/api/v1/getNewsHistory';

    $params = $_POST;
    $postData = json_encode($params, JSON_UNESCAPED_SLASHES);

    $getData = http_build_query($params);

    $header [] =  'Content-Type: application/json';
    array_push($header, 'accept: application/json');

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

    echo json_encode(json_decode($outPut, true));