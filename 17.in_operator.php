<!DOCTYPE html>
<html>
  <head>
    <title>In Operator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>In Operator</h1>

    <p>The IN operator allows you to specify multiple values in a WHERE clause.</p>

    <p>The IN operator is a shorthand for multiple OR conditions.</p>

    <h2>IN Syntax</h2>

    <pre><code class="language-sql">
      SELECT column_name
      FROM table_name
      WHERE column_name IN (value1, value2, ...);
    </code></pre>

    <p>or...</p>

    <pre><code class="language-sql">
      SELECT column_name(s)
      FROM table_name
      WHERE column_name IN (SELECT STATEMENT);
    </code></pre>

    <hr />

    <h2>IN Operator Examples</h2>

    <p>The following statement selects all customers that are located in "Germany", "France" and "UK":</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE Country IN ('Germany', 'France', 'UK');
    </code></pre>

    <p>The following statement selects all customers that are NOT located in "Germany", "France", or "UK":</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE Country NOT IN ('Germany', 'France', 'UK');
    </code></pre>

    <p>The following statement selects all customers that are from the same countries as the suppliers:</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE Country IN (SELECT Country FROM Suppliers);
    </code></pre>

  </body>
</html>
