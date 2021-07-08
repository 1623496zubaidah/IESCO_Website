<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Improjects;
use App\Project;
use Illuminate\Http\Request;

class ImprojectsController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:project-list|scholarship-create|project-edit|project-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:project-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:project-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:project-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $projects = Project::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.implementedProjects.index')->with('projects', $projects);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Improjects  $improjects
     * @return \Illuminate\Http\Response
     */
    public function show(Improjects $improjects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Improjects  $improjects
     * @return \Illuminate\Http\Response
     */
    public function edit(Improjects $improjects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Improjects  $improjects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Improjects $improjects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Improjects  $improjects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Improjects $improjects)
    {
        //
    }
}
