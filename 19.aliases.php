<!DOCTYPE html>
<html>
  <head>
    <title>Aliases</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="prism.css" />
    <script src="prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>Aliases</h1>

    <p>SQL aliases are used to give a table, or a column in a table, a temporary name.</p>

    <p>Aliases are often used to make column names more readable.</p>

    <p>An alias only exists for the duration of the query.</p>

    <h2>Alias Column Syntax</h2>

    <pre><code class="language-sql">
      SELECT column_name AS alias_name
      FROM table_name;
    </code></pre>

    <h2>Alias Table Syntax</h2>

    <pre><code class="language-sql">
      SELECT column_name(s)
      FROM table_name AS alias_name;
    </code></pre>

    <hr />

    <h2>Alias for Columns Examples</h2>

    <p>The following statement creates two aliases, one for the CustomerID column and one for the CustomerName column:</p>

    <pre><code class="language-sql">
      SELECT CustomerID AS ID, CustomerName AS Customer
      FROM Customers;
    </code></pre>

    <p>The following statement creates two aliases, one for the CustomerName column and one for the ContactName column. <strong>Note:</strong> it requires double quotation marks or square brackets if the alias name contains spaces:</p>

    <pre><code class="language-sql">
      SELECT CustomerName AS Customer, ContactName AS [Contact Person]
      FROM Customers;
    </code></pre>

    <p>The following statement creates an alias named "Address" that combine four columns (Address, PostalCode, City ad Country):</p>

    <pre><code class="language-sql">
      SELECT CustomerName, Address + ', ' + PostalCode + ' ' + City + ', ' + Country AS Address
      FROM Customers;
    </code></pre>

    <p><strong>Note:</strong> to get the statement above to work in MySQL use the following:</p>

    <pre><code class="language-sql">
      SELECT CustomerName, CONCAT(Address, ', ', PostalCode, ', ', City, ', ', Country) AS Address
      FROM Customers;
    </code></pre>

    <hr />

    <h2>Alias for Tables Example</h2>

    <p>The following SQL statement selects all the orders from the customer with CustomerID=4 (Around the Horn). We use the "Customers" and "Orders" tables, and give them the table aliases of "c" and "o" respectively (Here we use aliases to make the SQL shorter):</p>

    <pre><code class="language-sql">
      SELECT o.OrderID, o.OrderDate, c.CustomerName
      FROM Customers AS c, Orders AS o
      Where c.CustomerName = "Around the Horn" AND c.CustomerName = o.CustomerID;
    </code></pre>

    <p>The following statement is the same as above, but without aliases:</p>

    <pre><code class="language-sql">
      SELECT Orders.OrderID, Orders.OrderDate, Customers.CustomerName
      FROM Customers, Orders
      WHERE Customers.CustomerName = "Around the Horn" AND
      Customers.CustomerID = Orders.CustomerID;
    </code></pre>

    <p>Aliases can be useful when:</p>

    <ul>
      <li>There is more than one table involved in a query</li>
      <li>Functions are used in the query</li>
      <li>Column names are big and not very readable</li>
      <li>Two or more columns are combined together</li>
    </ul>

  </body>
</html>
