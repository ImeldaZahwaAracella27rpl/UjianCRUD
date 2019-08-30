@extends('template')
@section('content')
    <section class="main-section">
        <div class="content">
            <h1>Tambah Penjualan</h1>
            <hr>
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li><strong>{{ $error }}</strong>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('penjualan.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Kd_Barang:</label>
                    <input type="text" class="form-control" id="kd_barang" name="kd_barang">
                </div>
                <div class="form-group">
                    <label for="nama">Jumlah:</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah">
                </div>
                <div class="form-group">
                    <label for="nama">Total_Harga:</label>
                    <input type="text" class="form-control" id="total_harga" name="total_harga">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
    </section>
@endsection