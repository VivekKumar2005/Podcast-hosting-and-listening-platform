ALTER TABLE users
ADD COLUMN first_name VARCHAR(50) NOT NULL AFTER username,
ADD COLUMN last_name VARCHAR(50) NOT NULL AFTER first_name;