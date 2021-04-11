@extends('layouts.master')

@section('title', 'laravel')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h4>Arsip</h4>
                        <b>{{ $data_arsip->no_register}}</b>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('arsip.v', $data_arsip->id)}}" method="POST">
                        @csrf
                        @method('patch')
                        <dl class="row">
                            <dt class="col-sm-3">Kode Klarifikasi</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->kode_klarifikasi}}</dd>

                            <dt class="col-sm-3">Jenis Arsip</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->jenis_arsip}}</dd>
                            
                            <dt class="col-sm-3">No Register</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->no_register}}</dd>

                            <dt class="col-sm-3">Tahun</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->tahun}}</dd>

                            <dt class="col-sm-3">NIK</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->nik}}</dd>

                            <dt class="col-sm-3">Nama</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->nama}}</dd>

                            <dt class="col-sm-3">Uraian</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->uraian}}</dd>

                            <dt class="col-sm-3">Tanggal Input</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->tgl_input}}</dd>

                            <dt class="col-sm-3">Petugas</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->petugas}}</dd>

                            <dt class="col-sm-3">No Buku</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->no_buku}}</dd>

                            <dt class="col-sm-3">No Boks</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->no_boks}}</dd>

                            <dt class="col-sm-3">Lokasi</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->lokasi}}</dd>

                            <dt class="col-sm-3">Keterangan</dt>
                            <dd class="col-sm-9">: {{ $data_arsip->ket}}</dd>

                            <dt class="col-sm-3">Lampiran </dt>
                            
                          
                                @if ($data_arsip->lampiran)
                                    <img src="{{ asset('storage/'. $data_arsip->lampiran) }}" alt="" width="480px" >
                                    {{-- <img src="{{ asset($data_arsip->lampiran)}}" alt="" width="128px"> --}}
                                    
                                    @else
                                    Tidak Ada Lampiran
                                @endif
                          
                        </dl>
                
                    </div>
              </div>
        </div>

        <div class="col-12">
            <div class="card  h-100 mt-3">
                <div class="card-header">
                    File PDF (Jika File Ada Akan Ditampilkan Disini)
                </div>
                <div class="card-body p-4">
                    @if ($data_arsip->lampiran == null)

                        <div class="alert alert-danger" role="alert">
                            <strong>File Lampiran Belum Ada</strong>
                        </div>

                    @else
                        <a href="{{ url('public/') . '/' . $data_arsip->lampiran }}"><button type="button"
                                class="btn btn-outline-primary mb-4">Download Lampiran</button></a>
                        <embed src="{{ asset('storage/' . $data_arsip->lampiran) }}" width="100%" height="1000px">

                    @endif

                </div>
            </div>
        </div>


    </div>
</div>
@endsection

@push('page-scripts')
    
@endpush