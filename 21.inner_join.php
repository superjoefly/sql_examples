<!DOCTYPE html>
<html>
  <head>
    <title>INNER JOIN Keyword</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>INNER JOIN Keyword</h1>

    <p>The INNER JOIN Keyword selects records that have matching values in both tables.</p>

    <h2>INNER JOIN Syntax</h2>

    <pre><code class="language-sql">
      SELECT column_name(s)
      FROM table1
      INNER JOIN table2 ON table1.column_name = table2.column_name;
    </code></pre>

    <img src="images/innerjoin.gif" alt="inner join" />

    <hr />

    <h3>Example: INNER JOIN</h3>

    <p>The following statement selects all orders with customer information:</p>

    <pre><code class="language-sql">
      SELECT Orders.OrderID, Customers.CustomerName
      FROM Orders
      INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID;
    </code></pre>

    <p><strong>NOTE:</strong> The INNER JOIN keyword selects all rows from both tables as long as there is a match between the columns. If there are records in one table that have not matches in the other table, these records will NOT show.</p>

    <hr />

    <h3>Example: JOIN Three Tables</h3>

    <p>The following statement selects all orders with customer and shipper information:</p>

    <pre><code class="language-sql">
      SELECT Orders.OrderID, Customers.CustomerName, Shippers.ShipperName
      FROM ((ORDERS
      INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID)
      INNER JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID);
    </code></pre>

  </body>
</html>
