<x-layout :title="'Edit Data Barang'">
    <div class="content-wrapper px-4">
        <section class="content-header">
            {{-- <div class=""> --}}
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Barang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/dashboard/barang">Barang</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
            {{-- </div> --}}
        </section>
        <div class="card card-primary">
            <div class="card-header p-1">
                {{-- <h3 class="card-title">Quick Example</h3> --}}
            </div>

            <form method="post" action="/dashboard/barang/{{ $barang->id }}" class="form-group">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama" value="{{ old('nama') ?? $barang->nama }}">

                        @error('nama')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis</label>
                        <input type="text" class="form-control @error('jenis') is-invalid  @enderror" id="jenis"
                            name="jenis" value="{{ old('jenis') ?? $barang->jenis }}">

                        @error('jenis')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="merk">Merk</label>
                        <input type="text" class="form-control  @error('merk') is-invalid @enderror" id="merk"
                            name="merk" value="{{ old('merk') ?? $barang->merk }}">

                        @error('merk')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ukuran">Ukuran</label>
                        <input type="text" class="form-control  @error('ukuran') is-invalid @enderror" id="ukuran"
                            name="ukuran" value="{{ old('ukuran') ?? $barang->ukuran }}">

                        @error('ukuran')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" min="0" class="form-control  @error('stok') is-invalid @enderror"
                            id="stok" name="stok" value="{{ old('stok') ?? $barang->stok }}">

                        @error('stok')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
