<!-- resources/views/components/button.blade.php -->

<button {{ $attributes->merge(['class' => 'px-4 py-2 bg-blue-500 text-white rounded-md']) }}>
    {{ $slot }}
</button>
