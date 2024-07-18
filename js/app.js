let ham=document.querySelector(".ham");
let cross=document.querySelector("#cross");
let nav=document.querySelector(".navbar-res");
ham.addEventListener("click",()=>{
  nav.style.display="block";
})

cross.addEventListener("click",()=>{
  nav.style.display="none";

  
})



let dropdown=document.querySelector(".dropdown");
let dropdowndata=document.querySelector(".js-aboutus");
let dropdowndatali=document.querySelectorAll(".js-aboutus li a");
dropdown.addEventListener("click",(e)=>{
  e.preventDefault();
  dropdowndata.classList.toggle("js-aboutus-show");
  dropdowndata.classList.toggle(".js-aboutus-show li a");

  // alert("hi")
})


let dropdownRes=document.querySelector("#aboutus-res");
let dropdowndataRes=document.querySelector(".js-aboutus-res");
dropdownRes.addEventListener("click",(e)=>{
  e.preventDefault();
  dropdowndataRes.classList.toggle("js-aboutus-res-show");

  // alert("hi")
})



let backbtn=document.querySelector(".gooback");
backbtn.addEventListener("clicl",()=>{
  window.location.href="../index.html"
})