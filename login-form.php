<?php
include 'templates/header.php';
?>

<h1 class="container mt-5">Demo cara untuk membuat Login Form</h1><br>

<pre style="background:lightblue; width:80%; margin-top:50px; margin-left:70px;"><blockquote>
    &lt;form action="/action_page.php"&gt;
            &lt;h1 class="container mt-3"&gt;Student Login Form &lt;/h1&gt;
            &lt;div class="container"&gt;

            &lt;label&gt;Username : &lt;/label&gt; 
            &lt;input type="text" placeholder="Enter Username" name="username" required&gt;

            &lt;label&gt;Password : &lt;/label&gt;   
            &lt;input type="password" placeholder="Enter Password" name="password" required&gt;&lt;br&gt;

            &lt;button type="submit"&gt;Login&lt;/button&gt;    

            &lt;button type="button" class="cancelbtn"&gt; Cancel&lt;/button&gt;   

            Forgot &lt;a href="#"&gt; password? &lt;/a&gt;   
            &lt;/div&gt;   
        &lt;/form&gt;    
        
        </blockquote>
</pre>


<p class="container">
Setiap input type memainkan peranan yang berlainan</p>

<h3 class="container mt-5">Klik Link di bawah untuk lihat output bagi code di atas.</h3>
<a style="margin-left: 50px; padding-bottom: 100px; color:blueviolet;" class="container" href="nota/dahan/Demo-Dahan/Part-2-LoginForm/index.html">Index.html</a>


<?php
include 'templates/footer.php';
?>