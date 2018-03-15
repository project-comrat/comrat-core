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

    /*
    |--------------------------------------------------------------------------
    | Train Methods
    |--------------------------------------------------------------------------
    |
    | Methods for handling functionality related to App/Train
    */

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
     * Get all trains.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_trains(){

        $trains=Train::all();
        if($trains->count()>0){
            $result=$trains->toArray();
        }else{
            $result='{}';
        }

        return $this->sendResponse($result);
    }

    /**
     * Get train.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_train($id){

        $train=Train::where(id,$id)->first();

        if($train->count()==1){
            return $this->sendResponse($train);

        }else{
            return $this->sendError('Not Found');

        }
    }

    /**
     * Delete train.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete_train($id){

        $train=Train::where(id,$id)->first();

        if(!$train){
            return $this->sendError('Not Found');
        }

        DB::beginTransaction();

        try{
            $train->delete();

        }catch (Exception $e){
            DB::rollback();
            return $e;
        }

        DB::commit();
        return $this->sendResponse('Train deleted successfully');
    }

    /*
    |--------------------------------------------------------------------------
    | Station Methods
    |--------------------------------------------------------------------------
    |
    | Methods for handling functionality related to App/Train
    */

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
     * Get all stations.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_stations(){

        $stations=Station::all();

        if($stations->count()>0){
            $result=$stations->toArray();
        }else{
            $result='{}';
        }

        return $this->sendResponse($result);
    }

    /**
     * Get station.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_station($id){

        $station=Station::where(id,$id)->first();
        if($station->count()==1){
            return $this->sendResponse($station);

        }else{
            return $this->sendError('Not Found');

        }
    }

    /**
     * Delete station.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete_station($id){

        $station=Station::where(id,$id)->first();

        if(!$station){
            return $this->sendError('Not Found');
        }

        DB::beginTransaction();

        try{
            $station->delete();

        }catch (Exception $e){
            DB::rollback();
            return $e;
        }

        DB::commit();
        return $this->sendResponse('Station deleted successfully');


    }

    /*
    |--------------------------------------------------------------------------
    | Record Methods
    |--------------------------------------------------------------------------
    |
    | Methods for handling functionality related to App/Record
    */

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

    /**
     * Get all records.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_records(){

        $records=Record::all();

        if($records->count()>0){
            $result=$records->toArray();
        }else{
            $result='{}';
        }

        return $this->sendResponse($result);
    }

    /**
     * Get record.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_record($id){

        $record=Record::where(id,$id)->first();

        if($record->count()==1){
            return $this->sendResponse($record);

        }else{
            return $this->sendError('Not Found');

        }
    }

    /**
     * Delete record.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete_record($id){

        $record=Record::where(id,$id)->first();

        if(!$record){
            return $this->sendError('Not Found');
        }

        DB::beginTransaction();

        try{
            $record->delete();

        }catch (Exception $e){
            DB::rollback();
            return $e;
        }

        DB::commit();
        return $this->sendResponse('Record deleted successfully');

    }
}
