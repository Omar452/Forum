@extends('layouts.app')

@section('content')

    <x-h1Component>Edit a subject</x-h1Component>

    <div class="w-full flex justify-center">
            <div class="w-2/3 bg-white p-8 mb-4">
            <form action="{{route('subjects.update', $subject)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="flex flex-col focus mb-4">
                    <x-labelComponent for="content">Title:</x-labelComponent>
                    <x-inputComponent class="@error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title') ?? $subject->title}}" required autofocus/>

                    @error('title')
                    <x-errorDivComponent>{{$message}}</x-errorDivComponent>
                    @enderror

                </div>
                
                <div class="flex flex-col focus">
                    <x-labelComponent for="content">Content:</x-labelComponent>
                    <x-textareaComponent class="@error('content') is-invalid @enderror" name="content" id="content" cols="30" rows="5">{{old('content') ?? $subject->content}}</x-textareaComponent>

                    @error('content')
                    <x-errorDivComponent>{{$message}}</x-errorDivComponent>
                    @enderror

                </div>

                <div class="text-center mt-5">
                    <x-buttonComponent>edit</x-buttonComponent>
                </div>
                
            </form>
        <div>
    </div>

@endsection