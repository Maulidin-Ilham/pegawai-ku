<!doctype html>
<html lang="en">

<head>
    <title>Kriteria</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="active">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">
                <h2><a href="{{ url('/') }}" class="logo text-white">PegawaiKu</a></h2>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="{{ url('/') }}"><span class="fa fa-home mr-3"></span> Dashboard</a>
                    </li>
                    <li class="active">
                        <a href="{{ url('/kriteria') }}"><span class="fa fa-user mr-3"></span> Data
                            Kriteria</a>
                    </li>
                    <li>
                        <a href="{{ url('/pegawai') }}"><span class="fa fa-briefcase mr-3"></span> Data
                            Pegawai</a>
                    </li>
                    <li>
                        <a href="{{ url('/perhitungan') }}"><span class="fa fa-sticky-note mr-3"></span>
                            Data Perhitungan</a>
                    </li>
                    <li>
                        <a href="{{ url('/hasil') }}"><span class="fa fa-paper-plane mr-3"></span> Data
                            Hasil</a>
                    </li>
                </ul>


            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4">Data Kriteria</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Kriteria</th>
                        <th scope="col">Bobot</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($criterias as $criteria)
                        <tr>
                            <td>{{ $criteria->id }}</td>
                            <td>{{ $criteria->name }}</td>
                            <td>{{ $criteria->weight }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
