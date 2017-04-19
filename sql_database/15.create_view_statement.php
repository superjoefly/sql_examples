<!DOCTYPE html>
<html>
  <head>
    <title>CREATE VIEW Statement</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="../styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="../prism.css" />
    <script src="../prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>CREATE VIEW Statement</h1>

    <p>A view is a virtual table based on the result-set of an SQL statement.</p>

    <p>A view contains rows and columns, just like a real table. The fields in a view are fields from one or more real tables in the database.</p>

    <p>You can add SQL functions, WHERE, and JOIN statements to view and present the data as if the data were coming from one single table.</p>

    <hr />

    <h3>Syntax: CREATE VIEW</h3>

    <pre><code class="language-sql">
      CREATE VIEW view_name AS
      SELECT column1, column2, ...
      FROM table_name
      WHERE condition;
    </code></pre>

    <p><strong>Note:</strong> A view always shows up-to-date data. The database engine re-creates the data, using the view's SQL statement, every time a user queries a view.</p>

    <hr />

    <h3>Example: CREATE VIEW</h3>

    <pre><code class="language-sql">
      CREATE VIEW [Products Above Average Price] AS
      SELECT ProductName, UnitPrice
      FROM Products
      WHERE UnitPrice > (SELECT AVG(UnitPrice) FROM Products);
    </code></pre>

    <h3>Example: Query the View</h3>

    <pre><code class="language-sql">
      SELECT * FROM [Producst Above Average Price];
    </code></pre>

    <hr />

    <h2>Updating a View</h2>

    <h3>Syntax:</h3>

    <pre><code class="language-sql">
      CREATE OR REPLACE VIEW view_name AS
      SELECT column1, column2, ...
      FROM table_name
      WHERE condition;
    </code></pre>

    <h3>Example: Update View</h3>

    <pre><code class="language-sql">
      CREATE OR REPLACE VIEW [Products Above Average Price] AS
      SELECT ProductID, ProductName, UnitPrice
      FROM table_name
      WHERE UnitPrice > (SELECT AVG(UnitPrice) FROM Products);
    </code></pre>

    <hr />

    <h2>Dropping a View</h2>

    <p>Use the following statement to DROP a VIEW:</p>

    <pre><code class="language-sql">
      DROP VIEW view_name;
    </code></pre>

  </body>
</html>
