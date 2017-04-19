<!DOCTYPE html>
<html>
  <head>
    <title>ALTER TABLE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="../styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="../prism.css" />
    <script src="../prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>ALTER TABLE</h1>

    <p>The ALTER TABLE Statement is used to add, delete, or modify columns in an existing table.</p>

    <p>The ALTER TABLE Statement is also used to add and drop various constraints on an existing table.</p>

    <hr />

    <h2>ALTER TABLE - ADD Column</h2>

    <p>To add a column to a table, use the following syntax:</p>

    <pre><code class="language-sql">
      ALTER TABLE table_name
      ADD column_name datatype;
    </code></pre>

    <hr />

    <h2>ALTER TABLE - DROP COLUMN</h2>

    <p>To delete a column in a table, use the following syntax:</p>

    <pre><code class="language-sql">
      ALTER TABLE table_name
      DROP COLUMN column_name;
    </code></pre>

    <p><strong>NOTE:</strong> some databases systems don't allow deleting a column.</p>

    <hr />

    <h2>ALTER TABLE - ALTER/MODIFY COLUMN</h2>

    <p>To change the data type of a column in a table, use the following:</p>

    <pre><code class="language-sql">
      ALTER TABLE table_name
      MODIFY COLUMN column_name datatype;
    </code></pre>

    <hr />

    <h3>Example: ADD Column</h3>

    <p>The following statement adds a column "DateOfBirth" to the "Persons" table:</p>

    <pre><code class="language-sql">
      ALTER TABLE Persons
      ADD DateOfBirth date;
    </code></pre>

    <p>Notice that the new column, "DateOfBirth", is of type date and is going to hold a date. The data type specifies what type of data the column can hold.</p>

    <hr />

    <h2>Change Data Type</h2>

    <h3>Example:</h3>

    <p>Here, we change the data type of the column named "DateOfBirth" in the "Persons" table:</p>

    <pre><code class="language-sql">
      ALTER TABLE Persons
      MODIFY COLUMN DateOfBirth year;
    </code></pre>

    <hr />

    <h2>DROP COLUMN</h2>

    <h3>Example:</h3>

    <p>To drop/delete a column, use DROP COLUMN:</p>

    <pre><code class="language-sql">
      ALTER TABLE Persons
      DROP COLUMN DateOfBirth;
    </code></pre>

  </body>
</html>
