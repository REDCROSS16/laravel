<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class BirthdaysController extends Controller
{
    public function birthday() : string
    {
        $simMatch = 0;
        $test = 100000;

        for ($i = 0; $i < $test; $i++) {
            $birthdays = $this->generateDates(23);
            $result = $this->getMatch($birthdays);
            $simMatch+= $result;
        }

        $resultat = $simMatch / $test * 100;
        $resultat = $resultat . '%';

        return view('birthday', [
            'result' => $resultat,
            'test' => $test,
        ]);
    }

    private function generateDates(int $count): array
    {
        $dates = [];
        # day 1 - 30
        # month 1 - 12
        $months = [
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December',
        ];

        for ($i = 0; $i < $count; $i++) {
            $rand = array_rand($months);
            $month = $months[$rand];
            $day = mt_rand( 1, 30 );
            $birthday = $day . ' ' . $month;
            $dates[] = $birthday;
        }

        return $dates;
    }

    private function getMatch($birthdays)
    {
        $res = array_count_values($birthdays);
        $dublicates = [];
        foreach ($res as $key => $value) {
            if ($value > 1) {
                $dublicates[] = [
                    'date' => $key,
                    'howmany' => $value
                ];
            }
        }
        return count($dublicates);
    }
}
