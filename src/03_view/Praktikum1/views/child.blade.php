@extends('layouts.app')
@section('title', 'Profil')
@section('sidebar')
@parent
    <p>Sidebar halaman Profil.</p>
@endsection
@section('content')
    <p>Ini adalah bagian konten. NIM -Nama</p>
@endsection


@component('components.alert')
<b>Tulisan ini akan mengisi variabel </b>
@endcomponent