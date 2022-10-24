<?php

namespace App\Http\Controllers;
use App\Models\Owner;
use App\Models\survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ShowsurveyRequest;
use App\Http\Requests\StoresurveyRequest;
use App\Http\Requests\UpdatesurveyRequest;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surveys = Survey::all();
 
        return view('surveys', ['surveys' => $surveys]);
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
     * @param  \App\Http\Requests\StoresurveyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {
        // dd($request);
        $survey = new survey;
        $request->validate([
            'survey_name' => ['required', 'string', 'max:255'],
            'survey_link' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string', 'max:255'],
            'edu_level' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
        ]);


        $survey->survey_name = $request->survey_name;
        $survey->survey_link = $request->survey_link;
        $survey->category = $request->category;
        $survey->age = $request->age;
        $survey->edu_level = $request->edu_level;
        $survey->city = $request->city;
        $survey->user_id = Auth::user()->id;
        $survey->save();
        return redirect('/');    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\survey  $survey
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $surveys = Survey::get();

        return view('surveys', ['surveys' => $surveys]);
    }


    public function showsurvey(Request $request, $id)

    {

        $survey= survey::find($id);

  return view('viewsurvey',['survey' => $survey]);
    }

    /**dd
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function getSurveys()
    {
        $SurveysArr =  Survey::all();
        return view('admin.surveys', ['SurveysArr' => $SurveysArr]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesurveyRequest  $request
     * @param  \App\Models\survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesurveyRequest $request, survey $survey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $survey = Survey::find($id);
        $survey->delete();
        return redirect('admin/surveys');
    }
}
