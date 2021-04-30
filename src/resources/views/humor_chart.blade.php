<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="utf-8">
 <title>ユーモアグラフ</title> 
</head>
 <body>
		<h1>ユーモアグラフ</h1>
   	<canvas id="myChart"></canvas>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
	<!-- グラフを描画 -->
   <script>
	//ラベル
	var labels : [
    'モノマネ',
    '自虐',
    '哀愁',
    '緩急',
    'ブラックジョーク',
    '声量',
    '熱量'
    '狂気'
  ],

	//グラフを描画
   var ctx = document.getElementById("myChart");
   var myChart = new Chart(ctx, {
		type: 'radar',
		data : {
			labels: {!!json_encode($member->labels)!!},
			datasets: [{
             label: {{ $members->id }},
             data: {!! json_encode($member>dataset)!!},
             fill: true,
             backgroundColor: {!! json_encode($chart->colours)!!},
             borderColor: 'rgb(255, 99, 132)',
             pointBackgroundColor: 'rgb(255, 99, 132)',
             pointBorderColor: '#fff',
             pointHoverBackgroundColor: '#fff',
             pointHoverBorderColor: 'rgb(255, 99, 132)'
            }]
		},
		options: {
			title: {
				display: true,
				text: 'ユーモアchart'
			}
		}
   });
   </script>
   <!-- グラフを描画ここまで -->
 </body>
</html>