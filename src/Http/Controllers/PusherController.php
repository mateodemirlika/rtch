<?php

namespace Mateo\Rtch\Http\Controllers;

use App\Events\PusherBroadcast;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class PusherController extends Controller
{
    public function index()
    {
        return view('rtch::index');
    }
    public function broadcast(Request $request)
    {
        broadcast(new PusherBroadcast($request->get('message')))->toOthers();
        return view('rtch::broadcast',['message' => $request->get('message')]);
    }
    public function receive(Request $request)
    {
        return view('rtch::receive',['message' => $request->get('message')]);
    }
}
