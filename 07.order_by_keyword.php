<!DOCTYPE html>
<html>
  <head>
    <title>ORDERED BY Keyword</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>ORDERED BY Keyword</h1>

    <p>The ORDERED BY Keyword is used to sort the result-set in ascending or descending order.</p>

    <p>The ORDERED BY Keyword sorts the records in ascending order by default. To sort the records in descending order, use the <b>DESC</b> keyword.</p>

    <h2>ORDER BY Syntax</h2>

    <pre><code class="language-sql">
      SELECT column1, column2, ...
      FROM table_name
      ORDER BY column1, column2, ... ASC|DESC;
    </code></pre>

    <hr />

    <h3>Example: ORDER BY</h3>

    <p>The following statement selects all customers from the "Customers" table, sorted by the "Country" column:</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      ORDER BY Country;
    </code></pre>

    <hr />

    <h3>Example: ORDER BY DESC</h3>

    <p>The following statement selects all customers from the "Customers" table, sorted by the "Country" column in <b>descending</b> order:</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      ORDER BY Country DESC;
    </code></pre>

    <hr />

    <h3>Example: ORDER BY (multiple columns)</h3>

    <p>The following statement selects all customers from the "Customers" table, sorted by the "Country" and the "CustomerName" columns:</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      ORDER BY Country, CustomerName
    </code></pre>

    <hr />

    <h3>Example: ORDER BY (multiple columns) ex:2</h3>

    <p>The following statement selects all customers from the "Customers" table, sorted <b>ascending</b> by "Country" and <b>descending</b> by "CustomerName":</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      ORDER BY Country ASC, CustomerName DESC;
    </code></pre>

  </body>
</html>
