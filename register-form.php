<?php
include 'templates/header.php';
?>

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
</blockquote>
</pre>

<form action="/action_page.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="fname"><b>First name:<b></label><br>
    <input type="text" id="fname" name="fname" value="First Name"><br>

    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname" value="Last Name"><br>

    <p><b>Gender</b></p>

    <input type="radio" id="male" name="gender" value="Male">
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">Female</label><br>


    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" id="email" required><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required><br><br>

    <label for="pnumber">Phone Number</label><br>
    <input type="tel" id="pnumber" name="quantity" min="1" max="10"><br><br>

    <button type="submit" class="registerbtn">Register</button>

    
  </div>

  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a></p>
  </div>
</form>

<h3 class="container mt-5">Klik Link di bawah untuk lihat website code di atas.</h3>
<a style="margin-left: 50px; padding-bottom: 100px; color:blueviolet;" class="container" href="nota/dahan/Demo-Dahan/Part-1-RegisterForm/index.html">Index.html</a>


<?php
include 'templates/footer.php';
?>