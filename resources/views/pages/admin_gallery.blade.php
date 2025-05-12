@extends('layouts.admin')

@section('title','Admin Gallery')

@section('content')
<div class="p-4 sm:ml-64">
    <div class="p-4 rounded-lg dark:border-gray-700 mt-14">
        @include('components.breadcrumb', [
            'pages_name' => 'Gallery'
        ])
        @include('components.breadcrumb_child', [
            'child_name' => 'List Gallery'
        ])
        @include('components.modal_add', [
            'modal' => 'Add Gallery',
            'modal_name' => 'Create New Gallery',
            'fields' => [
                ['type' => 'text', 'name' => 'name', 'label' => 'Title'],
                ['type' => 'textarea', 'name' => 'description', 'label' => 'Description'],
                ['type' => 'file', 'name' => 'image', 'label' => 'Select Image'],
                ['type' => 'select', 'name' => 'category', 'label' => 'Category', 'options' => ['A', 'B', 'C']],
            ]
        ])
        @include('components.searchbar')
        @include('components.table_admin')
    </div>
</div>
@endsection
