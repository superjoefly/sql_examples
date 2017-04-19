<!DOCTYPE html>
<html>
  <head>
    <title>CREATE TABLE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="../styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="../prism.css" />
    <script src="../prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>CREATE TABLE Statement</h1>

    <p>The CREATE TABLE Statement is used to create a new table in an existing database.</p>

    <h3>Syntax:</h3>

    <pre><code class="language-sql">
      CREATE TABLE table_name (
      column1 datatype,
      column2 datatype,
      column3 datatype,
      ...
      );
    </code></pre>

    <p>The column parameters specify the names of the columns of the table.</p>

    <p>The datatype parameter specifies the type of data the column can hold (e.g. varchar, integer, date, etc.).</p>

    <p><strong>TIP:</strong> see W3School's Data Type Reference for list of data types.</p>

    <hr />

    <h3>Example:</h3>

    <pre><code class="language-sql">
      CREATE TABLE Persons (
      PersonID int,
      LastName varchar(255),
      FirstName varchar(255),
      Address varchar(255),
      City varchar(255)
      );
    </code></pre>

    <p>The PersonID column is of type int and will hold an integer.</p>

    <p>The LastName, FirstName, Address and City columns are of type varchar, and will hold characters. The maximum length for these fields is 255 characters.</p>

    <p><strong>TIP:</strong> to view information about the table use DESC table_name;</p>

    <pre><code class="language-sql">
      DESC Persons;
    </code></pre>

    <p><strong>TIP:</strong> the table can now be filled with data using the INSERT INTO statement.</p>

    <hr />

    <h2>Create Table Using Another Table</h2>

    <p>A copy of an existing table can be created using a combination of the CREATE TABLE statement and the SELECT statement.</p>

    <p>The new table gets the same column definitions. All columns or specific columns can be selected.</p>

    <p>If you create a new table using an existing table, the new table will be filled with the existing values from the old table.</p>

    <h3>Syntax:</h3>

    <pre><code class="language-sql">
      CREATE TABLE new_table_name AS
      SELECT column1, column2, column3, ...
      FROM existing_table_name
      WHERE conditions...;
    </code></pre>

  </body>
</html>
