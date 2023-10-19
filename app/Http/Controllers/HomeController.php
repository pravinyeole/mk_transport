<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle_type;
use App\Models\Material_weight;
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
        $Vehicle_type = Vehicle_type::get();
        $Material_weight = Material_weight::get();
        return view('home',compact('Vehicle_type','Material_weight'));
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
   
                            $btn = '<a href="/delete_type/'.$row->id.'/vehicle_type" class="edit btn btn-danger btn-sm">Delete</a>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('view_vehicle_type');
    }
    public function view_material_weight(Request $request)
    {
        if ($request->ajax()) {
            $data = Material_weight::get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                            $btn = '<a href="/delete_type/'.$row->id.'/material_weight" class="edit btn btn-danger btn-sm">Delete</a>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('view_material_weight');
    }
    public function submit_vehical_type(Request $request)
    {
        Vehicle_type::Create(['name'=>ucfirst(strtolower($request->name))]);
        return redirect()->back()->with('success', 'Vehical Type Add successfully.');  
    }

    public function submit_material_weight(Request $request)
    {
        Material_weight::Create(['name'=>ucfirst(strtolower($request->name))]);
        return redirect()->back()->with('success', 'Vehical Type Add successfully.');  
    }

    public function delete_type($id,$type)
    {
        if($type == 'material_weight')
        {
            Material_weight::where('id',$id)->delete();
        }
        else
        {
            Vehicle_type::where('id',$id)->delete();
        }
        return redirect()->back()->with('alert', 'Deleted successfully.');
    }
}
