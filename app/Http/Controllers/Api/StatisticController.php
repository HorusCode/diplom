<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatisticController extends Controller
{
    public function statistic(Request $request)
    {
        $statisticService = new StatisticService();
    }
}
