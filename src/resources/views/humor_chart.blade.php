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
	var labels = [
		"Penny",
		"Sheldon",
		"Emily",
		"Renard",
		"Raj",
		"Bernadette",
	];
	//声量ユーモアログ
	var volume_humor_log = [
		100.0,	//例:Pennyのデータ
		51.0,	//例:Sheldonのデータ
		52.0,	//例:Emilyのデータ
		53.0,	//例:Renardのデータ
		54.0,	//例:Rajのデータ
		49.0	//例:Bernadetteのデータ
	];
	//緩急ユーモアログ
	var updown_humor_log = [
		52.0,	
		100.0,	
		55.0,	
		51.0,	
		57.0,	
		48.0	
	];
	//狂気さ ユーモアログ
	var insane_humor_log = [
		100.0,	
		47.0,	
		45.0,	
		44.0,	
		43.0,	
		49.0	
	];

	//グラフを描画
   var ctx = document.getElementById("myChart");
   var myChart = new Chart(ctx, {
		type: 'line',
		data : {
			labels: labels,
			datasets: [
				{
					label: '声量',
					data: volume_humor_log,
					borderColor: "rgba(0,0,255,1)",
         			backgroundColor: "rgba(0,0,0,0)"
				},
				{
					label: '緩急',
					data: updown_humor_log,
					borderColor: "rgba(0,255,0,1)",
         			backgroundColor: "rgba(0,0,0,0)"
				},
				{
					label: '狂気さ',
					data: insane_humor_log,
					borderColor: "rgba(255,0,0,1)",
         			backgroundColor: "rgba(0,0,0,0)"
				}
			]
		},
		options: {
			title: {
				display: true,
				text: 'ユーモアログ（６ヶ月平均）'
			}
		}
   });
   </script>
   <!-- グラフを描画ここまで -->
 </body>
</html>