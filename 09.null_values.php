<!DOCTYPE html>
<html>
  <head>
    <title>Null Values</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>Null Values</h1>

    <p>A field with a null value is a field with no value.</p>

    <p>If a field in a table is optional, it is possible to insert a new record or update a record without adding a value to this field. This field will be saved with a NULL value.</p>

    <div class="w3-panel w3-border-orange w3-rightbar w3-pale-yellow">
      <p><strong>Note:</strong> a NULL value is different from a zero value or a field that contains spaces. A field with a NULL value is one that has been left blank during record creation.</p>
    </div>

    <hr />

    <h2>How to Test for NULL Values</h2>

    <p>To test for NULL values you must use the IS NULL and IS NOT NULL operators.</p>

    <h3>Example: IS NULL SYNTAX</h3>

    <pre><code class="language-sql">
      SELECT column_names
      FROM table_name
      WHERE column_name IS NULL;
    </code></pre>

    <h3>Example: IS NOT NULL Syntax</h3>

    <pre><code class="language-sql">
      SELECT column_names
      FROM table_name
      WHERE column_name IS NOT NULL;
    </code></pre>

    <hr />

    <h2>The IS NULL Operator</h2>

    <p>The following statement uses the IS NULL operator to list all persons that have no address:</p>

    <pre><code class="language-sql">
      SELECT LastName, FirstName, Address FROM Persons
      WHERE Address IS NULL;
    </code></pre>

    <div class="w3-panel w3-border-orange w3-rightbar w3-pale-yellow">
      <p><strong>Tip:</strong> always use IS NULL to look for NULL values.</p>
    </div>

    <hr />

    <h2>The IS NOT NULL Operator</h2>

    <p>The following statement uses the IS NOT NULL operator to list all persons that do not have an address:</p>

    <pre><code class="language-sql">
      SELECT LastName, FirstName, Address FROM Persons
      WHERE Address IS NOT NULL;
    </code></pre>

  </body>
</html>
