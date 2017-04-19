<!DOCTYPE html>
<html>
  <head>
    <title>UNIQUE Constraint</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="../styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="../prism.css" />
    <script src="../prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>UNIQUE Constraint</h1>

    <p>The UNIQUE constraint ensures that all values in a column are different.</p>

    <p>Both the UNIQUE and PRIMARY KEY constraints provide a guarantee for uniqueness for a column or set of columns.</p>

    <p>The PRIMARY KEY constraint automatically has a UNIQUE constraint.</p>

    <p>However, you can have many UNIQUE constraints per table, but only one PRIMARY KEY constraint per table.</p>

    <hr />

    <h2>UNIQUE Constraint on CREATE TABLE</h2>

    <p>The following SQL creates a UNIQUE constraint of the "ID" column when the "Persons" table is created:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      CREATE TABLE Persons (
      ID int NOT NULL,
      LastName varchar(250) NOT NULL,
      FirstName varchar(250),
      Age int,
      UNIQUE (ID)
      );
    </code></pre>

    <p>To name a UNIQUE constraint, and to define a UNIQUE constraint on multiple columns, use the following syntax:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      CREATE TABLE Persons (
      ID int NOT NULL,
      LastName varchar(250) NOT NULL,
      FirstName varchar(250),
      Age int,
      CONSTRAINT UC_Person UNIQUE (ID, LastName)
      );
    </code></pre>

    <hr />

    <h2>UNIQUE Constraint on ALTER TABLE</h2>

    <p>To create a UNIQUE constraint on the "ID" column when the table is already created, use the following:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      ALTER TABLE Persons
      ADD UNIQUE (ID);
    </code></pre>

    <p>To name a UNIQUE constraint, and to define a UNIQUE constraint on multiple columns, use the following:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      ALTER TABLE Persons
      ADD CONSTRAINT UC_Person UNIQUE (ID, LastName);
    </code></pre>

    <hr />

    <h2>DROP a UNIQUE Constraint</h2>

    <p>To drop a UNIQUE constraint, use the following:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      ALTER TABLE Persons
      DROP INDEX UC_Person;
    </code></pre>

  </body>
</html>
