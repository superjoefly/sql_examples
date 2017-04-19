<!DOCTYPE html>
<html>
  <head>
    <title>Wildcards</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>Wildcards</h1>

    <p>A wildcard character is used to substitute any other character(s) in a string.</p>

    <p>Wildcard characters are used with the SQL LIKE operator. THE LIKE operator is used in a WHERE clause to search for a specified pattern in a column.</p>

    <p>There are two wildcards used in conjunction with the LIKE operator:</p>

    <ul>
      <li>% - represents zero, one or multiple characters</li>
      <li>_ - represents a single character</li>
    </ul>

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <p><strong>Note:</strong> MS Access uses a question mark instead of an underscore.</p>
    </div>

    <p>In MS Access and SQL Server, you can also use:</p>

    <ul>
      <li>[charlist] - defines sets and ranges of characters to match</li>
      <li>[^charlist] or [!charlist] - defines sets and ranges of characters NOT to match</li>
    </ul>

    <p>The wildcards can also be used in combinations!</p>

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

    <h2>Using the % Wildcard</h2>

    <p>The following statement selects all customers with a City starting with "ber":</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE City LIKE 'ber%';
    </code></pre>

    <p>The following statement selects all customers with a City containing the pattern 'es':</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      Where City LIKE '%es%';
    </code></pre>

    <hr />

    <h2>Using the _ Wildcard</h2>

    <p>The following statement selects all customers with a City starting with any character, followed by 'erlin':</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE City LIKE '_erlin';
    </code></pre>

    <p>The following statement selects all customers with a City starting with 'L', followed by any character, followed by 'n', followed by any character, followed by 'on':</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE City LIKE 'L_n_on';
    </code></pre>

    <hr />

    <h2>Using the [charlist] Wildcard</h2>

    <p>The following statement selects all customers with a City with 'b', 's', or 'p':</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE City LIKE '[bsp]%';
    </code></pre>

    <p>The following statement selects all customers starting with 'a', 'b' or 'c':</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE City LIKE '[a-c]%';
    </code></pre>

    <hr />

    <h2>Using the [!charlist] Wildcard</h2>

    <p>The following statement selects all customers with a City NOT starting with 'b', 's', or 'p':</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE City LIKE '[!bsp]%';
    </code></pre>

    <p>or...</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE City NOT LIKE '[bsp]%';
    </code></pre>

  </body>
</html>
