@extends('layouts.main')

@section('container')
@include('layouts.dashboard-header')
<div class="flex items-center justify-end mt-4">
    <form action="" method="get">
        <input type="text" name="search" id="search" class="border-b-4 mr-1 focus:outline-none px-3 py-1 border-gray-600" placeholder="Search..." autocomplete="off">
        <button type="submit" class="p-3 border-2 border-gray-600 rounded-full">
        <svg class="w-4 h-4 stroke-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
                d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
        </svg>
        </button>
    </form>
</div>
<h2 class="text-xl mt-7">Daftar Artikel</h2>
<table class="table-auto w-full mt-2">
    <thead class="border-b-4 border-gray-700">
        <tr>
            <th class="border-2 p-2">NO</th>
            <th class="border-2">JUDUL</th>
            <th class="part border-2">EXCERPT</th>
            <th class="part border-2">CATEGORY</th>
            <th class="part border-2">ACTION</th>
            <th class="border-2">PUBLISH</th>
        </tr>
    </thead>
    <tbody>
        <tr class="border-b-2">
            <td class="border-2 text-center p-2">1</td>
            <td class="border-2 p-2">Cara Membuat Kerang</td>
            <td class="part border-2 p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab minus maiores blanditiis aperiam!</td>
            <td class="part border-2 p-2">Mata Kuliah</td>
            <td class="part border-2 p-2">Delete | Edit | View</td>
            <td class="border-2 p-2">Published</td>
        </tr>
    </tbody>
</table>

@endsection