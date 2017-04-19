<!DOCTYPE html>
<html>
  <head>
    <title>DELETE Statement</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>DELETE Statement</h1>

    <p>The DELETE Statement is used to delete existing records in a table.</p>

    <h2>DELETE Syntax</h2>

    <pre><code class="language-sql">
      DELETE FROM table_name
      WHERE condition;
    </code></pre>

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <p><strong>CAREFUL!:</strong> if you omit the WHERE clause, ALL records in the table will be deleted!</p>
    </div>

    <hr />

    <h3>Example: DELETE Statement</h3>

    <p>The following statement deletes the customer "Alfreds Futterkiste" from the "Customers" table:</p>

    <pre><code class="language-sql">
      DELETE FROM Customers
      WHERE CustomerName = 'Alfreds Futterkiste';
    </code></pre>

    <hr />

    <h2>DELETE ALL Records</h2>

    <p>It is possible to delete all rows in a table without deleting the table. This means that the table structure, attributes, and indexes will be preserved:</p>

    <pre><code class="language-sql">
      DELETE FROM table_name;
    </code></pre>

    <p>or...</p>

    <pre><code class="language-sql">
      DELETE * FROM table_name;
    </code></pre>

  </body>
</html>
