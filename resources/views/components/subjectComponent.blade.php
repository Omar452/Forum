@props(['subject' => $subject])
<div class="bg-white p-4 m-2">
    <h4 class="border-b mb-2 font-semibold"><a class="hover:underline text-gray-800 text-lg" href="{{route('subjects.show', $subject)}}">{{$subject->title}}</a></h4>
    <p class="text-sm">{{$subject->content}}</p>

    <div class="flex justify-between text-xs mt-5">
        <p>Posted the {{$subject->created_at->format('d/m/Y \a\t H:m')}}</p>
        <p class="bg-gray-500 text-white rounded py-1 px-2 font-bold">{{$subject->user->name}}</p>
    </div>
</div>