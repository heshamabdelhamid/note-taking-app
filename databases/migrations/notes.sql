create table notes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id int not null,
    title varchar(100) not null,
    body varchar(255) not null,
    created_at timestamp default CURRENT_TIMESTAMP null,
    constraint fk_user_id foreign key (user_id) references users (id) on delete cascade
);