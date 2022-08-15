<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
    @include('admin.navigation')

	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
    @include('admin.header')
	<!-- [ Header ] end -->
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        @include('admin.breadcrumb')
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('message') }}
            </div>
            @endif

            
            <div class="card">
                <div class="card-header">
                    <h5>Proyek List</h5>
                    <span class="d-block m-t-5">Daftar Proyek yang telah diinput</span>
                </div>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <div>
                                <a href="{{ route('admin-add-project') }}" class="btn btn-primary mb-3"> Tambah Proyek baru </a>
                            </div>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>nama</th>
                                    <th>Lokasi</th>
                                    <th>alamat_kantor_pemasaran</th>
                                    <th>Foto</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->lokasi }}</td>
                                    <td>{{ $data->alamat_kantor_pemasaran }}</td>
                                    <td>
                                        <img src="/images/{{$data->gambar}}">
                                    </td>
                                    <td>
                                        <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="{{ url('delete-project',$data->id) }}" class="btn btn-danger"> Hapus </a>
                                        <a href="{{ url('admin-update-project', $data->id) }}" class="btn btn-success"> Edit </a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->

@include('admin.script')
</body>

</html>
