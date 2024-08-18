
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

// *Account supervision
let asccardcont=document.querySelector(".asccard-cont");
if(asccardcont){
let ascinnerHtml='';
asc.forEach(i => {
  ascinnerHtml+=`
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
asccardcont.innerHTML=ascinnerHtml;
}
// *Loan committeee
let lccardcont=document.querySelector(".lccard-cont");
if(lccardcont){
let lcinnerHtml='';
lc.forEach(i => {
  lcinnerHtml+=`
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
lccardcont.innerHTML=lcinnerHtml;
}
// *educational committeee
let eccardcont=document.querySelector(".eccard-cont");
if(eccardcont){
let ecinnerHtml='';
ec.forEach(i => {
  ecinnerHtml+=`
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
eccardcont.innerHTML=ecinnerHtml;
}


// *employee
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