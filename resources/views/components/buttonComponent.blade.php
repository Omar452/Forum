<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-8 py-4 bg-green-200 border border-transparent rounded-md font-semibold text-xl text-grey-300 uppercase tracking-widest hover:bg-green-400 hover:text-white active:bg-green-500 focus:outline-none focus:border-gray-900 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>