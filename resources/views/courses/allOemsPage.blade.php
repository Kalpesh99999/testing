@extends('layouts/main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                    <h1 class="text-white">Training Material by Brand</h1>
                    <p class="lead text-center px-5">Bringing you online training from leading brands in the Automation Industry. Your journey to education starts here. Please continue by clicking on any of the brands below to view the provided courses. Enjoy</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-md-9">
                <div class="col-12" id="course_list1"></div>
                <div class="col-12" id="course_list">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" id="Course_1">
                        <div class="row">
                            <div class="col-sm-3">
                                <img class="img-fluid d-block w-100" id="Course_1_image" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg">
                            </div>
                            <div class="col-sm-9">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1" id="Course_1_title">Course Title</h5><small>3 days ago</small>
                                </div>
                                <small id="Course_1_createdBy">Created by: PCS Global<br></small><br>
                                <p class="mb-1" id="Course_1_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <div class="row">
                                    <div class="col-sm-4 p-2"><i class="fa fa-film fa-1x p-2 Course_1_tot"></i>12 Lessons</div>
                                    <div class="col-sm-4 p-2"><i class="fa fa-clock-o fa-1x p-2 Course_1_dur"></i>99.9 Hours</div>
                                    <div class="col-sm-4 p-2"><i class="fa fa-lightbulb-o fa-1x p-2 Course_1_level"></i>All levels</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-md-3 hidden-sm-down">
                <div class="col-12" id="sidebar">
                    <p>This is a side baljljljlr</p>
                </div>
            </div>
        </div>
    </div>


@endsection

<script>
    $(document).ready(function(){

        $.ajax({
            url: 'api/getCourseByBrand',
            type: 'POST',
            datatype: JSON,
            success: function (response) {
                data = response.data;
                //  console.log(data);
                //Find the node that we want to clone
                var frag = document.createDocumentFragment();
                var parentDiv = document.getElementById("course_list");
                var findDiv = document.getElementById("course_list");

                $.each(response.data, function (index,value){
                    //Course Image
                    var newDiv = findDiv.firstElementChild.cloneNode(true);
                    console.log(newDiv);
                    newDiv.id='Course_'+value.id;
                    newDiv.href=('/courses/'+value.Name).toLowerCase();
                    //Update Course Image ID
                    $(newDiv.childNodes[1].childNodes[1].childNodes[1]).attr({id:'Course_img_'+value.id});

                    //Course Title
                    $(newDiv.childNodes[1].childNodes[3].childNodes[1].childNodes[1]).attr({
                        id:'Course_title_'+value.id
                    });
                    newDiv.childNodes[1].childNodes[3].childNodes[1].childNodes[1].innerHTML=value.Name;

                    //Created by
                    $(newDiv.childNodes[1].childNodes[3].childNodes[3]).attr({
                        id:'Course_createdBy_'+value.id
                    });
                    newDiv.childNodes[1].childNodes[3].childNodes[3].innerHTML = "kal<br>";

                    //Course Description
                    $(newDiv.childNodes[1].childNodes[3].childNodes[6]).attr({
                        id:'Course_desc_'+value.id
                    });
                    frag.appendChild(newDiv);
                    console.log(frag);
                });
                //Write to DOM
                console.log(frag);
                parentDiv.appendChild(frag);
            }});


    });
</script>
