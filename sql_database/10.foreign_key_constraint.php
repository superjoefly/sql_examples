<!DOCTYPE html>
<html>
  <head>
    <title>FOREIGN KEY Constraint</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="../styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="../prism.css" />
    <script src="../prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>FOREIGN KEY Constraint</h1>

    <p>A FOREIGN KEY is a key used to link two tables together.</p>

    <p>A FOREIGN KEY in a table points to a PRIMARY KEY in another table.</p>

    <p>A FOREIGN KEY constraint is used to prevent actions that would destroy links between tables.</p>

    <p>The FOREIGN KEY constraint also prevents invalid data from being inserted into a foreign key column, because it has to be one of the values contained in the table it points to.</p>

    <hr />

    <h2>FOREIGN KEY on CREATE TABLE</h2>

    <p>The followin SQL creates a FOREIGN KEY on the "PersonID" column when the "Orders" table is created:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      CREATE TABLE Orders (
      OrderID int NOT NULL,
      OrderNumber int NOT NULL,
      PersonID int,
      PRIMARY KEY (OrderID),
      FOREIGN KEY (PersonID) REFERENCES Persons(PersonID)
      );
    </code></pre>

    <p>To allow naming of a FOREIGN KEY constraint, and for defining a FOREIGN KEY constraint on multiple columns, use the following:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      CREATE TABLE Orders (
      OrderID int NOT NULL,
      OrderNumber int NOT NULL,
      PersonID int,
      PRIMARY KEY (OrderID),
      CONSTRAINT FK_PersonOrder FOREIGN KEY (PersonID)
      REFERENCES Persons(PersonID)
      );
    </code></pre>

    <hr />

    <h2>FOREIGN KEY on ALTER TABLE</h2>

    <p>To create a FOREIGN KEY constraint on the "PersonID" column when the "Orders" table is already created, use the following:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      ALTER TABLE Orders
      ADD FOREIGN KEY (PersonID) REFERENCES Person(PersonID);
    </code></pre>

    <p>To allow naming of FOREIGN KEY constraint, and for defining a FOREIGN KEY constraint on multiple columns, use the following:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      ALTER TABLE Orders
      ADD CONSTRAINT FK_PersonOrder
      FOREIGN KEY (PersonID) REFERENCES Persons(PersonID);
    </code></pre>

    <hr />

    <h2>DROP a FOREIGN KEY Constraint</h2>

    <p>To drop a FOREIGN KEY constraint, use the following:</p>

    <h3>Example: MySQL</h3>

    <pre><code class="language-sql">
      ALTER TABLE Orders
      DROP FOREIGN KEY FK_PersonOrder;
    </code></pre>

  </body>
</html>
