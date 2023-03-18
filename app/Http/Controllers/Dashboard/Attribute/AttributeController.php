<?php

namespace App\Http\Controllers\Dashboard\Attribute;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    public function index()
    {
        $attributes = Attribute::where('deleted_at', null)->get();
        return view('dashboard.attribute.main', ['attributes' => $attributes]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);

        try {
            if($request->has('id')){
                Attribute::find($request->id)->update($request->all());
                toast('Attribute Updated', 'success');
            }else{
                Attribute::create($request->all());
                toast('Attribute Added', 'success');
            }
        } catch (\Throwable $th) {
            toast($th->getMessage(), 'warning');
        }

        return redirect()->back();
    }

    public function delete($id)
    {
        try {
            Attribute::find($id)->delete();
            toast('Attribute Deleted', 'success');
        } catch (\Throwable $th) {
            toast($th->getMessage(), 'warning');
        }
        return redirect()->back();
    }
    
}
