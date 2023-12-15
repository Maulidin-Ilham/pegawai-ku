<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function index()
    {
        //
        return view("dashboard.index");
    }

    public function kriteria()
    {
        //
        $criterias = Criteria::all();
        return view("dashboard.kriteria.index",[
            "criterias" => $criterias
        ]);
    }

    public function pegawai()
    {
        //
        $pegawais = Pegawai::all();
        return view("dashboard.pegawai.index",[
            "pegawais" => $pegawais
        ]);
    }

    public function perhitungan()
    {
        //ambil data tiap kolom
        $pegawaiData = Pegawai::all();
        $avgC1 = Pegawai::avg("c1");
        $avgC2 = Pegawai::avg("c2");
        $avgC3 = Pegawai::avg("c3");
        $avgC4 = Pegawai::avg("c4");
        $avgC5 = Pegawai::avg("c5");
        $avgC6 = Pegawai::avg("c6");
        $avgC7 = Pegawai::avg("c7");
        $avgC8 = Pegawai::avg("c8");
        $avgC9 = Pegawai::avg("c9");


        // menghitung rata rata tiap kolom
        $avgValues = [];

        for ($i = 1; $i <= 9; $i++) {
            $avgValues["avgC$i"] = Pegawai::avg("c$i");
        }

        // menyimpan dalam array
        $columnValues = [];

        for ($i = 1; $i <= 9; $i++) {
            $columnValues["c{$i}Values"] = Pegawai::pluck("c$i")->all();
        }


        $columnDifferences = [];

        for ($i = 1; $i <= 9; $i++) {
            $columnDifferences["c{$i}Differences"] = array_map(function ($value) use ($avgValues, $i) {
                return $value - $avgValues["avgC$i"];
            }, $columnValues["c{$i}Values"]);
        }

        // menghitung PDA
        $columnResultsPDA = [];

        for ($i = 1; $i <= 9; $i++) {
            $columnValues = Pegawai::pluck("c$i")->all();
            $columnDifferences = array_map(function ($value) use ($avgValues, $i) {
                $result = max(0, ($value - $avgValues["avgC$i"]) / $avgValues["avgC$i"]);

                return number_format($result, 3);
            }, $columnValues);
            $columnResultsPDA["c{$i}Results"] = $columnDifferences;
        }

        // menghitung NDA
        $columnResultsNDA = [];

        for ($i = 1; $i <= 9; $i++) {
            $columnValues = Pegawai::pluck("c$i")->all();
            $columnDifferences = array_map(function ($value) use ($avgValues, $i) {
                $result = max(0, ($avgValues["avgC$i"] -$value  ) / $avgValues["avgC$i"]);

                return number_format($result, 3);
            }, $columnValues);
            $columnResultsNDA["c{$i}Results"] = $columnDifferences;
        }

        // menghitung SP
        $pegawaiData = Pegawai::all();
        $spValues = [];

        foreach ($pegawaiData as $index => $pegawai) {
            $weightedResults = [];

            for ($i = 1; $i <= 9; $i++) {
                $weights = Criteria::where('id', $i)->value('weight');
                $result = $columnResultsPDA["c{$i}Results"][$index] * $weights;
                $weightedResults[] = number_format($result, 3);
            }

            $spValues[] = number_format(array_sum($weightedResults), 3);
        }

        // menghitung SN
        $pegawaiData = Pegawai::all();
        $snValues = [];

        foreach ($pegawaiData as $index => $pegawai) {
            $weightedResults = [];

            for ($i = 1; $i <= 9; $i++) {
                $weights = Criteria::where('id', $i)->value('weight');
                $result = $columnResultsNDA["c{$i}Results"][$index] * $weights;
                $weightedResults[] = number_format($result, 3);
            }

            $snValues[] = number_format(array_sum($weightedResults), 3);
        }


        // menghitung NSP
        $maxSPValue = max($spValues);

        $normalizedSPArray = [];
        foreach ($spValues as $id => $value) {
            $normalizedSPArray[$id] = number_format($value / $maxSPValue, 3);
        }


        // menghitung NSN
        $maxSNValue = max($snValues);

        $normalizedSNArray = [];
        foreach ($snValues as $id => $value) {
            $normalizedSNArray[$id] = number_format(1-($value / $maxSNValue), 3);
        }


        // menghitung score
        $sumArray = [];
        foreach ($normalizedSPArray as $index => $normalizedSPValue) {
            if (isset($normalizedSNArray[$index])) {
                $sumArray[$index] = number_format($normalizedSPValue + $normalizedSNArray[$index], 3)/2;
            }
        }

        // filter score
        arsort($sumArray);

        return view('dashboard.perhitungan.index', [
            'pegawaiData' => $pegawaiData,
            'avgC1' => $avgC1,
            'avgC2' => $avgC2,
            'avgC3' => $avgC3,
            'avgC4' => $avgC4,
            'avgC5' => $avgC5,
            'avgC6' => $avgC6,
            'avgC7' => $avgC7,
            'avgC8' => $avgC8,
            'avgC9' => $avgC9,
            "columnResultsPDA" => $columnResultsPDA,
            "columnResultsNDA" => $columnResultsNDA,
            "spValues" => $spValues,
            "snValues" => $snValues,
            "normalizedSPArray" => $normalizedSPArray,
            "normalizedSNArray" => $normalizedSNArray,
            "sumArray" => $sumArray,


        ]);
    }

    public function hasil()
    {
        //ambil data tiap kolom
        $pegawaiData = Pegawai::all();
        $avgC1 = Pegawai::avg("c1");
        $avgC2 = Pegawai::avg("c2");
        $avgC3 = Pegawai::avg("c3");
        $avgC4 = Pegawai::avg("c4");
        $avgC5 = Pegawai::avg("c5");
        $avgC6 = Pegawai::avg("c6");
        $avgC7 = Pegawai::avg("c7");
        $avgC8 = Pegawai::avg("c8");
        $avgC9 = Pegawai::avg("c9");


        // menghitung rata rata tiap kolom
        $avgValues = [];

        for ($i = 1; $i <= 9; $i++) {
            $avgValues["avgC$i"] = Pegawai::avg("c$i");
        }

        // menyimpan dalam array
        $columnValues = [];

        for ($i = 1; $i <= 9; $i++) {
            $columnValues["c{$i}Values"] = Pegawai::pluck("c$i")->all();
        }


        $columnDifferences = [];

        for ($i = 1; $i <= 9; $i++) {
            $columnDifferences["c{$i}Differences"] = array_map(function ($value) use ($avgValues, $i) {
                return $value - $avgValues["avgC$i"];
            }, $columnValues["c{$i}Values"]);
        }

        // menghitung PDA
        $columnResultsPDA = [];

        for ($i = 1; $i <= 9; $i++) {
            $columnValues = Pegawai::pluck("c$i")->all();
            $columnDifferences = array_map(function ($value) use ($avgValues, $i) {
                $result = max(0, ($value - $avgValues["avgC$i"]) / $avgValues["avgC$i"]);

                return number_format($result, 3);
            }, $columnValues);
            $columnResultsPDA["c{$i}Results"] = $columnDifferences;
        }

        // menghitung NDA
        $columnResultsNDA = [];

        for ($i = 1; $i <= 9; $i++) {
            $columnValues = Pegawai::pluck("c$i")->all();
            $columnDifferences = array_map(function ($value) use ($avgValues, $i) {
                $result = max(0, ($avgValues["avgC$i"] -$value  ) / $avgValues["avgC$i"]);

                return number_format($result, 3);
            }, $columnValues);
            $columnResultsNDA["c{$i}Results"] = $columnDifferences;
        }

        // menghitung SP
        $pegawaiData = Pegawai::all();
        $spValues = [];

        foreach ($pegawaiData as $index => $pegawai) {
            $weightedResults = [];

            for ($i = 1; $i <= 9; $i++) {
                $weights = Criteria::where('id', $i)->value('weight');
                $result = $columnResultsPDA["c{$i}Results"][$index] * $weights;
                $weightedResults[] = number_format($result, 3);
            }

            $spValues[] = number_format(array_sum($weightedResults), 3);
        }

        // menghitung SN
        $pegawaiData = Pegawai::all();
        $snValues = [];

        foreach ($pegawaiData as $index => $pegawai) {
            $weightedResults = [];

            for ($i = 1; $i <= 9; $i++) {
                $weights = Criteria::where('id', $i)->value('weight');
                $result = $columnResultsNDA["c{$i}Results"][$index] * $weights;
                $weightedResults[] = number_format($result, 3);
            }

            $snValues[] = number_format(array_sum($weightedResults), 3);
        }


        // menghitung NSP
        $maxSPValue = max($spValues);

        $normalizedSPArray = [];
        foreach ($spValues as $id => $value) {
            $normalizedSPArray[$id] = number_format($value / $maxSPValue, 3);
        }


        // menghitung NSN
        $maxSNValue = max($snValues);

        $normalizedSNArray = [];
        foreach ($snValues as $id => $value) {
            $normalizedSNArray[$id] = number_format(1-($value / $maxSNValue), 3);
        }


        // menghitung score
        $sumArray = [];
        foreach ($normalizedSPArray as $index => $normalizedSPValue) {
            if (isset($normalizedSNArray[$index])) {
                $sumArray[$index] = number_format($normalizedSPValue + $normalizedSNArray[$index], 3)/2;
            }
        }

        // filter score
        arsort($sumArray);
        return view("dashboard.hasil.index",[
            'sumArray' => $sumArray,
            'pegawaiData' => $pegawaiData,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
