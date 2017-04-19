<!DOCTYPE html>
<html>
  <head>
    <title>COUNT(), AVG() and SUM() Functions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>COUNT(), AVG() and SUM() Functions</h1>

    <p>The COUNT() function returns the number of rows that match a specific criteria.</p>

    <p>The AVG() function returns the average value of a numeric column.</p>

    <p>The SUM() function returns the total sum of a numeric column.</p>

    <hr />

    <h2>COUNT() Syntax</h2>

    <pre><code class="language-sql">
      SELECT COUNT(column_name)
      FROM table_name
      WHERE condition;
    </code></pre>

    <h2>AVG() Syntax</h2>

    <pre><code class="language-sql">
      SELECT AVG(column_name)
      FROM table_name
      WHERE condition;
    </code></pre>

    <h2>SUM() Syntax</h2>

    <pre><code class="language-sql">
      SELECT SUM(column_name)
      FROM table_name
      WHERE condition;
    </code></pre>

    <hr />

    <h3>Example: COUNT()</h3>

    <p>The following statement finds the number of products:</p>

    <pre><code class="language-sql">
      SELECT COUNT(ProductID)
      FROM Products;
    </code></pre>

    <h3>Example: AVG()</h3>

    <p>The following statement finds the average price of all products:</p>

    <pre><code class="language-sql">
      SELECT AVG(Price)
      FROM Products;
    </code></pre>

    <h3>Example: SUM()</h3>

    <p>The following statement finds the sum of the "Quantity" fields in the "OrderDetails" table:</p>

    <pre><code class="language-sql">
      SELECT SUM(Quantity)
      FROM OrderDetails;
    </code></pre>

  </body>
</html>
