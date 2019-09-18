<?php
    //包含Eloquent的初始化文件
    include './db.php';
    include './helpers.php';

    use Illuminate\Database\Capsule\Manager as DB;

    $data = $_POST;
    
    if (empty($data)) {
        return false;
    }

    if ($data ['language'] == 'cn') {
        $table = 'economic_calendar_cn as a';
    } else {
        $table = 'economic_calendar_en as a';
    }

    $List = DB::table($table)
        ->leftJoin('economic_history_overview_' . $data['language'] . ' as b', 'a.url_id', '=', 'b.url_id')
        ->where(function($query) use($data) {
            if ($data ['time'] == '今天' || $data ['time'] == 'Today') {
                $query->whereBetween('a.date', [date('Y-m-d') . ' 00:00:00', date('Y-m-d') . ' 23:59:59']);
            } else if ($data ['time'] == '明天' || $data ['time'] == 'Tomorrow') {
                $query->whereBetween(
                    'a.date', 
                    [
                        date('Y-m-d', strtotime('+1 day')) . ' 00:00:00', 
                        date('Y-m-d', strtotime('+1 day')) . ' 23:59:59'
                    ]);
            } else if ($data ['time'] == '这周' || $data ['time'] == 'This Week') {
                $query->whereBetween('a.date', [
                    date('Y-m-d', strtotime('this week monday')) . ' 00:00:00',
                    date('Y-m-d', strtotime(date('Y-m-d', strtotime("this week Sunday", time()))) + 24 * 3600 - 1) . ' 23:59:59'
                ]);
            } else if ($data ['time'] == '下周' || $data ['time'] == 'Next Week') {
                $query->whereBetween('a.date', [
                    date('Y-m-d', strtotime('next week monday', time())) . ' 00:00:00',
                    date('Y-m-d', strtotime(date('Y-m-d', strtotime("next week Sunday", time()))) + 24 * 3600 - 1) . ' 23:59:59'
                ]);
            }

            if (isset($data ['importance']) && $data ['importance'] != '') {
                $query->whereIn('a.importance', formatQuery($data['importance'], 1));
            }

            if (isset($data ['country']) && $data ['country'] != '') {
                $query->whereIn('a.country', formatQuery($data ['country'], 3));
            }

            if (isset($data ['event']) && $data ['event'] != '') {
                $query->whereIn('a.calendar_type', formatQuery($data['event'], 2));
            }
        })
        ->select([
            'a.id',
            'a.date',
            'a.previous',
            'a.unit',
            'a.importance',
            'a.country',
            'a.forecast',
            'a.reality',
            'a.title',
            'a.effect',
            'a.currency',
            'a.source',
            'a.url_id',
            'a.calendar_type',
            'b.title as hisory_title',
            'b.currency as history_currency',
            'b.country as history_country',
            'b.overview',
            'b.source_of_report',
            'b.source_of_report_link',
        ])
        ->orderBy('a.date', 'asc')
        ->get();

    echo json_encode(['Status' => 200, 'Content' => $List]);