<!DOCTYPE html>
<html>
  <head>
    <title>LIKE Operator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>LIKE Operator</h1>

    <p>The LIKE operator is used in a WHERE clause to search for a specified pattern in a column.</p>

    <p>There are two wildcards used in conjunction with the LIKE operator:</p>

    <ul>
      <li>% - The percent sign represents zero, one, or multiple characters</li>
      <li>_ - The underscore represents a single character</li>
    </ul>

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <p><strong>Note:</strong>MS Access uses a question mark (?) instead of the underscore(_).</p>
    </div>

    <p>The percent sign and the underscore can also be used in combinations!</p>

    <hr />

    <h2>LIKE Syntax</h2>

    <pre><code class="language-sql">
      SELECT column1, column2, ...
      FROM table_name
      WHERE columnN LIKE pattern;
    </code></pre>

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <p><strong>Tip:</strong> you can also combine any number of conditions using AND and OR operators.</p>
    </div>

    <p>Here are some examples showing different LIKE operators with '%' and '_' wildcards:</p>

    <table class="w3-table-all">
      <tr>
        <th>LIKE Operator</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>WHERE CustomerName LIKE 'a%'</td>
        <td>Finds any values that start with 'a'</td>
      </tr>
      <tr>
        <td>WHERE CustomerName LIKE '%a'</td>
        <td>Finds any values that end with 'a'</td>
      </tr>
      <tr>
        <td>WHERE CustomerName LIKE '%or%'</td>
        <td>Finds any values that have 'or' in any position</td>
      </tr>
      <tr>
        <td>WHERE CustomerName LIKE '_r%'</td>
        <td>Finds any values that have 'r' in the second position</td>
      </tr>
      <tr>
        <td>WHERE CustomerName LIKE 'a_%_%'</td>
        <td>Finds any values that start with 'a' and are at least 3 characters in length</td>
      </tr>
      <tr>
        <td>WHERE CustomerName LIKE 'a%o'</td>
        <td>Finds any values that start with 'a' and end with 'o'</td>
      </tr>
    </table>

    <hr />

    <h2>SQL LIKE Examples</h2>

    <p>The following statement selects all customers with a CustomerName starting with 'a':</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE CustomerName LIKE 'a%';
    </code></pre>

    <p>The following statement selects all customers with a CustomerName ending with 'a':</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE CustomerName LIKE '%a';
    </code></pre>

    <p>The following statement selects all customers with a CustomerName that have 'or' in any position:</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE CustomerName LIKE '%or%';
    </code></pre>

    <p>The following statement selects all customers with a CustomerName that have 'r' in the second position:</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE CustomerName LIKE '_r%';
    </code></pre>

    <p>The following statement selects all customers with a CustomerName that starts with 'a' and are at least 3 characters in length:</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE CustomerName LIKE 'a_%_%';
    </code></pre>

    <p>The following statement selects all customers with a CustomerName that starts with 'a' and ends with 'o':</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE CustomerName LIKE 'a%o';
    </code></pre>

    <p>The following statement selects all customers with a CustomerName that NOT starts with 'a':</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE CustomerName NOT LIKE 'a%';
    </code></pre>

  </body>
</html>
