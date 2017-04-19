<!DOCTYPE html>
<html>
  <head>
    <title>BETWEEN Operator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>BETWEEN Operator</h1>

    <p>The BETWEEN Operator selects values within a given range. The values can be numbers, text, or dates.</p>

    <p>The BETWEEN Operator is inclusive; begin and end values are included.</p>

    <h2>BETWEEN Syntax</h2>

    <pre><code class="language-sql">
      SELECT column_name(s)
      FROM table_name
      WHERE column_name BETWEEN value1 and value2;
    </code></pre>

    <hr />

    <h3>Example: BETWEEN</h3>

    <p>The following statement selects all products with a price BETWEEN 10 and 20:</p>

    <pre><code class="language-sql">
      SELECT * FROM Products
      WHERE Price BETWEEN 10 and 20;
    </code></pre>

    <h3>Example: NOT BETWEEN</h3>

    <p>To display the products outside the range of the previous example, use NOT BETWEEN:</p>

    <pre><code class="language-sql">
      SELECT * FROM Products
      WHERE Price NOT BETWEEN 10 and 20;
    </code></pre>

    <h3>Example: BETWEEN with IN</h3>

    <p>The following statement selects all products with a price BETWEEN 10 and 20. In addition, do not show products with a CategoryID of 1, 2, or 3:</p>

    <pre><code class="language-sql">
      SELECT * FROM Products
      WHERE (Price BETWEEN 10 AND 20)
      AND NOT CategoryID IN (1,2,3);
    </code></pre>

    <h3>Example: BETWEEN Text Values</h3>

    <p>The following statement selects all products with a ProductName BETWEEN 'Carnarvon Tigers' and 'Mozzarella di Giovanni':</p>

    <pre><code class="language-sql">
      SELECT * FROM Products
      WHERE ProductName BETWEEN 'Carnarvon Tigers' AND 'Mozzarella di Giovanni'
      ORDER BY ProductName;
    </code></pre>

    <h3>Example: NOT BETWEEN Text Values</h3>

    <p>The following statement selects all products with a ProductName NOT BETWEEN 'Carnarvon Tigers' and 'Mozzarella di Giovani':</p>

    <pre><code class="language-sql">
      SELECT * FROM Products
      WHERE ProductName NOT BETWEEN 'Carnarvon Tigers' AND 'Mozzarella di Giovanni'
      ORDER BY ProductName;
    </code></pre>

    <h3>Example: BETWEEN Dates</h3>

    <p>The following statement selects all orders with and OrderDate BETWEEN '04-July-1996' and '09-July-1996':</p>

    <pre><code class="language-sql">
      SELECT * FROM Orders
      WHERE OrderDate BETWEEN #07/04/1996# AND #07/09/1996#;
    </code></pre>

  </body>
</html>
