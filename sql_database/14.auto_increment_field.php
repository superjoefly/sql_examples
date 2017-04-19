<!DOCTYPE html>
<html>
  <head>
    <title>AUTO INCREMENT Field</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="../styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="../prism.css" />
    <script src="../prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>AUTO INCREMENT Field</h1>

    <p>Auto-increment allows a unique number to be generated automatically when a new record is inserted into a table.</p>

    <p>This is often the primary key field that we would like to be created automatically every time a new record is inserted.</p>

    <hr />

    <h3>Example: MySQL</h3>

    <p>The following statement defines the "ID" column to be an auto-increment primary key field in the "Persons" table:</p>

    <pre><code class="language-sql">
      CREATE TABLE Persons (
      ID int NOT NULL AUTO_INCREMENT,
      LastName varchar(250) NOT NULL,
      FirstName varchar(250),
      Age int,
      PRIMARY KEY (ID)
      );
    </code></pre>

    <p>MySQL uses the AUTO_INCREMENT keyword to perform an auto-increment feature.</p>

    <p>By default, the starting value for AUTO_INCREMENT is 1, and it will increment by 1 for each new record.</p>

    <p>To let the AUTO_INCREMENT sequence start with another value, use the following statement:</p>

    <pre><code class="language-sql">
      ALTER TABLE Persons AUTO_INCREMENT=100;
    </code></pre>

    <p>To insert a new record into the "Persons" table, we will NOT have to specify a value for the "ID" column (a unique value will be added automatically):</p>

    <pre><code class="language-sql">
      INSERT INTO Persons (FirstName, LastName)
      VALUES ('Lars', 'Monsen');
    </code></pre>

    <p>The statement above would insert a new record into the "Persons" table. The "ID" column would be assigned a unique value. The "FirstName" column would be set to 'Lars' and the LastName column would be set to 'Monsen'.</p>

  </body>
</html>
