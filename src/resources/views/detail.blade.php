@extends('layout')

@section('content')
 
 <h1>Humor-User-Index</h1>
 <h5>SNSで深く知ろう</h5>
 <div class="container">
    <!-- table -->
    <table class="table table-striped">

        <th>id</th>
        <th>名前</th>
        <!-- <th>モノマネ</th>
        <th>自虐</th>
        <th>哀愁</th>
        <th>緩急</th>
        <th>ブラックジョーク</th>
        <th>声量</th>
        <th>熱量</th>
        <th>狂気</th> -->
        <th>Twitter</th>
        <th>Youtube</th>
        <th>その他</th>
        

    <!-- loop -->
    @foreach($members as $member)
        <tr>
            <td>{{$member->id}}</td>
            <td>{{$member->name}}</td>
            <!-- <td>{{$member->mimic}}</td>
            <td>{{$member->maso}}</td>
            <td>{{$member->pathos}}</td>
            <td>{{$member->updown}}</td>
            <td>{{$member->black_joking}}</td>
            <td>{{$member->volume}}</td>
            <td>{{$member->energy}}</td>
            <td>{{$member->insane}}</td> -->
            <td>{{$member->sns_Twitter}}</td>
            <td>{{$member->sns_Youtube}}</td>
            <td>{{$member->others}}</td>
      
        </tr>
    @endforeach
    </table>
  </div>
  {{ $members->links() }}

<br>
<a href="{{ route('index') }}">一覧に戻る</a> 

@endsection