<!DOCTYPE html>
<html>
  <head>
    <title>Update Statement</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>Update Statement</h1>

    <p>The UPDATE statement is used to modify the existing records in a table.</p>

    <h2>Update Syntax</h2>

    <pre><code class="language-sql">
      UPDATE table_name
      SET column1 = value1, column2 = value2, ...
      WHERE condition;
    </code></pre>

    <div class="w3-panel w3-border-orange w3-rightbar w3-pale-yellow">
      <p><strong>Note:</strong> be careful when updating records in a table! Notice the WHERE clause in the update statement. The WHERE clause specifies which record(s) should be updated. If you omit the WHERE clause, all records in table will be updated!</p>
    </div>

    <hr />

    <h3>Example: UPDATE Table</h3>

    <p>The following statement updates the first customer (CustomerID=1) with a new contact person and a new city:</p>

    <pre><code class="language-sql">
      UPDATE Customers
      SET ContactName = 'Alfred Schmidt', City = 'Frankfurt'
      WHERE CustomerID = 1;
    </code></pre>

    <hr />

    <h2>UPDATE Multiple Records</h2>

    <p>It is the WHERE clause that determines how many records will be updated.</p>

    <h3>Example: UPDATE Multiple Records</h3>

    <p>The following statement will update the contactname to "Juan" for all records where country is "Mexico":</p>

    <pre><code class="language-sql">
      UPDATE Customers
      SET ContactName = 'Juan'
      WHERE Country = 'Mexico';
    </code></pre>

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <p><strong>Note:</strong> if you omit the WHERE clause, ALL records will be updated!</p>
    </div>

    <pre><code class="language-sql">
      UPDATE Customers
      SET ContactName = 'Juan';
    </code></pre>

  </body>
</html>
