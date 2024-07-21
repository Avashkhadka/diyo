let tbody=document.querySelector("#tbody");

let innerhtml='';
download.forEach(i => {

  innerhtml+=`
              <tr>
                <td>${i.Name}</td>
                <td>
                  <div class="down">
                    <div class="pdfico">
                      <i class="fa-solid fa-file-lines"></i>
                    </div>
                    <div class="text-down">
                    <a href="${i.location}" download="${i.downloadName}"> Download</a>
                    </div>
                    <div class="down0ico">
                      <i class="fa-solid fa-download"></i>
                    </div>
                  </div>
                </td>
              </tr>`;

});

tbody.innerHTML=innerhtml;

