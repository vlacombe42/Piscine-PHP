SELECT last_name, first_name, date(birthdate) 
FROM `user_card` 
WHERE YEAR(date(birthdate)) = 1989
ORDER BY last_name ASC;        