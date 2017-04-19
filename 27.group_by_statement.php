<!DOCTYPE html>
<html>
  <head>
    <title>GROUP BY Statement</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>GROUP BY Statement</h1>

    <p>The GROUP BY Statement is often used with aggregate functions (COUNT, MAX, MIN, SUM, AVG) to group the result-set by one or more columns.</p>

    <h2>GROUP BY Syntax</h2>

    <pre><code class="language-sql">
      SELECT column_name(s)
      FROM table_name
      WHERE condition
      GROUP BY column_name(s)
      ORDER BY column_name(s);
    </code></pre>

    <hr />

    <h2>GROUP BY Examples</h2>

    <p>The following statement lists the number of customers in each country:</p>

    <pre><code class="language-sql">
      SELECT COUNT(CustomerID), Country
      FROM Customers
      GROUP BY Country;
    </code></pre>

    <hr />

    <p>The following statement list the number of customers in each country, sorted high to low:</p>

    <pre><code class="language-sql">
      SELECT COUNT(CustomerID), Country
      FROM Customers
      GROUP BY Country
      ORDER BY COUNT(CustomerID) DESC;
    </code></pre>

    <hr />

    <h3>Example: GROUP BY with JSON</h3>

    <pre><code class="language-sql">
      SELECT Shippers.ShipperName, COUNT(Orders.OrderID) AS NumberOfOrders
      FROM Orders
      LEFT JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID
      GROUP BY ShipperName;
    </code></pre>

  </body>
</html>
