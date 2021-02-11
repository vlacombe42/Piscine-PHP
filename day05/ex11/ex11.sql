SELECT upper(last_name) AS NAME_upper, first_name, price, `member`.id_sub 
FROM `member`
JOIN `subscription`  ON `member`.id_sub = `subscription`.`id_sub`
JOIN `user_card` on `user_card`.`id_user` = `member`.`id_member`
WHERE price >42
ORDER BY NAME_upper ASC
;