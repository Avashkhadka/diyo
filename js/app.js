let ham=document.querySelector(".ham");
let cross=document.querySelector("#cross");
let nav=document.querySelector(".navbar-res");
ham.addEventListener("click",()=>{
  nav.style.display="block";
})

cross.addEventListener("click",()=>{
  nav.style.display="none";

})