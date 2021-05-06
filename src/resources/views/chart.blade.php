@extends('layout')

@section('content')
 
<h1>Humor-User-Index</h1>

<h4>ユーモアチャート</h4>
   	<canvas id="myChart"></canvas>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
	<!-- chartを描画 -->
   <script>
	//ユーモアラベル
	var labels = [
		"モノマネ",
		"自虐",
		"哀愁",
		"緩急",
		"ブラックジョーク",
		"声量",
        "熱量",
        "狂気",
	];
	//チャート1
	var Penny_log = [
		100.0,	//モノマネのポイント
		100.0,	//自虐のポイント
		100.0,	//哀愁のポイント
		100.0,	//緩急のポイント
		100.0,	//ブラックジョークのポイント
		100.0,	//声量のポイント
        100.0,	//熱量のポイント
        100.0,	//狂気のポイント
	];
	//チャート2
	var Sheldon_log = [
		10.0,	//モノマネのポイント
		10.0,	//自虐のポイント
		10.0,	//哀愁のポイント
		10.0,	//緩急のポイント
		10.0,	//ブラックジョークのポイント
		100.0,	//声量のポイント
        10.0,	//熱量のポイント
        10.0,	//狂気のポイント
	];
	//チャート3
	var Raj_log = [
		30.0,	//モノマネのポイント
		20.0,	//自虐のポイント
		60.0,	//哀愁のポイント
		90.0,	//緩急のポイント
		10.0,	//ブラックジョークのポイント
		30.0,	//声量のポイント
        75.0,	//熱量のポイント
        100.0,	//狂気のポイント
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
					data: Penny_log,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgb(255, 99, 132)',
                    pointBackgroundColor: 'rgb(255, 99, 132)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(255, 99, 132)'
				},
                    label: 'Sheldon',
					data: Sheldon_log,
					backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgb(54, 162, 235)',
                    pointBackgroundColor: 'rgb(54, 162, 235)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(54, 162, 235)'
				},
                    label: 'Raj',
					data: Raj_log,
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