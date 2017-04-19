<!DOCTYPE html>
<html>
  <head>
    <title>TOP, LIMIT or ROWNUM Clause</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>TOP, LIMIT or ROWNUM Clause</h1>

    <p>The SELECT TOP Clause is used to specify the number of records to return.</p>

    <p>The SELECT TOP Clause is useful on large tables with thousands of records. Returning a large number of records can impact on performance.</p>

    <div class="w3-panel w3-border-orange w3-rightbar w3-pale-yellow">
      <p><strong>Note:</strong> not all database systems support the SELECT TOP Clause. <strong>MySQL supports the LIMIT clause to select a limited number of records, while Oracle uses ROWNUM.</strong></p>
    </div>

    <h2>Syntax</h2>

    <h3>SQL Server, MS Access Syntax:</h3>

    <pre><code class="language-sql">
      SELECT TOP number|percent column_name(s)
      FROM table_name
      WHERE condition;
    </code></pre>

    <h3>MySQL Syntax:</h3>

    <pre><code class="language-sql">
      SELECT column_name(s)
      FROM table_name
      WHERE condition
      LIMIT number;
    </code></pre>

    <h3>Oracle Syntax:</h3>

    <pre><code class="language-sql">
      SELECT column_name(s)
      FROM table_name
      WHERE ROWNUM <= number;
    </code></pre>

    <hr />

    <h2>SQL TOP, LIMIT and ROWNUM Examples</h2>

    <p>The following statement selects the first three records from the "Customers" table:</p>

    <pre><code class="language-sql">
      SELECT TOP 3 * FROM Customers;
    </code></pre>

    <p>The following statement shows the equivalent example using the LIMIT clause:</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      LIMIT 3;
    </code></pre>

    <p>The following statement shows the equivalent example using ROWNUM:</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE ROWNUM <= 3;
    </code></pre>

    <hr />

    <h2>SQL TOP PERCENT Example</h2>

    <p>The following example selects the first 50% of the records from the "Customers" table:</p>

    <pre><code class="language-sql">
      SELECT TOP 50 PERCENT * FROM Customers;
    </code></pre>

    <hr />

    <h2>ADD a WHERE Clause</h2>

    <p>The following statement selects the first three records from the "Customers" table, where the country is "Germany":</p>

    <pre><code class="language-sql">
      SELECT TOP 3 * FROM Customers
      WHERE Country = 'Germany';
    </code></pre>

    <p>The following statement shows the equivalent example using the LIMIT clause:</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE Country = 'Germany'
      LIMIT 3;
    </code></pre>

    <p>The following statement shows the equivalent example using ROWNUM:</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE Country = 'Germany' AND ROWNUM <= 3;
    </code></pre>

  </body>
</html>
