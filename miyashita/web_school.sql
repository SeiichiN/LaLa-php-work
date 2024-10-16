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
('01', '�k�C��'),
('02', '�X��'),
('03', '��茧'),
('04', '�{�錧'),
('05', '�H�c��'),
('06', '�R�`��'),
('07', '������'),
('08', '��錧'),
('09', '�Ȗ،�'),
('10', '�Q�n��'),
('11', '��ʌ�'),
('12', '��t��'),
('13', '�����s'),
('14', '�_�ސ쌧'),
('15', '�V����'),
('16', '�x�R��'),
('17', '�ΐ쌧'),
('18', '���䌧'),
('19', '�R����'),
('20', '���쌧'),
('21', '�򕌌�'),
('22', '�É���'),
('23', '���m��'),
('24', '�O�d��'),
('25', '���ꌧ'),
('26', '���s�{'),
('27', '���{'),
('28', '���Ɍ�'),
('29', '�ޗǌ�'),
('30', '�a�̎R��'),
('31', '���挧'),
('32', '������'),
('33', '���R��'),
('34', '�L����'),
('35', '�R����'),
('36', '������'),
('37', '���쌧'),
('38', '���Q��'),
('39', '���m��'),
('40', '������'),
('41', '���ꌧ'),
('42', '���茧'),
('43', '�F�{��'),
('44', '�啪��'),
('45', '�{�茧'),
('46', '��������'),
('47', '���ꌧ');

select * from state;

--
-- course�\
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
('���J����',   'm', '1992/09/03', '13', 'C01'),
('��K���ӂ�', 'f', '1994/09/21', '47', 'C02'),
('�n�ӓN',     'm', '1950/03/11', '23', 'C03'),
('�E�˗m��',   'm', '1979/05/07', '14', 'C04'),
('�g���R���q', 'f', '1988/07/22', '13', 'C03');

select * from students;
