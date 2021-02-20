
<div class="dropdown inline-block relative">
    <button class="inline-flex items-center focus:outline-none">
        <p>{{auth()->user()->name}}</p>
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
    </button>
    <ul class="dropdown-menu absolute hidden bg-white pt-1 mr-5">
    <li><a class="rounded-b hover:bg-gray-500 hover:text-white py-2 px-4 block whitespace-no-wrap" href="{{route('dashboard')}}">Dashboard</a></li>
    <li><a class="rounded-b hover:bg-gray-500 hover:text-white py-2 px-4 block whitespace-no-wrap" href="{{route('subjects.create')}}">New Subject</a></li>
    <li><a class="rounded-b hover:bg-gray-500 hover:text-white py-2 px-4 block whitespace-no-wrap" href="{{route('logout')}}">Logout</a></li>
    </ul>
</div>