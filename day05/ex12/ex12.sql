SELECT last_name, first_name 
FROM `user_card` 
where first_name like '%-%'
or last_name like '%-%'
ORDER BY last_name ASC
;