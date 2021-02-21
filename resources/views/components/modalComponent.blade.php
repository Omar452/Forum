@props(['subject' => $subject])

<div class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
  <!-- modal -->
  <div class="bg-white rounded shadow-lg w-1/3">
    <!-- modal header -->
    <div class="border-b px-4 py-2 flex justify-between items-center">
      <h3 class="font-semibold text-lg">Delete Subject</h3>
      <button class="text-black close-modal focus:outline-none">X</button>
    </div>
    <!-- modal body -->
    <div class="p-3">
      Are you sure you want to delete this subject?
    </div>
    <div class="flex justify-end items-center w-100 border-t p-3">
      <button class="bg-green-300 hover:bg-green-400 px-3 py-1 rounded text-white mr-1 focus:outline-none close-modal">Cancel</button>
      <form action="{{route('subjects.destroy', $subject)}}" method="POST">
          @csrf
          @method('DELETE')
          <button class="bg-red-300 hover:bg-red-400 px-3 py-1 rounded text-white focus:outline-none">Delete</button>
      </form>
    </div>
  </div>
</div>

