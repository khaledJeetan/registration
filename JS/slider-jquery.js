
$(document).ready(function(){
    let sidebar = $("div");
    let toggle = $("button");
    let para = $("p");
    let question = $(".question");
    let answer = $(".answer");
    question.click(function (){
        answer.slideToggle(function () {
           if(answer.is(":visible"))
               $("img").attr("src","../img/down.png");
           else $("img").attr("src","../img/next.png");
       }) ;
    });
    toggle.click(function (){
        sidebar.fadeToggle(800,function (){
            para.fadeToggle(400);
        })
    })
})