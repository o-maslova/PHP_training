INSERT INTO db_omaslova.ft_table (login, 'other', creation_date)
SELECT last_name, 'other', birthdate FROM user_card
WHERE LENGTH(last_name) < 9 AND last_name LIKE '%a%'
ORDER BY last_name ASC LIMIT 10;
