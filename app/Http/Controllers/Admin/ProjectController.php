<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreProject;
use App\Http\Requests\Admin\UpdateProject;
use App\Models\Admin\Project;
use App\Models\Client;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    private $project;
    private $client;
    private $type;

    public function __construct(Project $project, Client $client, Type $type)
    {
        $this->project  = $project;
        $this->client   = $client;
        $this->type     = $type;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = $this->project::with('client', 'type')->get();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = $this->type::all()->pluck('name', 'id');
        $clients = $this->client::all()->pluck('name', 'id');
        return view('admin.projects.create', compact(['project', 'types', 'clients']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProject $request)
    {
        $this->project = new Project($request->all());
        $this->project->save();
        return redirect(route('admin.projects.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $types = $this->type::all()->pluck('name', 'id');
        $clients = $this->client::all()->pluck('name', 'id');

        $project->load(['type', 'client']);
        return view('admin.projects.edit', compact(['project', 'types', 'clients']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProject $request, Project $project)
    {
        $project->fill($request->all())->save();
        return redirect(route('admin.projects.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect(route('admin.projects.index'));
    }
}
