<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle_type;
use DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function quotaion_view()
    {
        return view('quotation');
    }

    public function view_vehicle_type(Request $request)
    {
        if ($request->ajax()) {
            $data = Vehicle_type::get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('view_vehicle_type');
    }
    public function submit_vehical_type(Request $request)
    {
        
        Vehicle_type::Create(['name'=>ucfirst(strtolower($request->name))]);
        return redirect()->back()->with('success', 'Vehical Type Add successfully.');  
    }
}
