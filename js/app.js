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
let dropdowndataRes1=document.querySelector(".js-aboutus-res1");
let dropdowndataRes2=document.querySelector(".js-aboutus-res2");
let dropdowndataRes3=document.querySelector(".js-aboutus-res3");
let dropdowndataRes4=document.querySelector(".js-aboutus-res4");
let dropdowndataRes5=document.querySelector(".js-aboutus-res5");
dropdownRes.addEventListener("click",(e)=>{
  e.preventDefault();
  dropdowndataRes1.classList.toggle("js-aboutus-res-show");
  dropdowndataRes2.classList.toggle("js-aboutus-res-show");
  dropdowndataRes3.classList.toggle("js-aboutus-res-show");
  dropdowndataRes4.classList.toggle("js-aboutus-res-show");
  dropdowndataRes5.classList.toggle("js-aboutus-res-show");

  // alert("hi")
})

if(window.location.href=="../pages/success.php"){

let backbtn=document.querySelector(".gooback");
backbtn.addEventListener("clicl",()=>{
  window.location.href="../index.html"
})}