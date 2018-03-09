<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Record;
use App\Station;
use App\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Contains all the methods handling admin functions
 *
 * @Author Sudaraka Jayathilaka
 *
 * TODO Re-evaluate all the validations to enforce db integrity
 */

class AdminController extends ApiController
{
    /**
     * Store a newly created train.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create_train(Request $request){

        $this->validate($request, [
            'number' => 'required',
            'type' => 'required',
            'frequency' => 'required',
        ]);

        DB::beginTransaction();

        try{
            $train=new Train($request->all());
            $train->save();
        }catch (Exception $e){
            DB::rollback();
            return $e;
        }

        DB::commit();


        return $this->sendResponse($train->toArray(),'Train created successfully');
    }

    /**
     * Store a newly created station.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create_station(Request $request){

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
            return $e;
        }

        DB::commit();

        return $this->sendResponse($station->toArray(),'Station created successfully');
    }


    /**
     * Store a newly created record.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create_record(Request $request){

        $this->validate($request, [
            'station_id' => 'required|exists:stations,id',
            'train_id'=>'required|exists:trains,id',
            'arrival' => 'required',
            'departure' => 'required',
        ]);

        DB::beginTransaction();

        try{
            $record=new Record($request->all());
            $record->save();

        }catch (Exception $e){
            DB::rollback();
            return $e;
        }

        DB::commit();

        return $this->sendResponse($record->toArray(),'Record created successfully');
    }
}
