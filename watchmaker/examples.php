        <h2>Example Applications</h2>
        <div id="examples">
          <ol>
            <li>
              <a href="examples/salesman.php"><img src="tsp.png" width="180" height="163" alt="Travelling Salesman"/></a>
              <p>
                <strong>The Travelling Salesman</strong><br/>
                An evolutionary program that finds quick solutions to a difficult routing problem.
              </p>
            </li>
            <li>
              <a href="examples/biomorphs.php"><img src="biomorphs.png" width="180" height="163" alt="Biomorphs"/></a>
              <p>
                <strong>Biomorphs</strong><br/>
                A program that evolves insect-like creatures via user-guided selection. 
              </p>
            </li>
            <li>
              <a href="examples/sudoku.php"><img src="sudoku.png" width="180" height="163" alt="Sudoku"/></a>
              <p>
                <strong>Sudoku</strong><br/>
                A program that visualises the progress of an evolutionary algorithm that solves Sudoku puzzles.
              </p>
            </li>
            <li>
              <a href="examples/monalisa.php"><img src="monalisa.png" width="180" height="163" alt="Mona Lisa"/></a>
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
              var carousel = new YAHOO.widget.Carousel("examples", {
                isCircular: true, numVisible: 1 
              });
              carousel.render();
            });
          })();
        </script>
