{{-- resources/views/backend/services/create.blade.php --}}
{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<x-app-layout>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <form method="POST" action="{{ route('services.store') }}">
                @csrf

                <div>
                    <x-label>Laptop ID</x-label>

                    <x-label for="laptop_id" :value="__('Laptop ID')" />

                    <x-input id="laptop_id" class="block mt-1 w-full" type="text" name="laptop_id" :value="old('laptop_id')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-label for="tanggal_masuk" :value="__('Tanggal Masuk')" />

                    <x-input id="tanggal_masuk" class="block mt-1 w-full"
                             type="date"
                             name="tanggal_masuk" :value="old('tanggal_masuk')" required />
                </div>

                <div class="mt-4">
                    <x-label for="deskripsi_masalah" :value="__('Deskripsi Masalah')" />

                    <textarea id="deskripsi_masalah" class="block mt-1 w-full" name="deskripsi_masalah" required>{{ old('deskripsi_masalah') }}</textarea>
                </div>

                <div class="mt-4">
                    <x-label for="status" :value="__('Status')" />

                    <select id="status" class="block mt-1 w-full" name="status">
                        <option value="pending">Pending</option>
                        <option value="in_progress">In Progress</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-4">
                        {{ __('Submit') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</div>
</x-app-layout>
{{-- @endsection --}}
