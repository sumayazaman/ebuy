@extends('layouts.starlight')

@section('title', 'Dashboard')

@section('breadcrumb')
    @parent
    <a class="breadcrumb-item active" href="{{ route('dashboard') }}">Dashboard</a>
@endsection
