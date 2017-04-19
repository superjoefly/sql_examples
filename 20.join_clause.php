<!DOCTYPE html>
<html>
  <head>
    <title>Join Clause</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>Join Clause</h1>

    <p>A Join clause is used to combine rows from two or more tables, based on a related column between them.</p>

    <h3>Example: INNER JOIN</h3>

    <p>The following statement selects records that have matching values in both tables:</p>

    <pre><code class="language-sql">
      SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
      FROM Orders
      INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;
    </code></pre>

    <hr />

    <h2>Different Types of JOINs</h2>

    <p>Here are the different types of JOINs in SQL:</p>

    <ul>
      <li>(INNER) JOIN: returns records that have matching values in both tables</li>
      <li>LEFT (OUTER) JOIN: returns all records from the left table, and the matched records from the right table</li>
      <li>RIGHT (OUTER) JOIN: returns all records from the right table, and the matched records from the left table</li>
      <li>FULL (OUTER) JOIN: returns all records when there is a match in either left or right table</li>
    </ul>

  </body>
</html>
