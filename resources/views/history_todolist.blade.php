@extends('layouts.app')

@section('title', 'Riwayat To-Do List')

@section('header', 'Riwayat To-Do List')

@section('content')
    <p class="text-xl font-bold mb-6 bg-purple-600 p-4 border-4 border-black shadow-[4px_4px_0_0_#000] inline-block transform -rotate-1">
        Berikut adalah semua tugas yang pernah Anda buat.
    </p>

    <div class="overflow-x-auto bg-white p-6 border-4 border-black shadow-[8px_8px_0_0_#000] mb-8">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-purple-600">
                    <th class="border-4 border-black p-4 font-white">No</th>
                    <th class="border-4 border-black p-4 font-white">Nama Tugas</th>
                    <th class="border-4 border-black p-4 font-white">Status</th>
                    <th class="border-4 border-black p-4 font-white">Tanggal & Waktu Tugas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todolists as $index => $todolist)
                    <tr class="hover:bg-yellow-100">
                        <td class="border-4 border-black p-4 text-center">{{ $index + 1 }}</td>
                        <td class="border-4 border-black p-4">{{ $todolist->nama_tugas }}</td>
                        <td class="border-4 border-black p-4 text-center">
                            @if ($todolist->status_tugas == 'pending')
                                <span class="bg-yellow-400 px-4 py-2 border-2 border-black font-bold inline-block transform -rotate-2">
                                    Pending
                                </span>
                            @else
                                <span class="bg-green-400 px-4 py-2 border-2 border-black font-bold inline-block transform rotate-2">
                                    Completed
                                </span>
                            @endif
                        </td>
                        <td class="border-4 border-black p-4 text-center">
                            {{ \Carbon\Carbon::parse($todolist->created_at)->translatedFormat('l, d F Y H:i:s') }} WIB
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ route('dashboard') }}" 
       class="bg-purple-600 text-white px-6 py-3 border-4 border-black shadow-[4px_4px_0_0_#000] hover:translate-x-1 hover:translate-y-1 hover:shadow-[2px_2px_0_0_#000] transition-all font-bold inline-block">
        Kembali ke Dashboard
    </a>
@endsection