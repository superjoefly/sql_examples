<!DOCTYPE html>
<html>
  <head>
    <title>CREATE INDEX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="../styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="../prism.css" />
    <script src="../prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>CREATE INDEX Statement</h1>

    <p>The CREATE INDEX statement is used to create indexes in tables.</p>

    <p>Indexes are used to retrieve data from the database very fast. The users cannot see the indexes; they are just used to speed up searches/queries.</p>

    <div class="w3-panel w3-border-orange w3-rightbar w3-pale-yellow">
      <p><strong>Updating a table with indexes takes more time than updating a table without (because the indexes also need an update). Only create indexes on columns that will be frequently searched against.</strong></p>
    </div>

    <hr />

    <h3>CREATE INDEX Syntax</h3>

    <p>Creates an index on a table; duplicate values are allowed:</p>

    <pre><code class="language-sql">
      CREATE INDEX index_name
      ON table_name (column1, column2, ...);
    </code></pre>

    <h3>CREATE UNIQUE INDEX Syntax</h3>

    <p>Creates a unique index on a table; duplicate values are NOT allowed:</p>

    <pre><code class="language-sql">
      CREATE UNIQUE INDEX index_name
      ON table_name (column1, column2, ...);
    </code></pre>

    <p><strong>Note:</strong> the syntax for creating indexes varies among databases, therefore, check the syntax for creating indexes in your database.</p>

    <hr />

    <h3>Example: CREATE INDEX</h3>

    <p>The following statement creates an index named "idx_lastname" on the "LastName" column in the "Persons" table:</p>

    <pre><code class="language-sql">
      CREATE INDEX idx_lastname
      ON Persons (LastName);
    </code></pre>

    <p>If you want to create an index on a combination of columns, you can list the column names within the parentheses, separated by commas:</p>

    <pre><code class="language-sql">
      CREATE INDEX idx_pname
      ON Persons (LastName, FirstName);
    </code></pre>

    <hr />

    <h2>DROP INDEX Statement</h2>

    <p>The DROP INDEX Statement is used to delete an index from a table:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      ALTER TABLE table_name
      DROP INDEX index_name;
    </code></pre>

  </body>
</html>
