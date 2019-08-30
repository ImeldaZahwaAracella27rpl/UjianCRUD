@extends('template')
@section('content')
    <section class="main-section">
        <div class="content">
            <h1>Data Barang</h1>
            @if(Session::has('alert_message'))
                <div class="alert alert-success">
                    <strong>{{ Session::get('alert_message') }}</strong>
                </div>
            @endif
            <hr>

 <!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
    <!--DataTables Example-->

    <a href="{{ route('barang.create') }}"
    class=" btn btn-sm btn-warning">Tambah Barang</a>
    </h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Kd_Barang</th>
                    <th>Nama_Barang</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->kd_barang }}</td>
                        <td>{{ $datas->nama_barang }}</td>
                        <td>{{ $datas->stok }}</td>
                        <td>{{ $datas->harga }}</td>
                        <td>
                            <form action="{{ route('barang.destroy', $datas->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('barang.edit',$datas->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
