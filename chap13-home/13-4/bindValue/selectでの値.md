MariaDBです。

以下のようなテーブル insert_test があります。

```
create table insert_test (
  int_v int,
  float_v float
);

insert into insert_test (int_v, float_v) 
values (0, 1.5), (1, 2.5), (2, 3.5), (3, 4.5);
```

これに対して、次のように文字を指定しても動作します。

```
MariaDB [testdb]> select * from insert_test where int_v >= 'a';
+-------+---------+
| int_v | float_v |
+-------+---------+
|     0 |     1.5 |
|     1 |     2.5 |
|     2 |     3.5 |
|     3 |     4.5 |
+-------+---------+
```
この場合、'a' は何という値として処理されているのでしょうか？
