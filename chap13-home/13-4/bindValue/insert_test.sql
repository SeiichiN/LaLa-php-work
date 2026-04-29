create database if not exists test_db;
use test_db; 

drop table if exists insert_test;
create table insert_test (
  int_v int,
  float_v float
);

insert into insert_test (int_v, float_v) 
values (0, 1.5), (1, 2.5), (2, 3.5), (3, 4.5);
select * from insert_test;

