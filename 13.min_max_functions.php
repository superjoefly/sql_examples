<!DOCTYPE html>
<html>
  <head>
    <title>MIN() and MAX() Functions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>MIN() and MAX() Functions</h1>

    <p>The MIN() Function returns the smallest value of the selected column.</p>

    <p>The MAX() Function returns the largest value of the selected column.</p>

    <h2>MIN() Syntax</h2>

    <pre><code class="language-sql">
      SELECT MIN(column_name)
      FROM table_name
      WHERE condition;
    </code></pre>

    <h2>MAX() Syntax</h2>

    <pre><code class="language-sql">
      SELECT MAX(column_name)
      FROM table_name
      WHERE condition;
    </code></pre>

    <hr />

    <h3>Example: MIN() Function</h3>

    <p>The following statement finds the price of the cheapest product:</p>

    <pre><code class="language-sql">
      SELECT MIN(Price) AS SmallestPrice
      FROM Products;
    </code></pre>

    <h3>Example: MAX() Function</h3>

    <pre><code class="language-sql">
      SELECT MAX(Price) AS LargestPrice
      FROM Products;
    </code></pre>

  </body>
</html>
