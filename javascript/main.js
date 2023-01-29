'use strict';
{
// FadeIn

const targets = document.querySelectorAll('.fadein');

function callback(entries,obs){
    console.log(entries);

entries.forEach(entry =>{
    if(!entry.isIntersecting){
        return;
    }

    entry.target.classList.add('appear');
    obs.unobserve(entry.target);

});

}

const options = {
    threshold:0.6,

};

const observer = new IntersectionObserver(callback,options);

    targets.forEach(target =>{
        observer.observe(target);

    });
// FadeIn end


}


{
const open=  document.getElementById('open');
const sp__menu =document.querySelector('.sp__menu');
const cross__line =document.querySelectorAll('.cross__line');
const  answer = document.querySelectorAll('.accordion__answer');
const question =document.querySelectorAll('.accordion__question');

open.addEventListener('click',() =>{
open.classList.toggle('show');
sp__menu.classList.toggle('panelactive');

});

sp__menu.addEventListener('click',() =>{
    open.classList.remove('show');
    sp__menu.classList.toggle('panelactive');
});

question.forEach((question,index) =>{
question.addEventListener('click',function(){
    cross__line[index].classList.toggle('toggle');
    answer[index].classList.toggle('appear');
})
});

{
const swiper = new Swiper(".swiper", {
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },

});


}
}
// end 
