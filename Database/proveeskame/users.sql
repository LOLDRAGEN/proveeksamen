create table if not exists users
(
    uid      int auto_increment
        primary key,
    username varchar(40)          null,
    pwd      varchar(40)          null,
    email    varchar(40)          null,
    admin    tinyint(1) default 0 not null
);

