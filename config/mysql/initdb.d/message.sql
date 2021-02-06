DROP SCHEMA IF EXISTS test;
CREATE SCHEMA test;
USE
test;

DROP TABLE IF EXISTS message;

CREATE TABLE message
(
    id        int auto_increment,
    view_name varchar(100) not null,
    message   text         not null,
    post_date datetime     not null,
    constraint message_pk
        primary key (id)
);

