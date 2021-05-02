@extends('layout')

@section('content')
 
 <h1>Humor-User-Index</h1>
 <h4>=ユーモアポイントは自己申告制。少しだけ奥が深い=</h4>
 <p>人のおもしろ要素を細分化し、"自分の面白い"に近い人に遭遇できます。<br>
    登録ユーザーのユーモア要素(勝手に代表8項目)を可視化することで、自分好みの面白い人を発見でき、繋がれるwebサイトです。<br>
 </p>

 
 <div class="form-group, text-left"> 
   <p1><strong> AND検索(入力値"以上") </strong></p1>
   <form action="{{url('/search')}}" method="get" class="text-left">
     <p2>　　ﾓﾉﾏﾈ　: <input type="number" name="mimic" value="mimic" style="width:80px;"> </p2>
     <p2>　　自虐　: <input type="number" name="maso" value="maso" style="width:80px;" > </p2><br>
     <p2>　　哀愁　: <input type="number" name="pathos" value="pathos" style="width:80px;" > </p2>
     <p2>　　緩急　: <input type="number" name="updown" value="updown" style="width:80px;" > </p2><br>
     <p2>ﾌﾞﾗｯｸｼﾞｮｰｸ: <input type="number" name="black_joking" value="black_joking" style="width:80px;" > </p2>
     <p2>　　声量　: <input type="number" name="volume" value="volume" style="width:80px;" > </p2><br>
     <p2>　　熱量　: <input type="number" name="energy" value="energy" style="width:80px;" > </p2>
     <p2>　　狂気　: <input type="number" name="insane" value="insane" style="width:80px;" > </p2><br>
     <button type="submit" class="btn btn-primary">検索</button>
   </form>
   <a href="{{ route('index') }}">検索解除</a>
 </div>

 @if($members->count())
    
   <div class="container">
    <!-- table -->
    <table class="table table-striped">

        <th>id</th>
        <th>名前</th>
        <th>モノマネ</th>
        <th>自虐</th>
        <th>哀愁</th>
        <th>緩急</th>
        <th>ブラックジョーク</th>
        <th>声量</th>
        <th>熱量</th>
        <th>狂気</th>
        <th>=詳しく見てみる=</th>

    <!-- loop -->
    @foreach($members as $member)
        <tr>
            <td>{{$member->id}}</td>
            <td>{{$member->name}}</td>
            <td>{{$member->mimic}}</td>
            <td>{{$member->maso}}</td>
            <td>{{$member->pathos}}</td>
            <td>{{$member->updown}}</td>
            <td>{{$member->black_joking}}</td>
            <td>{{$member->volume}}</td>
            <td>{{$member->energy}}</td>
            <td>{{$member->insane}}</td>
            <td><a href="{{route('detail',['id'=>$member->id])}}">★；</a></td>

        </tr>
    @endforeach
    </table>
   </div>
   {{ $members->links() }}

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

    <div class="col-md-7">	
            <!--以下 グラフ-->
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
            });
            </script>
            <!--以上 グラフ-->
     </div>

 @else
 <p><strong>!!そこまで面白い登録者はいませんでした....!!</strong></p>
 @endif

@endsection