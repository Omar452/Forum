@extends('layouts.app')

@section('content')
    <x-h1Component>Subjects</x-h1Component>
    <div class="w-full flex justify-center">
        <div class="w-2/3">
            @foreach ($subjects as $subject)
                <x-subjectComponent :subject="$subject" />
                <x-modalComponent :subject="$subject"/>
            @endforeach
            {{$subjects->links()}}
        <div>
    </div>

@endsection