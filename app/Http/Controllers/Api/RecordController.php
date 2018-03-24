<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;


/**
 * Contains all the methods handling Record resource
 *
 * @Author Sudaraka Jayathilaka
 *
 * TODO Re-evaluate all the validations to enforce db integrity
 */

class RecordController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records=Record::all();

        $result=$records->toArray();

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
            $this->sendError($e->getMessage(),500);

        }

        DB::commit();
        return $this->sendData($record->toArray(),'Record created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $record=Record::where('id',$id)->first();

        if($record){
            return $this->sendData($record);

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
        $record=Record::where('id',$id)->first();

        if(!$record){
            return $this->sendError('Not Found');
        }

        DB::beginTransaction();

        try{
            $record->delete();

        }catch (Exception $e){
            DB::rollback();
            $this->sendError($e->getMessage(),500);


        }

        DB::commit();
        return $this->sendResponse('Record deleted successfully');
    }
}
