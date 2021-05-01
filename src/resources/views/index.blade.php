@extends('layout')

@section('content')
 
 <h1>Humor-User-Index</h1>
 <h2>=ユーモアポイントは自己申告制ゆえ、少しだけ奥が深い=</h2>
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

        </tr>
    @endforeach
    </table>

 @else
 <p>そこまで面白い登録者はいませんでした</p>
 @endif

@endsection