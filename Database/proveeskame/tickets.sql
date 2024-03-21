create table if not exists tickets
(
    itcket_id    int auto_increment
        primary key,
    con_user_id  int            not null,
    issue        varchar(100)   not null,
    issue_answer varchar(10000) not null,
    resolved     int            null,
    constraint con_user_id
        foreign key (con_user_id) references users (uid)
);

