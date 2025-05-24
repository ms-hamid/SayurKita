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
        @include('components.error_message')
        @include('components.modal_add', [
            'modal' => 'Add Banner',
            'modal_name' => 'Create New Banner',
            'modal_id' => 'add-banner-modal',
            'form_action' => route('admin_banner.store'),
            'form_method' => 'POST',
            'fields' => $addFields
        ])
        @include('components.table_admin', [
            'modal' => 'Edit',
            'modal_name' => 'Edit Banner',
            'modal_id' => 'edit-banner-modal',
            'form_action' => route('admin_banner.update', ':id'),
            'form_method' => 'PUT',
            'fields' => $editFields,
            'data' => $data,
            'columns' => $columns,
            'delete_route' => route('admin_banner.destroy', ':id'),
            'edit_route' => 'admin_banner.update'
        ])
    </div>
</div>
@endsection
