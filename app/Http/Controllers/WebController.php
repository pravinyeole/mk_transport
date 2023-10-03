<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qoute;

class WebController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function qoute(Request $request)
    {
       $data['company_name'] = $request->company_name;
       $data['name'] = $request->name; 
       $data['email'] = $request->email;
       $data['mobile_number'] = $request->mobile_number;
       $data['to_location'] = $request->to_location;
       $data['from_location'] = $request->from_location;
       $data['desc'] = $request->desc;
       $res = Qoute::create($data);
       return redirect()->back()->with('message',"Thank you for sending in your quotation. We’ll be in touch");
    }
}
