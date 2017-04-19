<!DOCTYPE html>
<html>
  <head>
    <title>NOT NULL Constraint</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="../styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="../prism.css" />
    <script src="../prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>NOT NULL Constraint</h1>

    <p>By default, a column can hold NULL values.</p>

    <p>The NOT NULL constraint enforces a column to NOT accept NULL values.</p>

    <p>This enforces a field to always contain a value, which means that you cannot insert a new record, or update a recored without adding a value to this field.</p>

    <p>The following SQL ensures that the "ID", "LastName", and "FirstName" columns will NOT accept NULL values:</p>

    <pre><code class="language-sql">
      CREATE TABLE Persons (
      ID int NOT NULL,
      LastName varchar(255) NOT NULL,
      FirstName varchar(255) NOT NULL,
      Age int
      );
    </code></pre>

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <p><strong>TIP:</strong> if the table has already been created, you can add a NOT NULL constraint to a column with the ALTER TABLE statement.</p>
    </div>

  </body>
</html>
