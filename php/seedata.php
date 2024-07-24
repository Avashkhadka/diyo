<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Diyo Saving & Credit Co-Operative limited</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="web-container">
      <div class="navbar-res">
        <ul>
          <li class="btn cross">
            <i class="fa-solid fa-xmark" id="cross"></i>
          </li>
          <a href="../index.html"><li class="btn">HOME</li></a>
          <a id="aboutus-res"
            ><li class="btn">ABOUT US<i class="fa-solid fa-angle-down"></i></li></a>

        
            <a href="../pages/bod.html"
            ><li class="btn js-aboutus-res1">BOARD OF DIRECTORS</li></a
          >
          <a href="../pages/Accountsupervisioncommittee.html"
            ><li class="btn js-aboutus-res2">ACCOUNT SUPERVISION COMMITTEE</li></a
          >
          <a href="../pages/loan committee.html"
            ><li class="btn js-aboutus-res3">LOAN COMMITTEE</li></a
          >
          <a href="../pages/Eduxationcommittee.html"
            ><li class="btn js-aboutus-res4">EDUCATION COMMITTEE</li></a
          >
          <a href="../pages/managementTeam.html"
            ><li class="btn js-aboutus-res5">EMPLOYEE</li></a
          >

          <a href="../pages/contactus.php"><li class="btn">CONTACT US</li></a>
          <a href="../pages/calinder.html"> <li class="btn">CALINDER(2081)</li></a>

        </ul>
      </div>
      <div class="header">
        <div class="box"></div>
        <div class="box1"></div>
        <div class="box2"></div>
        <div class="box4"></div>
        <div class="box5"></div>
        <div class="head-info">
          <div class="logo">
            <img src="../assects/images/logo4.png" alt="" srcset="" />
          </div>
          <div class="other-info">
            <div class="organizationName">
              <div class="head">दियो</div>
              <div class="otherLang">
                <div class="name-nepali">
                  सेभिङ्ग एण्ड क्रेडिट कोअपरेटिभ लि.
                </div>
                <div class="nameEnglish">
                  DIYO SAVING & CREDIT CO-OPETATIVE LTD.
                </div>
                <div class="organAddress">
                  Dashinkali-1, Khahare, Kathmandu, Tel:01-5124333,
                  Email:diyosaving@gmail.com
                </div>
              </div>
            </div>
          </div>
          <div class="socialmedia-handle">
            <div class="handleLinks">
              <a
                target="_blank"
                href="https://www.facebook.com/profile.php?id=100009771935950"
                ><i class="fa-brands fa-facebook-f"></i
              ></a>
            </div>
            <div class="handleLinks">
              <a
                target="_blank"
                href="https://www.facebook.com/profile.php?id=100009771935950"
                ><i class="fa-brands fa-twitter"></i
              ></a>
            </div>
            <div class="handleLinks">
              <a
                target="_blank"
                href="https://www.facebook.com/profile.php?id=100009771935950"
                ><i class="fa-brands fa-instagram"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="navbar">
          <ul class="ul">
            <li class="btn li"><a href="../index.html">HOME</a></li>
            <li class="hoverbtn activepage li">
              <a href="" class="dropdown green">ABOUT US <i class="fa-solid fa-angle-down"></i></a>
              <ul class="js-aboutus" style=" position: absolute;
              width: 16rem;">
                <li class="activepage">
                  <a href="../pages/bod.html" class="green">BOARD OF DIRECTORS</a>
                </li>
                <li>
                  <a href="../pages/aboutus.html" class="green">ABOUT US</a>
                </li>
              </ul>
            </li>
            <li class="btn li">
              <a href="../pages/contactus.php">CONTACT US</a>
            </li>
            <li class="btn li">
              <a href="../pages/calinder.html">CALINDER(2081)</a>
            </li>
            <!-- <li class="btn"><a href="pages/../pages/bod.html">BOARD OF DIRECTORS</a></li> -->
          </ul>
        </div>
        <div class="marquee">
          <marquee behavior="" direction="">This is message</marquee>
          <div class="ham">
            <i class="fa-solid fa-bars"></i>
          </div>
        </div>
        <div class="pageloc">
          <div class="pagloc-bg">
            <div class="pagloc-left">Customer's inquiry</div>
            <div class="pagloc-right">Home / Contact Us / Customer's inquiry</div>
          </div>
        </div>
      </nav>
      <main>
        <div class="main-cont">
      <div class="container">
        <div class="msgheading">
          <h1>Customer's inquiry</h1>
        </div>
        <div class="msgContent">
          <div class="table-container">
            <?php
            include "connect.php";
            $sql='SELECT * FROM webtable';
            $res=mysqli_query($conn,$sql);
            if(!$res){
              echo"Data not found".mysqli_connect_error();
            }else{
              echo"<table>";
              echo"<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Subject</th><th>Message</th><th>Action</th></tr>";
              while($row=mysqli_fetch_assoc($res)){
                echo"<tr>";
                  echo"<td>" . $row['webfName'] . "</td>";
                  echo"<td>" . $row['weblName'] . "</td>";
                  echo"<td>" . $row['webEmail'] . "</td>";
                  echo"<td>" . $row['webSubject'] . "</td>";
                  echo"<td>" . $row['webMessage'] . "</td>";
                  echo"<td class='table-btn'><button class='table-btn-btn' onclick=ramesh('".$row['id'] ."')>Delete</button> </td> ";
                echo"</tr>";
              }
            }
              echo"</table>";
            
            
            ?>
          </div>
        </div>
      </div>

      
      <script>
function ramesh(id) {
    if (confirm('Are you sure you want to delete this record?')) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'delete.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                location.reload(); 
            }
        };
        xhr.send('id=' + id);
    }
}

</script>
        </div>
      </main>

      <footer>
        <div class="footer">
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
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Possimus iste rem cupiditate ipsa similique laudantium! Veniam
                  sint perspiciatis omnis consequatur?
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
                    <a href="" class="green">Downloads</a>
                  </div>
                  <div class="footer-usefullink">
                    <a href="../pages/contactus.php" class="green">Contact Us</a>
                  </div>
                </div>
              </div>
              <br />
              <br />
              <div class="Quick-links">
                <div class="address">
                  <div class="addressHead">Usefull Links</div>
                  <div class="footer-usefullink">
                    <a href="" class="green">Feedback</a>
                  </div>
                  <div class="footer-usefullink">
                    <a href="" class="green">FAQs</a>
                  </div>
                  <div class="footer-usefullink">
                    <a href="" class="green">Downloads</a>
                  </div>
                  <div class="footer-usefullink">
                  <a href="../pages/contactus.php" class="green">Contact Us</a>
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
        </div>
      </footer>
    </div>
    <script src="../js/app.js"></script>
  </body>
</html>
