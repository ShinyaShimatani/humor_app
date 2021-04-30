<h1>graph</h1>
ここにグラフを表示
@foreach($members as $member)
        <tr>
            <td>{{$member->id}}</td>
            <td>{{$member->name}}</td>
        </tr>
@endforeach