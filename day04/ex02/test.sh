rm ~/Desktop/Mamp/apache2/htdocs/day04/private/passwd
curl -d login="valerie" -d passwd="dsfs" -d submit=OK 'http://localhost:8080/day04/ex01/create.php'
curl -d login="valerie" -d oldpw="dsfs" -d newpw="newPass" -d submit=OK 'http://localhost:8080/day04/ex02/modif.php'
more ~/Desktop/Mamp/apache2/htdocs/day04/private/passwd
curl -d login=x -d oldpw=21 -d newpw=42 -d submit=OK 'http://localhost:8080/day04/ex02/modif.php'
curl -d login=x -d oldpw=42 -d newpw= -d submit=OK 'http://localhost:8080/day04/ex02/modif.php'
