@extends('layouts.admin')

@section('title','Admin Gallery')

@section('content')
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        @include('components.breadcrumb', [
            'pages_name' => 'Gallery'
        ])
    </div>
</div>
@endsection
