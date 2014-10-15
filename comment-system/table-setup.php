<?php 

// setup required tables
CREATE TABLE posts(
   id INT NOT NULL AUTO_INCREMENT,
   content VARCHAR(200) NOT NULL,
   PRIMARY KEY (id)
);

CREATE TABLE comments(
   id INT NOT NULL AUTO_INCREMENT,
   user_name  VARCHAR(50) NOT NULL,
   comment VARCHAR(100) NOT NULL,
   PRIMARY KEY (id)
);


CREATE TABLE post_comments(
   post_id INT NOT NULL,
   comment_id INT NOT NULL
);

?>