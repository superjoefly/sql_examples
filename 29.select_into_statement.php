<!DOCTYPE html>
<html>
  <head>
    <title>SELECT INTO Statement</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>SELECT INTO Statement</h1>

    <p>The SELECT INTO Statement copies data from one table into a new table.</p>

    <h2>SELECT INTO Syntax</h2>

    <pre><code class="language-sql">
      SELECT *
      INTO newtable [IN externaldb]
      FROM oldtable
      WHERE condition;
    </code></pre>

    <p>Copy only some columns into a new table:</p>

    <pre><code class="language-sql">
      SELECT column1, column2, column3, ...
      INTO newtable [IN externaldb]
      FROM oldtable
      WHERE condition;
    </code></pre>

    <p>The new table will be created with the column-names and types as defined in the old table. You can create new columns using the AS clause.</p>

    <hr />

    <h2>SELECT INTO Examples</h2>

    <p>The following statement creates a backup copy of Customers:</p>

    <pre><code class="language-sql">
      SELECT * INTO CustomersBackup2017
      FROM Customers;
    </code></pre>

    <p>The following statement uses the IN cluse to copy the table into another database:</p>

    <pre><code class="language-sql">
      SELECT * INTO CustomerBackup2017 IN 'Backup.mdb'
      FROM Customers;
    </code></pre>

    <p>The following statement copies only a few columns into a new table:</p>

    <pre><code class="language-sql">
      SELECT CustomerName, ContactName INTO CustomersBackup2017
      FROM Customers;
    </code></pre>

    <p>The following statement copies only the German customers into a new table:</p>

    <pre><code class="language-sql">
      SELECT * INTO CustomersGermany
      FROM Customers
      WHERE Country = 'Germany';
    </code></pre>

    <p>The following statement copies data from more than one table into a new table:</p>

    <pre><code class="language-sql">
      SELECT Customers.CustomerName, Orders.OrderID
      INTO CustomersOrderBackup2017
      FROM Customers
      LEFT JOIN Orders ON Customers.CustomerID = Orders.CustomerID;
    </code></pre>

    <p><strong>TIP:</strong> SELECT INTO can also be used to create a new, empty table using the schema of another. Just add a WHERE clause that causes the query to return no data:</p>

    <pre><code class="language-sql">
      SELECT * INTO newtable
      FROM oldtable
      WHERE 1 = 0;
    </code></pre>

  </body>
</html>
