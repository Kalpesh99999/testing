@foreach($courses as $course)
    <a class="dropdown-item" href="#" id={{$course->id}}>{{$course->Name}}</a>
@endforeach