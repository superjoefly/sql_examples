<!DOCTYPE html>
<html>
  <head>
    <title>SELECT DISTINCT Statement</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>SELECT DISTINCT Statement</h1>

    <p>The SELECT DISTINCT statement is used to only return distinct (different) values.</p>

    <p>Inside a table, a column often contains many duplicate values; and sometimes you only want to list the distinct (different) values.</p>

    <h3>Syntax: SELECT DISTINCT</h3>

    <pre><code class="language-sql">
      SELECT DISTINCT column1, column2, ...
      FROM table_name;
    </code></pre>

    <h3>Example: SELECT</h3>

    <p>The following SQL statement selects all (and duplicate) values from the "Country" column in the "Customers" table:</p>

    <pre><code class="language-sql">
      SELECT Country FROM Customers;
    </code></pre>

    <hr />

    <p>Now lets use the DISTINCT keyword with the above SELECT statement and see the result:</p>

    <h3>Example: SELECT DISTINCT</h3>

    <p>The following statements selects <b>only the DISTINCT</b> values from the "Country" columns in the "Customers" table:</p>

    <pre><code class="language-sql">
      SELECT DISTINCT Country FROM Customers;
    </code></pre>

    <h3>Example:</h3>

    <p>The following statement lists the number of customers countries:</p>

    <pre><code class="language-sql">
      SELECT COUNT(DISTINCT COUNTRY) FROM Customers;
    </code></pre>

  </body>
</html>
