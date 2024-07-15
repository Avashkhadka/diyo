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


