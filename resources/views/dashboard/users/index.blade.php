@extends('layouts.dashboard')

@section('page-title')
Users
@endsection

@section('content')
@foreach ($users as $user)
<div class="flex flex-wrap">
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
    {{ $user->name }}
    </div>
</div>
@endforeach
@endsection