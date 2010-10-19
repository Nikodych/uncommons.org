<?php echo '<?xml version="1.0" encoding="utf-8" ?>'."\n" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>Uncommons.org</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description" content="ReportNG is a simple HTML/XML reporting plug-in for the TestNG framework." />
    <meta name="keywords" content="reportng, testng, reporting, unit, test, java, html, xml, css, open, source, free, dan, daniel, dyer, uncommons" />
    <meta name="author" content="Daniel Dyer" />
    <link href="uncommons.css" rel="stylesheet" type="text/css" />
    <link href="http://blog.uncommons.org/feed/" rel="alternate" type="application/rss+xml" title="New Adventures in Software Feed" />
    <script type="text/javascript" src="amazon.js"></script>
    <?php readfile('analytics.html'); ?>
    <!-- YUI Carousel -->
    <link type="text/css" rel="stylesheet" href="http://yui.yahooapis.com/2.8.0r4/build/carousel/assets/skins/sam/carousel.css" />  
    <script type="text/javascript" src="http://yui.yahooapis.com/combo?2.8.0r4/build/yahoo-dom-event/yahoo-dom-event.js&amp;2.8.0r4/build/element/element-min.js&amp;2.8.0r4/build/carousel/carousel-min.js"></script>
  </head>
  <body class="yui-skin-sam">
    <div id="container">
      <?php readfile('header.html'); ?>
      
      <p>
        All of the software projects on this page are Open Source software, licensed under the terms of 
        the <a href="http://www.apache.org/licenses/LICENSE-2.0.html">Apache Software Licence, version 2.0</a>.
      </p>

      <div id="sidebar">
        <?php include('blog.php'); ?>
      </div>

      <div id="main">
       <h2><a href="http://watchmaker.uncommons.org">The Watchmaker Framework for Evolutionary Computation</a></h2>
       <div id="examples">
         <ol>
           <li>
             <a href="http://watchmaker.uncommons.org/examples/salesman.php"><img src="http://watchmaker.uncommons.org/tsp.png" width="180" height="163" alt="Travelling Salesman"/></a>
             <p>
               <strong>The Travelling Salesman</strong><br/>
               An evolutionary program that finds quick solutions to a difficult routing problem.
             </p>
           </li>
           <li>
             <a href="http://watchmaker.uncommons.org/examples/biomorphs.php"><img src="http://watchmaker.uncommons.org/biomorphs.png" width="180" height="163" alt="Biomorphs"/></a>
             <p>
               <strong>Biomorphs</strong><br/>
               A program that evolves insect-like creatures via user-guided selection. 
             </p>
           </li>
           <li>
             <a href="http://watchmaker.uncommons.org/examples/sudoku.php"><img src="http://watchmaker.uncommons.org/sudoku.png" width="180" height="163" alt="Sudoku"/></a>
             <p>
               <strong>Sudoku</strong><br/>
               A program that visualises the progress of an evolutionary algorithm that solves Sudoku puzzles.
             </p>
           </li>
           <li>
             <a href="http://watchmaker.uncommons.org/examples/monalisa.php"><img src="http://watchmaker.uncommons.org/monalisa.png" width="180" height="163" alt="Mona Lisa"/></a>
             <p>
               <strong>Mona Lisa</strong><br/>
               Evolution vs. the Mona Lisa.  Reducing a work of art to 50 translucent polygons.
             </p>
           </li>
         </ol>
       </div>
       <script type="text/javascript">
         (function () {
           var carousel;
           YAHOO.util.Event.onDOMReady(function (ev) {
             var index = (Math.floor(Math.random() * 4));
             var carousel = new YAHOO.widget.Carousel("examples", {
               isCircular: true, numVisible: 1, autoPlayInterval: 15000
             });
             carousel.render();
             carousel.scrollTo(index);
             carousel.startAutoPlay();
           });
         })();
       </script>
       <p>
         The Watchmaker Framework is an extensible, high-performance, multi-threaded, object-oriented framework for implementing platform-independent
         <a href="http://en.wikipedia.org/wiki/Evolutionary_algorithm">evolutionary/genetic algorithms</a> in Java.  The framework includes several
         example applications, some of which you can try out by clicking on the images to the right of this text.
       </p>
       <ul>
         <li><a href="https://watchmaker.dev.java.net/servlets/ProjectDocumentList?folderID=6343">Download</a></li>
         <li><a href="http://watchmaker.uncommons.org/api/">API Documentation</a></li>
         <li><a href="http://watchmaker.uncommons.org/manual/">User Manual</a></li>
       </ul>
       <h2><a href="http://dwdyer.github.com/zeitgeist">Zeitgeist</a></h2>
       <p>
         Zeitgeist is an intelligent RSS news aggregator.  It collates articles from several sources and identifies common themes.
         It can be used to publish web pages of current topical news stories with related links and relevant photos.
       </p>
       <h2><a href="http://maths.uncommons.org">Uncommons Maths</a></h2>
       <img src="demo.png" width="326" height="189" alt="Uncommons Maths random number demo." class="screenshot-right" />
       <p>
         High-performance random number generators and other mathematical utilities.  Includes support for generating random numbers from
         several probability distributions (Uniform, Gaussian, Binomial, Poisson and Exponential).  Also includes classes for working with
         combinatorics and statistics.
       </p>
       <p>
         <b>WebStart Demo:</b> <a href="https://uncommons-maths.dev.java.net/demo/demo.jnlp">Probability Distributions</a>
       </p>
       <p>A Java Programer's Guide to Random Numbers: 
         <a href="http://blog.uncommons.org/2008/04/03/a-java-programmers-guide-to-random-numbers-part-1-beyond-javautilrandom/">Part 1</a>,
         <a href="http://blog.uncommons.org/2008/04/06/a-java-programmers-guide-to-random-numbers-part-2-not-just-coins-and-dice/">Part 2</a>,
         <a href="http://blog.uncommons.org/2008/04/10/a-java-programmers-guide-to-random-numbers-part-3-seeding/">Part 3</a>
       </p>
       <h2><a href="http://reportng.uncommons.org">ReportNG</a></h2>
       <img src="overview.png" width="511" height="172" alt="ReportNG HTML output" class="screenshot-right" />
       <p>
         ReportNG is a simple HTML reporting plug-in for the <a href="http://www.testng.org">TestNG</a> unit-testing framework. It is
         intended as a replacement for the default TestNG HTML report.  ReportNG provides a simple, colour-coded view of the test results.
         ReportNG also includes a second reporter that produces JUnit format XML output.
       </p>
       <h2><a href="http://antlib.uncommons.org">Uncommons Antlib</a></h2>
       <p>
         Experimental tools for building modular software with <a href="http://ant.apache.org">Apache Ant</a>.
         See also <a href="http://blog.uncommons.org/2007/10/25/15-tips-for-better-ant-builds/">15 Tips for Better Ant Builds</a>.
       </p>
       <h2><a href="http://dwdyer.github.com/ansiconsolelogger">ANSI Console Logger</a></h2>
       <p>
         A simple colour-coded console appender for <a href="http://logging.apache.org/log4j/">Log4J</a> that displays messages of different severities in different colours.
       </p>
     </div>

      <?php readfile('footer.html'); ?>
    </div>
  </body>
</html>