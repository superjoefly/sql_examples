<!DOCTYPE html>
<html>
  <head>
    <title>DEFAULT Constraint</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="../styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="../prism.css" />
    <script src="../prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>DEFAULT Constraint</h1>

    <p>The DEFAULT constraint is used to provide a default value for a column.</p>

    <p>The default value will be added to all new records IF not other value is specified.</p>

    <hr />

    <h2>DEFAULT on CREATE TABLE</h2>

    <p>The following SQL sets a DEFAULT value for the "City" column when the "Persons" table is created:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      CREATE TABLE (
      ID int NOT NULL,
      LastName varchar(250) NOT NULL,
      FirstName varchar(250),
      Age int,
      City varchar(250) DEFAULT 'Sandnes'
      );
    </code></pre>

    <p>The DEFAULT constraint can also be used to insert system values, by using functions like GETDATE():</p>

    <pre><code class="language-sql">
      CREATE TABLE Orders (
      ID int NOT NULL,
      OrderNumber int NOT NULL,
      OrderDate date DEFAULT GETDATE()
      );
    </code></pre>

    <hr />

    <h2>DEFAULT on ALTER TABLE</h2>

    <p>To create a DEFAULT constraint on the "City" column when the table is already created, use the following:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      ALTER TABLE Persons
      ALTER City SET DEFAULT 'Sandnes';
    </code></pre>

    <hr />

    <h2>DROP a DEFAULT Constraint</h2>

    <p>To drop a DEFAULT constraint, use the following:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      ALTER TABLE Persons
      ALTER City DROP DEFAULT;
    </code></pre>

  </body>
</html>
