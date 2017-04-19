<!DOCTYPE html>
<html>
  <head>
    <title>PRIMARY KEY Constraint</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="../styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="../prism.css" />
    <script src="../prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>PRIMARY KEY Constraint</h1>

    <p>The PRIMARY KEY constraint uniquely identifies each record in a database table.</p>

    <p>Primary keys must contain UNIQUE values, and cannot contain NULL values.</p>

    <p>A table can have only one primary key, which may consist of single or multiple fields.</p>

    <hr />

    <h2>PRIMARY KEY on CREATE TABLE</h2>

    <p>The following SQL creates a PRIMARY KEY on the "ID" column when the "Persons" table is created:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      CREATE TABLE Persons(
      ID int NOT NULL,
      LastName varchar(250) NOT NULL,
      FirstName varchar(250),
      Age int,
      PRIMARY KEY (ID)
      );
    </code></pre>

    <p>To allow naming of a PRIMARY KEY constraint, and for defining a PRIMARY KEY constraint on multiple columns, use the following:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      CREATE TABLE Persons (
      ID int NOT NULL,
      LastName varchar(250) NOT NULL,
      FirstName varchar(250),
      Age int,
      CONSTRAINT PK_Person PRIMARY KEY (ID, Lastname)
      );
    </code></pre>

    <p><strong>Note:</strong> In the example above there is only one PRIMARY KEY (PK_Person). However, the VALUE of the primary key is made up of TWO COLUMNS (ID + LastName).</p>

    <hr />

    <h2>PRIMARY KEY on ALTER TABLE</h2>

    <p>To create a PRIMARY KEY constraint on the "ID" column when the table is already created, use the following:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      ALTER TABLE Persons
      ADD PRIMARY KEY (ID);
    </code></pre>

    <p>To allow naming of the PRIMARY KEY constraint, and for defining a PRIMARY KEY contraint on multiple columns, use the following:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      ALTER TABLE Persons
      ADD CONSTRAINT PK_Person PRIMARY KEY (ID,Lastname);
    </code></pre>

    <p><strong>Note:</strong> If you use the ALTER TABLE statement to add a PRIMARY KEY, the primary key column(s) must have already been declared to NOT contain NULL values (when the table was first created).</p>

    <hr />

    <h2>DROP PRIMARY KEY Constraint</h2>

    <p>To drop a PRIMARY KEY constraint, use the following:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      ALTER TABLE Persons
      DROP CONSTRAINT PD_Person;
    </code></pre>

  </body>
</html>
