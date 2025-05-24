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
        @include('components.error_message')
        @include('components.modal_add', [
            'modal' => 'Add Gallery',
            'modal_name' => 'Create New Gallery',
            'modal_id' => 'add-gallery-modal',
            'form_action' => route('admin_gallery.store'),
            'form_method' => 'POST',
            'fields' => $addFields
        ])
        @include('components.searchbar')
        @include('components.table_admin', [
            'modal' => 'Edit',
            'modal_name' => 'Edit Gallery',
            'modal_id' => 'edit-gallery-modal',
            'form_action' => route('admin_gallery.update', ':id'),
            'form_method' => 'PUT',
            'fields' => $editFields,
            'data' => $data,
            'columns' => $columns,
            'delete_route' => route('admin_gallery.destroy', ':id'),
            'edit_route' => 'admin_gallery.update'
        ])
    </div>
</div>
@endsection
