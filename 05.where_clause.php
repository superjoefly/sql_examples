<!DOCTYPE html>
<html>
  <head>
    <title>WHERE Clause</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>WHERE Clause</h1>

    <p>The WHERE clause is used to filter records.</p>

    <p>The WHERE clause is used to extract only those records that fulfill a specified condition.</p>

    <h3>WHERE Syntax</h3>

    <pre><code class="language-sql">
      SELECT column1, column2, ...
      FROM table_name
      WHERE condition;
    </code></pre>

    <div class="w3-panel w3-border-orange w3-rightbar w3-pale-yellow">
      <p><strong>Note:</strong> The WHERE clause is not only used in SELECT statement; it is also used in UPDATE, DELETE etc.</p>
    </div>

    <h3>Example: WHERE Clause</h3>

    <p>The following statement selects all the customers from the country "Mexico", in the "Customers" table:</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE Country='Mexico';
    </code></pre>

    <hr />

    <h2>Text Fields vs Numeric Fields</h2>

    <p>SQL requires single quotes around text values (most database systems will also allow double quotes).</p>

    <p>However, numeric fields should not be enclosed in quotes:</p>

    <h3>Example: Numeric</h3>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE CustomerID=1;
    </code></pre>

    <hr />

    <h2>Operators in the WHERE Clause</h2>

    <table class="w3-table-all">
      <tr>
        <th>Operator</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>=</td>
        <td>Equal</td>
      </tr>
      <tr>
        <td>< ></td>
        <td>Not equal: in some versions of SQL this operator may be written as !=</td>
      </tr>
      <tr>
        <td>></td>
        <td>Greater than</td>
      </tr>
      <tr>
        <td><</td>
        <td>Less than</td>
      </tr>
      <tr>
        <td>>=</td>
        <td>Greater than or equal</td>
      </tr>
      <tr>
        <td><=</td>
        <td>Less than or equal</td>
      </tr>
      <tr>
        <td>BETWEEN</td>
        <td>Between an inclusive range</td>
      </tr>
      <tr>
        <td>LIKE</td>
        <td>Search for a pattern</td>
      </tr>
      <tr>
        <td>IN</td>
        <td>To specify multiple possible values for a column</td>
      </tr>
    </table>

  </body>
</html>
