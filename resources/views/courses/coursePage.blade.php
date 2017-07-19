@extends('layouts/main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/lodash.js') }}"></script>
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
                    <h1 class="text-white" id="page-heading"> Course Page</h1>
                    <span class="lead text-center px-5" id="subheading1">PLC. SCADA. HMI</span><br>
                    <span class="lead text-center px-5" id="subheading2">Please continue by clicking on any of the courses below</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-md-9">

                <div class="textholder" id="course_desc">
                    <h5 class="text-left">Course Description</h5>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="textholder" id="course_obj">
                    <h5 class="text-left">Course Objectives</h5>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="textholder" id="course_req">
                    <h5 class="text-left">Course Requirements</h5>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>

                <div class="textholder" id="course_buy">
                    <h5 class="text-left">Purchase Access to the Course </h5>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <button class="btn btn-primary btn-lg btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Click here for Full Course Pricing options
                        </button>
                    <div class="collapse" id="collapseExample">
                        {{--<div class="card card-block">--}}
                            {{--Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.--}}
                        {{--</div>--}}
                        <div class="card card-block">
                            <h5 class="text-center m-3">Make your selections:</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-left">For how long would you like access to the course?</p>
                                    <form>
                                        <fieldset class="form-group">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="accessPeriod" id=accessPeriod_1 value="option1" checked>30 days</label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="accessPeriod" id=accessPeriod_1 value="option2">60 days</label>
                                            </div>
                                            <div class="form-check ">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="accessPeriod" id=accessPeriod_1 value="option3">90 days</label>
                                            </div>
                                        </fieldset>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Voucher</label>
                                            <input type="text" class="form-control" id="voucher_1" name="voucher" aria-describedby="emailHelp" placeholder="Enter code">
                                        </div>
                                        <button type="submit" class="btn btn-success">Press to Start Learning</button><br>
                                        <p><small id="Course_1_createdBy">Tokens will be deducted from your wallet upon clicking this button<br></small><br></p>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-center">My Wallet:</p>
                                    <table class="table table-sm table-bordered">
                                        <tbody>
                                        <tr>
                                            <th>Opening Balance :</th>
                                            <td colspan="2" align="right" id=WalletOpen_1>100 Tokens</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Price :</th>
                                            <td colspan="2" align="right" id=Price_1>4.97 Tokens</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Closing Balance :</th>
                                            <td colspan="2" align="right" id=WalletClose_1>27 Tokens</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>












                </div>


                <div class="textholder" id="curriculum">
                    <h5 class="text-left">Course Curriculum</h5>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" id="template">
                        <div class="row">
                            <div class="col-sm-3">
                                <img class="img-fluid d-block w-100" id="Course_1_image" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg">
                            </div>
                            <div class="col-sm-9">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1" id="Course_1_title">Course Title</h5><small>3 days ago</small>
                                </div>
                                <p class="mb-1" id="Course_1_desc">  jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjof Lorem Ipsum.</p>
                                <div class="row">
                                    <div class="col-sm-4 p-2"><i class="fa fa-film fa-1x p-2 Course_1_tot"></i>12 Lessons</div>
                                    <div class="col-sm-4 p-2"><i class="fa fa-clock-o fa-1x p-2 Course_1_dur"></i>99.9 Hours</div>
                                    <div class="col-sm-4 p-2"><i class="fa fa-lightbulb-o fa-1x p-2 Course_1_level"></i>All levels</div>
                                    <div class="col-md-3 push-md-9">
                                        <button class="btn btn-primary pull-right m-2" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                                            Get this lesson
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseExample1">

                                        <div class="card card-block">
                                            <h5 class="text-center m-3">Make your selections:</h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="text-left">For how long would you like access to the course?</p>
                                                    <form>
                                                        <fieldset class="form-group">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="accessPeriod" id=accessPeriod_1 value="option1" checked>30 days</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="accessPeriod" id=accessPeriod_1 value="option2">60 days</label>
                                                            </div>
                                                            <div class="form-check ">
                                                                <label class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="accessPeriod" id=accessPeriod_1 value="option3">90 days</label>
                                                            </div>
                                                        </fieldset>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Voucher</label>
                                                            <input type="text" class="form-control" id="voucher_1" name="voucher" aria-describedby="emailHelp" placeholder="Enter code">
                                                        </div>
                                                        <button type="submit" class="btn btn-success">Press to Start Learning</button><br>
                                                        <p><small id="Course_1_createdBy">Tokens will be deducted from your wallet upon clicking this button<br></small></p>
                                                    </form>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="text-center">My Wallet:</p>
                                                    <table class="table table-sm table-bordered">
                                                        <tbody>
                                                        <tr>
                                                            <th>Opening Balance :</th>
                                                            <td colspan="2" align="right" id=WalletOpen_1>100 Tokens</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Price :</th>
                                                            <td colspan="2" align="right" id=Price_1>4.97 Tokens</td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Closing Balance :</th>
                                                            <td colspan="2" align="right" id=WalletClose_1>27 Tokens</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="textholder" id="course_manuals">
                    <h5 class="text-left">Reference Documents</h5>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>

                <div class="textholder" id="course_author">
                    <div class="row">
                        <div class="col-sm-3">
                            <img class="img-fluid d-block w-100" id="Course_1_image" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg">
                        </div>
                        <div class="col-sm-9">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1" id="Course_1_title">Author Name or Company</h5><small>3 days ago</small>
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
                </div>

                <div class="textholder" id="course_reviews">
                    <h4 class="text-left">Reviews</h4>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>

                <div class="textholder" id="course_related">
                    <h4 class="text-left">Related Courses</h4>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

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
    $(document).ready(function() {
        var x = location.pathname;
        var res = x.split("/");
      //  console.log(res[2]);
        $.ajax({
            url: '/api/getCourseCurriculum/' + res[3],
            type: 'POST',
            datatype: JSON,
            success: function (response) {
                console.log(response);
                var frag = document.createDocumentFragment();
                var parentDiv = document.getElementById("curriculum");
                var findDiv = document.getElementById("template");

                $.each(response.data, function (index,value){
                    //Course Image
                    var newDiv = findDiv.cloneNode(true);
                    console.log(newDiv.childNodes);
                    newDiv.id='Lesson_'+value.id;
                    newDiv.href='/courses/'+res[2]+'/'+res[3]+'/'+value.id;

//                    //Update Course Image ID
//                    $(newDiv.childNodes[1].childNodes[1].childNodes[1]).attr({id:'Course_img_'+value.id});
//
                    //Course Title
                    $(newDiv.childNodes[1].childNodes[3].childNodes[1].childNodes[1]).attr({
                        id:'Lesson_'+index+'_title'
                    });
                    newDiv.childNodes[1].childNodes[3].childNodes[1].childNodes[1].innerHTML=value.Name;
//
//                    //Created by
//                    $(newDiv.childNodes[1].childNodes[3].childNodes[3]).attr({
//                        id:'Course_createdBy_'+value.id
//                    });
//                    newDiv.childNodes[1].childNodes[3].childNodes[3].innerHTML = "kal<br>";
//
//                    //Course Description
//                    $(newDiv.childNodes[1].childNodes[3].childNodes[6]).attr({
//                        id:'Course_desc_'+value.id
//                    });
                    frag.appendChild(newDiv);
//                    console.log(frag);
                });
//                //Write to DOM
                console.log(frag);
                parentDiv.appendChild(frag);




            }})





    });


</script>