@extends('layouts.admin')

@section('title','Admin Banner')

@section('content')
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        @include('components.breadcrumb', [
            'pages_name' => 'Banner'
        ])
        @include('components.breadcrumb_child', [
            'child_name' => 'List Banner'
        ])
        @include('components.modal_add', [
            'modal' => 'Add Banner',
            'modal_name' => 'Create New Banner'
        ])
        @include('components.admin_table', [
            
        ])
    </div>
</div>
@endsection
