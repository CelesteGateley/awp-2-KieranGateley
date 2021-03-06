@extends('bases.container')

@section('title', 'Update Plugin')

@section('content')
    @include('parts.plugin.form', [
        'action' => route('edit_plugin', ['plugin' => $plugin]),
        'name' => $plugin->name,
        'description' => $plugin->description,
        'authors' => $plugin->authors,
        'website' => $plugin->website,
        'spigot_id' => $plugin->spigot_id,
        'dependencies' => $plugin->dependencies,
        'soft_dependencies' => $plugin->soft_dependencies,
    ])
@endsection
