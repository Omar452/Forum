@extends('layouts.app')

@section('content')
    <div class="w-full flex justify-center">
        <div class="w-2/3">
            <x-subjectComponent :subject="$subject" />
        <div>
    </div>
    <x-modalComponent :subject="$subject"/>
@endsection