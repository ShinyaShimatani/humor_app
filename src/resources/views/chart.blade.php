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
					backgroundColor: 'rgba(205, 92, 92, 0.2)', 
                    borderColor: 'rgb(205, 92, 92)', 
                    pointBackgroundColor: 'rgb(205, 92, 92)', 
                    pointBorderColor: '#fff', 
                    pointHoverBackgroundColor: '#fff', 
                    pointHoverBorderColor: 'rgb(205, 92, 92)' 
				},{
                    label: 'Sheldon',
					data: [30,40,50,30,75,75,85,90],
                    fill: true,
					backgroundColor: 'rgba(255, 140, 0, 0.2)', 
                    borderColor: 'rgb(255, 140, 0)',
                    pointBackgroundColor: 'rgb(255, 140, 0)', 
                    pointBorderColor: '#fff', 
                    pointHoverBackgroundColor: '#fff', 
                    pointHoverBorderColor: 'rgb(255, 140, 0)' 
				},{
                    label: 'Raj',
					data: [30,40,60,50,60,45,55,65],
                    fill: true,
					backgroundColor: 'rgba(189, 183, 107, 0.2)', 
                    borderColor: 'rgb(189, 183, 107)', 
                    pointBackgroundColor: 'rgb(189, 183, 107)', 
                    pointBorderColor: '#fff', 
                    pointHoverBackgroundColor: '#fff', 
                    pointHoverBorderColor: 'rgb(189, 183, 107)' 
				},{
                    label: 'Mike',
					data: [60,30,60,45,90,70,80,85],
                    fill: true,
					backgroundColor: 'rgba(50, 205, 50, 0.2)', 
                    borderColor: 'rgb(50, 205, 50)', 
                    pointBackgroundColor: 'rgb(50, 205, 50)', 
                    pointBorderColor: '#fff', 
                    pointHoverBackgroundColor: '#fff', 
                    pointHoverBorderColor: 'rgb(50, 205, 50)' 
				},{
                    label: 'Dwight',
					data: [30,30,70,40,95,95,80,90],
                    fill: true,
					backgroundColor: 'rgba(218, 112, 214, 0.2)', 
                    borderColor: 'rgb(218, 112, 214)', 
                    pointBackgroundColor: 'rgb(218, 112, 214)', 
                    pointBorderColor: '#fff', 
                    pointHoverBackgroundColor: '#fff', 
                    pointHoverBorderColor: 'rgb(218, 112, 214)' 
				},{
                    label: 'Jim',
					data: [50,30,30,50,85,30,40,80],
                    fill: true,
					backgroundColor: 'rgba(218, 165, 32, 0.2)', 
                    borderColor: 'rgb(218, 165, 32)', 
                    pointBackgroundColor: 'rgb(218, 165, 32)', 
                    pointBorderColor: '#fff', 
                    pointHoverBackgroundColor: '#fff', 
                    pointHoverBorderColor: 'rgb(218, 165, 32)' 
				},

			]
		},
        options: {
             scale: {
                pointLabels: {       // 軸のラベル(ユーモア要素)
                    fontSize: 16,         // 文字の大きさ
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