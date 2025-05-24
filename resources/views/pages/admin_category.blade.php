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
        @include('components.error_message')
        @include('components.modal_add', [
            'modal' => 'Add Category',
            'modal_name' => 'Create New Category',
            'modal_id' => 'add-category-modal',
            'form_action' => route('admin_category.store'),
            'form_method' => 'POST',
            'fields' => $addFields
        ])
        @include('components.searchbar')
        @include('components.table_admin', [
            'modal' => 'Edit',
            'modal_name' => 'Edit Category',
            'modal_id' => 'edit-category-modal',
            'form_action' => route('admin_category.update', ':id'),
            'form_method' => 'PUT',
            'fields' => $editFields,
            'data' => $data,
            'columns' => $columns,
            'delete_route' => 'admin_category.destroy',
            'edit_route' => 'admin_category.update'
        ])
    </div>
</div>
@endsection
