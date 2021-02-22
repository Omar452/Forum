@extends('layouts.app')

@section('content')
    <div class="w-full flex justify-center">
        <div class="w-2/3">
            <x-subjectComponent :subject="$subject" />
        <div>
    </div>
    <x-modalComponent :subject="$subject"/>

    <div class="my-10">
        <h3 class="text-xl font-semibold">{{ $subject->comments()->count() }} {{ Str::plural('answer', $subject->comments()->count()) }}</h3>
        <x-commentComponent :subject="$subject" />
    </div>
    
    <x-commentFormComponent :subject="$subject" ></x-commentFormComponent>
@endsection
