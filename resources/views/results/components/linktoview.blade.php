 <a href="viewartifact
@if(str_contains('CE',$data->artifact_id))
/ceramic/{{$data->artifact_id}}
@elseif(str_contains('BE',$data->artifact_id))
/bead/{{$data->artifact_id}}
@elseif(str_contains('BU',$data->artifact_id))
/buckle/{{$data->artifact_id}}
@elseif(str_contains('BN',$data->artifact_id))
/button/{{$data->artifact_id}}
@elseif(str_contains('GL',$data->artifact_id))
/glass/{{$data->artifact_id}}
@elseif(str_contains('TP',$data->artifact_id))
/pipe/{{$data->artifact_id}}
@else
/utensil/{{$data->artifact_id}}
@endif
" target="blank">{{$data->artifact_id}}</a>