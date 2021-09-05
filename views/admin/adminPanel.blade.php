@extends('layouts.main')

@section('content')
    <div class="adminPanelList">
        <div class="list-group">
            <a href="/admin/hunters" class="list-group-item list-group-item-action">Hunters</a>
            <a href="/admin/add-article" class="list-group-item list-group-item-action active" aria-current="true">
                Add An Article</a>
            <a href="/admin/add-hunter" class="list-group-item list-group-item-action">Add Hunter</a>
            <a href="#" class="list-group-item list-group-item-action">Edit Hunters</a>
            <a href="#" class="list-group-item list-group-item-action">Edit Users</a>
            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Edit Comments</a>
        </div>
    </div>
@endsection
