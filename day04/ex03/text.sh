rm ~/Desktop/Mamp/apache2/htdocs/day04/private/passwd
curl -d login=toto -d passwd=titi -d submit=OK 'http://localhost:8080/day04/ex01/create.php'
curl 'http://localhost:8080/day04/ex03/login.php?login=toto&passwd=titi'
curl -d login=toto -d passwd=titi -d submit=OK 'http://localhost:8080/day04/ex01/create.php'
curl -c cook.txt 'http://localhost:8080/day04/ex03/login.php?login=toto&passwd=titi'
curl -b cook.txt 'http://localhost:8080/day04/ex03/whoami.php'
curl -b cook.txt 'http://localhost:8080/day04/ex03/logout.php'
curl -b cook.txt 'http://localhostr:8080/day04/ex03/whoami.php'
