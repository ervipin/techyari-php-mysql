<?php 

// setup messages table
CREATE TABLE article(
   id INT NOT NULL AUTO_INCREMENT,
   text VARCHAR(200) NOT NULL,
   PRIMARY KEY (id)
);

CREATE TABLE article_rating(
   article_id INT NOT NULL,
   rating INT NOT NULL
);

?>