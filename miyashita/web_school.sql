 CREATE DATABASE IF NOT EXISTS web_school;

DROP TABLE IF EXISTS students;
DROP TABLE IF EXISTS course;
DROP TABLE IF EXISTS state;
 
 

 
 use web_school;
 
 DROP TABLE IF EXISTS state;

CREATE TABLE state (
  state_id char(2) PRIMARY KEY,
  name varchar(5)
); 
--
-- state
--

INSERT INTO state (state_id, name) VALUES
('01', 'kC¹'),
('02', 'ÂX§'),
('03', 'âè§'),
('04', '{é§'),
('05', 'Hc§'),
('06', 'R`§'),
('07', '§'),
('08', 'ïé§'),
('09', 'ÈØ§'),
('10', 'Qn§'),
('11', 'éÊ§'),
('12', 'çt§'),
('13', 's'),
('14', '_Þì§'),
('15', 'V§'),
('16', 'xR§'),
('17', 'Îì§'),
('18', 'ä§'),
('19', 'R§'),
('20', '·ì§'),
('21', 'ò§'),
('22', 'Ãª§'),
('23', '¤m§'),
('24', 'Od§'),
('25', ' ê§'),
('26', 's{'),
('27', 'åã{'),
('28', 'ºÉ§'),
('29', 'ÞÇ§'),
('30', 'aÌR§'),
('31', '¹æ§'),
('32', 'ª§'),
('33', 'ªR§'),
('34', 'L§'),
('35', 'Rû§'),
('36', '¿§'),
('37', 'ì§'),
('38', '¤Q§'),
('39', 'm§'),
('40', 'ª§'),
('41', '²ê§'),
('42', '·è§'),
('43', 'F{§'),
('44', 'åª§'),
('45', '{è§'),
('46', '­§'),
('47', '«ê§');

select * from state;

--
-- course\
--

create table course (
course_id char(3) primary key,
name varchar(50) NOT NULL
);

insert into course (course_id, name) values
('C01', 'JavaScript'),
('C02', 'PHP'),
('C03', 'Java'),
('C04', 'HTML/CSS');

select * from course;

create table students (
name varchar(50) NOT NULL,
gender char(1),
birthday date NOT NULL,
state_id char(2),
course_id char(3)
);

insert into students (name, gender, birthday, state_id, course_id) values
('õJ«¾',   'm', '1992/09/03', '13', 'C01'),
('ñK°ÓÝ', 'f', '1994/09/21', '47', 'C02'),
('nÓN',     'm', '1950/03/11', '23', 'C03'),
('EËmî',   'm', '1979/05/07', '14', 'C04'),
('gR¢q', 'f', '1988/07/22', '13', 'C03');

select * from students;

