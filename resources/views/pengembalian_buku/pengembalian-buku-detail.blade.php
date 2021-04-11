@extends('layouts.master')

@section('title', 'laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h4>Pengembalian Buku</h4>
                        <b>{{ $pengembalian_buku->no_buku}}</b>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pengembalian-buku.v', $pengembalian_buku->id)}}" method="POST">
                        @csrf
                        @method('patch')
                        <dl class="row">
                            <dt class="col-sm-3">Buku</dt>
                            <dd class="col-sm-9">: {{ $pengembalian_buku->no_buku}}</dd>

                            <dt class="col-sm-3">No Register</dt>
                            <dd class="col-sm-9">: {{ $pengembalian_buku->no_register}}</dd>

                            <dt class="col-sm-3">Tanggal Kembali</dt>
                            <dd class="col-sm-9">: {{ $pengembalian_buku->tgl_kembali}}</dd>

                            <dt class="col-sm-3">Jenis Arsip</dt>
                            <dd class="col-sm-9">: {{ $pengembalian_buku->jenis_arsip}}</dd>

                            <dt class="col-sm-3">Tahun</dt>
                            <dd class="col-sm-9">: {{ $pengembalian_buku->tahun}}</dd>

                            <dt class="col-sm-3">Jumlah Berkas</dt>
                            <dd class="col-sm-9">: {{ $pengembalian_buku->jml_berkas}}</dd>

                            <dt class="col-sm-3">Nama Peminjam</dt>
                            <dd class="col-sm-9">: {{ $pengembalian_buku->nama_peminjam}}</dd>

                            <dt class="col-sm-3">Unit Pengolah</dt>
                            <dd class="col-sm-9">: {{ $pengembalian_buku->unit_pengolah}}</dd>

                            <dt class="col-sm-3">Nama Petugas</dt>
                            <dd class="col-sm-9">: {{ $pengembalian_buku->nama_petugas}}</dd>

                            <dt class="col-sm-3">Kategori Petugas</dt>
                            <dd class="col-sm-9">: {{ $pengembalian_buku->kategori_petugas}}</dd>

                            <dt class="col-sm-3">Status</dt>
                            <dd class="col-sm-9">: {{ $pengembalian_buku->status}}</dd>

                        </dl>
                
                    </div>
              </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
    
@endpush