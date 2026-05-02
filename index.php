<html>
<title> RESUME </title>
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Activities</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;

        }
body {
    background-color: rgb(35, 41, 90);
     padding: 20px;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 25px; 
  background-color: #f1f1f1;
}
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.card-info {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 25px; 
  background-color: #f1f1f1;
  width: 300px;
  overflow: hidden;
  flex-shrink: 0;
}
.card-info:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.contact-info{
  padding-left: 20px;
}
.intro{
  font-size: 25px;
}
 h1{
   margin-top: 5px;
   margin-bottom: 5px;
}
.name{
    font-size: 25px;
}
.container {
  padding: 2px 16px;
  align-items: flex-start;
  display: flex;
}
.card-info img {
  width: 100%;
  height: auto;
  max-height: 300px;
  object-fit: cover;
}
.resume-info{
  display: flex;
  padding-left: 20px;
  align-items: flex-start;
  gap: 25px;
  flex-wrap: wrap;
}
.accordion{
  width: 100%;
  max-width: 450px;
  padding: 0;
  color: black;
  flex: 1;
}
.accordion-body{
  display: flex;
  flex-direction: column;
  gap: 20px;
}
.accordion-body img {
  width: 200px;
  height: auto;
  display: block;
  border-radius: 16px;
}
  
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<?php
        $firstname = "Reimone Bradley";
        $midint = "T.";
        $lastname = "Valdes";
        $birthyear = 2006; 
        $emailaddr = "coolguy.25@yahoo.com";
        $address ="Nangka, Marikina";
    ?>
<div class = "container">
  <div class = "card-info">
    <img src="Reimone Valdes - Headshot.png">
  <div class = "contact-info">
    <p class = "name"> <?= "I am $firstname $midint $lastname" ?> </p>
    <h3>Student @ FEU Tech</h3>
    <h4><?= "Address: $address" ?></h4>
    <h4><?= "Email: $emailaddr" ?></h4>
</div>
  </div>
  <div class = "resume-info">
  <div class = "resume-content">
    <h1 style ="color: white"><u> PROFILE </u></h1>
    <p style ="color: white"> Welcome to the profile of <?= "$firstname $midint $lastname" ?>. <br>
    He is currently on the path of completing his education on BSIT-CST 
</p>

  <h1 style ="color: white"><u> SKILLS </u></h1>
  <ul style ="color: white">
    <li> HTML -- (Intermediate) </li>
    <li> CSS -- (Intermediate) </li>
    <li> JavaScript -- (Beginner) </li>
    <li> PHP -- (Beginner) </li>
    <li> Python -- (Beginner) </li>
    <li> C++ -- (Intermediate) </li>
    <li> Adobe Photoshop -- (Intermediate) </li>
</ul>

 <h1 style ="color: white"><u> EDUCATION </u></h1>
 <h3 style ="color: white"> FEU Institute of Technology </h3>
 <p style ="color: white"> Cybersecurity Technologies 2024 - 2028</p>
 <h3 style ="color: white"> FEU Roosevelt Marikina </h3>
 <p style ="color: white"> Information Communications Technology 2022 - 2024 </p>
 <h3 style ="color: white"> San Lorenzo Ruiz De Manila School </h3>
 <p style ="color: white"> Information Communications Technology 2017-2022 </p>
</div>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Certifications
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         <img src="https://images.credly.com/size/340x340/images/2210b6fe-0eda-415a-8aba-6c1400566728/ITS-Badges_Java_1200px.png">
      <img src="https://images.credly.com/size/340x340/images/e2dc688d-de61-44a5-81af-ee96f117a211/ITS-Badges_HTML-and-CSS_1200px.png">
    </div>
  </div>

</div>
</div>
</div>
</body>
</html>

