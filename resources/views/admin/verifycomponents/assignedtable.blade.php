 @foreach($ceramics as $ceramic)
    @if($ceramic->checkout_by == Auth::user()->id && $ceramic->isValid == 0)
        <tr>
            <td>{{$ceramic->artifact_id}}</td>
            <td>ceramic</td>
            <td >
                @if($ceramic->isValid == 0)
                Unverified
                @else
                Verified
                @endif
            </td>
            <td>{{$ceramic->collection}}</td>
            <td>{{$ceramic->material}}</td>
            <td><a href="/reviewData/{{Auth::user()->id}}/ceramic/{{$ceramic->id}}"><button class="btn btn-success">Review</button></a></td>
            <td>
                <form method="POST" action="{{route('release.data')}}">@csrf<input type="number" class="d-none" value="{{$ceramic->id}}" name="release_ceramic">
                </select><button class="btn btn-danger" type="submit">Release</button></form>
            </td>
    
        </tr>
    @endif
@endforeach

@foreach($beads as $bead)
    @if($bead->checkout_by == Auth::user()->id && $bead->isValid == 0)
        <tr>
            <td>{{$bead->artifact_id}}</td>
            <td>bead</td>
            <td >
                @if($bead->isValid == 0)
                Unverified
                @else
                Verified
                @endif
            </td>
            <td>{{$bead->collection}}</td>
            <td>{{$bead->material}}</td>
            <td><a href="/reviewData/{{Auth::user()->id}}/bead/{{$bead->id}}"><button class="btn btn-success">Review</button></a></td>
            <td>
                <form method="POST" action="{{route('release.data')}}">@csrf<input type="number" class="d-none" value="{{$bead->id}}" name="release_bead">
                </select><button class="btn btn-danger" type="submit">Release</button></form>
            </td>
    
        </tr>
    @endif
@endforeach