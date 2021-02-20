@extends('layouts.app')

@section('content')
    <div class="w-full flex justify-center">
        <div class="w-2/3">
            @foreach ($subjects as $subject)
            <div class="bg-white p-3 m-1">
                <h4><a class="hover:underline text-blue-500 text-lg" href="{{route('subjects.show', $subject)}}">{{$subject->title}}</a></h4>
                <p class="text-sm">{{$subject->content}}</p>

                <div class="flex justify-end text-xs mt-5">
                    <p>Posted the {{$subject->created_at->format('d/m/Y \a\t H:m')}} by <span class="font-bold">{{$subject->user->name}}</span></p>
                </div>
            </div>
            @endforeach
            {{$subjects->links()}}
        <div>
    </div>

@endsection