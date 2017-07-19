<table class="table table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Post</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>


@foreach($lessons as $lesson)

    <tr>
        <td>{{$lesson['id']}}</td>
        <td>{{$lesson['Name']}}</td>
        <td>{{$lesson['description']}}</td>
        <td><a href="{{action('LessonController@edit', $lesson['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
            <form class="delet" action="{{action('LessonController@destroy', $lesson['id'])}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
    </tbody>
@endforeach