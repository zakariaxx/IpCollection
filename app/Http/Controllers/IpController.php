<?php

namespace App\Http\Controllers;

use App\Models\Visits;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IpController extends Controller
{
    public function getUserIp(Request $request){
        $visit = new Visits();
        $visit->ip=$request->ip();
        $visit->Datetime=Carbon::now()->format('Y-d-m H:i:s');
        $visit->save();
       return redirect('ip');
    }

    public function index()
    {
        $visits=Visits::all();
        return view('visitsIp',compact('visits'));
    }
}
