<!doctype html>
<html lang="en">

<head>
    <title>Pegawai</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


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
                <h2><a href="{{ url('/') }}" class="logo text-white text-decoration-none">PegawaiKu</a></h2>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="{{ url('/') }}" class="text-decoration-none"><span class="fa fa-home mr-3"></span>
                            Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ url('/kriteria') }}" class="text-decoration-none"><span
                                class="fa fa-user mr-3"></span> Data
                            Kriteria</a>
                    </li>
                    <li class="active">
                        <a href="{{ url('/pegawai') }}" class="text-decoration-none"><span
                                class="fa fa-briefcase mr-3"></span> Data
                            Pegawai</a>
                    </li>
                    <li>
                        <a href="{{ url('/perhitungan') }}" class="text-decoration-none"><span
                                class="fa fa-sticky-note mr-3"></span>
                            Data Perhitungan</a>
                    </li>
                    <li>
                        <a href="{{ url('/hasil') }}" class="text-decoration-none"><span
                                class="fa fa-paper-plane mr-3"></span> Data
                            Hasil</a>
                    </li>
                </ul>



            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4">Tambah Pegawai</h2>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('pegawai.store') }}" id="pegawaiForm">
                        @csrf
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Pegawai</label>
                                <input type="text" class="form-control border " id="name" name="name"
                                    placeholder="Masukkan nama" autofocus>

                            </div>

                            <div class="mb-3">
                                <label for="c1" class="form-label">Etika</label>
                                <select class="form-select" aria-label="Default select example" name="c1">
                                    <option value="" disabled selected> -- Pilih penilaian --</option>
                                    <option value="1">Sangat Kurang</option>
                                    <option value="2">Kurang</option>
                                    <option value="3">Cukup</option>
                                    <option value="4">Baik</option>
                                    <option value="5">Sangat Baik</option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="c2" class="form-label">Kedisiplinan</label>
                                <select class="form-select" aria-label="Default select example" name="c2">
                                    <option value="" disabled selected> -- Pilih penilaian --</option>
                                    <option value="1">Sangat Kurang</option>
                                    <option value="2">Kurang</option>
                                    <option value="3">Cukup</option>
                                    <option value="4">Baik</option>
                                    <option value="5">Sangat Baik</option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="c3" class="form-label">Absensi</label>
                                <select class="form-select" aria-label="Default select example" name="c3">
                                    <option value="" disabled selected> -- Pilih penilaian --</option>
                                    <option value="1">Sangat Kurang</option>
                                    <option value="2">Kurang</option>
                                    <option value="3">Cukup</option>
                                    <option value="4">Baik</option>
                                    <option value="5">Sangat Baik</option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="c4" class="form-label">Tanggung Jawab</label>
                                <select class="form-select" aria-label="Default select example" name="c4">
                                    <option value="" disabled selected> -- Pilih penilaian --</option>
                                    <option value="1">Sangat Kurang</option>
                                    <option value="2">Kurang</option>
                                    <option value="3">Cukup</option>
                                    <option value="4">Baik</option>
                                    <option value="5">Sangat Baik</option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="c5" class="form-label">Kerja Sama</label>
                                <select class="form-select" aria-label="Default select example" name="c5">
                                    <option value="" disabled selected> -- Pilih penilaian --</option>
                                    <option value="1">Sangat Kurang</option>
                                    <option value="2">Kurang</option>
                                    <option value="3">Cukup</option>
                                    <option value="4">Baik</option>
                                    <option value="5">Sangat Baik</option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="c6" class="form-label">Kemampuan Memimpin</label>
                                <select class="form-select" aria-label="Default select example" name="c6">
                                    <option value="" disabled selected> -- Pilih penilaian --</option>
                                    <option value="1">Sangat Kurang</option>
                                    <option value="2">Kurang</option>
                                    <option value="3">Cukup</option>
                                    <option value="4">Baik</option>
                                    <option value="5">Sangat Baik</option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="c7" class="form-label">Kecepatan Kerja</label>
                                <select class="form-select" aria-label="Default select example" name="c7">
                                    <option value="" disabled selected> -- Pilih penilaian --</option>
                                    <option value="1">Sangat Kurang</option>
                                    <option value="2">Kurang</option>
                                    <option value="3">Cukup</option>
                                    <option value="4">Baik</option>
                                    <option value="5">Sangat Baik</option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="c8" class="form-label">Ketelitian Kerja</label>
                                <select class="form-select" aria-label="Default select example" name="c8">
                                    <option value="" disabled selected> -- Pilih penilaian --</option>
                                    <option value="1">Sangat Kurang</option>
                                    <option value="2">Kurang</option>
                                    <option value="3">Cukup</option>
                                    <option value="4">Baik</option>
                                    <option value="5">Sangat Baik</option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="c9" class="form-label">Kualitas Hasil Kerja</label>
                                <select class="form-select" aria-label="Default select example" name="c9">
                                    <option value="" disabled selected> -- Pilih penilaian --</option>
                                    <option value="1">Sangat Kurang</option>
                                    <option value="2">Kurang</option>
                                    <option value="3">Cukup</option>
                                    <option value="4">Baik</option>
                                    <option value="5">Sangat Baik</option>
                                </select>

                            </div>

                        </div>


                        <button type="submit" class="btn btn-primary mt-3 submit-button">Kirim</button>
                        <a href="{{ route('pegawai.index') }}" class="btn btn-secondary mt-3">Kembali</a>
                    </form>

                </div>
            </div>


        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('#pegawaiForm').submit(function(event) {
                // Prevent the default form submission
                event.preventDefault();

                // Check if any of the form fields are empty
                var formIsEmpty = $(this).find("input[type=text], select").filter(function() {
                    return this.value === "";
                }).length > 0;

                if (formIsEmpty) {
                    // Show a warning alert if any field is empty
                    Swal.fire({
                        position: "top-center",
                        icon: "warning",
                        title: 'Peringatan',
                        text: 'Harap lengkapi semua kolom',
                        showConfirmButton: false,
                        timer: 2500
                    });
                } else {
                    // If all fields are filled, show success alert and submit the form
                    Swal.fire({
                        position: "top-center",
                        icon: "success",
                        title: 'Sukses',
                        text: 'Data berhasil ditambahkan',
                        showConfirmButton: false,
                        timer: 2500
                    });
                    this.submit();
                }
            });
        });
    </script>



</body>

</html>
