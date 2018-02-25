<html>
  <head>
    <title>PHP and R Integration Sample</title>
  </head>
  <body>
    <div id=”r-output” id=”width: 100%; padding: 25px;”>
    <?php
      use myphp\phprmaster\src\Kachkaev\PHPR\RCore
	  use myphp\phprmaster\src\Kachkaev\PHPR\PHPR\Engine\CommandLineREngine

$r = new RCore(new CommandLineREngine('C:\Users\elcot\Desktop\non frequently used\R x64 3.4.1'))

$result = $r->run(<<<EOF
x = 1
y = 2
x + y
x + z
x - y
EOF
    );

echo $result;
    ?>
    <!--><img src=”test.png?var1.1” alt=”R Graph” /><!-->
    </div>
  </body>
</html>