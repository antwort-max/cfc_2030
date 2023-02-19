<?php

namespace App\Http\Controllers\Random;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DateController extends Controller
{
     public function today($type = 'sql')
     {
          if ($type == 'human')   { $date = Carbon::now()->format('d/m/Y'); }
          if ($type == 'sql')     { $date = Carbon::now()->format('Y/m/d'); }
          if ($type == 'large')   { $date = Carbon::now()->format('d/m/Y H:m'); }
          return $date;
     }

     public function startofMounth($type = 'sql')
     {
          if ($type == 'human')   { $date = Carbon::now()->startOfMonth()->toDateString()->format('d/m/Y'); }
          if ($type == 'sql')     { $date = Carbon::now()->startOfMonth()->toDateString(); }
          return $date;
     }

     public function endofMounth($type = 'sql')
     {
          if ($type == 'human')   { $date = Carbon::now()->endOfMonth()->subMonth()->toDateString()->format('d/m/Y'); }
          if ($type == 'sql')     { $date = Carbon::now()->endOfMonth()->subMonth()->toDateString(); }
          return $date;
     }

     public function todayLastYear($type = 'sql')
     {
          if ($type == 'human')   { $date = Carbon::now()->subYear(1)->format('d/m/Y'); }
          if ($type == 'sql')     { $date = Carbon::now()->subYear(1)->format('Y/m/d'); }
          return $date;
     }

     public function startofMounthLastYear($type = 'sql')
     {
          if ($type == 'human')   { $date = Carbon::now()->subYear(1)->startOfMonth()->toDateString()->format('d/m/Y'); }
          if ($type == 'sql')     { $date = Carbon::now()->subYear(1)->startOfMonth()->toDateString(); }
          return $date;
     }

     public function endofMounthLastYear($type = 'sql')
     {
          if ($type == 'human')   { $date = Carbon::now()->subYear(1)->endOfMonth()->toDateString()->format('d/m/Y'); }
          if ($type == 'sql')     { $date = Carbon::now()->subYear(1)->endOfMonth()->toDateString(); }
          return $date;
     }

     public function start($date)
     {
          if ($date == "") { $date = Carbon::now()->format('Y/m/d'); } 
          return $date;
     }

     public function finish($date)
     {
          if ($date == "") { $date = Carbon::now()->format('Y/m/d'); } 
          return $date;
     }

     public function human($date)
     {
          return Carbon::parse($date)->format('d/m/Y');
     }

     public function sql($date)
     {
          return Carbon::parse($date)->format('Y/m/d');
     }

}
