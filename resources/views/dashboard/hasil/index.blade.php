<!doctype html>
<html lang="en">

<head>
    <title>Hasil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.js"></script>
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
                    <li>
                        <a href="{{ url('/pegawai') }}"><span class="fa fa-briefcase mr-3"></span> Data
                            Pegawai</a>
                    </li>
                    <li>
                        <a href="{{ url('/perhitungan') }}"><span class="fa fa-sticky-note mr-3"></span>
                            Data Perhitungan</a>
                    </li>
                    <li class="active">
                        <a href="{{ url('/hasil') }}"><span class="fa fa-paper-plane mr-3"></span> Data
                            Hasil</a>
                    </li>
                </ul>

            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4">Data Hasil</h2>
            <button id="generatePdfBtn" class="btn btn-success "><i class="bi bi-printer"></i></button>
            <div class="card w-100 p-0 mt-2">
                <div class="card-body p-0">
                    <div class="table-responsive" id="pdftable">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Rank</th>
                                    <th scope="col">Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($sumArray as $index => $value)
                                    @if (isset($pegawaiData[$index]))
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $pegawaiData[$index]->name }}</td>

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

        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#generatePdfBtn').on('click', function() {
                var element = document.getElementById('pdftable');
                var title = 'Ranking Pegawai';

                html2pdf(element, {
                    margin: 10,
                    filename: 'data-ranking.pdf',
                    image: {
                        type: 'jpeg',
                        quality: 2
                    },
                    html2canvas: {
                        scale: 2
                    },
                    jsPDF: {
                        unit: 'mm',
                        format: 'a4',
                        orientation: 'portrait'
                    },
                    pagebreak: {
                        before: '.break-page'
                    },
                    header: [{
                        text: title,

                        fontSize: 14,
                        margin: [10, 10, 10, 10],
                        alignment: 'center'
                    }],
                });
            });
        });
    </script>


</body>

</html>
