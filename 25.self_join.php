<!DOCTYPE html>
<html>
  <head>
    <title>Self JOIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>Self JOIN</h1>

    <p>A self JOIN is a regular join, but the table is joined with itself.</p>

    <h2>Self JOIN Syntax</h2>

    <pre><code class="language-sql">
      SELECT column_name(s)
      FROM table1 T1, table2 T2
      WHERE condition;
    </code></pre>

    <hr />

    <h3>Example: Self JOIN</h3>

    <p>The following statement matches customers that are from the same city:</p>

    <pre><code class="language-sql">
      SELECT A.CustomerName AS CustomerName1, B.CustomerName AS CustomerName2, A.City
      FROM Customers A, Customers B
      WHERE A.CustomerID <> B.CustomerID
      AND A.City = B.City
      ORDER BY A.City
    </code></pre>

  </body>
</html>
