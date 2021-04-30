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
		"mimic",
		"maso",
		"pathos",
		"updown",
		"black",
		"volume",
        "energy",
        "insane",
	];

	//グラフを描画
   var ctx = document.getElementById("myChart");
   var myChart = new Chart(ctx, {
		type: 'radar',
		data : {
			labels: labels,
			datasets: [{
             label: 'Sheldon',
             data: [65, 59, 90, 81, 56, 55, 40, 100],
             fill: true,
             backgroundColor: 'rgba(255, 99, 132, 0.2)',
             borderColor: 'rgb(255, 99, 132)',
             pointBackgroundColor: 'rgb(255, 99, 132)',
             pointBorderColor: '#fff',
             pointHoverBackgroundColor: '#fff',
             pointHoverBorderColor: 'rgb(255, 99, 132)'
            }, {
             label: 'Penny',
             data: [50, 78, 10, 89, 30, 85, 60, 90],
             fill: true,
             backgroundColor: 'rgba(54, 162, 235, 0.2)',
             borderColor: 'rgb(54, 162, 235)',
             pointBackgroundColor: 'rgb(54, 162, 235)',
             pointBorderColor: '#fff',
             pointHoverBackgroundColor: '#fff',
             pointHoverBorderColor: 'rgb(54, 162, 235)'
            }, {
             label: 'Mike',
             data: [28, 48, 40, 19, 96, 27, 100, 50],
             fill: true,
             backgroundColor: 'rgba(70, 70, 70, 0.3)',
             borderColor: 'rgb(90, 102, 555)',
             pointBackgroundColor: 'rgb(54, 162, 235)',
             pointBorderColor: '#fff',
             pointHoverBackgroundColor: '#fff',
             pointHoverBorderColor: 'rgb(54, 162, 235)'
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