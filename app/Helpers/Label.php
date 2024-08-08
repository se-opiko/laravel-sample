<?php

namespace App\Helpers;

class Label
{
    public static function getStatusLabel($status)
    {
        $statuses = [
            0 => '対応中',
            1 => '対応完了',
        ];

        return $statuses[$status] ?? '不明';
    }
}