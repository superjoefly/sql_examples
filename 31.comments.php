<!DOCTYPE html>
<html>
  <head>
    <title>Comments</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>Comments</h1>

    <p>Comments are used to explain sections of SQL statements, or to prevent execution of SQL statments.</p>

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <p><strong>Note:</strong>Comments are not supported in MS Access databases. </p>
    </div>

    <hr />

    <h2>Single Line Comments</h2>

    <p>Single line comments start with --</p>

    <p>Any text between -- and the end of the line will be ignored (not executed).</p>

    <p>The following example uses a single line comment for an explanation:</p>

    <pre><code class="language-sql">
      --Select all:
      Select * FROM Customers;
    </code></pre>

    <p>The following example uses a single line comment to ignore the end of the line:</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers -- WHERE City='Berlin';
    </code></pre>

    <p>The following example uses a single line comment to ignore a whole line:</p>

    <pre><code class="language-sql">
      --SELECT * FROM Customers;
      SELECT * FROM Products;
    </code></pre>

    <hr />

    <h2>Multi-line Comments</h2>

    <p>Multi-line comments start with /* and end with */</p>

    <p>Any text between /* and */ will be ignored.</p>

    <p>The following example uses a multi-line comment as an explanation:</p>

    <pre><code class="language-sql">
      /*Selects all the columns
      of all the records
      in the Customers table:*/
      SELECT * FROM Customers;
    </code></pre>

    <p>The following example uses a multi-line comment to ignore many statements:</p>

    <pre><code class="language-sql">
      /*SELECT * FROM Customers;
      SELECT * FROM Products;
      SELECT * FROM Orders;
      SELECT * FROM Categories;*/
      SELECT * FROM Suppliers;
    </code></pre>

    <p>The /* */ can also be used to ignore part of a statement:</p>

    <pre><code class="language-sql">
      SELECT CustomerName, /*City,*/ Country FROM Customers;
    </code></pre>

  </body>
</html>
