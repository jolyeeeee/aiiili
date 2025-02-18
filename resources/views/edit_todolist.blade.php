@extends('layouts.app')

@section('title', 'Edit To-Do List')

@section('header', 'Edit To-Do List')

@section('content')
    <div class="bg-white p-8 border-4 border-black shadow-[8px_8px_0_0_#000] transform rotate-1">
        <form action="{{ route('todolist.updateNama', $todolist->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PATCH')

            <div class="space-y-3">
                <label for="nama_tugas" class="block text-xl font-black transform -rotate-2 bg-yellow-300 p-2 border-4 border-black inline-block">
                    Nama Tugas
                </label>
                <input 
                    type="text" 
                    name="nama_tugas" 
                    class="w-full p-4 text-lg border-4 border-black focus:ring-4 focus:ring-yellow-300 outline-none transform -rotate-1 bg-white" 
                    value="{{ $todolist->nama_tugas }}" 
                    required
                >
            </div>

            <div class="flex gap-4 pt-4">
                <button 
                    type="submit" 
                    class="bg-green-500 text-white px-6 py-3 border-4 border-black shadow-[4px_4px_0_0_#000] hover:translate-x-1 hover:translate-y-1 hover:shadow-[2px_2px_0_0_#000] transition-all font-bold"
                >
                    Simpan Perubahan
                </button>
                
                <a 
                    href="{{ route('dashboard') }}" 
                    class="bg-gray-500 text-white px-6 py-3 border-4 border-black shadow-[4px_4px_0_0_#000] hover:translate-x-1 hover:translate-y-1 hover:shadow-[2px_2px_0_0_#000] transition-all font-bold"
                >
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection