<style type="text/css">
* {
  margin: 0;
  padding: 0;
  border: 0;
}
div.container ul {
  text-align: center;
  list-style: none;
}

.container {
  max-width: 1085px;
  margin: 20px auto;
}

header nav {
  font-family: gravesend-sans,sans-serif;
  list-style: none;
  display: inline block;
  width: 100%
  font-size: 25px;
}

header nav a {
  color: black;
  text-decoration: none;
  padding: 5px;
}

header li {
  display: inline-block;
  margin: 0 45px;
}

footer p {
  font-family: gravesend-sans, sans-serif;
  color: grey;
  text-align: center;
}
footer p {
  font-family: gravesend-sans, sans-serif;
  color: grey;
  text-align: center;
}

</style>

<header>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="index.html">About Me</a></li>
      <li><a href="index.html">Resumé</a></li>
      <li><a href="index.html">Portfolio</a></li>
      <li><a href="index.html">Gallery</a></li>
      <li><a href="index.html">Contact</a></li>
    </ul>
  </nav>
<header>

<div class="container">
<h1>Missing fields</h1>
<p>Sorry, you have not completed all of the required fields.</p>
<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>
	<p>Website by Skyla A Jossell</p>
</footer>
</body>
