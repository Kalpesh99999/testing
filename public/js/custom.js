/**
 * Created by Kalpesh on 2017/07/18.
 */

function atc_draw_lesson_page(video_id,desc,youtube_views, preview_dur,full_dur) {

    //Load video embed wrapper
    var tmpl = document.getElementById('temp-atc-embed').content.cloneNode(true);
    tmpl.querySelector('#lesson-embed').childNodes[1].setAttribute("src","https://www.youtube.com/embed/"+ video_id);
    tmpl.querySelector('#lesson-desc').childNodes[3].innerHTML = desc; //Load description
    tmpl.querySelector('#lesson-desc').childNodes[5].childNodes[1].innerText = "View count : "+youtube_views;
    tmpl.querySelector('#lesson-desc').childNodes[5].childNodes[3].innerText = "Preview Duration : "+preview_dur;
    tmpl.querySelector('#lesson-desc').childNodes[5].childNodes[5].innerText = "Full Duration : "+full_dur;

    tmpl.querySelector('#lesson-author').childNodes[1].childNodes[1].setAttribute("src","https://pingendo.com/assets/photos/wireframe/photo-1.jpg");
    tmpl.querySelector('#lesson-author').childNodes[1].childNodes[3].childNodes[5].innerHTML="kal";
    tmpl.querySelector('#lesson-author').childNodes[1].childNodes[3].childNodes[1].childNodes[1].innerHTML="Created by : PCS Global";

    tmpl.querySelector('#lesson-author').childNodes[1].childNodes[1].lastElementChild.setAttribute("src","https://pingendo.com/assets/photos/wireframe/photo-1.jpg");
    console.log(tmpl.querySelector('#lesson-author').childNodes);










    main.appendChild(tmpl);
}

function atc_lessonpage_drawEmbed (tmpl){
   // var tmpl = document.getElementById('temp-atc-embed').content.cloneNode(true);
   // tmpl.querySelector('#lesson-embed').childNodes[1].setAttribute("src","https://www.youtube.com/embed/NZKXkD6EgBk")
   // main.appendChild(tmpl);


 //    var findDiv, copyDiv, insideBox,
 //
 //        wrapper = document.createDocumentFragment();
 //    // These are elements that we want on our page
 //        outerDiv = document.createElement('div'),  //This is the parent
 //        boxHeader = document.createElement('h5'),
 //        innerDiv = document.createElement('div'),
 //        vidDiv = document.createElement('iframe'),
 //        copy = document.createTextNode('hellok'),
 //        mainNode = document.getElementById('main-col'),
 //            lesson_statDiv =  document.createElement('div');
 //
 //
 //    boxHeader.innerHTML = 'This is box header copy';
 //    outerDiv
 //    outerDiv.appendChild(boxHeader);
 //    outerDiv.appendChild(innerDiv);
 //    // innerDiv.appendChild(vidDiv);
 //    innerDiv.appendChild(copy);
 //    $(vidDiv).attr('src',"https://www.youtube.com/embed/dGC-YAxD4pw" );
 //
 //    //add styling to elements (attribute, value)
 //    $(outerDiv).attr('id', 'outerdiv');
 //    $(innerDiv).attr('id', 'embed-responsive embed-responsive-16by9');
 //    // $(innerDiv).attr('id', 'course_desc');
 //
 //    wrapper.appendChild(outerDiv);
 //    copyDiv = outerDiv.cloneNode(true); //Copy div can reuse variables
 //    copyDiv.childNodes[0].innerHTML = "Lesson Description Heading";
 //    copyDiv.childNodes[1].innerHTML = "Lesson Description Text";
 //    $(copyDiv).attr({
 //        'class': 'textHolder',
 //        'id': 'lesson_desc'
 //    });
 //    copyDiv.appendChild(innerDiv);
 //
 //
 //
 //
 //    mainNode.appendChild(wrapper);
 //
 //    //
 //  //  findDiv = document.getElementById('outerdiv')
 // //   copyDiv = findDiv.cloneNode(true);
 //    $(copyDiv).attr('id', 'copydiv1');
 //    wrapper.appendChild(copyDiv);
 //
 //
 //
 //
 //
 //
 //    mainNode.appendChild(wrapper);
 //
 //    //duplicate outerbox from DOM then copy it to off dom.modify. then reload onto DOM.
 //    // findDiv = document.getElementById('embedHolder')
 //    // copyDiv = findDiv.cloneNode(true);
 //    // copyDiv.childNodes[1].innerHTML="kladada";
 //
 //    mainNode.appendChild(copyDiv);
 //    console.log(mainNode.childNodes);
}


