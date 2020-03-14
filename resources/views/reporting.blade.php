@extends('layouts.app')

@section('nav')
    @include('includes.nav')
@endsection
@section('content')
    <router-view></router-view>
@endsection
