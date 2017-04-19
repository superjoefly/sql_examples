<!DOCTYPE html>
<html>
  <head>
    <title>Syntax</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>Syntax</h1>

    <h2>Database Tables</h2>

    <p>A database most often contains one or more tables. Each table is identified by a name. Tables contain records (rows) with data.</p>

    <h2>SQL Statements</h2>

    <p>Most of the actions you need to perform on a database are done with SQL statements.</p>

    <p>The following statement selects all the records in the "Customers" table:</p>

    <pre><code class="language-sql">
      SELECT * FROM Customers;
    </code></pre>

    <p><strong>Note:</strong> SQL keywords are not case sensitive: select is the same as SELECT</p>

    <hr />

    <h2>Semicolon After SQL Statements</h2>

    <p>Some database systems require a semicolon at the end of each statement.</p>

    <p>Semicolon is the standard way to separate each SQL statement in database systems that allow more than one SQL statement to be executed in the same call to the server.</p>

    <hr />

    <h2>Important SQL Commands</h2>

    <ul>
      <li><b>SELECT</b> extracts data</li>
      <li><b>UPDATE</b> updates data</li>
      <li><b>DELETE</b> deletes data</li>
      <li><b>INSERT INTO</b> inserts new data</li>
      <li><b>CREATE</b> creates a new database</li>
      <li><b>ALTER DATABASE</b> modifies a database</li>
      <li><b>CREATE TABLE</b> creates a new table</li>
      <li><b>ALTER TABLE</b> modifies a table</li>
      <li><b>DROP TABLE</b> deletes a table</li>
      <li><b>CREATE INDEX</b> creates an index (search key)</li>
      <li><b>DROP INDEX</b> deletes an index</li>
    </ul>

  </body>
</html>
