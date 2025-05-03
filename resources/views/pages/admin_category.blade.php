@extends('layouts.admin')

@section('title','Admin Category')

@section('content')
<div class="p-4 sm:ml-64">
    <div class="p-4 rounded-lg dark:border-gray-700 mt-14">
        @include('components.breadcrumb', [
            'pages_name' => 'Category'
        ])
        @include('components.breadcrumb_child', [
            'child_name' => 'List Category'
        ])
        @include('components.modal_add', [
            'modal' => 'Add Category',
            'modal_name' => 'Create New Category',
            'fields' => [
                ['type' => 'text', 'name' => 'name', 'label' => 'Category Name'],
                ['type' => 'select', 'name' => 'category', 'label' => 'Category Type', 'options' => ['Product', 'Blog', 'Gallery']],
            ]
        ])
        @include('components.searchbar')
        @include('components.table_admin')
    </div>
</div>
@endsection
