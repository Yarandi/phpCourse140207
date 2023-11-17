CREATE DATABASE mydatabase;
CREATE DATABASE digikala;

CREATE TABLE users (
    id INT PRIMARY KEY,
    username VARCHAR(50),
    email VARCHAR(100)
);

INSERT INTO users (id, username, email) VALUES (1, 'john_doe', 'john@example.com');


SELECT * FROM users;

SELECT * FROM users WHERE username = 'reza';
SELECT * FROM users WHERE id = 1;
SELECT username,email FROM users WHERE id = 1;
SELECT username,email FROM users WHERE id = 1 AND username = 'reza'; 
SELECT username,email FROM users WHERE email = 'reza@gmail.com' OR username = 'reza'; 

<<<<<<< HEAD
UPDATE users SET phone = '09122771586' WHERE username='hamed' AND id = 2;
//reza you should see this after fetch 
=======
UPDATE users SET phone = '09122771586' WHERE username='reza' AND id = 2;

>>>>>>> ed53554fcd1bc177e89f8d5a0be89588ffbb65b9

DELETE FROM users WHERE id = 1;





