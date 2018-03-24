<?php

namespace App\Http\Controllers\Api;


use Exception;
use App\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

/**
 * Contains all the methods handling Train resource
 *
 * @Author Sudaraka Jayathilaka
 *
 * TODO Re-evaluate all the validations to enforce db integrity
 */

class TrainController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trains=Train::all();
        $result=$trains->toArray();

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
        DB::beginTransaction();

        try{
            $train=new Train($request->all());
            $train->save();
        }catch (Exception $e){
            DB::rollback();
            $this->sendError($e->getMessage(),500);
        }

        DB::commit();
        return $this->sendData($train->toArray(),'Train created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $train=Train::where('id',$id)->first();

        if($train){
            return $this->sendData($train);

        }else{
            return $this->sendError('Not Found');

        }
    }

    /**
     *  NOTE : This won't be needed for the first phase
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
        $train=Train::where('id',$id)->first();

        if(!$train){
            return $this->sendError('Not Found');
        }

        DB::beginTransaction();

        try{
            $train->delete();

        }catch (Exception $e){
            DB::rollback();
            $this->sendError($e->getMessage(),500);
        }

        DB::commit();
        return $this->sendResponse('Train deleted successfully');
    }
}
