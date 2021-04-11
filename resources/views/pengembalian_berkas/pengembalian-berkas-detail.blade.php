@extends('layouts.master')

@section('title', 'laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h4>Pengembalian Berkas</h4>
                        <b>{{ $pengembalian_berkas->no_berkas}}</b>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pengembalian-berkas.v', $pengembalian_berkas->id)}}" method="POST">
                        @csrf
                        @method('patch')
                        <dl class="row">
                            <dt class="col-sm-3">No Berkas</dt>
                            <dd class="col-sm-9">: {{ $pengembalian_berkas->no_berkas}}</dd>

                            <dt class="col-sm-3">Tanggal Kembali</dt>
                            <dd class="col-sm-9">: {{ $pengembalian_berkas->tgl_kembali}}</dd>

                            <dt class="col-sm-3">Jenis Arsip</dt>
                            <dd class="col-sm-9">: {{ $pengembalian_berkas->jenis_arsip}}</dd>

                            <dt class="col-sm-3">Tahun</dt>
                            <dd class="col-sm-9">: {{ $pengembalian_berkas->tahun}}</dd>

                            <dt class="col-sm-3">Jumlah Berkas</dt>
                            <dd class="col-sm-9">: {{ $pengembalian_berkas->jml_berkas}}</dd>

                            <dt class="col-sm-3">Nama Peminjam</dt>
                            <dd class="col-sm-9">: {{ $pengembalian_berkas->nama_peminjam}}</dd>

                            <dt class="col-sm-3">Unit Pengolah</dt>
                            <dd class="col-sm-9">: {{ $pengembalian_berkas->unit_pengolah}}</dd>

                            <dt class="col-sm-3">Nama Petugas</dt>
                            <dd class="col-sm-9">: {{ $pengembalian_berkas->nama_petugas}}</dd>

                            <dt class="col-sm-3">Kategori Petugas</dt>
                            <dd class="col-sm-9">: {{ $pengembalian_berkas->kategori_petugas}}</dd>

                            <dt class="col-sm-3">Status</dt>
                            <dd class="col-sm-9">: {{ $pengembalian_berkas->status}}</dd>

                        </dl>
                
                    </div>
              </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
    
@endpush