//Get elements from the DOM
let slider =
document.getElementById('#container1')
const arrLeft =
document.querySelector('.sideBtnL');
const arrRight =
document.querySelector('.sideBtnR');

//Data for the slider
const images = [
    "url('/img/2.img')", "url('/img/3.img')","url('/img/4.img')","url('/img/5.img')","url('/img/6.img')"
   ];
   let id = 0;

   function slide (id){
  //Set the background image
slider.style.background = 
`${images[id]}`;

      setTimeout(()=>{
         slider.classList.remove('image-fade'); 
      },550);
   }
   arrLeft.addEventListener('click',()=>{
      id--;
      if(id < 0){
         id = images.length -1;
      }
      slide(id);
   });
   
   arrRight.addEventListener('click',()=>{
      id++;
      if(id > images.length-1){
         id = 0;
      }
      slide(id);
   });
