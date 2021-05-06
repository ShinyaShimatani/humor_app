@extends('layout')

@section('content')
 
<h2>レーダーチャート</h2>
<h4>-バランスと傾向を見る-</h4>
<br>
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
					backgroundColor: 'rgba(255, 192, 203, 0.2)', 
                    borderColor: 'rgb(255, 192, 203)', 
                    pointBackgroundColor: 'rgb(255, 192, 203)', 
                    pointBorderColor: '#fff', 
                    pointHoverBackgroundColor: '#fff', 
                    pointHoverBorderColor: 'rgb(255, 192, 203)' 
				},{
                    label: 'Sheldon',
					data: [30,40,50,30,75,75,85,90],
                    fill: true,
					backgroundColor: 'rgba(255, 99, 71, 0.2)', 
                    borderColor: 'rgb(255, 99, 71)',
                    pointBackgroundColor: 'rgb(255, 99, 71)', 
                    pointBorderColor: '#fff', 
                    pointHoverBackgroundColor: '#fff', 
                    pointHoverBorderColor: 'rgb(255, 99, 71)' 
				},{
                    label: 'Raj',
					data: [30,40,60,50,60,45,55,65],
                    fill: true,
					backgroundColor: 'rgba(255, 165, 0, 0.2)', 
                    borderColor: 'rgb(255, 165, 0)', 
                    pointBackgroundColor: 'rgb(255, 165, 0)', 
                    pointBorderColor: '#fff', 
                    pointHoverBackgroundColor: '#fff', 
                    pointHoverBorderColor: 'rgb(255, 165, 0)' 
				},

			]
		},
        options: {
             scale: {
                pointLabels: {       // 軸のラベル(ユーモア要素)
                    fontSize: 18,         // 文字の大きさ
                    fontColor: "black"    // 文字の色
                },
                ticks: {    // 目盛り
                    min: 0,   // 最小値
                    max: 100, // 最大値
                },
             }
        }
   });
   </script>

<br>
<a href="{{ route('index') }}">一覧に戻る</a>
<br>
@endsection