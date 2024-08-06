<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Thuecode.net Nhận code thuê các mã nguồn laravel,nodejs">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Thuecode.net Nhận code thuê các mã nguồn laravel,nodejs">
    <meta property="og:title" content="Thuecode.net - Nhận code thuê, đục api bank">
    <meta property="og:url" content="http://thuecode.net">
    <meta property="og:image" content="">
    <meta property="og:description" content="Thuecode.net Nhận code thuê các mã nguồn laravel,nodejs">
    <title>{{ $title ?? 'Hello Mini Work' }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <@livewire('user.layouts.navbar')>
        <!-- Sidebar menu-->
        <@livewire('user.layouts.sidebar')>


            <main class="app-content">
                <div class="app-title">
                    <div>
                        <h1><i class="bi bi-speedometer"></i> Blank Page</h1>
                        <p>Start a beautiful journey here</p>
                    </div>
                    <ul class="app-breadcrumb breadcrumb">
                        <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
                        <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="widget-small primary coloured-icon"><i class="icon bi bi-people fs-1"></i>
                            <div class="info">
                                <h4>Users</h4>
                                <p><b>5</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="widget-small info coloured-icon"><i class="icon bi bi-heart fs-1"></i>
                            <div class="info">
                                <h4>Likes</h4>
                                <p><b>25</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="widget-small warning coloured-icon"><i class="icon bi bi-folder2 fs-1"></i>
                            <div class="info">
                                <h4>Uploades</h4>
                                <p><b>10</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="widget-small danger coloured-icon"><i class="icon bi bi-star fs-1"></i>
                            <div class="info">
                                <h4>Stars</h4>
                                <p><b>500</b></p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- {{ $slot }} --}}
            </main>

            <!-- Essential javascripts for application to work-->
            <script src="{{ asset('/assets/js/jquery-3.7.0.min.js') }}"></script>
            <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('/assets/js/main.js') }}"></script>
            <!-- Page specific javascripts-->
            {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
    <script type="text/javascript">
        const salesData = {
            xAxis: {
                type: 'category',
                data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
            },
            yAxis: {
                type: 'value',
                axisLabel: {
                    formatter: '${value}'
                }
            },
            series: [{
                data: [150, 230, 224, 218, 135, 147, 260],
                type: 'line',
                smooth: true
            }],
            tooltip: {
                trigger: 'axis',
                formatter: "<b>{b0}:</b> ${c0}"
            }
        }

        const supportRequests = {
            tooltip: {
                trigger: 'item'
            },
            legend: {
                orient: 'vertical',
                left: 'left'
            },
            series: [{
                name: 'Support Requests',
                type: 'pie',
                radius: '50%',
                data: [{
                        value: 300,
                        name: 'In Progress'
                    },
                    {
                        value: 50,
                        name: 'Delayed'
                    },
                    {
                        value: 100,
                        name: 'Complete'
                    }
                ],
                emphasis: {
                    itemStyle: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }]
        };

        const salesChartElement = document.getElementById('salesChart');
        const salesChart = echarts.init(salesChartElement, null, {
            renderer: 'svg'
        });
        salesChart.setOption(salesData);
        new ResizeObserver(() => salesChart.resize()).observe(salesChartElement);

        const supportChartElement = document.getElementById("supportRequestChart")
        const supportChart = echarts.init(supportChartElement, null, {
            renderer: 'svg'
        });
        supportChart.setOption(supportRequests);
        new ResizeObserver(() => supportChart.resize()).observe(supportChartElement);
    </script> --}}
</body>

</html>
