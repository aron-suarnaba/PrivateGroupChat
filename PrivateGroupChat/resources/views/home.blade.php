@extends('layouts.home')

@section('header')
    @include('home.partials._header')
@endsection

@section('nav')
    @include('home.partials._nav')
@endsection

@section('chat-box')
    @include('home.content.chat-box')
@endsection
