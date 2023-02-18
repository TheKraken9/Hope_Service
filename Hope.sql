create database hope;
/c hope;

create table Header(
    id varchar(10) primary key not null ,
    title varchar(50) not null ,
    description text
);


create table Footer(
    id varchar(10) primary key not null ,
    title varchar(50) not null ,
    description text,
    idIcon varchar(10) References Icon (id)
);

create table Image(
    id varchar(10) primary key not null ,
    name varchar(50),
    url varchar(50) not null
);

create table Icon(
    id varchar(10) primary key not null ,
    name varchar(50),
    url varchar(50)  not null
);

create table About(
    id varchar(10) primary key not null ,
    title varchar(50) not null ,
    description text not null ,
    idImage varchar(10) references Image (id) not null
);

create table Contact(
    id varchar(10) primary key not null ,
    title varchar(50) not null ,
    description text not null ,
    idIcon varchar(10) references Icon (id)
);

create table Contact_us(
    id varchar(10) primary key not null ,
    title varchar(50) not null ,
    description varchar(999) not null ,
    idIcon varchar(10) references Icon (id),
    message text not null
);

create table Partners(
    id varchar(10) primary key not null ,
    name varchar(50) not null ,
    title varchar(50),
    description text,
    idImage varchar(10) references Image (id)
);

create table historyPartners(
    id varchar(10) primary key not null ,
    name varchar(50) not null ,
    title varchar(50),
    description text,
    idImage varchar(10) references Image (id)
);

create table Events(
    id varchar(10) primary key not null ,
    name varchar(50) not null ,
    date date ,
    title varchar(50) not null ,
    description text not null ,
    idImage varchar(10) references Image (id),
    idIcon varchar(10) references Icon (id)
);

create table historyEvents(
    id varchar(10) primary key not null ,
    name varchar(50) not null ,
    date date ,
    title varchar(50) not null ,
    description text not null ,
    idImage varchar(10) references Image (id),
    idIcon varchar(10) references Icon (id)
);

-- otran tsy de ilaina ilay actu fa mitovy ihany ny event st actu
create table Team(
    id varchar(10) primary key not null ,
    name varchar(50) not null ,
    title varchar(50) not null ,
    description text,
    idImage varchar(10) references Image (id)
);


create table Service(
    id varchar(10) primary key not null ,
    name varchar(50) not null ,
    title varchar(50) not null ,
    description text,
    idImage varchar(10) references Image (id),
    idIcon varchar(10) references Icon (id)
);
