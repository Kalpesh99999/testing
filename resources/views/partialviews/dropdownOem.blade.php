@foreach($oems as $oem)
    <a class="dropdown-item" href="#" id={{$oem->id}}>{{$oem->Name}}</a>
@endforeach