<?php

namespace App\Http\Controllers;
use App\Models\Status;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use\Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EchartController extends Controller
{
	public function echart()
	{
		$data['pieChart'] = Status::select(\DB::raw("COUNT(*) as count"), \DB::raw("STATUS(status) as status"))
		->whereStatus('status')
		// ->groupBy('status')
		// ->orderBy('count')
		->get();
	}
	
}
