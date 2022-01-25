@extends('template_backend.home')
@section('page')
  <li class="breadcrumb-item active">{{ $kelas->nama_kelas }}</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card">
    
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <table id="example1" class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Siswa</th>
                  <th>No. Induk</th>
                  <th>Aksi</th>
              </thead>
              <tbody>
                @foreach ($siswa as $data)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama_siswa }}</td>
                    <td>{{ $data->no_induk }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endsection
@section('script')
    <script>
        $("#Nilai").addClass("active");
        $("#liNilai").addClass("menu-open");
    </script>
@endsection