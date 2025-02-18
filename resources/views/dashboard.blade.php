@extends('layouts.app')

@section('title', 'Dashboard')

@section('header', 'Dashboard')

@section('content')
    <h3 class="text-2xl font-black mb-8 bg-purple-500 p-4 border-4 border-black shadow-[4px_4px_0_0_#000] inline-block transform -rotate-1" style="font-family: 'Dancing Script', cursive;">
        To-Do List Hari ini: <strong>{{ $hariIni }} WIB</strong>
    </h3>

    <!-- Form untuk menambah tugas -->
    <div class="bg-white p-6 border-4 border-black shadow-[8px_8px_0_0_#000] mb-8" style="font-family: 'Dancing Script', cursive;">
        <form action="{{ route('todolist.store') }}" method="POST" class="space-y-4">
            @csrf
            <div class="mb-4">
                <input type="text" 
                       name="nama_tugas" 
                       class="w-full p-3 border-4 border-black focus:ring-4 focus:ring-purple-600 outline-none text-lg"
                       placeholder="Tambahkan tugas baru" 
                       required>
            </div>
            <div class="flex gap-4 flex-wrap">
                <button type="submit" 
                        class="bg-purple-600 text-white px-6 py-3 border-4 border-black shadow-[4px_4px_0_0_#000] hover:translate-x-1 hover:translate-y-1 hover:shadow-[2px_2px_0_0_#000] transition-all font-bold">
                    Tambah
                </button>
                <a href="{{ route('todolist.history') }}" 
                   class="bg-indigo-600 text-white px-6 py-3 border-4 border-black shadow-[4px_4px_0_0_#000] hover:translate-x-1 hover:translate-y-1 hover:shadow-[2px_2px_0_0_#000] transition-all font-bold">
                    Lihat Riwayat To-Do List
                </a>
            </div>
        </form>
    </div>

    <!-- Tabel Daftar Tugas -->
    <div class="overflow-x-auto bg-white p-6 border-4 border-black shadow-[8px_8px_0_0_#000] mb-8" style="font-family: 'Dancing Script', cursive;">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-purple-600">
                    <th class="border-4 border-black p-4 font-white">No</th>
                    <th class="border-4 border-black p-4 font-white">Nama Tugas</th>
                    <th class="border-4 border-black p-4 font-white">Status</th>
                    <th class="border-4 border-black p-4 font-white">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todolists as $index => $todolist)
                    <tr class="hover:bg-purple-600">
                        <td class="border-4 border-black p-4 text-center">{{ $index + 1 }}</td>
                        <td class="border-4 border-black p-4">{{ $todolist->nama_tugas }}</td>
                        <td class="border-4 border-black p-4">
                            <form action="{{ route('todolist.update', $todolist->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <select name="status_tugas" 
                                        class="w-full p-2 border-4 border-black bg-white hover:bg-purple-600 cursor-pointer"
                                        onchange="this.form.submit()">
                                    <option value="pending" {{ $todolist->status_tugas == 'pending' ? 'selected' : '' }}>
                                        Pending
                                    </option>
                                    <option value="completed" {{ $todolist->status_tugas == 'completed' ? 'selected' : '' }}>
                                        Completed
                                    </option>
                                </select>
                            </form>
                        </td>
                        <td class="border-4 border-black p-4">
                            <div class="flex gap-2 justify-center">
                                <a href="{{ route('todolist.edit', $todolist->id) }}" 
                                   class="bg-purple-600 px-4 py-2 border-4 border-black shadow-[4px_4px_0_0_#000] hover:translate-x-1 hover:translate-y-1 hover:shadow-[2px_2px_0_0_#000] transition-all font-bold">
                                    Edit
                                </a>
                                <form action="{{ route('todolist.destroy', $todolist->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="bg-red-500 text-white px-4 py-2 border-4 border-black shadow-[4px_4px_0_0_#000] hover:translate-x-1 hover:translate-y-1 hover:shadow-[2px_2px_0_0_#000] transition-all font-bold">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Form Logout -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" 
                class="bg-red-500 text-white px-6 py-3 border-4 border-black shadow-[4px_4px_0_0_#000] hover:translate-x-1 hover:translate-y-1 hover:shadow-[2px_2px_0_0_#000] transition-all font-bold">
            Logout
        </button>
    </form>
@endsection
