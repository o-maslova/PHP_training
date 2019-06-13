SELECT last_name, first_name FROM user
WHERE last_name LIKE '%-%' OR first_name LIKE '%-%'
ORDER BY last_name,first_name ASC;