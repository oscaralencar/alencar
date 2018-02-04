<?php

namespace App\Http\Controllers\Site;

use App\Models\MailingList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MailingListController extends Controller
{
    private $mailingList;

    public function __construct(MailingList $mailingList)
    {
        $this->mailingList = $mailingList;
    }

    public function cadastrar(Request $request)
    {
        $res = $this->mailingList->create($request->all());
        return $res;
    }
}
