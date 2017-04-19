<!DOCTYPE html>
<html>
  <head>
    <title>INSERT INTO Statement</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>INSERT INTO Statement</h1>

    <p>The INSERT INTO Statement is used to insert new records in a table.</p>

    <h2>INSERT INTO Syntax</h2>

    <p>It is possible to write the INSERT INTO statement in two ways:</p>

    <p>The first way specifies both the column names and the values to be inserted:</p>

    <pre><code class="language-sql">
      INSERT INTO table_name (column1, column2, column3, ...)
      VALUES (value1, value2, value3, ...);
    </code></pre>

    <p>If you are adding values for all the columns of the table, you do not need to specify the column names in the query. However, make sure the order of the values is in the same order as the columns in the table. The INSERT INTO syntax would be as follows:</p>

    <pre><code class="language-sql">
      INSERT INTO table_name
      VALUES (value1, value2, value3, ...);
    </code></pre>

    <hr />

    <h3>Example: INSERT INTO</h3>

    <p>The following statement inserts a new record in the "Customers" table:</p>

    <pre><code class="language-sql">
      INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
      VALUES ('Cardinal','Tom B. Erichsen','Skagen 21','Stavanger','4006','Norway')
    </code></pre>

    <div class="w3-panel w3-border-orange w3-rightbar w3-pale-yellow">
      <p>Notice: we did not enter any number into the CustomerID field. The CustomerID (or just ID?) column is an auto-increment field and will be generated automatically when a new record is inserted into the table.</p>
    </div>

    <hr />

    <h2>Insert Data in Specified Columns</h2>

    <p>It is also possible to only insert data into specific columns.</p>

    <h3>Example: specific columns</h3>

    <p>The following statement will insert a new record, but only insert data in the "CustomerName" "City", and "Country" columns (CustomerID will be automatically updated):</p>

    <pre><code class="language-sql">
      INSERT INTO Customers (CustomerName, City, Country)
      VALUES ('Cardinal', 'Stavanger', 'Norway');
    </code></pre>

  </body>
</html>
