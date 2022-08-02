<?php
include 'templates/header.php';
?>

<h1 class="container mt-5">Demo cara untuk membuat register form</h1><br>

<p class="container">
Anda dapat lihat dengan teliti bagaimana saya menggunakan setiap "input type". </p>

<pre style="background:lightblue; width:80%; margin-top:50px; margin-left:70px;"><blockquote>
    &lt;form action="/action_page.php"&gt;
        &lt;div class="container"&gt;
        &lt;h1&gt;Register&lt;/h1&gt;
        &lt;p&gt;Please fill in this form to create an account.&lt;/p&gt;
        &lt;hr&gt;

        &lt;for="fname">&lt;b&gt;First name:&lt;b&gt;&lt;/label&gt;&lt;br&gt;
        &lt;input type="text" id="fname" name="fname" value="First Name"&gt;&lt;br&gt;

        &lt;label for="lname"&gt;Last name:&lt;/label&gt;&lt;br&gt;
        &lt;input type="text" id="lname" name="lname" value="Last Name"&gt;&lt;br&gt;

        &lt;p&gt;&lt;b&gt;Gender&lt;b&gt;&lt;/p&gt;

        &lt;input type="radio" id="male" name="gender" value="Male"&gt;
        &lt;label for="male">Male&lt;/label&gt;
        &lt;input type="radio" id="female" name="gender" value="Female"&gt;
        &lt;label for="female">Female&lt;/label&gt;&lt;br&gt;

        &lt;label for="email"&gt;&lt;b&gt;Email&lt;/b&gt;&lt;/label&gt;&lt;br&gt;
        &lt;input type="text" placeholder="Enter Email" name="email" id="email" required&gt;&lt;br&gt;

        &lt;label for="psw"&gt;&lt;b&gt;Password&lt;/b&gt;&lt;/label&gt;&lt;br&gt;
        &lt;input type="text" placeholder="Enter Password" name="psw" id="psw" required&gt;&lt;br&gt;

        &lt;label for="pnumber"&gt;Phone Number&lt;/label&gt;&lt;br&gt;
        &lt;input type="tel" id="pnumber" name="quantity" min="1" max="10"&gt;&lt;br&gt;&lt;br&gt;

        &lt;button type="submit" class="registerbtn">Register&lt;/button&gt;

        &lt;/div>&gt;

        &lt;div class="container signin"&gt;
    &lt;p&gt;Already have an account? &lt;a href="#"&gt;Sign in&lt;/a&gt;&lt;/p&gt;
  &lt;/div&gt;
&lt;/form&gt;

</blockquote>
</pre>

<p class="container">
Setiap input type memainkan peranan yang berlainan</p>

<h3 class="container mt-5">Klik Link di bawah untuk lihat output bagi code di atas.</h3>
<a style="margin-left: 50px; padding-bottom: 100px; color:blueviolet;" class="container" href="nota/dahan/Demo-Dahan/Part-1-RegisterForm/index.html">Index.html</a>


<?php
include 'templates/footer.php';
?>