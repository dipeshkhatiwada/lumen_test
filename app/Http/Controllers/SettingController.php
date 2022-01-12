<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Response;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param null $group
     * @return Response
     */
    public function fetch($group = null)
    {
        return Setting::where(function ($query) use ($group) {
            if ($group) {
                return $query->where('group', $group);
            }
        })->get();
    }
}
