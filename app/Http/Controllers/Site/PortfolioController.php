<?php

namespace App\Http\Controllers\Site;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Type;


class PortfolioController extends Controller
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

    public function index(){

        $types = $this->type::all();
        $projects = $this->project::all();

        return view('site.portfolio', compact('projects', 'types'));
    }
}
