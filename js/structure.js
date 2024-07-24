
let bodcardCont=document.querySelector(".bodcard-cont");
if(bodcardCont){
let bodinnerHtml='';
bod.forEach(i => {
  bodinnerHtml+=`
  <div class="bodCard">
    <div class="bodcontent">
      <div class="bodPic">
        <div class="bodimg">
        <img src="${i.image}" alt="">
        </div>
      </div>
      <div class="bodDetail">
        <div class="bodName">${i.name}</div>
        <div class="bodPost">${i.post}</div>
      </div>
    </div>
  </div>`;
});
bodcardCont.innerHTML=bodinnerHtml;
}
// *management Team
let mtcardcont=document.querySelector(".mtcard-cont");
if(mtcardcont){
let mtinnerHtml='';
managementTeam.forEach(i => {
  mtinnerHtml+=`
  <div class="bodCard">
    <div class="bodcontent">
      <div class="bodPic">
        <div class="bodimg">
        <img src="${i.image}" alt="">
        </div>
      </div>
      <div class="bodDetail">
        <div class="bodName">${i.name}</div>
        <div class="bodPost">${i.post}</div>
      </div>
    </div>
  </div>`;
});
mtcardcont.innerHTML=mtinnerHtml;
}