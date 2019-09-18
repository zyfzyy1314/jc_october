<?php
    //包含Eloquent的初始化文件
    include './db.php';
    include './helpers.php';

    use Illuminate\Database\Capsule\Manager as DB;

    $data = $_POST;
    
    if (empty($data)) {
        return false;
    }

    $chart = DB::table('economic_history_data')
        ->where('url_id', $data['url_id'])
        ->orderBy('date', 'asc')
        ->groupBy(DB::raw('left(date, 10)'))
        ->get([
            'id',
            'date_str',
            'reality',
            'date',
            'date_mark'
        ]);

    $chartList = [];

    if ($chart) {
        $chart = object2array($chart);

        $chartsTime = [];
        $chartsData = [];

        foreach($chart as $key => $value) {
            $chartsTime [$key] = substr($value ['date'], 0, 10);
            $chartsData [$key] = preg_replace( '/[^0-9\-. ]/i', '', $value['reality']);
        }

        $chartList ['time'] = $chartsTime;
        $chartList ['data'] = $chartsData;
    }

    echo json_encode(['Status' => 200, 'chart' => $chartList]);