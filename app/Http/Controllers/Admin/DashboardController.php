<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $adminCount = User::where('role', 'admin')->count();
        $newUsers = User::where('created_at', '>=', now()->subDays(7))->count();

        return view('admin.dashboard', compact('totalUsers', 'adminCount', 'newUsers'));
    }
}