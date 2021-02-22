@props(['subject' => $subject])

<div class="flex flex-col">
    @forelse($subject->comments as $comment)
    <div class="bg-gray-100 p-2 my-2 w-3/4">
        
        <div class="flex text-xs mb-5 ">
            <p>Posted the {{$comment->created_at->format('d/m/Y \a\t H:m')}} by <span class="text-bold">{{$comment->user->name}}</p></span>
        </div>

        <p>{{$comment->content}}</p>

        <div class="flex justify-start text-sm mt-5">
            @can('update', $comment)
            <div class="mr-2">
                <a class="text-yellow-600" href="{{route('subjects.edit', $comment)}}">Edit</a>
            </div>
            @endcan
            @can('delete', $comment)
            <div>
                <button class="show-modal bg-none text-red-500 focus:outline-none">Delete</button>
            </div>
            @endcan
        </div>
    </div>

    <div class="mt-2">
        <button onclick="toggleReplyComment({{$comment->id}})" id="replyFormBtn-{{$comment->id}}" class="text-sm bg-gray-500 text-white px-2 py-1 rounded  hover:bg-gray-800">Reply to this comment</button>
    </div>

    <div id="replyFormDiv-{{$comment->id}}" class="hidden my-5 ml-5">
        <form action="{{route('comments.storeReply', $comment)}}" method="POST">
            @csrf
        
            <div class="flex flex-col focus ml-5">
                <x-labelComponent>Your Reply:</x-labelComponent>
                <x-textareaComponent class="@error('reply') is-invalid @enderror" name="reply" id="reply" rows="5">{{old('reply') ?? NULL}}</x-textareaComponent>
        
                @error('reply')
                <x-errorDivComponent>{{$message}}</x-errorDivComponent>
                @enderror
            </div>
        
            <div class="mt-2 ml-5">
                <button class="text-sm bg-gray-500 text-white px-2 py-1 rounded  hover:bg-gray-800">Submit your reply</button>
            </div>
        </form>
    </div>

    @foreach ($comment->comments as $reply)
    <div class="bg-gray-100 p-2 my-2 w-3/4 self-end">
        
        <div class="flex text-xs mb-5">
            <p>Posted the {{$reply->created_at->format('d/m/Y \a\t H:m')}} by <span class="text-bold">{{$reply->user->name}}</p></span>
        </div>

        <p>{{$reply->content}}</p>

        <div class="flex justify-start text-sm mt-5">
            @can('update', $reply)
            <div class="mr-2">
                <a class="text-yellow-600" href="{{route('subjects.edit', $reply)}}">Edit</a>
            </div>
            @endcan
            @can('delete', $reply)
            <div>
                <button class="show-modal bg-none text-red-500 focus:outline-none">Delete</button>
            </div>
            @endcan
        </div>
    </div>
    @endforeach

    @empty
        <p>Do you want to comment this subject?</p>
    @endforelse
</div>

<script>
    function toggleReplyComment(id){
        let element = document.querySelector('#replyFormDiv-' + id);
        element.classList.toggle("hidden");
    }
</script>