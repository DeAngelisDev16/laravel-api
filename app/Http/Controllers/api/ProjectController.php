<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;


class ProjectController extends Controller
{
    //
    public function index()
    {
        $projects = Project::with('type')->paginate(5);
        return response()->json([
            'success' => true,
            'results' => $projects

        ]);
    }

    public function show(Project $project)
    {

        return response()->json([
            'success' => true,
            'results' => $project

        ]);
    }
}
