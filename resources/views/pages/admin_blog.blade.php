@extends('layouts.admin')

@section('title','Admin Blog')

@section('content')
<div class="p-4 sm:ml-64">
    <div class="p-4 rounded-lg dark:border-gray-700 mt-14">
        @include('components.breadcrumb', [
            'pages_name' => 'Blog'
        ])
        @include('components.breadcrumb_child', [
            'child_name' => 'List Blog'
        ])
        @include('components.error_message')
        @include('components.modal_add', [
            'modal' => 'Add Blog',
            'modal_name' => 'Create New Blog',
            'modal_id' => 'add-blog-modal',
            'form_action' => route('admin_blog.store'),
            'form_method' => 'POST',
            'fields' => $addFields
        ])
        @include('components.searchbar')
        @include('components.table_admin', [
            'modal' => 'Edit',
            'modal_name' => 'Edit Blog',
            'modal_id' => 'edit-blog-modal',
            'form_action' => route('admin_blog.update', ':id'),
            'form_method' => 'PUT',
            'fields' => $editFields,
            'data' => $data,
            'columns' => $columns,
            'delete_route' => 'admin_blog.destroy',
            'edit_route' => 'admin_blog.update'
        ])
    </div>
</div>
@endsection
