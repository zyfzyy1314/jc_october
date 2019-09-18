<?php
    function formatQuery($data, $type) {
        if (!$type) {
            return false;
        }

        if ($type == 1) { // 重要性
            $arr = [];
            $importantArr = [
                '高' => 3,
                '中' => 2,
                '低' => 1,
                'High' => 3,
                'Middle' => 2,
                'Low' => 1,
            ];

            foreach($data as $key => $value) {
                $arr[] = $importantArr[$value];
            }

            return $arr;
        } else if ($type == 2) { // 事件类型
            $arr = [];
            $calendarType = [
                '财经事件' => 2,
                '财经数据' => 1,
                'Financial Events' => 2,
                'Economic Data' => 1,
            ];

            foreach($data as $key => $value) {
                $arr[] = $calendarType[$value];
            }

            return $arr;
        } else if ($type == 3) { // 国家
            foreach($data as $key => $value) {
                if ($value == 'European Union') {
                    $data [$key] = 'Europe';
                }
            }
            
            return $data;
        }
    }

    function object2array(&$object)
    {
        $object = json_decode(json_encode($object), true);
        return $object;
    }