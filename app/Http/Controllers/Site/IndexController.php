<?php

namespace App\Http\Controllers\Site;

use App\Models\Admin\Project;
use App\Models\Client;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class IndexController extends Controller
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

    public function index()
    {
        $types = $this->type::all();
        $projects = $this->project::all();

        return view('site.index', compact(['types', 'projects']));
    }
}
