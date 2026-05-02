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
}
.resume-info{
  display: flex;
  padding-left: 20px;
  align-items: 20px;
  gap: 25px;
}
.accordion{
  width: 350px;
  padding: 0;
  color: black;
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
    <img src="https://media.discordapp.net/attachments/590735643190100005/1499273824804274223/Reimone_Valdes_-_Headshot.JPG?ex=69f4330e&is=69f2e18e&hm=9068ec28a067d89f3f19ef47d30c1d4b909b446a34142ea08989834a571e8595&=&format=webp&width=350&height=350" width = "250" height ="250">
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
         <strong>This is the third item’s accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>

</div>
</div>
</div>
</body>
</html>

