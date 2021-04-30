<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ユーモアレーダーチャートで、自分好みの人と繋がる</title>
<link href="css/bootstrap.min.css" rel="stylesheet"><!-- ← 触らないBootstrap v4.3.1 -->
<script src="js/jquery-3.4.1.min.js"></script><!-- ← 触らない -->
<script src="js/bootstrap.min.js"></script><!-- ← 触らない -->
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
<div style="">
<h1 class="text-primary my-3">人のユーモア要素を細分化し、"自分の面白い"人に遭遇しよう </h1>
<div class="row">
<div class="col-md-5">
<div class="text-sm">※数値100が各ユーモア要素の数値を表しています。</div>
<div class="text-sm">※ユーモア要素は独断と偏見であり、適宜変更されます<BR>ご容赦ください。</div>
</div>
<div class="col-md-7">

<!--以下 グラフ-->
<canvas id="myChart"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
type: 'radar',
data: {
labels: ['モノマネ', '自虐', '哀愁', '緩急', 'ブラックジョーク', '声量', '熱量', '狂気'],
datasets: [<?= $data ?>]
}
});
</script>
<!--以上 グラフ-->

</body>
</html>