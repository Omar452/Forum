@props(['subject' => $subject])

<form action="{{route('comments.store', $subject)}}" method="POST">
    @csrf

    <div class="flex flex-col focus">
        <x-labelComponent for="content">Your answer:</x-labelComponent>
        <x-textareaComponent class="@error('content') is-invalid @enderror" name="content" id="content" rows="5"></x-textareaComponent>

        @error('content')
        <x-errorDivComponent>{{$message}}</x-errorDivComponent>
        @enderror
    </div>

    <div class="mt-2">
        <button class="text-sm bg-gray-500 text-white px-2 py-1 rounded  hover:bg-gray-800">submit your answer</button>
    </div>

</form>