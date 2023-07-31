create database if not exists `administration`;

use `administration`;

create table if not exists `inscription` (
    `id` int(11) not null auto_increment,
    `nomComplet` varchar(255) not null,
    `email` varchar(255) not null,
    `sexe` varchar(255) not null,
    `contact` varchar(255) not null,
    `secteur` varchar(255) not null,
    `participation` varchar(255) not null,
    `annonce` varchar(255) not null,
    primary key (`id`)
) engine=InnoDB default charset=utf8;


-- Path: data.sql
insert into inscription(nomComplet, email, sexe, contact, secteur, participation, annonce)
values();