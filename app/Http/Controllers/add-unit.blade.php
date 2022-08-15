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
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Basic Component</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{ url('/add-unit') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Nama proyek</label>
                                    <input type="text" class="form-control" name="proyek" placeholder="Nama proyek baru">
                                </div>
                                <div class="form-group">
                                    <label>Nama proyek</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <input type="submit" class="btn btn-primary" name="submit" value="Add proyek"></input>
                            </form>
                        </div>
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
