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

@foreach($buckles as $buckle)
    @if($buckle->checkout_by == Auth::user()->id && $buckle->isValid == 0)
        <tr>
            <td>{{$buckle->artifact_id}}</td>
            <td>buckle</td>
            <td >
                @if($buckle->isValid == 0)
                Unverified
                @else
                Verified
                @endif
            </td>
            <td>{{$buckle->collection}}</td>
            <td>{{$buckle->material}}</td>
            <td><a href="/reviewData/{{Auth::user()->id}}/buckle/{{$buckle->id}}"><button class="btn btn-success">Review</button></a></td>
            <td>
                <form method="POST" action="{{route('release.data')}}">@csrf<input type="number" class="d-none" value="{{$buckle->id}}" name="release_buckle">
                </select><button class="btn btn-danger" type="submit">Release</button></form>
            </td>
    
        </tr>
    @endif
@endforeach

@foreach($buttons as $button)
    @if($button->checkout_by == Auth::user()->id && $button->isValid == 0)
        <tr>
            <td>{{$button->artifact_id}}</td>
            <td>button</td>
            <td >
                @if($button->isValid == 0)
                Unverified
                @else
                Verified
                @endif
            </td>
            <td>{{$button->collection}}</td>
            <td>{{$button->material}}</td>
            <td><a href="/reviewData/{{Auth::user()->id}}/button/{{$button->id}}"><button class="btn btn-success">Review</button></a></td>
            <td>
                <form method="POST" action="{{route('release.data')}}">@csrf<input type="number" class="d-none" value="{{$button->id}}" name="release_button">
                </select><button class="btn btn-danger" type="submit">Release</button></form>
            </td>
    
        </tr>
    @endif
@endforeach