<!DOCTYPE html>
<html>
  <head>
    <title>CHECK Constraint</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="../styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="../prism.css" />
    <script src="../prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>CHECK Constraint</h1>

    <p>The CHECK constraint is used to limit the value range that can be placed in a column.</p>

    <p>If you define a CHECK constraint on a single column, it allows only certain values for this column.</p>

    <p>If you define a CHECK constraint on a table, it can limit the values in certain columns based on values in other columns in the row.</p>

    <hr />

    <h2>CHECK on CREATE TABLE</h2>

    <p>The following SQL creates a CHECK constraint on the "Age" column when the "Persons" table is created. The CHECK constraint ensures that you can not have any person below 18 years:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      CREATE TABLE Persons (
      ID int NOT NULL,
      LastName varchar(250) NOT NULL,
      FirstName varchar(250),
      Age int,
      CHECK (Age >= 18)
      );
    </code></pre>

    <p>To allow naming of a CHECK constraint, and for defining a CHECK constraint on multiple columns, use the following:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      CREATE TABLE (
      ID int NOT NULL,
      LastName varchar(250) NOT NULL,
      FirstName varchar(250),
      Age int,
      City varchar(250),
      CONSTRAINT CHK_Person CHECK (Age >= 18 AND City = 'Sandnes')
      );
    </code></pre>

    <hr />

    <h2>CHECK on ALTER TABLE</h2>

    <p>To create a CHECK constraint on the "Age" column when the table already exists, use the following:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      ALTER TABLE Persons
      ADD CHECK (Age >= 18);
    </code></pre>

    <p>To allow naming of a CHECK constraint, and for defining a CHECK constraint on multiple columns, use the following:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      ALTER TABLE Persons
      ADD CONSTRAINT CHK_PersonAge CHECK (Age >= 18 and City = 'Sandnes');
    </code></pre>

    <hr />

    <h2>DROP CHECK Constraint</h2>

    <p>To drop a CHECK constraint, use the following:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      ALTER TABLE Persons
      DROP CHECK CHK_PersonAge;
    </code></pre>

  </body>
</html>
