@extends('layouts.admin')

@section('title','Admin Banner')

@section('content')
<div class="p-4 sm:ml-64">
    <div class="p-4 rounded-lg dark:border-gray-700 mt-14">
        @include('components.breadcrumb', [
            'pages_name' => 'Banner'
        ])
        @include('components.breadcrumb_child', [
            'child_name' => 'List Banner'
        ])
        @include('components.modal_add', [
            'modal' => 'Add Banner',
            'modal_name' => 'Create New Banner',
            'fields' => [
                ['type' => 'file', 'name' => 'image', 'label' => 'Select Image'],
            ]
        ])
        @include('components.table_admin', [
            'modal' => 'Edit',
            'modal_name' => 'Edit Banner',
            'fields' => [
                ['type' => 'file', 'name' => 'image', 'label' => 'Select New Image']
            ]
        ])
    </div>
</div>
@endsection
