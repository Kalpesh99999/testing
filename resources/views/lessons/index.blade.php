@extends('layouts/main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@section('nav')
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-faded" style="background-color: #3a5795">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Navbar</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a></li>
                <li class="nav-item"><a class="nav-link" href="/courses">Courses</a></li>
                <li class="nav-item"><a class="nav-link" href="/pricing">Pricing</a></li>
                <li class="nav-item"><a class="nav-link" href="/faq">FAQ</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
            </ul>
        </div>
    </nav>
@endsection

@section('body')
    <div class="container-fluid" id="page-container" style="padding:0px; background-color:#F1F1F1">

        <div class="section text-center bg-success p-4 my-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-white">Browse the Lesson Database</h1>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
             <div class="dropdownholder" id="drop">
                 <div class="row">
                      <div class="col col-md-6">
                          <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Please select OEM
                        </button>
                        <div class="dropdown-menu dropOem" id="dropdown-oems" aria-labelledby="dropdownMenuButton">
                        </div>
                    </div></div>
                      <div class="col col-md-6">
                          <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Please select course
                                </button>
                                <div class="dropdown-menu dropCourse" id="dropdown-courses" aria-labelledby="dropdownMenuButton2">
                                </div>
                          </div>
                      </div>
                 </div>
             </div>
                 <div class="row">
                     <div class="col-md-12">
                         <div class="textholder">
                             <div class="lesson-results">

                             </div>
                         </div>
                     </div>

                 </div>

             </div>
    </div>



@endsection

<script>
    $(document).ready(function() {

        $("#dropdown-oems").addClass( "spinner" );
        $.ajax({
            url: 'api/getOemList',
            type: 'POST',
            success: function (response) {
                $("#dropdown-oems").append(response)
            }});


        $(".delet").on("submit", function () {
            return confirm("Do you want to delete this item?");
        });

        $(".dropOem").on('click', function (event) {
            $('#dropdownMenuButton').text(event.target.innerHTML);
            $(".lesson-results").html('');
            var $target1 = $(event.target);
            $("#dropdown-courses").html('')
            //console.log($target1[0].id);
            $.ajax({
                url: 'api/getdropDownCourseList/'+$target1[0].id,
                type: 'POST',
                success: function (response) {
                    $("#dropdown-courses").html(response);
                   // console.log(response);
                }});
        });

        $(".dropCourse").on('click', function (event) {
            $(".lesson-results").html('');
            $('#dropdownMenuButton2').text(event.target.innerHTML);
            var $target1 = $(event.target);
            console.log($target1[0].id);
            $.ajax({
                    url: 'api/showCourses/'+$target1[0].id,
                    type: 'POST',
                    success: function (response) {
                        console.log(response);
                        $(".lesson-results").append(response.data);


                }})
        });












    });




</script>





