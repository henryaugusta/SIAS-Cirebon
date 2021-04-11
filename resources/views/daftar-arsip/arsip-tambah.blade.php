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
                        <form action="{{ route('arsip.s') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label @error('kode_klarifikasi') class="text-danger" @enderror>Kode Klarifikasi
                                            @error('kode_klarifikasi')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input required type="text" name="kode_klarifikasi" value="{{ old('kode_klarifikasi') }}"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label @error('jenis_arsip') class="text-danger" @enderror>Jenis Arsip
                                            @error('jenis_arsip')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input required type="text" name="jenis_arsip" value="{{ old('jenis_arsip') }}"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label @error('no_register') class="text-danger" @enderror>No Register
                                            @error('no_register')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input required type="text" name="no_register" value="{{ old('no_register') }}"
                                            class="form-control">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label @error('tahun') class="text-danger" @enderror>Tahun
                                            @error('tahun')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input required type="text" name="tahun" value="{{ old('tahun') }}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label @error('nik') class="text-danger" @enderror>NIK
                                            @error('nik')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input required type="text" name="nik" value="{{ old('nik') }}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label @error('nama') class="text-danger" @enderror>Nama
                                            @error('nama')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input required type="text" name="nama" value="{{ old('nama') }}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label @error('uraian') class="text-danger" @enderror>Uraian Informasi
                                            @error('uraian')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input required type="text" name="uraian" value="{{ old('uraian') }}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label @error('tgl_input') class="text-danger" @enderror>Tanggal Input
                                            @error('tgl_input')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input required type="date" name="tgl_input" value="{{ old('tgl_input') }}"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label @error('petugas') class="text-danger" @enderror>Petugas
                                            @error('petugas')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input required type="text" name="petugas" value="{{ old('petugas') }}"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label @error('no_buku') class="text-danger" @enderror>No Buku
                                            @error('no_buku')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input required type="text" name="no_buku" value="{{ old('no_buku') }}"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label @error('no_boks') class="text-danger" @enderror>No Boks
                                            @error('no_boks')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input required type="text" name="no_boks" value="{{ old('no_boks') }}"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label @error('lokasi') class="text-danger" @enderror>Lokasi Penyimpanan
                                            @error('lokasi')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input required type="text" name="lokasi" value="{{ old('lokasi') }}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label @error('ket') class="text-danger" @enderror>Keterangan
                                            @error('ket')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input type="text" name="ket" value="{{ old('ket') }}" class="form-control">
                                    </div>
                                </div>

                                {{-- <span class="padding-4"><b>Lampiran</b></span><br>
                <div class="input-group col-md-12">
                  <div class="custom-file">
                    <label @error('lampiran')
                        class="text-danger"
                    @enderror>Lampiran
                      @error('lampiran')
                          | {{ $message}}
                      @enderror
                    </label>
                    <input type="file" name="lampiran" value="{{ old('lampiran')}}" class="custom-file-input" id="inputGroupFile02">
                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Lampirkan Arsip</label>
                  </div>
                </div> --}}

                                <span class="padding-4"><b>Lampiran</b></span><br>
                                <div class="input-group col-md-12">
                                    <div class="custom-file">
                                        <label @error('lampiran') class="text-danger" @enderror>
                                            @error('lampiran')
                                                | {{ $message }}
                                            @enderror
                                        </label>
                                        <input required type="file" name="lampiran" value="{{ old('lampiran') }}"
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
        </div>
    </div>
@endsection

@push('page-scripts')

@endpush
