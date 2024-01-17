<?php

namespace App\Http\Controllers\server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalogue;
class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogues = Catalogue::get()->all();
        return view('server.catalogue.index')->with(compact('catalogues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('server.catalogue.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $catalogue = new Catalogue();
        $catalogue->name = $request->title;
        $catalogue->save();
        return redirect(route('catalogue.index'))->with('success','New Catalogue Create Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $catalogue = Catalogue::findorFail($id);
        return view('server.catalogue.edit')->with(compact('catalogue'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $catalogue = Catalogue::findorFail($id);
        $catalogue->name = $request->title;
        $catalogue->update();
        return redirect(route('catalogue.index'))->with('success','Catalogue Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function updateCatalogueStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            // echo "<pre>"; print_r($data);die;
            if ($data['status']== 'Active') {
                $status = 'Inactive';
            }
            else{
                $status = 'Active';
            }
            Catalogue::where('id',$data['catalogue_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'catalogue_id'=> $data['catalogue_id']]);
        }
    }
}
