@extends('layout')

@section('content')
 
 <h1>Humor-User-Index</h1>
 <h2>=ユーモアポイントは自己申告制ゆえ、少しだけ奥が深い=</h2>
 <p>人のおもしろ要素を細分化し、"自分の面白い"に近い人に遭遇できます。<br>
    登録ユーザーのユーモア要素(勝手に代表8項目)を可視化することで、自分好みの面白い人を発見でき、繋がれるwebサイトです。<br>
 </p>

 <div class="form-group, text-left" > 
 <p1><検索></p1>
 <form action="{{url('/search')}}" method="get" class="text-left">
     <p2>モノマネ: <input type="number" name="mimic" value="mimic" size="5" maxlength="3"> 以上</p2>
     <p2><input type="submit" value="検索"></p2>
 </form>
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