<?php
include 'templates/header.php';
?>

<h1 class="container mt-5">Link Navbar dan Section Guide</h1><br>
<h3 class="container">dekat index.html</h3>
<p class="container">
Pastikan anda sudah link kan dengan style.css. <br><br>
Di section Header <br>
kamu hanya perlu isi <br>
href="#home" <br>
href="#who" <br>
href="#service" <br>
href="#contact" <br><br>
kenapa kena letak sekali <b>#</b> ???  <br>
<b>#</b> ni adalah id <br>
<b>.</b> ni adalah class <br>
nanti kamu akan paham selepas section header <br>
</p>

<pre style="background:lightblue; width:70%; margin-top:50px; margin-left:70px;"><blockquote>
&lt;body&gt;
&lt;!-- Section Header --&gt;

    &lt;div class="header"&gt;
        &lt;div class="nav"&gt;
            &lt;img src="logo.png" alt="Gambar-Projek" style="color: white; height: 50px"&gt;
            &lt;ul&gt;
            &lt;!-- ni navbar --&gt;
                &lt;li&gt; &lt;a href="#home"&gt; Home &lt;/a&gt; &lt;/li&gt;
                &lt;li&gt; &lt;a href="#who"&gt; Who We Are &lt;/a&gt; &lt;/li&gt;
                &lt;li&gt; &lt;a href="#service"&gt; Service &lt;/a&gt; &lt;/li&gt;
                &lt;li&gt; &lt;a href="#contact"&gt; Contact &lt;/a&gt; &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
</blockquote>
</pre>

<p class="container">
<br><br>
Untuk setiap section nanti harus letak <b>id="nama section yg kamu guna"</b> <br>
contohnya seperti di bawah <b>id"home"</b> <br>
</p>

<pre style="background:lightblue; width:70%; margin-top:50px; margin-left:70px;"><blockquote>
&lt;!-- Section Home --&gt;

&lt;div id="home"&gt;
    &lt;div id="container" class="content"&gt;
        &lt;h1&gt;Training until you dont know what is Training&lt;/h1&gt;
        &lt;br&gt;&lt;br&gt;
        &lt;p&gt;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, exercitationem!&lt;/p&gt;
        &lt;p&gt;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, exercitationem!&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</blockquote>
</pre>

<p class="container">
<br><br>
next section pun kamu letak juga id tu <b>id""</b> <br>
baru lah navbar dan section dapat di link kan. <br>
</p>

<pre style="background:lightblue; width:70%; margin-top:50px; margin-left:70px;"><blockquote>
&lt;!-- Section Who We Are --&gt;

&lt;div id="who"&gt;
    &lt;div id="container" class="content"&gt;
        &lt;h1&gt;Who We Are&lt;/h1&gt;
        &lt;br&gt;&lt;br&gt;
        &lt;p&gt;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, exercitationem!&lt;/p&gt;
        &lt;p&gt;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, exercitationem!&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Section Service --&gt;

&lt;div id="service"&gt;
    &lt;div id="container" class="content"&gt;
        &lt;h1&gt;Service&lt;/h1&gt;
        &lt;br&gt;&lt;br&gt;
        &lt;p&gt;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, exercitationem!&lt;/p&gt;
        &lt;p&gt;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, exercitationem!&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Section Contact --&gt;

&lt;div id="contact"&gt;
    &lt;div class="footer"&gt;
        &lt;h1&gt;Contact&lt;/h1&gt;
        &lt;br&gt;&lt;br&gt;
        &lt;p&gt;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, exercitationem!&lt;/p&gt;
        &lt;p&gt;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, exercitationem!&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</blockquote>
</pre>

<h3 class="container mt-5">dekat style.css</h3>
<p class="container">
    Contoh Style.css <br>
    Anda boleh copy utk lihat kesan nya di html.
</p>
<pre style="background:lightblue; width:70%; margin-top:50px; margin-left:70px;"><blockquote>
* {
  margin: 0;
  padding: 0;
}

#container {
  width: 960px;
  margin: 0 auto;
}

body {
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
  background: rgb(1, 0, 6);
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

.content {
  background-color: #fff;
  padding: 10px;
  height: 300px;
}

.content h1 {
  text-align: center;
  padding-top: 1rem;
}

.footer {
  padding: 10px;
  text-align: center;
  color: #fff;
  background-color: rgb(0, 0, 0);
}

</blockquote>
</pre>

<h3 class="container mt-5">Klik Link di bawah untuk lihat website code di atas.</h3>
<a style="margin-left: 50px; padding-bottom: 100px; color:blueviolet;" class="container" href="nota/benih/Guideline-Navbar-dan-section/Part-3-Link-Nav-Sec-Setup/index.html">Index.html</a>



<?php
include 'templates/footer.php';
?>