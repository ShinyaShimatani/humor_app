@extends('layout')

@section('content')
 
<h1>Humor-User-Index</h1>

<h4>ユーモアチャート</h4>
   	<canvas id="myChart"></canvas>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
	<!-- chartを描画 -->
   <script>
	//ユーモアラベル
	labels = [
		"モノマネ",
		"自虐",
		"哀愁",
		"緩急",
		"ブラックジョーク",
		"声量",
        "熱量",
        "狂気",
	];
	//チャート2
	var Sheldon_log = [
		30.0,	//モノマネのポイント
		40.0,	//自虐のポイント
		50.0,	//哀愁のポイント
		30.0,	//緩急のポイント
		75.0,	//ブラックジョークのポイント
		75.0,	//声量のポイント
        85.0,	//熱量のポイント
        90.0,	//狂気のポイント
	];
	//チャート3
	var Raj_log = [
		30.0,	//モノマネのポイント
		40.0,	//自虐のポイント
		60.0,	//哀愁のポイント
		50.0,	//緩急のポイント
		60.0,	//ブラックジョークのポイント
		45.0,	//声量のポイント
        55.0,	//熱量のポイント
        65.0,	//狂気のポイント
	];

	//グラフを描画
   var ctx = document.getElementById("myChart");
   var myChart = new Chart(ctx, {
		type: 'radar',
		data : {
			labels: labels,
			datasets: [
				{
					label: 'Penny',
					data: [30,70,30,30,50,70,90,30],
                    fill: true,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgb(255, 99, 132)',
                    pointBackgroundColor: 'rgb(255, 99, 132)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(255, 99, 132)'
				},{
                    label: 'Sheldon',
					data: Sheldon_log,
                    fill: true,
					backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgb(54, 162, 235)',
                    pointBackgroundColor: 'rgb(54, 162, 235)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(54, 162, 235)'
				},{
                    label: 'Raj',
					data: Raj_log,
                    fill: true,
					backgroundColor: 'rgba(100, 150, 30, 0.2)',
                    borderColor: 'rgb(155, 50, 30)',
                    pointBackgroundColor: 'rgb(150, 99, 65)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(155, 132, 90)'
				},

			]
		},
		options: {
			title: {
				display: true,
			}
		}
   });
   </script>

@endsection