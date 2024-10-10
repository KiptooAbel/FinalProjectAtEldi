<?php
require('header.php');
?>
 <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 20px;
}

.box {
    width: 30%;
    margin: 10px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    text-align: center;
    transition: transform 0.3s ease;
}

.box:hover {
    transform: scale(1.05);
}

@media (max-width: 768px) {
    .box {
        width: 45%;
    }
}

@media (max-width: 480px) {
    .box {
        width: 90%;
    }
}
 </style>
    <div class="container">
    <div class="box">
        <h2>About Us</h2>
        <p>At [School Name], we are committed to providing a supportive and engaging learning environment for all students.</p>
    </div>
    <div class="box">
        <h2>Academics</h2>
        <p>Our academic programs are designed to challenge and inspire students to reach their full potential.</p>
    </div>
    <div class="box">
        <h2>Admissions</h2>
        <p>Learn more about our admissions process and how to enroll at [School Name].</p>
    </div>
</div>
<?php
require('footer.php');
?>