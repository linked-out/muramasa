CREATE TABLE IF NOT EXISTS `ci_sessions` (
        `id` varchar(40) NOT NULL,
        `ip_address` varchar(45) NOT NULL,
        `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
        `data` blob NOT NULL,
        PRIMARY KEY (id),
        KEY `ci_sessions_timestamp` (`timestamp`)
);

CREATE TABLE USER(
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255),
    lastname VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    PASSWORD VARCHAR(255)
);

CREATE TABLE profile(
   id INT PRIMARY KEY,
   motto VARCHAR(255),
   city VARCHAR(255),
   state VARCHAR(255),
   FOREIGN KEY (id) REFERENCES USER(id)
);

CREATE TABLE post(
   id INT AUTO_INCREMENT PRIMARY KEY,
   content VARCHAR(255),
   user_id INT,
   FOREIGN KEY (user_id) REFERENCES USER(id)
);

CREATE TABLE job (
   id INT AUTO_INCREMENT PRIMARY KEY,
   title VARCHAR(255),
   company_name VARCHAR(255),
   user_id INT,
   FOREIGN KEY (user_id) REFERENCES USER(id)
);
