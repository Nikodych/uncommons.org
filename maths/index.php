<?php echo '<?xml version="1.0" encoding="utf-8" ?>'."\n" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>Uncommons Maths - Random number generators, probability distributions, combinatorics and statistics for Java</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description" content="Random number generators, probability distributions, combinatorics and statistics for Java." />
    <meta name="keywords" content="maths, math, mathematics, random, number, generator, rng, combinatorics, permutations, combinations, probability, distributions, statistions, gaussian, binomial, exponential, posisson, java, open, source, free, dan, daniel, dyer, uncommons" />
    <meta name="author" content="Daniel Dyer" />
    <link href="http://uncommons.org/uncommons.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://www.uncommons.org/amazon.js"></script>
  </head>
  <body>
    <div id="container">
      <?php readfile('header.html'); ?>
      <p style="text-align: center;">
        <em>Uncommons Maths is Open Source software, free to download and use subject to the terms of the
        <a href="http://www.apache.org/licenses/LICENSE-2.0.html">Apache Software Licence, Version 2.0</a>.</em>
      </p>
      <h2>Random Numbers</h2>
      <p>
        <strong>A Java Programmer's Guide to Random Numbers:</strong>
        <a href="http://blog.uncommons.org/2008/04/03/a-java-programmers-guide-to-random-numbers-part-1-beyond-javautilrandom/">Part 1: Beyond java.util.Random</a> &middot;
        <a href="http://blog.uncommons.org/2008/04/06/a-java-programmers-guide-to-random-numbers-part-2-not-just-coins-and-dice/">Part 2: Not just coins and dice</a> &middot;
        <a href="http://blog.uncommons.org/2008/04/10/a-java-programmers-guide-to-random-numbers-part-3-seeding/">Part 3: Seeding</a>
      </p>
      <a href="demo/demo.jnlp"><img src="demo.png" alt="Click for WebStart RNG demo." width="326" height="189" style="float: right; margin: .5em;"/></a>
      <p>
        The Uncommons Maths library provides five easy-to-use, statistically sound, high-performance pseudorandom number generators (RNGs).  They are:
      </p>
      <dl>
        <dt><strong>MersenneTwisterRNG</strong></dt>
        <dd>
          A Java port of the fast and reliable
          <a href="http://www.math.sci.hiroshima-u.ac.jp/~m-mat/MT/emt.html">Mersenne Twister RNG</a> originally
          developed by Makoto Matsumoto and Takuji Nishimura.  It is faster than <code>java.util.Random</code>,
          does not have the same statistical flaws as that RNG and also has a long period (2<sup>19937</sup>).
          <br/><em>The Mersenne Twister is an excellent general purpose RNG.</em>
        </dd>
        <dt><strong>XORShiftRNG</strong></dt>
        <dd>
          A Java implementation of the very fast PRNG
          <a href="http://www.jstatsoft.org/v08/i14/paper">described by George Marsaglia</a>.  It has a period of
          about 2<sup>160</sup>, which although much shorter than the Mersenne Twister's, is still significantly
          longer than that of <code>java.util.Random</code>.
          <br/><em>This is the RNG to use when performance is the primary concern.  It can be up to twice as
          fast as the Mersenne Twister.</em>
        </dd>
        <dt><strong>CMWC4096RNG</strong></dt>
        <dd>
          A Java implementation of a Complementary-Multiply-With-Carry (CMWC) RNG as
          <a href="http://school.anhb.uwa.edu.au/personalpages/kwessen/shared/Marsaglia03.html">described by George
            Marsaglia</a>.  It has an extremely long period (2<sup>131104</sup>) and performance comparable to the
          Mersenne Twister (though the Mersenne Twister has the advantage of only requiring 16 bytes of seed data
          rather than the 16 kilobytes required by the CMWC RNG).
        </dd>
        <dt><strong>AESCounterRNG</strong></dt>
        <dd>
          This is a cryptographically-strong<sup>1</sup> non-linear RNG that is around 10x faster than
          <code>java.security.SecureRandom</code>.  Reverse-engineering the generator state from observations of its
          output would involve cracking the AES block cipher.
        </dd>
        <dt><strong>CellularAutomatonRNG</strong></dt>
        <dd>
          A Java port of Tony Pasqualoni's fast
          <a href="http://home.southernct.edu/~pasqualonia1/ca/report.html">Cellular Automaton RNG</a>.  It uses
          a 256-cell automaton to generate random values.
        </dd>
      </dl>
      <ol style="font-size: 1.3em; margin: 1.846em 0 1.846em 2.7692em;">
        <li>
          The algorithm is not the only security consideration for RNGs.  The source, secrecy and integrity of
          the seed data is also vital.  For highly sensitive applications, consider using something like
          <a href="http://en.wikipedia.org/wiki/Fortuna_(PRNG)">Fortuna</a>.
        </li>
      </ol>
      <h3>Probability Distributions</h3>
      <p>
        Using the included probability distribution wrappers, these RNGs (and the standard JDK ones) can be used
        to generate values from Uniform, Normal, Binomial, Poisson and Exponential distributions.
      </p>
      <p>
        Launch the Uncommons Maths <a href="demo/demo.jnlp">demo application</a> (requires Java WebStart) to
        experiment with the different distributions.
      </p>
      <h3>Seed Strategies</h3>
      <p>
        Good RNGs need good seed data.  Uncommons Maths provides pluggable seeding strategies, including ones to
        read random data from <code>/dev/random</code> (where available) and from
        <a href="http://www.random.org">random.org</a>.
      </p>
      <h2>Combinatorics</h2>
      <p>
        Uncommons Maths also includes generics-enabled combination and permutation generators. These are based on
        Java classes originally written by <a href="http://www.mgilleland.com/">Michael Gilleland</a>.
      </p>
      <h2>Statistics</h2>
      <p>
        Uncommons Maths provides a statistical data set class that can calculate a variety of descriptive
        statistics (variance, median, standard deviation, arithmetic and geometric means, etc.) for a set of
        values.
      </p>
      <h2>Rational Arithmetic</h2>
      <p>
        Uncommons Maths also includes a <code>Rational</code> number type that allows exact fractional arithmetic without
        loss of precision.
      </p>
      <h2>Binary</h2>
      <p>
        Classes for manipulating binary values.
      </p>

      <?php readfile('footer.html'); ?>
    </div>
  </body>
</html>
