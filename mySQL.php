<<?php

create table posts (
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    subject varchar(128) not null,
    content varchar(1000) not null,
    date datetime not null
);
// first parenthesis which part of table we are inserting data into
insert into posts () VALUES ();

insert into posts (subject, content, date) VALUES ('This is the subject','Fusce at bibendum ipsum. Aliquam hendrerit dignissim diam sed hendrerit. Maecenas lectus ante, sagittis at orci vitae, faucibus maximus tellus. Sed turpis quam, dapibus vitae ullamcorper eu, commodo nec massa. Cras consequat tortor eget aliquam feugiat. Nulla vel nulla ac leo pharetra rhoncus', '2019-1-8 13:49:01');

select * from ______
select subject from _____

select * from posts where id='1' AND subject='This is the subject'
select * from posts where id='1' OR subject='This is the subject'


UPDATING INFO IN SQL
UPDATE posts
SET subject='this is a test', content='this is the content'
WHERE id='1'


Deleting posts

DELETE from _________
WHERE id="1"


ALPHABETICAL ORDER IN SQL

order by ID number ascending
SELECT * from posts ORDER BY id ASC

Descending
SELECT * from posts ORDER BY id DESC

?>
