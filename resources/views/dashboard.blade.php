@extends('layout.master')
@section('title','dashboard')
@section('menuDashboard','active')

@section('content')
<!-- **************** Main Banner Area Start ***************** -->
            <div class="typemetric-stylestyle-container">
                <a href="/totalBarang">
                    <img class="type-metric-style-style" src="img/Type=Metric. Style=Style 11.png"
                        alt="Type=Metric. Style=Style 11" />
                </a>
                <a href="/posts">
                    <img class="type-metric-style-style" src="img/Type=Metric. Style=Style 10.png"
                        alt="Type=Metric. Style=Style 10" />
                </a>
                <a href="/barangKeluar">
                    <img class="type-metric-style-style" src="img/Type=Metric. Style=Style 9.png"
                        alt="Type=Metric. Style=Style 9" />
                </a>
            </div>
            <div class="typemetric-stylestyle-1-container">
                <a href="/posts/create">
                    <img class="type-metric-style-style" src="img/Type=Metric. Style=Style 12.png"
                        alt="Type=Metric. Style=Style 12" />
                </a>
                <a href="/dataTransaksi">
                    <img class="type-metric-style-style" src="img/Type=Metric. Style=Style 13.png"
                        alt="Type=Metric. Style=Style 13" />
                </a>
            </div>
        </div>

@endsection
