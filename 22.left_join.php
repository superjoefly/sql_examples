<!DOCTYPE html>
<html>
  <head>
    <title>LEFT JOIN Keyword</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>LEFT JOIN Keyword</h1>

    <p>The LEFT JOIN Keyword returns all records from the left table (table1), and the matched records from the right table (table2). The result is NULL from the right side, if there is no match.</p>

    <h2>LEFT JOIN Syntax</h2>

    <pre><code class="language-sql">
      SELECT column_name(s)
      FROM table1
      LEFT JOIN table2 ON table1.column_name = table2.column_name;
    </code></pre>

    <p><strong>NOTE:</strong> in some databases, LEFT JOIN is called LEFT OUTER JOIN.</p>

    <img src="images/leftjoin.gif" alt="left join" />

    <hr />

    <h3>Example: LEFT JOIN</h3>

    <p>The following statement will select all customers, and any orders they might have:</p>

    <pre><code class="language-sql">
      SELECT Customers.CustomerName, Orders.OrderID
      FROM Customers
      LEFT JOIN Orders ON Customers.CustomerID = Orders.CustomerID
      ORDER BY Customers.CustomerName;
    </code></pre>

    <p><strong>NOTE:</strong> The LEFT JOIN Keyword returns all records from the left table, even if there are no matches in the right table.</p>

  </body>
</html>
