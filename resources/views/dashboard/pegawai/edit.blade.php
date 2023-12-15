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
                    <form method="post" action="{{ route('pegawai.update', $pegawai->id) }}" id="pegawaiForm">

                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Pegawai</label>
                                <input type="text" class="form-control border " id="name" name="name"
                                    placeholder="Masukkan nama" autofocus value="{{ $pegawai->name }}">

                            </div>

                            <div class="mb-3">
                                <label for="c1" class="form-label">Etika</label>
                                <select class="form-select" aria-label="Default select example" name="c1">
                                    <option value="" disabled selected> -- Pilih penilaian --</option>
                                    <option value="1" {{ $pegawai->c1 == 1 ? 'selected' : '' }}>Sangat Kurang
                                    </option>
                                    <option value="2" {{ $pegawai->c1 == 2 ? 'selected' : '' }}>Kurang</option>
                                    <option value="3" {{ $pegawai->c1 == 3 ? 'selected' : '' }}>Cukup</option>
                                    <option value="4" {{ $pegawai->c1 == 4 ? 'selected' : '' }}>Baik</option>
                                    <option value="5" {{ $pegawai->c1 == 5 ? 'selected' : '' }}>Sangat Baik
                                    </option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="c2" class="form-label">Kedisiplinan</label>
                                <select class="form-select" aria-label="Default select example" name="c2">
                                    <option value="" disabled selected> -- Pilih penilaian --</option>
                                    <option value="" disabled selected> -- Pilih penilaian --</option>
                                    <option value="1" {{ $pegawai->c2 == 1 ? 'selected' : '' }}>Sangat Kurang
                                    </option>
                                    <option value="2" {{ $pegawai->c2 == 2 ? 'selected' : '' }}>Kurang</option>
                                    <option value="3" {{ $pegawai->c2 == 3 ? 'selected' : '' }}>Cukup</option>
                                    <option value="4" {{ $pegawai->c2 == 4 ? 'selected' : '' }}>Baik</option>
                                    <option value="5" {{ $pegawai->c2 == 5 ? 'selected' : '' }}>Sangat Baik
                                    </option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="c3" class="form-label">Absensi</label>
                                <select class="form-select" aria-label="Default select example" name="c3">
                                    <option value="" disabled selected> -- Pilih penilaian --</option>
                                    <option value="1" {{ $pegawai->c3 == 1 ? 'selected' : '' }}>Sangat Kurang
                                    </option>
                                    <option value="2" {{ $pegawai->c3 == 2 ? 'selected' : '' }}>Kurang</option>
                                    <option value="3" {{ $pegawai->c3 == 3 ? 'selected' : '' }}>Cukup</option>
                                    <option value="4" {{ $pegawai->c3 == 4 ? 'selected' : '' }}>Baik</option>
                                    <option value="5" {{ $pegawai->c3 == 5 ? 'selected' : '' }}>Sangat Baik
                                    </option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="c4" class="form-label">Tanggung Jawab</label>
                                <select class="form-select" aria-label="Default select example" name="c4">
                                    <option value="" disabled selected> -- Pilih penilaian --</option>
                                    <option value="1" {{ $pegawai->c4 == 1 ? 'selected' : '' }}>Sangat Kurang
                                    </option>
                                    <option value="2" {{ $pegawai->c4 == 2 ? 'selected' : '' }}>Kurang</option>
                                    <option value="3" {{ $pegawai->c4 == 3 ? 'selected' : '' }}>Cukup</option>
                                    <option value="4" {{ $pegawai->c4 == 4 ? 'selected' : '' }}>Baik</option>
                                    <option value="5" {{ $pegawai->c4 == 5 ? 'selected' : '' }}>Sangat Baik
                                    </option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="c5" class="form-label">Kerja Sama</label>
                                <select class="form-select" aria-label="Default select example" name="c5">
                                    <option value="" disabled selected> -- Pilih penilaian --</option>
                                    <option value="1" {{ $pegawai->c5 == 1 ? 'selected' : '' }}>Sangat Kurang
                                    </option>
                                    <option value="2" {{ $pegawai->c5 == 2 ? 'selected' : '' }}>Kurang</option>
                                    <option value="3" {{ $pegawai->c5 == 3 ? 'selected' : '' }}>Cukup</option>
                                    <option value="4" {{ $pegawai->c5 == 4 ? 'selected' : '' }}>Baik</option>
                                    <option value="5" {{ $pegawai->c5 == 5 ? 'selected' : '' }}>Sangat Baik
                                    </option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="c6" class="form-label">Kemampuan Memimpin</label>
                                <select class="form-select" aria-label="Default select example" name="c6">
                                    <option value="" disabled selected> -- Pilih penilaian --</option>
                                    <option value="1" {{ $pegawai->c6 == 1 ? 'selected' : '' }}>Sangat Kurang
                                    </option>
                                    <option value="2" {{ $pegawai->c6 == 2 ? 'selected' : '' }}>Kurang</option>
                                    <option value="3" {{ $pegawai->c6 == 3 ? 'selected' : '' }}>Cukup</option>
                                    <option value="4" {{ $pegawai->c6 == 4 ? 'selected' : '' }}>Baik</option>
                                    <option value="5" {{ $pegawai->c6 == 5 ? 'selected' : '' }}>Sangat Baik
                                    </option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="c7" class="form-label">Kecepatan Kerja</label>
                                <select class="form-select" aria-label="Default select example" name="c7">
                                    <option value="" disabled selected> -- Pilih penilaian --</option>
                                    <option value="1" {{ $pegawai->c7 == 1 ? 'selected' : '' }}>Sangat Kurang
                                    </option>
                                    <option value="2" {{ $pegawai->c7 == 2 ? 'selected' : '' }}>Kurang</option>
                                    <option value="3" {{ $pegawai->c7 == 3 ? 'selected' : '' }}>Cukup</option>
                                    <option value="4" {{ $pegawai->c7 == 4 ? 'selected' : '' }}>Baik</option>
                                    <option value="5" {{ $pegawai->c7 == 5 ? 'selected' : '' }}>Sangat Baik
                                    </option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="c8" class="form-label">Ketelitian Kerja</label>
                                <select class="form-select" aria-label="Default select example" name="c8">
                                    <option value="" disabled selected> -- Pilih penilaian --</option>
                                    <option value="1" {{ $pegawai->c8 == 1 ? 'selected' : '' }}>Sangat Kurang
                                    </option>
                                    <option value="2" {{ $pegawai->c8 == 2 ? 'selected' : '' }}>Kurang</option>
                                    <option value="3" {{ $pegawai->c8 == 3 ? 'selected' : '' }}>Cukup</option>
                                    <option value="4" {{ $pegawai->c8 == 4 ? 'selected' : '' }}>Baik</option>
                                    <option value="5" {{ $pegawai->c8 == 5 ? 'selected' : '' }}>Sangat Baik
                                    </option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="c9" class="form-label">Kualitas Hasil Kerja</label>
                                <select class="form-select" aria-label="Default select example" name="c9">
                                    <option value="" disabled selected> -- Pilih penilaian --</option>
                                    <option value="1" {{ $pegawai->c9 == 1 ? 'selected' : '' }}>Sangat Kurang
                                    </option>
                                    <option value="2" {{ $pegawai->c9 == 2 ? 'selected' : '' }}>Kurang</option>
                                    <option value="3" {{ $pegawai->c9 == 3 ? 'selected' : '' }}>Cukup</option>
                                    <option value="4" {{ $pegawai->c9 == 4 ? 'selected' : '' }}>Baik</option>
                                    <option value="5" {{ $pegawai->c9 == 5 ? 'selected' : '' }}>Sangat Baik
                                    </option>
                                </select>

                            </div>

                        </div>


                        <button type="submit" class="btn btn-primary mt-3">Kirim</button>
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

                event.preventDefault();

                Swal.fire({
                    position: "top-center",
                    icon: "success",
                    title: 'Sukses',
                    text: 'Data berhasil diubah',
                    showConfirmButton: false,
                    timer: 2500
                });

                // Submit the form (if needed)
                this.submit();
            });
        });
    </script>

</body>

</html>
