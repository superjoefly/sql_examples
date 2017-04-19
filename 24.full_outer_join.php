<!DOCTYPE html>
<html>
  <head>
    <title>FULL OUTER JOIN Keyword</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>FULL OUTER JOIN Keyword</h1>

    <p>The FULL OUTER JOIN Keyword returns all records when ther is a match in either eft (table1) or right (table2) table records.</p>

    <p><strong>NOTE:</strong> FULL OUTER JOIN can potentially return very large result-sets!</p>

    <h2>FULL OUTER JOIN Syntax</h2>

    <pre><code class="language-sql">
      SELECT column_name(s)
      FROM table1
      FULL OUTER JOIN table2 ON table1.column_name = table2.column_name;
    </code></pre>

    <img src="images/fullouterjoin.gif" alt="full outer join" />

    <hr />

    <h3>Example: FULL OUTER JOIN</h3>

    <p>The following statement selects all customers and all orders:</p>

    <pre><code class="language-sql">
      SELECT Customers.CustomerName, Orders.OrderID
      FROM Customers
      FULL OUTER JOIN Orders ON Customers.CustomerID=Orders.CustomerID
      ORDER BY Customers.CustomerName;
    </code></pre>

    <p><strong>NOTE:</strong>The FULL OUTER JOIN keyword returns all the rows from the left table (Customers), and all the rows from the right table (Orders). If there are rows in "Customers" that do not have matches in "Orders", or if there are rows in "Orders" that do not have matches in "Customers", those rows will be listed as well.</p>

  </body>
</html>
