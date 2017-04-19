<!DOCTYPE html>
<html>
  <head>
    <title>DROP TABLE Statement</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="../styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="../prism.css" />
    <script src="../prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>DROP TABLE Statement</h1>

    <p>The DROP TABLE Statement is used to drop an existing table in a database.</p>

    <h3>Syntax:</h3>

    <pre><code class="language-sql">
      DROP TABLE table_name;
    </code></pre>

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <p><strong>NOTE:</strong> be carefule when dropping a table; deleting a table will result in the loss of all information in the table!</p>
    </div>

    <hr />

    <h3>Example:</h3>

    <p>The following statement drops the existing table "Shippers":</p>

    <pre><code class="language-sql">
      DROP TABLE Shippers;
    </code></pre>

    <hr />

    <h2>TRUNCATE TABLE</h2>

    <p>The TRUNCATE TABLE statement is used to delete data inside a table, but not the table itself.</p>

    <h3>Syntax:</h3>

    <pre><code class="language-sql">
      TRUNCATE TABLE table_name;
    </code></pre>

    <h3>Example:</h3>

    <pre><code class="language-sql">
      TRUNCATE TABLE Persons;
    </code></pre>

  </body>
</html>
