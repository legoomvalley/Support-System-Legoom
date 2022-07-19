<?php
include 'templates/header.php';
?>

<h1 class="container mt-5">Navbar Guide</h1><br>
<h3 class="container">dekat index.html</h3>
<p class="container">
    Pastikan anda sudah link kan dengan style.css. <br>
   Guna kan <br>
   &lt;div class="header"&gt; <br>
   &lt;div class="nav"&gt; <br>
   &lt;ul&gt; <br>
   &lt;li&gt; &lt;a href="#"&gt; Home &lt;/a&gt; &lt;/li&gt; <br>
   &lt;/ul&gt; <br>
   &lt;/div&gt; <br>
   &lt;/div&gt; <br>
   contoh seperti code dibawah
</p>
<pre style="background:lightblue; width:70%; margin-top:50px; margin-left:70px;"><blockquote>
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;link rel="stylesheet" href="style.css"&gt;
    &lt;title&gt;Navbar Guide&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;  
    &lt;div class="header"&gt;
        &lt;div class="nav"&gt;
            &lt;img src="logo.png" alt="Gambar-Projek" style="color: white; height: 50px"&gt;
            &lt;ul&gt;
                &lt;li&gt; &lt;a href="#"&gt; Home &lt;/a&gt; &lt;/li&gt;
                &lt;li&gt; &lt;a href="#"&gt; Promotoin &lt;/a&gt; &lt;/li&gt;
                &lt;li&gt; &lt;a href="#"&gt; Service &lt;/a&gt; &lt;/li&gt;
                &lt;li&gt; &lt;a href="#"&gt; Testimonial &lt;/a&gt; &lt;/li&gt;
                &lt;li&gt; &lt;a href="#"&gt; Faq &lt;/a&gt; &lt;/li&gt;
                &lt;li&gt; &lt;a href="#"&gt; Contact &lt;/a&gt; &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</blockquote>
</pre>

<br>
<h3 class="container">dekat style.css</h3>
<p class="container">
    Contoh Style.css <br>
    Anda boleh copy utk lihat kesan nya di html.
</p>
<pre style="background:lightblue; width:70%; margin-top:50px; margin-left:70px;"><blockquote>
* {
  margin: 0;
  padding: 0;
}

body {
  background: linear-gradient(180deg, hsla(280, 84%, 41%, 1) 0%, hsla(218, 97%, 56%, 1) 100%);
  font-family: poppins;
  -webkit-animation-size: cover;
  background-size: cover;
  background-position: cover;
  height: 100vh;
}

.nav ul {
  list-style: none;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
}

.nav ul li a {
  text-decoration: none;
  color: #fff;
  padding: 1.5rem;
  font-weight: bold;
  transition: all 0.5s;
}

.header {
  background: rgb(61, 20, 84);
  overflow: hidden;
}

.nav {
  display: grid;
  grid-template-columns: 6fr 6fr;
  align-items: center;
  width: 1100px;
  margin: auto;
}

.nav img {
  width: 120px;
  height: auto;
}

.nav ul li a:hover {
  color: #000;
  background: #fff;
}

</blockquote>
</pre>

<h3 class="container mt-5">Klik Link di bawah untuk lihat website code di atas.</h3>
<a style="margin-left: 50px; padding-bottom: 100px; color:blueviolet;" class="container" href="nota/benih/Guideline-Navbar-dan-section/Part-1-Navbar-Setup/index.html">Index.html</a>

<?php
include "templates/footer.php";
?>