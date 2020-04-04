CREATE DATABASE schedule_five;
USE schedule_five;

CREATE TABLE users(
id              int(255) auto_increment not null,
name          varchar(100) not null,
surname      varchar(255) not null,
email           varchar(255) not null,
password        varchar(255) not null,
rol             varchar(20),
image          varchar(255),
created_at       DATE not null,
updated_at      DATE not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)  
)ENGINE=InnoDb;

CREATE TABLE workers(
id              int(255) auto_increment not null,
user_id         int(255) not null,
name          varchar(100) not null,
surname         varchar(120) not null,
email           varchar(255) not null,
tefefono           int(60) not null,
image          varchar(255),
created_at       DATE not null,
updated_at      DATE not null,
CONSTRAINT pk_workers PRIMARY KEY(id),
CONSTRAINT fk_worker_user FOREIGN KEY(user_id) REFERENCES users(id)

)ENGINE=InnoDb;

CREATE TABLE schedules(
id              int(255) auto_increment not null,
worker_id    int(255) not null,
user_id      int(255) not null,
name          varchar(100) not null,
surname      varchar(255) not null,
schedule          text(5000) not null,
active         varchar(30) not null,
code           varchar(20) not null,
created_at       DATE not null,
updated_at      DATE not null,
CONSTRAINT pk_schedules PRIMARY KEY(id),
CONSTRAINT fk_schedule_worker FOREIGN KEY(worker_id) REFERENCES workers(id),
CONSTRAINT fk_schedule_user FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb;







