<?php namespace App\Http\Controllers\Ragnarok;

use Alfredoem\Ragnarok\SecUsers\SecUserSessions;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ragnarok\SecApps\SecApp;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function getIndex(Request $request)
    {
        $data = SecApp::wherestatus(1)->get();
        $user = auth()->user();
        $sessionCode = SecUserSessions::limit(1)->whereuserid($user->userId)->orderBy('userId', 'DESC')->get()[0]->sessionCode;
        Auth::logout();
        return  view('ragnarok.dashboard.dashboard', compact('data', 'user', 'sessionCode'));
    }
}