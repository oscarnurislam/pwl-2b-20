@extends('layouts.app')
@section('tittle', 'New Vision')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">New Vision</h1>

            <table class="table table-dark table-striped">
                <thead >
                    <tr>
                    
                    <th scope="col">Nomer barang</th>
                    <th scope="col">Nama barang</th>
                    <th scope="col">Jumlah barang</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($barang as $brg)
                    <tr>
                        
                        <td>{{$brg->nomer_barang}}</td>
                        <td>{{$brg->nama_barang}}</td>
                        <td>{{$brg->jumlah_barang}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    <div class="col-lg-4 tm-dotted-box-container">
                        <article class="tm-dotted-box">
                            <i class="fas fa-3x fa-glasses tm-article-icon"></i>
                            <a class="tm-btn tm-article-link" href="product">Kembali ke product</a>
                        </article>
        </div>
</div>