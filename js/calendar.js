let calinderContainer = document.querySelector(".calcontainer");
let calinderYearContainer = document.querySelector(".year-optcontainer");





let getyear=()=>{
  let writeYear="";
  yearNameDate.forEach(i=>{
    writeYear+=`      <div class="year-opt">
    <div class="year" id="year${i.yearid}">${i.yearName}</div>
    </div>`
  })
  calinderYearContainer.innerHTML=writeYear;
}
getyear()


const year81 = document.querySelector("#year81");
const year80 = document.querySelector("#year80");
const year79 = document.querySelector("#year79");
const year78 = document.querySelector("#year78");







let displaycalinder = (year) => {
  let innerHTML = "";

  let SelectedYear=year;


  calender.forEach((i) => {
    if(i.year===SelectedYear){

      innerHTML += `<div class="img">
    <img src="../${i.image}" alt="" srcset="" />
    </div>`;
    }
  });
  calinderContainer.innerHTML = innerHTML;
};

let date=document.querySelectorAll(".year");
let dateArr=Array.from(date)
dateArr.forEach(i => {
  i.addEventListener("click",(e)=>{
    displaycalinder(e.target.innerText)
  })
});


