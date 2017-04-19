<!DOCTYPE html>
<html>
  <head>
    <title>Select Statement</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>Select Statement</h1>

    <p>The SELECT statement is used to select data from a database.</p>

    <p>The data returned is stored in a result table, called the <b>result-set</b>.</p>

    <h3>SELECT Syntax</h3>

    <pre><code class="language-sql">
      SELECT column1, column2, ...
      FROM table_name;
    </code></pre>

    <p>Here, column1, column2, ... are the field names of the table you want to select data from. If you want to select all the fields available, use the following:</p>

    <pre><code class="language-sql">
      SELECT * FROM table_name;
    </code></pre>

    <h3>Example:</h3>

    <p>The following SQL statement selects the "CustomerName" and "City" from the "Customers" table:</p>

    <pre><code class="language-sql">
      SELECT CustomerName, City FROM Customers;
    </code></pre>

    <h3>Example:</h3>

    <p>The following statement selects all the columns from the "Customers" table:</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers;
    </code></pre>

  </body>
</html>
