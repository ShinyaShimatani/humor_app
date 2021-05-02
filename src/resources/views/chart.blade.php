@extends('layout')

@section('content')
 
 <h1>Humor-User-Index</h1>

 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>レーダーチャート</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"><!--　←　触らないBootstrap v4.3.1　-->
    <script src="js/jquery-3.4.1.min.js"></script><!--　←　触らない　-->
    <script src="js/bootstrap.min.js"></script><!--　←　触らない　-->
    <script src="js/Chart.min.js"></script>    
    <style>
        h1{font-size:1.3rem;}
        .table-font { font-size:0.7rem; }
        @media screen and (max-width: 480px) { 
        	.sm-non { display:none; }
        } 
    </style>
</head>
<body>
<div class="container">	
    <h1 class="text-primary my-3">レーダーチャート </h1>
	<div class="row">
		<div class="col-md-7">	
            <!--以下グラフ-->
            <canvas id="myChart"></canvas>
            <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'radar',
                data: {
                    labels: ['モノマネ', '自虐', '哀愁', '緩急', 'ブラックジョーク', '声量', '熱量', '狂気'],
                    datasets: [{
                     label: 'Penny',
                     data: [100,100,100,100,100,100,100,100],
                     fill: true,
                     backgroundColor: 'rgba(255, 99, 132, 0.2)',
                     borderColor: 'rgb(255, 99, 132)',
                     pointBackgroundColor: 'rgb(255, 99, 132)',
                     pointBorderColor: '#fff',
                     pointHoverBackgroundColor: '#fff',
                     pointHoverBorderColor: 'rgb(255, 99, 132)'
                    }, {
                     label: 'Sheldon',
                     data: [10,10,10,10,10,100,10,10],
                     fill: true,
                     backgroundColor: 'rgba(54, 162, 235, 0.2)',
                     borderColor: 'rgb(54, 162, 235)',
                     pointBackgroundColor: 'rgb(54, 162, 235)',
                     pointBorderColor: '#fff',
                     pointHoverBackgroundColor: '#fff',
                     pointHoverBorderColor: 'rgb(54, 162, 235)'
                    }]}
                }
            );
            </script>
            <!--以上グラフ-->
		</div>
	</div>

@endsection