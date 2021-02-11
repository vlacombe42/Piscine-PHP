CREATE TABLE ft_table ( `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
                        `login` VARCHAR(8) NOT NULL DEFAULT "toto",
                        `group` enum("staff","student","other") NOT NULL,
                        `creation_date` date NOT NULL
                        );