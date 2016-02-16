<?php namespace App\Http\Controllers\Crona;

use Alfredoem\Ragnarok\AuthRagnarok;
use Alfredoem\Ragnarok\SecUsers\SecUserSessions;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Crona\SecApps\SecApp;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function getIndex(Request $request)
    {
        $data = SecApp::wherestatus(1)->get();
        $user = AuthRagnarok::user();
        return  view('crona.dashboard.dashboard', compact('data', 'user'));
    }
}