@extends('partials.main')

@section('content')
<div class="container text-center mt-5">
    <h1 class="display-4">Daftar Buku Tahun 2024</h1>
    <p class="lead">Praktik Proyek Pertama - Tabel CRUD Daftar Buku 2024</p>
    <div class="d-flex flex-row-reverse mt-5">
        <a href="" class="btn btn-outline-primary mb-2 p-2">Tambahkan Data</a>
    </div>
    <table class="table table-striped table-bordered">
        <thead class="table-primary">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Buku</th>
                <th scope="col">Author</th>
                <th scope="col">Halaman</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td>Tidak ada Buku yang Tersedia</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
    

