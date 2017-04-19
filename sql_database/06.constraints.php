<!DOCTYPE html>
<html>
  <head>
    <title>Constraints</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="../styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="../prism.css" />
    <script src="../prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>Constraints</h1>

    <p>Constraints are used to specify rules for data in a table.</p>

    <hr />

    <h2>Create Constraints</h2>

    <p>Constraints can be specified when the table is created with the CREATE TABLE statement, or after the table is created with the ALTER TABLE statement.</p>

    <h3>Syntax</h3>

    <pre><code class="language-sql">
      CREATE TABLE table_name (
      column1 datatype constraint,
      column2 datatype constraint,
      column3 datatype constraint,
      ...
      );
    </code></pre>

    <h2>SQL Constraints</h2>

    <p>SQL constraints are used to specify rules for the data in a table.</p>

    <p>Constraints are used to limit the type of data that can go into a table. This ensures the accuracy and reliablity of the data in the table. If there is any violation between the constraint and the data action, the action is aborted.</p>

    <p>Constraints can be column level or table level. Column level constraints apply to a column, and table level constraints apply to the whole table.</p>

    <p>The following constraints are commonly used in SQL:</p>

    <ul>
      <li>NOT NULL - ensures that a column cannot have a NULL value</li>
      <li>UNIQUE - ensures that all values in a column are different</li>
      <li>PRIMARY KEY - a combination of NOT NULL and UNIQUE; uniquely identifies each row in a table</li>
      <li>FOREIGN KEY - uniquely identifies a row/record in another table</li>
      <li>CHECK - ensures that all values in a column satisfy a specific condition</li>
      <li>DEFAULT - sets a default value for a column when no value is specified</li>
      <li>INDEX - used to create and retrieve data from the database very quickly</li>
    </ul>

  </body>
</html>
