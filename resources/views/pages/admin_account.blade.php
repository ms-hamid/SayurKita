@extends('layouts.admin')

@section('title','Admin Accounts')

@section('content')
<div class="p-4 sm:ml-64">
    <div class="p-4 rounded-lg dark:border-gray-700 mt-14">
        @include('components.breadcrumb', [
            'pages_name' => 'Accounts'
        ])
        @include('components.breadcrumb_child', [
            'child_name' => 'List Accounts'
        ])
        @include('components.searchbar')
        @include('components.table_admin')
    </div>
</div>
@endsection
