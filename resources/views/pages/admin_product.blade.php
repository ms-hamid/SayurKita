@extends('layouts.admin')

@section('title','Admin Product')

@section('content')
<div class="p-4 sm:ml-64">
    <div class="p-4 rounded-lg dark:border-gray-700 mt-14">
        @include('components.breadcrumb', [
            'pages_name' => 'Product'
        ])
        @include('components.breadcrumb_child', [
            'child_name' => 'List Product'
        ])
        @include('components.modal_add', [
            'modal' => 'Add Product',
            'modal_name' => 'Create New Product',
            'fields' => [
                ['type' => 'text', 'name' => 'name', 'label' => 'Product Name'],
                ['type' => 'textarea', 'name' => 'description', 'label' => 'Description'],
                ['type' => 'file', 'name' => 'image', 'label' => 'Select Image'],
                ['type' => 'select', 'name' => 'category', 'label' => 'Category', 'options' => ['A', 'B', 'C']],
            ]
        ])
        @include('components.searchbar')
        @include('components.table_admin', [
            'modal' => 'Edit',
            'modal_name' => 'Edit Product',
            'fields' => [
                ['type' => 'text', 'name' => 'name', 'label' => 'Product Name'],
                ['type' => 'textarea', 'name' => 'description', 'label' => 'Description'],
                ['type' => 'file', 'name' => 'image', 'label' => 'Select New Image'],
                ['type' => 'select', 'name' => 'category', 'label' => 'Category', 'options' => ['A', 'B', 'C']],
            ]
        ])
    </div>
</div>
@endsection
