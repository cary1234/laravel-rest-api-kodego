<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //outputs all customerorder by ID
        $attendances = Attendance::select('*')
            ->get();
        //  \Log::info($attendance);


        // $attendances = Attendance::findOrFail($id)
        //     ->where('employee_id_pk', $id)
        //     ->get();

        return response()->json($attendances);
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create new data on attendance table
        $attendance = new Attendance;
        $attendance->employee_id_pk = $request->employee_id_pk;
        $attendance->real_location = $request->real_location;
        $attendance->site_location = $request->site_location;
        $attendance->type = $request->type;
        $attendance->remarks = $request->remarks;
        $attendance->save();
        // \Log::info($attendance);
        return response()->json($attendance);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //gets the id only for update or delete purposes
        $attendance = Attendance::findOrFail($id);
        // \Log::info($attendance);
        return response()->json($attendance);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //gets the primary and triggers the update command
        $attendance = Attendance::findOrFail($id);
        $attendance->employee_id_pk = $request->employee_id_pk;
        $attendance->real_location = $request->real_location;
        $attendance->site_location = $request->site_location;
        $attendance->type = $request->type;
        $attendance->remarks = $request->remarks;
        $attendance->save();
        // \Log::info($attendance);
        return response()->json($attendance);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //gets the primary and triggers the delete command
        $attendance = Attendance::findOrFail($id);
        $attendance->delete();
        // \Log::info($attendance);
        return response()->json($attendance);
    }
}
