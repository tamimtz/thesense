// var counter = 1;

// function add_more_question(){

//     counter+=1

   


//     html='<div class="row " id="row'+counter+'">\
//     <div class="col-6">\
//         <label for="quiz_question" class="form-label mt-5 ms-5">Question '+counter+' Title </label>\
//         <input type="text" name="quiz_question'+counter+'" placeholder="Quiz Name" class="form-control mt-2 ms-5">\
// \
// \
//         <label for="question_image"  class="form-label mt-5 ms-5">Question '+counter+' Image </label>\
//         <div class="col-6">\
//             <input type="file" name="image'+counter+'" class="form-control ms-5">\
//         </div>\
// \
// \
//         <label for="ans1"  class="form-label mt-5 ms-5">Question '+counter+' Option 1</label>\
//         <input type="text" name="option1'+counter+'" placeholder="Add Options Here" class="form-control mt-2 ms-5">\
// \
//         <label for="ans2"  class="form-label mt-5 ms-5">Question '+counter+' Option 2</label>\
//         <input type="text" name="option2'+counter+'" placeholder="Add Options Here" class="form-control mt-2 ms-5">\
//        \
//         <label for="ans3"  class="form-label mt-5 ms-5">Question '+counter+' Option 3</label>\
//         <input type="text" name="option3'+counter+'" placeholder="Add Options Here" class="form-control mt-2 ms-5">\
// \
//         <label for="ans4"  class="form-label mt-5 ms-5">Question '+counter+' Option 4</label>\
//         <input type="text" name="option4'+counter+'" placeholder="Add Options Here" class="form-control mt-2 ms-5">\
// \
//         <label for="corrct_ans"  class="form-label mt-5 ms-5">Question '+counter+' Correct Ans</label>\
//         <input type="text" name="answer'+counter+'" placeholder="Correct ans" class="form-control mt-2 ms-5">\
// \
//         <label for="ans1"  class="form-label mt-5 ms-5">Question '+counter+' Points </label>\
//         <input type="text" name="points'+counter+'" placeholder="reward points" class="form-control mt-2 ms-5">\
// \
// \
// \
// \
//     </div>\
// </div>'

//    var form = document.getElementById('question_form')
//    form.innerHTML+= html

// }


//  // html='<div class="row" id="row'+counter+'">\
//     //     <div class="col-6">\
//     //         <label for="quizCategory" class="form-label mt-5 ms-5">Question Title</label>\
//     //         <input type="text" name="quiz_question'+counter+'" placeholder="Quiz Name" class="form-control mt-2 ms-5">\
//     //     </div>\
//     // </div>'

var counter = 0;

function add_more_question(){
    counter += 1;

    var newQuestionDiv = document.createElement('div');
    newQuestionDiv.className = 'row';
    newQuestionDiv.id = 'row' + counter;

    newQuestionDiv.innerHTML = '<div class="col-6">\
        <label for="quiz_question" class="form-label mt-5 ms-5">Question '+counter+' Title </label>\
        <input type="text" name="quiz_question'+counter+'" placeholder="Quiz Name" class="form-control mt-2 ms-5">\
\
\
        <label for="question_image"  class="form-label mt-5 ms-5">Question '+counter+' Image </label>\
        <div class="col-6">\
            <input type="file" name="image'+counter+'" class="form-control ms-5">\
        </div>\
\
\
        <label for="ans1"  class="form-label mt-5 ms-5">Question '+counter+' Option 1</label>\
        <input type="text" name="option1'+counter+'" placeholder="Add Options Here" class="form-control mt-2 ms-5">\
\
        <label for="ans2"  class="form-label mt-5 ms-5">Question '+counter+' Option 2</label>\
        <input type="text" name="option2'+counter+'" placeholder="Add Options Here" class="form-control mt-2 ms-5">\
       \
        <label for="ans3"  class="form-label mt-5 ms-5">Question '+counter+' Option 3</label>\
        <input type="text" name="option3'+counter+'" placeholder="Add Options Here" class="form-control mt-2 ms-5">\
\
        <label for="ans4"  class="form-label mt-5 ms-5">Question '+counter+' Option 4</label>\
        <input type="text" name="option4'+counter+'" placeholder="Add Options Here" class="form-control mt-2 ms-5">\
\
        <label for="corrct_ans"  class="form-label mt-5 ms-5">Question '+counter+' Correct Ans</label>\
        <input type="text" name="answer'+counter+'" placeholder="Correct ans" class="form-control mt-2 ms-5">\
\
        <label for="ans1"  class="form-label mt-5 ms-5">Question '+counter+' Points </label>\
        <input type="text" name="points'+counter+'" placeholder="reward points" class="form-control mt-2 ms-5">\
\
\
\
\
    </div>\
</div>'


    

    var form = document.getElementById('question_form');
    form.insertBefore(newQuestionDiv, form.lastElementChild);
    //form.appendChild(newQuestionDiv);
}
