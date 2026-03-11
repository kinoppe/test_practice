<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Practice;
use App\Http\Requests\PracticeRequest;

class PracticeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(PracticeRequest $request)
    {
        $contact = $request->only(['last','first','gender','email','tel1','tel2','tel3','address','address2','select','content']);
        return view('confirm',compact('contact'));
    }

    public function store(PracticeRequest $request)
    {
        $contact = $request->only(['last','first','gender','email','tel1','tel2','tel3','address','address2','select','content']);
        $contact['tel']= $contact['tel1'].'-'.$contact['tel2'].'-'.$contact['tel3'];
        unset($contact['tel1'],$contact['tel2'],$contact['tel3']);
        Practice::create($contact);
        return view('thanks');
    }
}
