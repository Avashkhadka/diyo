let ham = document.querySelector(".ham");
let cross = document.querySelector("#cross");
let nav = document.querySelector(".navbar-res");
ham.addEventListener("click", () => {
  nav.style.display = "block";
});

cross.addEventListener("click", () => {
  nav.style.display = "none";
});

let dropdown = document.querySelector(".dropdown");
let dropdowndata = document.querySelector(".js-aboutus");
let dropdowndatali = document.querySelectorAll(".js-aboutus li a");
dropdown.addEventListener("click", (e) => {
  e.preventDefault();
  dropdowndata.classList.toggle("js-aboutus-show");
  dropdowndata.classList.toggle(".js-aboutus-show li a");

  // alert("hi")
});

let dropdownRes = document.querySelector("#aboutus-res");
let dropdowndataRes1 = document.querySelector(".js-aboutus-res1");
let dropdowndataRes2 = document.querySelector(".js-aboutus-res2");
let dropdowndataRes3 = document.querySelector(".js-aboutus-res3");
let dropdowndataRes4 = document.querySelector(".js-aboutus-res4");
let dropdowndataRes5 = document.querySelector(".js-aboutus-res5");
dropdownRes.addEventListener("click", (e) => {
  e.preventDefault();
  dropdowndataRes1.classList.toggle("js-aboutus-res-show");
  dropdowndataRes2.classList.toggle("js-aboutus-res-show");
  dropdowndataRes3.classList.toggle("js-aboutus-res-show");
  dropdowndataRes4.classList.toggle("js-aboutus-res-show");
  dropdowndataRes5.classList.toggle("js-aboutus-res-show");

  // alert("hi")
});

if (window.location.href == "../pages/success.php") {
  let backbtn = document.querySelector(".gooback");
  backbtn.addEventListener("clicl", () => {
    window.location.href = "../index.html";
  });
}

let addfooter = document.querySelector(".footer");
if (addfooter) {
  addfooter.innerHTML = `
<div class="footer-links">
            <div class="short-info">
              <div class="foot-logo">
                <div class="logocard">
                  <img src="../assects/images/logo4.png" alt="" srcset="" />
                  <h2>Diyo saving and credit co-operative ltd.</h2>
                </div>
                <br />
                <br />
                <div class="info-organ">
                  At Diyo Saving and Credit Co-operative Ltd., we empower communities by fostering financial security through collective savings and responsible credit services.s
                </div>
                <div class="sociallink">
                  <a
                    target="_blank"
                    href="https://www.facebook.com/profile.php?id=100009771935950"
                    ><i class="fa-brands fa-facebook-f"></i
                  ></a>
                  <a
                    target="_blank"
                    href="https://www.facebook.com/profile.php?id=100009771935950"
                    ><i class="fa-brands fa-twitter"></i
                  ></a>
                  <a
                    target="_blank"
                    href="https://www.facebook.com/profile.php?id=100009771935950"
                    ><i class="fa-brands fa-instagram"></i
                  ></a>
                </div>
              </div>

              <br />
              <br />
            </div>
            <div class="footer70">
              <div class="Quick-links">
                <div class="address">
                  <div class="addressHead">Quick links</div>
                  <div class="footer-usefullink">
                    <a href="" class="green">Feedback</a>
                  </div>
                  <div class="footer-usefullink">
                    <a href="" class="green">FAQs</a>
                  </div>
                  <div class="footer-usefullink">
                    <a href="download.html" id="downloadID" class="green">Downloads</a>
                  </div>
                  <div class="footer-usefullink">
                    <a href="contactus.php" id="contactusid" class="green">Contact Us</a>
                  </div>
                </div>
              </div>
              <br />
              <br />
              <div class="Quick-links">
                <div class="address">
                  <div class="addressHead">Usefull Links</div>
                  <div class="footer-usefullink">
                    <a href="https://dakshinkalimun.gov.np/ne" class="green">Dakshinkali Municuaplity</a>
                  </div>
                  <div class="footer-usefullink">
                    <a href="https://www.deoc.gov.np/" class="green">Department of Cooperative</a>
                  </div>
                  <div class="footer-usefullink">
                    <a href="https://www.sahakarikhabar.com/" class="green">Sahakari News</a>
                  </div>
                  <div class="footer-usefullink">
                    <a href="https://www.nefscun.org.np/" class="green">NEFSCUN</a>
                  </div>
                  <div class="footer-usefullink">
                    <a href="https://ncbl.coop/" class="green">National Cooperative Bank</a>
                  </div>
                </div>
              </div>
              <br />
              <br />

              <div class="links-address">
                <div class="address">
                  <div class="addressHead">Address</div>
                  <div class="address-loc">
                    <i class="fa-solid fa-location-dot"></i>
                    <p>
                      diyo saving & credit co-opetative ltd.br dashinkali-1,
                      khahare, kathmandu
                    </p>
                  </div>
                </div>
                <div class="contactInfo">
                  <div class="contactHead">Contact Information</div>
                  <div class="contactbtn">
                    <div class="phone">
                      <i class="fa-solid fa-phone"></i>
                      <a href="tel:+977-01-5124333" class="green">01-5124333</a>
                    </div>
                    <div class="mail">
                      <i class="fa-solid fa-envelope"></i>
                      <a href="mailto:diyosaving@gmail.com" class="green"
                        >diyosaving@gmail.com</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="copyright-container">
            <div class="copyright">© Copyright 2024 All Rights Reserved.</div>
            <div class="design">
              Developed by

              <a href="https://www.instagram.com/aavash.khadka_/"
                >Avash Khadka</a
              >
              <br />
              <p>
                (Design reference taken from
                <a href="https://ncfnepal.com.np">: nfcnepal </a> &
                <a href="https://hamronepalcoop.com.np"> hamronepalcoop )</a>
              </p>
            </div>
          </div>
`;
}
