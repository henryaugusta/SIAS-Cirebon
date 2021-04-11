@extends('layouts.master')

@section('title', 'laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h4>Peminjaman Berkas</h4>
                        <b>{{ $peminjaman_berkas->no_berkas}}</b>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('peminjaman-berkas.v', $peminjaman_berkas->id)}}" method="POST">
                        @csrf
                        @method('patch')
                        <dl class="row">
                            <dt class="col-sm-3">No Berkas</dt>
                            <dd class="col-sm-9">: {{ $peminjaman_berkas->no_berkas}}</dd>

                            <dt class="col-sm-3">Tanggal Pinjam</dt>
                            <dd class="col-sm-9">: {{ $peminjaman_berkas->tgl_pinjam}}</dd>

                            <dt class="col-sm-3">Jenis Arsip</dt>
                            <dd class="col-sm-9">: {{ $peminjaman_berkas->uraian_berkas}}</dd>

                            <dt class="col-sm-3">Tahun</dt>
                            <dd class="col-sm-9">: {{ $peminjaman_berkas->tahun}}</dd>

                            <dt class="col-sm-3">Jumlah Berkas</dt>
                            <dd class="col-sm-9">: {{ $peminjaman_berkas->jml_berkas}}</dd>

                            <dt class="col-sm-3">Nama Peminjam</dt>
                            <dd class="col-sm-9">: {{ $peminjaman_berkas->nama_peminjam}}</dd>

                            <dt class="col-sm-3">Unit Pengolah</dt>
                            <dd class="col-sm-9">: {{ $peminjaman_berkas->unit_pengolah}}</dd>

                            <dt class="col-sm-3">Nama Petugas</dt>
                            <dd class="col-sm-9">: {{ $peminjaman_berkas->nama_petugas}}</dd>

                            <dt class="col-sm-3">Kategori Petugas</dt>
                            <dd class="col-sm-9">: {{ $peminjaman_berkas->kategori_petugas}}</dd>

                            <dt class="col-sm-3">Status</dt>
                            <dd class="col-sm-9">: {{ $peminjaman_berkas->status}}</dd>

                        </dl>
                
                    </div>
              </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
    
@endpush