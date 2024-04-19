<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function index() {
        $activities = Activity::all();
        dd($activities);  // This will dump the array of activities and stop execution
        return view('activities', compact('activities'));
    } 

    public function store(Request $request) {
        Activity::create($request->all());
        return back();
    }

    public function update(Request $request, Activity $activity) {
        $activity->update($request->all());
        return back();
    }

    public function destroy(Activity $activity) {
        $activity->delete();
        return back();
    }

    
}
