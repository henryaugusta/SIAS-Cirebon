@extends('layouts.master')

@section('title', 'laravel')
@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                @include('components.message')
            </div>

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    {{-- <div class="card-header">
                  <h4>HTML5 Form Basic</h4>
                </div> --}}
                    <div class="card-body">
                        {{-- <div class="alert alert-info">
                    <b>Note!</b> Not all browsers support HTML5 type input.
                  </div> --}}
                        <form action="{{ route('arsip.u', $data_arsip->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label @error('kode_klarifikasi') class="text-danger" @enderror>Kode Klarifikasi
                                            @error('kode_klarifikasi')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input type="text" name="kode_klarifikasi" @if (old('kode_klarifikasi')) value="{{ old('kode_klarifikasi') }}"
                        @else
                                                  value="{{ $data_arsip->kode_klarifikasi }}" @endif class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label @error('jenis_arsip') class="text-danger" @enderror>Jenis Arsip
                                            @error('jenis_arsip')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input type="text" name="jenis_arsip" @if (old('jenis_arsip')) value="{{ old('jenis_arsip') }}"
                        @else
                                                  value="{{ $data_arsip->jenis_arsip }}" @endif
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label @error('no_register') class="text-danger" @enderror>No Register
                                            @error('no_register')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input type="text" name="no_register" @if (old('no_register')) value="{{ old('no_register') }}"
                        @else
                                                  value="{{ $data_arsip->no_register }}" @endif
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label @error('tahun') class="text-danger" @enderror>Tahun
                                            @error('tahun')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input type="text" name="tahun" @if (old('tahun')) value="{{ old('tahun') }}"
                        @else
                                                  value="{{ $data_arsip->tahun }}" @endif
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label @error('nik') class="text-danger" @enderror>NIK
                                            @error('nik')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input type="number" name="nik" @if (old('nik')) value="{{ old('nik') }}"
                        @else
                                                  value="{{ $data_arsip->nik }}" @endif
                                            class="form-control">
                                    </div>
                                </div>
                                {{-- okee --}}

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label @error('nama') class="text-danger" @enderror>Nama
                                            @error('nama')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input type="text" name="nama" @if (old('nama')) value="{{ old('nama') }}"
                        @else
                                                  value="{{ $data_arsip->nama }}" @endif
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label @error('uraian') class="text-danger" @enderror>Uraian
                                            @error('uraian')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input type="text" name="uraian" @if (old('uraian')) value="{{ old('uraian') }}"
                        @else
                                                  value="{{ $data_arsip->uraian }}" @endif
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label @error('tgl_input') class="text-danger" @enderror>Tanggal Input
                                            @error('tgl_input')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input type="text" name="tgl_input" @if (old('tgl_input')) value="{{ old('tgl_input') }}"
                        @else
                                                  value="{{ $data_arsip->tgl_input }}" @endif
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label @error('petugas') class="text-danger" @enderror>Petugas
                                            @error('petugas')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input type="text" name="petugas" @if (old('petugas')) value="{{ old('petugas') }}"
                        @else
                                                  value="{{ $data_arsip->petugas }}" @endif
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label @error('no_buku') class="text-danger" @enderror>No Buku
                                            @error('no_buku')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input type="text" name="no_buku" @if (old('no_buku')) value="{{ old('no_buku') }}"
                        @else
                                                  value="{{ $data_arsip->no_buku }}" @endif
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label @error('no_boks') class="text-danger" @enderror>No Boks
                                            @error('no_boks')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input type="text" name="no_boks" @if (old('no_boks')) value="{{ old('no_boks') }}"
                        @else
                                                  value="{{ $data_arsip->no_boks }}" @endif
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label @error('lokasi') class="text-danger" @enderror>Lokasi
                                            @error('lokasi')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input type="text" name="lokasi" @if (old('lokasi')) value="{{ old('lokasi') }}"
                        @else
                                                  value="{{ $data_arsip->lokasi }}" @endif
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label @error('ket') class="text-danger" @enderror>Keterangan
                                            @error('ket')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input type="text" name="ket" @if (old('ket')) value="{{ old('ket') }}"
                        @else
                                                  value="{{ $data_arsip->ket }}" @endif
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label @error('lampiran') class="text-danger" @enderror>lampiran
                                            @error('lampiran')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input type="file" name="lampiran" @if (old('lampiran')) value="{{ old('lampiran') }}"
                        @else
                                                value="{{ old('lampiran') }}" @endif
                                            class="form-control" id="lampiran">
                                    </div>
                                </div>


                            </div>

                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                <button class="btn btn-secondary" type="reset">Reset</button>
                            </div>
                        </form>
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
