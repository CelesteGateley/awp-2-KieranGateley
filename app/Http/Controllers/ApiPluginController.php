<?php

namespace App\Http\Controllers;

use App\Plugin;
use Illuminate\Http\Request;

class ApiPluginController extends Controller
{

    public function index() {
        return Plugin::all();
    }

    public function show($id) {
        return Plugin::find($id);
    }

    public function store(Request $request) {
        return Plugin::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'authors' => $request->input('authors'),
            'website' => $request->input('website'),
            'dependencies' => $request->input('dependencies'),
            'soft_dependencies' => $request->input('soft_dependencies'),
        ]);
    }

    public function update(Request $request, $id) {
        $plugin = Plugin::findOrFail($id);
        $plugin->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'authors' => $request->input('authors'),
            'website' => $request->input('website'),
            'dependencies' => $request->input('dependencies'),
            'soft_dependencies' => $request->input('soft_dependencies'),
        ]);

        return $plugin;
    }

    public function destroy($id) {
        $plugin = Plugin::findOrFail($id);
        $plugin->delete();

        return 204;
    }
}
