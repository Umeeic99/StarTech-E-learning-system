<h1 style="font-style: italic; font-weight: 900; font-family: Cooper Black;font-size: 40px">FAQ</h1>
<!DOCTYPE html>
<!-- Designed by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive FAQ Accordion | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    	/* Google Font CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
/*body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: #7d2ae8;
  padding: 40px;
}*/
::selection{
  background: #7d2ae8;
  color: #fff;
}
.accordion{
  display: flex;
  max-width: 1010px;
  width: 100%;
  align-items: center;
  justify-content: space-between;
  background: #fff;
  border-radius: 25px;
  padding: 45px 90px 45px 60px;
}
.accordion .image-box{
  height: 360px;
  width: 300px;
}
.accordion .image-box img{
  height: 100%;
  width: 100%;
  object-fit: contain;
}
.accordion .accordion-text{
  width: 60%;
}
.accordion .accordion-text .title{
  font-size: 35px;
  font-weight: 600;
  color: #7d2ae8;
  font-family: 'Fira Sans', sans-serif;
}
.accordion .accordion-text .faq-text{
  margin-top: 25px;
  height: 263px;
  overflow-y: auto;
}
.faq-text::-webkit-scrollbar{
  display: none;
}
.accordion .accordion-text li{
  list-style: none;
  cursor: pointer;
}
.accordion-text li .question-arrow{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.accordion-text li .question-arrow .question{
  font-size: 18px;
  font-weight: 500;
  color: #595959;
  transition: all 0.3s ease;
}
.accordion-text li .question-arrow .arrow{
  font-size: 20px;
  color: #595959;
  transition: all 0.3s ease;
}
.accordion-text li.showAnswer .question-arrow .arrow{
  transform: rotate(-180deg);
}
.accordion-text li:hover .question-arrow .question,
.accordion-text li:hover .question-arrow .arrow{
  color: #7d2ae8;
}
.accordion-text li.showAnswer .question-arrow .question,
.accordion-text li.showAnswer .question-arrow .arrow{
  color: #7d2ae8;
}
.accordion-text li .line{
  display: block;
  height: 2px;
  width: 100%;
  margin: 10px 0;
  background: rgba(0, 0, 0, 0.1);
}
.accordion-text li p{
  width: 92%;
  font-size: 15px;
  font-weight: 500;
  color: #595959;
  display: none;
}
.accordion-text li.showAnswer p{
  display: block;
}

@media (max-width: 994px) {
  body{
    padding: 40px 20px;
  }
  .accordion{
    max-width: 100%;
    padding: 45px 60px 45px 60px;
  }
  .accordion .image-box{
    height: 360px;
    width: 220px;
  }
  .accordion .accordion-text{
    width: 63%;
  }
}
@media (max-width: 820px) {
  .accordion{
    flex-direction: column;
  }
  .accordion .image-box{
    height: 360px;
    width: 300px;
    background: #7d2ae8;
    width: 100%;
    border-radius: 25px;
    padding: 30px;
  }
  .accordion .accordion-text{
    width: 100%;
    margin-top: 30px;
  }
}
@media (max-width: 538px) {
  .accordion{
    padding: 25px;
  }
  .accordion-text li p{
    width: 98%;
  }
}

    </style>
   </head>
<body>
  <div class="accordion">
    <div class="image-box">
      <img src="images/mainImg.png" alt="Accordion Image">
    </div>
    <div class="accordion-text">
      <div class="title">FAQ</div>
    <ul class="faq-text">
      <li>
        <div class="question-arrow">
          <span class="question">How StarTech will Benefit us?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Students gets a chance to get rid of physical classes and focus entirely for exams preparation. Startech is providing round the clock access to materials and lectures also let students study when they feel most focused and engaged.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Which Software and apps you are using for your e-learning System?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Databases used: MySQL , Design used: HTML JavaScript, Ajax, JQuery, Bootstrap, php. , Browser used: IE8, Google Chrome, Opera Mozilla, firefox, internet explorer. , Software used: WAMP/ XAMPP/ LAMP/MAMP. Other designing tools like Adobe Photoshop, visio , figma , wix will be used.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Is there any fee?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>All the lectures and videos are free to download except some customized quizzes ,you have to pay depending upon the complexity of quiz and syllabus.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">What are the technology requirements to take an online Lecture?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>You will need a computer, a high speed Internet connection, a newer version of a web browser, and access to common tools and software like word processors, email, etc.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">What if student faces any trouble?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Feel free to contact us regarding any problem related to subject, write your name , email , contact no. , description and submit it to us.</p>
        <span class="line"></span>
      </li>
    </ul>
    </div>
  </div>


  <script>
    let li = document.querySelectorAll(".faq-text li");
    for (var i = 0; i < li.length; i++) {
      li[i].addEventListener("click", (e)=>{
        let clickedLi;
        if(e.target.classList.contains("question-arrow")){
          clickedLi = e.target.parentElement;
        }else{
          clickedLi = e.target.parentElement.parentElement;
        }
       clickedLi.classList.toggle("showAnswer");
      });
    }
  </script>

</body>
</html>

