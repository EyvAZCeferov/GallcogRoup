<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Session;

class DashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data = Settings::where('active', 1)->orderBy('order', 'ASC')->get();
            return view('welcome', compact('data'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $lang
     * @return \Illuminate\Http\Response
     */
    public function changelanguage($lang)
    {
        try {
            session(['my_locale' => $lang]);

            return redirect()->back();
        } catch (\Exception $e) {
            dd($e->getMessage());
            return response($e->getMessage());
        }
    }
}
