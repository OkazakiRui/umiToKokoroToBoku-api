<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoregradeRequest;
use App\Http\Requests\UpdategradeRequest;
use App\Models\grade;

use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($request->food_flag)){
            $result = grade::when($request->gradeNumber, function ($query, $request) {
                return $query->where("gradeNumber", $request);
            })->when($request->classNumber, function ($query, $request) {
                return $query->where("classNumber", $request);
            })->when($request->program, function ($query, $request) {
                return $query->where("program", "like", "%$request%");
            })->when($request->food_flag, function ($query, $request) {
                return $query->where("food_flag", $request);
            }, function ($query, $request) {
                return $query->where("food_flag", $request);
            })->get();
        } else {
            $result = grade::when($request->gradeNumber, function ($query, $request) {
                return $query->where("gradeNumber", $request);
            })->when($request->classNumber, function ($query, $request) {
                return $query->where("classNumber", $request);
            })->when($request->program, function ($query, $request) {
                return $query->where("program", "like", "%$request%");
            })->get();
        }

        return $result;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoregradeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoregradeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(grade $grade)
    {
        if (isset($grade->get_equipment)) {
            return response()->json($grade->get_equipment, 200);
        }
        return response()->json([], 404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(grade $grade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategradeRequest  $request
     * @param  \App\Models\grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategradeRequest $request, grade $grade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(grade $grade)
    {
        //
    }
}
