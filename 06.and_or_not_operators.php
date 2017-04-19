<!DOCTYPE html>
<html>
  <head>
    <title>AND, OR, and NOT Operators</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>AND, OR, and NOT Operators</h1>

    <p>The WHERE clause can be combined with AND, OR, and NOT operators.</p>

    <p>The AND and OR operators are used to filter records based on more than one condition:</p>

    <ul>
      <li>The AND operator displays a record if <b>all</b> the conditions separated by AND are TRUE</li>
      <li>The OR operator displays a record if <b>any</b> of the conditions separated by OR are TRUE</li>
    </ul>

    <p>The NOT operators displays a record if the condition(s) are not TURE</p>

    <hr />

    <h2>AND Syntax</h2>

    <pre><code class="language-sql">
      SELECT column1, column2, ...
      FROM table_name
      WHERE condition1 AND condition2 AND condition3 ...;
    </code></pre>

    <h2>OR Syntax</h2>

    <pre><code class="language-sql">
      SELECT column1, column2, ...
      FROM table_name
      WHERE condition1 OR condition2 OR condition3 ...;
    </code></pre>

    <h2>NOT Syntax</h2>

    <pre><code class="language-sql">
      SELECT column1, column2, column3 ...
      FROM table_name
      WHERE NOT condition;
    </code></pre>

    <hr />

    <h3>Example: AND</h3>

    <p>The following statement selects <b>all</b> fields from "Customers" where country is "Germany" <b>AND</b> city is "Berlin":</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE Country='Germany' AND City='Berlin';
    </code></pre>

    <hr />

    <h3>Example: OR</h3>

    <p>The following statement selects <b>all</b> fields from "Customers" where city is "Berlin" <b>OR</b> "Munchen":</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE City='Berlin' OR City='Munchen';
    </code></pre>

    <hr />

    <h3>Example: NOT</h3>

    <p>The following statement selects <b>all</b> fields from "Customers" where country is <b>NOT</b> "Germany":</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE NOT Country='Germany';
    </code></pre>

    <hr />

    <h2>Combining AND, OR and NOT</h2>

    <h3>Example: combine AND with OR</h3>

    <p>The following statement selects <b>all</b> fields from "Customers" where country is "Germany" <b>AND</b> city must be "Berlin" <b>OR</b> "Munchen" (use parenthesis to form complex expressions):</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE Country='Germany' AND (City='Berlin' OR City='Munchen');
    </code></pre>

    <hr />

    <h3>Example: combine AND with NOT</h3>

    <p>The following statement selects <b>all</b> fields from "Customers" where country is <b>NOT</b> "Germany" <b>AND</b> <b>NOT</b> "USA":</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers
      WHERE NOT Country='Germany' AND NOT Country='USA';
    </code></pre>

  </body>
</html>
