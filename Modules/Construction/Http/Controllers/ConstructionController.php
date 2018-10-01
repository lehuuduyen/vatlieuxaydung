<?php

namespace Modules\Construction\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Construction\Entities\Construction;

class ConstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function anyData(Request $request)
    {
        $data= Construction::select();



        $data= $data->get();
        return \DataTables::of($data)
            ->addColumn('tag', function ($dat) {
                $favorite_id= CustomerDetailFavorite::where('customer_id',$dat['id'])->pluck('favorite_id')->toArray();
                $favorite=Favorite::whereIn('id',$favorite_id)->pluck('name')->toArray();

                return $favorite;
            })
            ->addColumn('color', function ($dat) {

                return  \Setting::get($dat['office_location']);

            })
            ->addColumn('gender_color', function ($dat) {
                if($dat['gender']==1){
                    return  '#0191D8';
                }
                return  '#BC1F4A';


            })
            ->addColumn('topzone', function ($dat) {
                $static=new StatiticController();


                return   implode(",",$static->topZone_customer($dat->person_id)) ;
            })
            ->rawColumns([
                'image',
                'action',
            ])
            ->make(TRUE);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('construction::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('construction::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('construction::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
