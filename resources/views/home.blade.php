@extends('layouts.app')

@section('content')
    <dishes-list :items="{{ $dishes }}"></dishes-list>
@endsection
