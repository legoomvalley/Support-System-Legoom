<?php
include 'templates/header.php';
?>

<h1 class="container mt-5">Tag for Image</h1>
<p class="container">
Di sini boleh study tentang Tag Image <br>
di sini hanya perlu gunakan img src="<b>lokasi gambar tersebut terletak di folder mana</b>" <br>
<b>alt=""</b> pula untuk mengantikan gambar tersebut dengan text jika gambar tersebut bug atau tiada maka akan guna alt="" <br>
anda boleh ubah saiz dengan menggunakan <b>height=""</b>  untuk tinggi dan <b>width=""</b>  untuk lebar
</p>

<pre style="background:lightblue; width:70%; margin-top:50px; margin-left:70px;"><blockquote>
    &lt;img src="img/logo.png" alt="logo legoom" height="300" width="500"&gt; 
</blockquote>
</pre>

<h1 class="container mt-5">Output untuk image</h1>
<img  class="mt-5" style="margin-left: 100px; padding-bottom: 100px;" src="img/logo.png" alt="logo legoom" height="300" width="500" />

<?php
include "templates/footer.php";
?>