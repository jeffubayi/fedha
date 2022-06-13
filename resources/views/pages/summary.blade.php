@php

@endphp


@extends('layouts.master')

@section('content')
    <div class="container-fluid px-8 h-1/4">
            <div class="shadow-lg rounded-lg overflow-hidden">
                <div class="py-3 px-5 bg-gray-50">Overview</div>
                <canvas class="p-10 bg-white" id="chartPie"></canvas>
            </div>

            <!-- Required chart.js -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <!-- Chart pie -->
            <script>
                const dataPie = {
                    labels: [" Income", "Expense", "Balance"],
                    datasets: [{
                        label: "Monthly Report",
                        data: [{{ $total_income }}, {{ $total_expense }}, {{ $balance }}],
                        backgroundColor: [
                            "rgb(133, 105, 241)",
                            "#4dffbe",
                            "rgb(101, 143, 241)",
                        ],
                        hoverOffset: 4,
                    }, ],
                };

                const configPie = {
                    type: "bar",
                    data: dataPie,
                    options: {},
                };

                var chartBar = new Chart(document.getElementById("chartPie"), configPie);
            </script>

        </div>
@endsection
