<!DOCTYPE html>
<html>
  <head>
    <title>UNION Operator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>UNITON Operator</h1>

    <p>The UNTION Operator is used to combine the result-set of two or more SELECT statements.</p>

    <ul>
      <li>Each SELECT statement within UNION must have the same number of columns</li>
      <li>The columns must also have similar data types</li>
      <li>The columns in each SELECT statement must also be in the same order</li>
    </ul>

    <h2>UNION Syntax</h2>

    <pre><code class="language-sql">
      SELECT column_name(s) FROM table1
      UNION
      SELECT column_name(s) FROM table2;
    </code></pre>

    <hr />

    <h2>UNION ALL Syntax</h2>

    <p>The UNION operator selects only distinct values by default; to allow duplicate values, use UNION ALL:</p>

    <pre><code class="language-sql">
      SELECT column_name(s) FROM table1
      UNION ALL
      SELECT column_name(s) FROM table2;
    </code></pre>

    <p><strong>NOTE:</strong> the column names in the result set are usually equal to the column names in the first SELECT statement in the UNION.</p>

    <hr />

    <h3>Example: UNION</h3>

    <p>The following statement selects all the different cities (only distinct values) from "Customers" and "Suppliers":</p>

    <pre><code class="language-sql">
      SELECT City FROM Customers
      UNION
      SELECT City FROM Suppliers
      ORDER BY City;
    </code></pre>

    <p><strong>NOTE:</strong> if some customers or suppliers have the same city, each city will only be listed once, because UNION selects only distinct values. To select duplicate values, use UNION ALL.</p>

    <hr />

    <h3>Example: UNION ALL</h3>

    <p>The following statement selects all cities (including duplicate values) from "Customers" and "Suppliers":</p>

    <pre><code class="language-sql">
      SELECT City FROM Customers
      UNION ALL
      SELECT City FROM Suppliers
      ORDER BY City;
    </code></pre>

    <hr />

    <h3>Example: UNION with WHERE</h3>

    <p>The following statement selects all the different German cities (only distince values) from "Customers" and "Suppliers":</p>

    <pre><code class="language-sql">
      SELECT City, Country FROM Customers
      WHERE Country='Germany'
      UNION
      SELECT City, Country FROM Suppliers
      WHERE Country='Germany'
      ORDER BY City;
    </code></pre>

    <hr />

    <h3>Example: UNION ALL with WHERE</h3>

    <p>The following statement selects all German cities (duplicate values included) from "Customers" and "Suppliers":</p>

    <pre><code class="language-sql">
      SELECT City, Country FROM Customers
      WHERE Country='Germany'
      UNION ALL
      SELECT City, Country FROM Suppliers
      WHERE Country='Germany'
      ORDER BY City;
    </code></pre>

    <hr />

    <h3>Example: Another UNION Example</h3>

    <p>The following statement lists all customers and suppliers:</p>

    <pre><code class="language-sql">
      SELECT 'Customer' As Type, ContactName, City, Country
      FROM Customers
      UNION
      SELECT 'Supplier', ContactName, City, Country
      FROM Suppliers;
    </code></pre>

  </body>
</html>
