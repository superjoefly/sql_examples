<!DOCTYPE html>
<html>
  <head>
    <title>HAVING Clause</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>HAVING Clause</h1>

    <p>The HAVING Clause was added to SQL because the WHERE keyword could not be used with aggregate function.</p>

    <h2>HAVING Syntax</h2>

    <pre><code class="language-sql">
      SELECT column_name(s)
      FROM table_name
      WHERE condition
      GROUP BY column_name(s)
      HAVING condition
      ORDER BY column_name(s);
    </code></pre>

    <hr />

    <h2>HAVING Examples</h2>

    <p>The following statement lists the number of customers in each country. Only include countries with more than 5 customers:</p>

    <pre><code class="language-sql">
      SELECT COUNT(CustomerID), Country
      FROM Customers
      GROUP BY Country
      HAVING COUNT(CustomerID) > 5;
    </code></pre>

    <p>The following statement lists the number of customers in each country, sorted high to low. Only include countries with more than 5 customers:</p>

    <pre><code class="language-sql">
      SELECT COUNT(CustomerID), Country
      FROM Customers
      GROUP BY Country
      HAVING COUNT(CustomerID) > 5
      ORDER BY COUNT(CustomerID) DESC;
    </code></pre>

    <hr />

    <h2>More HAVING Examples</h2>

    <p>The following statement lists the employees that have registered more than 10 orders:</p>

    <pre><code class="language-sql">
      SELECT Employees.LastName, COUNT(Orders.OrderID) AS NumberOfOrders
      FROM (Orders
      INNER JOIN Employees ON Orders.EmployeeID = Employees.EmployeeID)
      GROUP BY LastName
      HAVING COUNT(Orders.OrderID) > 10;
    </code></pre>

    <hr />

    <p>The following statement lists the employees "Davolio" or "Fuller" have registered more than 25 orders:</p>

    <pre><code class="language-sql">
      SELECT Employees.LastName, COUNT(Orders.OrderID) AS NumberOfOrders
      FROM Orders
      INNER JOIN Employees ON Orders.EmployeeID = Employees.EmployeeID
      WHERE LastName = 'Davolio' OR LastName = 'Fuller'
      GROUP BY LastName
      HAVING COUNT(Orders.OrderID) > 25;
    </code></pre>

  </body>
</html>
