<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>My Portal Page</title>
</head>
<body>
    <h1><a href="./index.php">Sam's Portal Page</a></h1>
    <div id="wrapper">
        <nav>
            <ul>
                <li><a href="./website/daily.php">Switch</a></li>
                <li><a href="./adder.php">Troubleshoot</a></li>
                <li><a href=""></a>Calculator</li>
                <li><a href=""></a>Email</li>
                <li><a href=""></a>Database</li>
                <li><a href=""></a>Gallery</li>
            </ul>
        </nav>

        <main>
            <h2>About Sam</h2>
            <div class="about-container">
                <img src="./images/me.jpeg" alt="Me">
                <p>Sam O'Neal is a web development student at SCCC. In addition to web programming, Sam enjoys photography, computer graphics, and baking.</p>
            </div>
                <img class="mamp-img" src="./images/MAMP1.png" alt="">
                <img class="mamp-img" src="./images/MAMP2.png" alt="">
        </main>
        <aside>
            <h2>Weekly Class Exercises</h2>
            <h3>Week 2</h3>
            <ol>
                <li><a href="./weeks/week2/var.php">var.php</a></li>
                <li><a href="./weeks/week2/var2.php">var2.php</a></li>
                <li><a href="./weeks/week2/currency.php">currency.php</a></li>
                <li><a href="./weeks/week2/currency-logic.php">currency-logic.php</a></li>
                <li><a href="./weeks/week2/heredoc.php">heredoc.php</a></li>
            </ol>
            <h3>Week 3</h3>
            <ol>
                <li><a href="./weeks/week3/date.php">date.php</a></li>
                <li><a href="./weeks/week3/for-each.php">for-each.php</a></li>
                <li><a href="./weeks/week3/for-loop.php">for-loop.php</a></li>
                <li><a href="./weeks/week3/if.php">if.php</a></li>
                <li><a href="./weeks/week3/switch.php">switch.php</a></li>
            </ol>
            <h3>Week 4</h3>
            <ol>
                <li><a href="./weeks/week4/celsius.php">celsius.php</a></li>
                <li><a href="./weeks/week4/form-arithmatic.php">form-arithmatic.php</a></li>
                <li><a href="./weeks/week4/form1.php">form1.php</a></li>
                <li><a href="./weeks/week4/form2.php">form2.php</a></li>
                <li><a href="./weeks/week4/form3.php">form3.php</a></li>
            </ol>
            <h3>Week 5</h3>
            <ol>
                <li><a href="./weeks/week5/currency1.php">currency1.php</a></li>
                <li><a href="./weeks/week5/currency2.php">currency2.php</a></li>
                <li><a href="./weeks/week5/currency3.php">currency3.php</a></li>
                <li><a href="./weeks/week5/currency4.php">currency4.php</a></li>
                <li><a href="./weeks/week5/null.php">null.php</a></li>
            </ol>
            <h3>Week 6</h3>
            <ol>
                <li><a href="./weeks/week6/form.php">form.php</a></li>
                <li><a href="./weeks/week6/form2.php">form2.php</a></li>
                <li><a href="./weeks/week6/functions.php">functions.php</a></li>
            </ol>

        </aside>
    </div>
    <footer>
      <ul>
        <li>Copyright &copy; 2023</li>
        <li>All Rights Reserved</li>
        <li><a href="../index.php">Web Design by Sam</a></li>
        <li><a id="html-checker" href="#">HTML Validation</a></li>
        <li><a id="css-checker" href="#">CSS Validation</a></li>
      </ul>
      <script>
        document
          .getElementById("html-checker")
          .setAttribute(
            "href",
            "https://validator.w3.org/nu/?doc=" + location.href
          );
        document
          .getElementById("css-checker")
          .setAttribute(
            "href",
            "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href
          );
      </script>
    </footer>
</body>
</html>