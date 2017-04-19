<!DOCTYPE html>
<html>
  <head>
    <title>Injection</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="../styles.css" />

    <!-- Prismjs -->
    <link rel="stylesheet" href="../prism.css" />
    <script src="../prism.js"></script>
  </head>
  <body class="w3-margin">

    <h1>Injection</h1>

    <p>An SQL injection can destroy you database!</p>

    <h2>SQL in Web Pages</h2>

    <p>When SQL is used to display data on a web page, it is common to let web users input their own search values.</p>

    <p>Since SQL statements are text only, it is easy, with a little piece of computer code, to dynamically change SQL statements to provide the user with selected data:</p>

    <h3>Server Code</h3>

    <pre><code class="language-sql">
      txtUserId = getRequestString("UserId");
      txtSQL = "SELECT * FROM Users WHERE UserID = " + txtUserId;
    </code></pre>

    <p>The example above creates a select statement by adding a variable (txtUserId) to a select string. The variable is fetched from the user input (Request) to the page.</p>

    <p>This chapter describes the potential dangers of using input in SQL statements.</p>

    <hr />

    <h2>SQL Injection</h2>

    <p>SQL injection is a technique where malicious users can inject SQL commands into an SQL statement, via web page input.</p>

    <p>Injected SQL commands can alter SQL statements, and compromise the security of a web application.</p>

    <hr />

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <h2>Important: See W3Schools for examples of SQL Injection</h2>
    </div>

  </body>
</html>
