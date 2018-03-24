<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Station;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


/**
 * Contains all the methods handling Station resource
 *
 * @Author Sudaraka Jayathilaka
 *
 * TODO Re-evaluate all the validations to enforce db integrity
 */

class StationController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations=Station::all();
        $result=$stations->toArray();

        return $this->sendData($result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'location'=>'required',
            'type' => 'required',
            'code' => 'required',
        ]);

        DB::beginTransaction();

        try{
            $station=new Station($request->all());
            $station->save();
        }catch (Exception $e){
            DB::rollback();
            $this->sendError($e->getMessage(),500);

        }

        DB::commit();
        return $this->sendData($station->toArray(),'Station created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $station=Station::where('id',$id)->first();
        if($station){
            return $this->sendData($station);

        }else{
            return $this->sendError('Not Found');

        }
    }

    /**
     * NOTE : This won't be needed for the first phase
     *
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $station=Station::where('id',$id)->first();

        if(!$station){
            return $this->sendError('Not Found');
        }

        DB::beginTransaction();

        try{
            $station->delete();

        }catch (Exception $e){
            DB::rollback();
            $this->sendError($e->getMessage(),500);

        }

        DB::commit();
        return $this->sendResponse('Station deleted successfully');
    }
}
