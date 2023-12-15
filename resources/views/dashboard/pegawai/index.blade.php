<!doctype html>
<html lang="en">

<head>
    <title>Pegawai</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

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
                    <li>
                        <a href="{{ url('/kriteria') }}"><span class="fa fa-user mr-3"></span> Data
                            Kriteria</a>
                    </li>
                    <li class="active">
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
            <h2 class="mb-4">Data Pegawai</h2>
            <button class="btn btn-success"><a href="{{ route('pegawai.create') }}" class="text-white"><i
                        class="bi bi-person-plus"></i></a></button>

            <table class="table table-striped mt-2">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">C1</th>
                        <th scope="col">C2</th>
                        <th scope="col">C3</th>
                        <th scope="col">C4</th>
                        <th scope="col">C5</th>
                        <th scope="col">C6</th>
                        <th scope="col">C7</th>
                        <th scope="col">C8</th>
                        <th scope="col">C9</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($pegawais as $pegawai)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $pegawai->name }}</td>
                            <td>{{ $pegawai->c1 }}</td>
                            <td>{{ $pegawai->c2 }}</td>
                            <td>{{ $pegawai->c3 }}</td>
                            <td>{{ $pegawai->c4 }}</td>
                            <td>{{ $pegawai->c5 }}</td>
                            <td>{{ $pegawai->c6 }}</td>
                            <td>{{ $pegawai->c7 }}</td>
                            <td>{{ $pegawai->c8 }}</td>
                            <td>{{ $pegawai->c9 }}</td>
                            <td class="d-flex">
                                <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn btn-warning mr-2"><i
                                        class="bi bi-pencil-square"></i></a>
                                <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="post"
                                    id="deleteForm{{ $pegawai->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger delete-button"
                                        data-id="{{ $pegawai->id }}">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>


                            </td>

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('.delete-button').on('click', function() {
                var id = $(this).data('id');
                Swal.fire({
                    title: 'Apakah anda yakin ingin menghapus data ini?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Hapus',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: 'Sukses',
                            text: 'Data berhasil dihapus',
                            icon: 'success',
                            timer: 3000,
                            showConfirmButton: false
                        });
                        $('#deleteForm' + id).submit();
                    }
                });
            });
        });
    </script>


</body>

</html>
