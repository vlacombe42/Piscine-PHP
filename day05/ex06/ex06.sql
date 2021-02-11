SELECT title, summary 
FROM `film` 
WHERE LOWER(SUMMARY) LIKE '%Vincent%'
ORDER by id_film ASC;
