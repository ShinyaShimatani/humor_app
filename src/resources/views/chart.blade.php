@extends('layout')

@section('content')
 
<h1>Humor-User-Index</h1>

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

	//チャートを描画
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
					data: [30,40,50,30,75,75,85,90],
                    fill: true,
					backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgb(54, 162, 235)',
                    pointBackgroundColor: 'rgb(54, 162, 235)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(54, 162, 235)'
				},{
                    label: 'Raj',
					data: [30,40,60,50,60,45,55,65],
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
            responsive: false,
            title: {                 // タイトル
                display: true,
                fontSize: 20,
                text: "ユーモアレーダーチャート"
            },
            legend: {
                position: 'bottom'   // 凡例の表示位置
            },
            scale: {
                ticks: {             // 目盛り
                    min: 0,              // 最小値
                    max: 100,            // 最大値
                },
                angleLines: {        // 軸（放射軸）
                    display: true,
                    color: "purple"
                },
                gridLines: {         // 補助線（目盛の線）
                    display: true,
                    color: "lime"
                }
            }
        }
   });
   </script>

@endsection