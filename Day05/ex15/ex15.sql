FROM distrib
SELECT REVERSE(RIGHT(phone_number, 9)) AS'
FROM distrib
WHERE phone_number LIKE '05%';