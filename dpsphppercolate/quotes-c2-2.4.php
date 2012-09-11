<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DPSaia:Understanding Quotation Marks: Chapter 2: Ex. Script 2.4</title>
<link rel="stylesheet" href="themes/babyblue.min.css" />
<link rel="stylesheet" href="main.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile.structure-1.1.1.min.css" />
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--></head>

<body>

<div class="container">
  <header>
  <a href="#"><img src="Percolato-banner.png" alt="Insert Logo Here" name="Insert_logo" width="961" height="200" id="Insert_logo" style="background: #C6D580; display:block;" /></a>
     
    
  </header>
  <div class="sidebar1">
  <nav>
   
        <h4>Chapter 2: What Are Variables?</h4>  
      <ul>
        <li><a href="predefined-c2-2.1.php">Print PHP Predifined Variables: Exc.Script 2.1</a></li>
        <li><a href="syntax-c2-2.2.php">Variable Syntax: Exc.Script 2.2</a></li>
        <li><a href="types-c2-2.3.php">Types of Variables: Exc.Script 2.3</a></li>
        <li><a href="quotes-c2-2.4.php">Understanding Quotation Marks: Exc.Script 2.4</a></li>
       
      </ul>
   
    </nav>
    <aside>
      <p> Use the above navigation links to view completed exercises.</p>
      
    </aside>
  <!-- end .sidebar1 --></div>
  <article class="content">
    <section>
    <hr/>
    <h4>Where to use Single or Double Quotation Marks.</h4>



<p>2.4 This following was created by PHP. The different quotation marks, single versus double, will determine whether the variable's name or value is printed. Single quotes print out the name of variable literally. Double quotes interpret the value of the variable.
</p>
<p>
<?php // Script 2.4 -quotes-c2-2.4.php

//Single or double quotations won't matter here:

$first_name = 'Diane';
$last_name = "Saia";

//Single or double quotations DOES matter here:

$name1 = '$first_name $last_name';
$name2 = "$first_name $last_name";

//Single or double quotations DOES matter here:

print "<h1>Double Quotes</h1> <p>name1 is $name1 <br /> name2 is $name2</p>";
print "<br />";
print '<h1>Single Quotes</h1> <p>name1 is $name1 <br /> name2 is $name2</p>';


?>
</p>

<p>
<em><a href="index.php">Back</a></em>
</p> 
     
    </section>

  <!-- end .content --></article>
 <!--<aside>
    <h4>Questions?</h4>
    <p></p>
  </aside>-->
  <footer>
   <p class="centered">Diane Ponte Saia: PHP for the Web Exercises for PHP Percolate Season 4</p>
    
    <address>
    <p>portfolio url: <a href="http://dianepontesaia.com">dianepontesaia.com</a></p>
    </address>
  </footer>
  <!-- end .container --></div>
</body>
</html>
