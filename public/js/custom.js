/**
 * Created by Kalpesh on 2017/07/18.
 */

function atc_lessonpage_drawEmbed (){
    var findDiv, copyDiv, insideBox,

        wrapper = document.createDocumentFragment();
    // These are elements that we want on our page
        outerDiv = document.createElement('div'),  //This is the parent
        boxHeader = document.createElement('h5'),
        innerDiv = document.createElement('div'),
        vidDiv = document.createElement('iframe'),
        copy = document.createTextNode('hellok'),
        mainNode = document.getElementById('main-col'),
            lesson_statDiv =  document.createElement('div');


    boxHeader.innerHTML = 'This is box header copy';
    outerDiv
    outerDiv.appendChild(boxHeader);
    outerDiv.appendChild(innerDiv);
    // innerDiv.appendChild(vidDiv);
    innerDiv.appendChild(copy);
    $(vidDiv).attr('src',"https://www.youtube.com/embed/dGC-YAxD4pw" );

    //add styling to elements (attribute, value)
    $(outerDiv).attr('id', 'outerdiv');
    $(innerDiv).attr('id', 'embed-responsive embed-responsive-16by9');
    // $(innerDiv).attr('id', 'course_desc');

    wrapper.appendChild(outerDiv);
    copyDiv = outerDiv.cloneNode(true); //Copy div can reuse variables
    copyDiv.childNodes[0].innerHTML = "Lesson Description Heading";
    copyDiv.childNodes[1].innerHTML = "Lesson Description Text";
    $(copyDiv).attr({
        'class': 'textHolder',
        'id': 'lesson_desc'
    });
    copyDiv.appendChild(innerDiv);




    mainNode.appendChild(wrapper);

    //
  //  findDiv = document.getElementById('outerdiv')
 //   copyDiv = findDiv.cloneNode(true);
    $(copyDiv).attr('id', 'copydiv1');
    wrapper.appendChild(copyDiv);






    mainNode.appendChild(wrapper);

    //duplicate outerbox from DOM then copy it to off dom.modify. then reload onto DOM.
    // findDiv = document.getElementById('embedHolder')
    // copyDiv = findDiv.cloneNode(true);
    // copyDiv.childNodes[1].innerHTML="kladada";

    mainNode.appendChild(copyDiv);
    console.log(mainNode.childNodes);
}
