<!DOCTYPE html>
<html>
  <head>
    <title>RIGHT JOIN Keyword</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>RIGHT JOIN Keyword</h1>

    <p>The RIGHT JOIN Keyword returns all records from the right table (table2), and the matched records from the left table (table1). The result is NULL from the left side, when there is no match.</p>

    <h2>RIGHT JOIN Syntax</h2>

    <pre><code class="language-sql">
      SELECT column_name(s)
      FROM table1
      RIGHT JOIN table2 ON table1.column_name = table2.column_name;
    </code></pre>

    <p><strong>NOTE:</strong> in some databases, RIGHT JOIN is called RIGHT OUTER JOIN.</p>

    <img src="images/rightjoin.gif" alt="right join" />

    <hr />

    <h3>Example: RIGHT JOIN</h3>

    <p>The following statement will return all employees, and any orders they might have placed:</p>

    <pre><code class="language-sql">
      SELECT Orders.OrderID, Employees.LastName, Employees.FirstName
      FROM Orders
      RIGHT JOIN Employees ON Orders.EmployeeID = Employees.EmployeeID
      ORDER BY Orders.OrderID;
    </code></pre>

    <p><strong>NOTE:</strong> The RIGHT JOIN Keyword returns all records from the right table, even if there are no matches in the left table.</p>

  </body>
</html>
