<!doctype html>
<html lang="en">

<head>
    <title>Perhitungan</title>
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
                    <li>
                        <a href="{{ url('/kriteria') }}"><span class="fa fa-user mr-3"></span> Data
                            Kriteria</a>
                    </li>
                    <li>
                        <a href="{{ url('/pegawai') }}"><span class="fa fa-briefcase mr-3"></span> Data
                            Pegawai</a>
                    </li>
                    <li class="active">
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
            <h3>Data Pegawai</h3>
            <div class="card w-100 p-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped m-0">
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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pegawaiData as $pegawai)
                                    <tr>
                                        <th scope="row">{{ $pegawai->id }}</th>
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
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- matrix keputusan --}}
            <h3 class="mt-5">Matriks Keputusan X</h3>
            <div class="card w-100 p-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table  table-striped">
                            <tbody>
                                @foreach ($pegawaiData as $pegawai)
                                    <tr>
                                        <td>{{ $pegawai->c1 }}</td>
                                        <td>{{ $pegawai->c2 }}</td>
                                        <td>{{ $pegawai->c3 }}</td>
                                        <td>{{ $pegawai->c4 }}</td>
                                        <td>{{ $pegawai->c5 }}</td>
                                        <td>{{ $pegawai->c6 }}</td>
                                        <td>{{ $pegawai->c7 }}</td>
                                        <td>{{ $pegawai->c8 }}</td>
                                        <td>{{ $pegawai->c9 }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- akhir matrix keputusan --}}

            {{-- Rata Rata AV --}}
            <h3 class="mt-5">Rata Rata AV</h3>
            <div class="card w-100 p-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th scope="col">C1</th>
                                    <th scope="col">C2</th>
                                    <th scope="col">C3</th>
                                    <th scope="col">C4</th>
                                    <th scope="col">C5</th>
                                    <th scope="col">C6</th>
                                    <th scope="col">C7</th>
                                    <th scope="col">C8</th>
                                    <th scope="col">C9</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="col">{{ $avgC1 }}</td>
                                    <td scope="col">{{ $avgC2 }}</td>
                                    <td scope="col">{{ $avgC3 }}</td>
                                    <td scope="col">{{ $avgC4 }}</td>
                                    <td scope="col">{{ $avgC5 }}</td>
                                    <td scope="col">{{ $avgC6 }}</td>
                                    <td scope="col">{{ $avgC7 }}</td>
                                    <td scope="col">{{ $avgC8 }}</td>
                                    <td scope="col">{{ $avgC9 }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- Akhir Rata Rata AV --}}

            {{-- Matriks PDA --}}
            <h3 class="mt-5">Matriks PDA</h3>
            <div class="card w-100 p-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table  table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Alternatif</th>
                                    @for ($i = 1; $i <= 9; $i++)
                                        <th scope="col">PDA{{ $i }}</th>
                                    @endfor
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pegawaiData as $index => $pegawai)
                                    <tr>
                                        <th scope="row">A{{ $pegawai->id }}</th>
                                        @for ($i = 1; $i <= 9; $i++)
                                            <td>{{ $columnResultsPDA["c{$i}Results"][$index] }}</td>
                                        @endfor
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- Akhir Matriks NDA --}}

            {{-- Matriks NDA --}}
            <h3 class="mt-5">Matriks NDA</h3>
            <div class="card w-100 p-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th scope="col">Alternatif</th>
                                    @for ($i = 1; $i <= 9; $i++)
                                        <th scope="col">NDA{{ $i }}</th>
                                    @endfor
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pegawaiData as $index => $pegawai)
                                    <tr>
                                        <th scope="row">A{{ $pegawai->id }}</th>
                                        @for ($i = 1; $i <= 9; $i++)
                                            <td>{{ $columnResultsNDA["c{$i}Results"][$index] }}</td>
                                        @endfor
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- Akhir Matriks PDA --}}

            {{-- SP --}}
            <h3 class="mt-5">SP</h3>
            <div class="card w-100 p-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th scope="col">Alternatif</th>
                                    <th scope="col">SP</th> <!-- New Column for Row Sum -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pegawaiData as $index => $pegawai)
                                    <tr>
                                        <th scope="row">A{{ $pegawai->id }}</th>
                                        <td>{{ $spValues[$index] }}</td> <!-- Display Row Sum -->
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- Akhir SP --}}

            {{-- SN --}}
            <h3 class="mt-5">SN</h3>
            <div class="card w-100 p-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Alternatif</th>
                                    <th scope="col">SN</th> <!-- New Column for Row Sum -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pegawaiData as $index => $pegawai)
                                    <tr>
                                        <th>A{{ $pegawai->id }}</th>
                                        <td>{{ $snValues[$index] }}</td> <!-- Display Row Sum -->
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- Akhir SN --}}

            {{-- NSP --}}
            <h3 class="mt-5">NSP</h3>
            <div class="card w-100 p-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Alternatif</th>
                                    <th scope="col">NSP</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($normalizedSPArray as $id => $normalizedSPValue)
                                    <tr>
                                        <th>A{{ $id + 1 }}</th>
                                        <td>{{ $normalizedSPValue }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2">No data available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- Akhir NSP --}}

            {{-- NSN --}}
            <h3 class="mt-5">NSN</h3>
            <div class="card w-100 p-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Alternatif</th>
                                    <th scope="col">NSN</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($normalizedSNArray as $id => $normalizedSNValue)
                                    <tr>
                                        <th>A{{ $id + 1 }}</th>
                                        <td>{{ $normalizedSNValue }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2">No data available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- Akhir NSN --}}

            {{-- Scoring --}}
            <h3 class="mt-5">Penilaian Akhir</h3>
            <div class="card w-100 p-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pegawaiData as $index => $pegawai)
                                    <tr>
                                        <th>A{{ $pegawai->id }}</th>
                                        <td>{{ $sumArray[$index] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- Akhir Scoring --}}

            {{-- Perankingan --}}
            <h3 class="mt-5">Perankingan</h3>
            <div class="card w-100 p-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($sumArray as $index => $value)
                                    @if (isset($pegawaiData[$index]))
                                        <tr>
                                            <th>A{{ $pegawaiData[$index]->id }}</th>
                                            <td>{{ $value }}</td>
                                        </tr>
                                    @endif
                                @empty
                                    <tr>
                                        <td colspan="2">No data available</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- Akhir Perankingan --}}

        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
