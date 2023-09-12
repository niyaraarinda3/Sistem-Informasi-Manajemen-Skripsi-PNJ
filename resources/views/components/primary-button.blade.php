<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-hover transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>