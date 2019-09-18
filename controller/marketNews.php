<?php
    //包含Eloquent的初始化文件
    include './db.php';
    include './helpers.php';

    use Illuminate\Database\Capsule\Manager as DB;

    $data = $_POST;
    
    if (empty($data)) {
        return false;
    }

    $page = $data ['page'];
    $limit = $data ['limit'];

    $order = $data ['language'] == 'cn' ? 'publishDate' : 'outId';

    $table = DB::table('economic_news_' . $data ['language']);

    $total = $table
        ->where('status', 1)
        ->where(function ($query) use ($data) {
            if ($data ['language'] == 'cn') {
                $query->where('source', $data ['source']);
            }
        })
        ->count();

    $List = $table
        ->orderBy($order, 'desc')
        ->skip(($page - 1) * $limit)
        ->take($limit)
        ->get();

    echo json_encode(['Status' => 200, 'Content' => ['total' => $total, 'data' => $List]]);