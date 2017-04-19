<!DOCTYPE html>
<html>
  <head>
    <title>INSERT INTO SELECT Statement</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>INSERT INTO SELECT Statement</h1>

    <p>The INSERT INTO SELECT Statement copies data from one table and inserts it into another table.</p>

    <ul>
      <li>INSERT INTO SELECT requires that data types in source and target tables match</li>
      <li>The existing records in the target table are unaffected</li>
    </ul>

    <hr />

    <h2>INSERT INTO SELECT Syntax</h2>

    <pre><code class="language-sql">
      INSERT INTO table2
      SELECT * FROM table1
      WHERE condition;
    </code></pre>

    <p>Copy only some columns from one table into another table:</p>

    <pre><code class="language-sql">
      INSERT INTO table2 (column1, column2, column3, ...)
      SELECT column1, column2, column3, ...
      FROM table1
      WHERE condition;
    </code></pre>

    <hr />

    <h2>INSERT INTO SELECT Examples</h2>

    <p>The following statement copies "Suppliers" into "Customers" (the columns that are not filled with data will contain NULL):</p>

    <pre><code class="language-sql">
      INSERT INTO Customers (CustomerName, City, Country)
      SELECT SupplierName, City, Country FROM Suppliers;
    </code></pre>

    <p>The following statement copies "Suppliers" into "Customers" (fill all columns):</p>

    <pre><code class="language-sql">
      INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
      SELECT SupplierName, ContactName, Address, City, PostalCode, Country
      FROM Suppliers;
    </code></pre>

    <p>The following statement copies only the German suppliers into "Customers":</p>

    <pre><code class="language-sql">
      INSERT INTO Customers (CustomerName, City, Country)
      SELECT SupplierName, City, Country FROM Suppliers
      WHERE Country='Germany';
    </code></pre>

  </body>
</html>
