プログラミング入門書に、次のようなSQLが載っていました。

$sql = <<< EOD
  SELECT
    goods.id AS goods_id,
    goods.name AS goods_name,
    goods.size,
    brand.name AS brand_name,
    stock.quantity
  FROM goods, brand, stock
  WHERE goods.brand = brand.id AND goods.id = stock.goods_id
  ORDER BY goods_name
  EOD;
  
このようなSQL文、あまり見かけません。
特に FROM句のところ。
このSQL文はどういうものなんでしょうか？

---

たしかに最近あまり見かけない書き方ですが、これは**古い（または簡略化された）JOINの書き方**です。
結論からいうと、このSQLは「複数テーブルを結合（JOIN）している」普通のクエリです。

---

## 何をしているSQLか

このクエリは3つのテーブル：

* `goods`（商品）
* `brand`（ブランド）
* `stock`（在庫）

を結合して、次の情報を取得しています：

* 商品ID・商品名・サイズ
* ブランド名
* 在庫数

---

## ポイント：FROM句の書き方

あなたが違和感を持ったここ👇

```sql
FROM goods, brand, stock
WHERE goods.brand = brand.id
  AND goods.id = stock.goods_id
```

これは実は：

👉 **「カンマ区切りでテーブルを並べて、WHEREで結合条件を書く」形式**

です。

---

## 現代的な書き方（推奨）

同じ処理を、今よく使われる `JOIN` で書くとこうなります：

```sql
SELECT
  goods.id AS goods_id,
  goods.name AS goods_name,
  goods.size,
  brand.name AS brand_name,
  stock.quantity
FROM goods
JOIN brand ON goods.brand = brand.id
JOIN stock ON goods.id = stock.goods_id
ORDER BY goods_name;
```

---

## 違いは何か？

### ① 意味は同じ

* 実行結果は基本的に同じです

### ② 書き方の違い

| 書き方         | 特徴             |
| ----------- | -------------- |
| カンマ + WHERE | 古い書き方（暗黙的JOIN） |
| JOIN ... ON | 現代的（明示的JOIN）   |

---

## なぜ古い書き方があるのか？

これは歴史的な理由です。

* 昔のSQLでは `JOIN` 構文がなかった
* そのため「全部FROMに並べてWHEREで絞る」しかなかった

つまりこの書き方は：

👉 **「内部結合（INNER JOIN）」を暗黙的にやっている**

ということです

---

## 注意点（重要）

この書き方には落とし穴があります👇

### ❌ 結合条件を書き忘れると…

```sql
FROM goods, brand, stock
```

だけだと：

👉 **全組み合わせ（直積 / クロス結合）**

になります（データ爆発）

---

## まとめ

このSQLは：

* 3テーブルの**内部結合**
* ただし書き方が**古いスタイル（暗黙的JOIN）**

👉 現代ではこう書くのが一般的：

```sql
FROM goods
JOIN brand ...
JOIN stock ...
```

---

## 補足（入門書でよくある理由）

入門書がこの書き方を使う理由は：

* 文法がシンプル（JOINをまだ説明していない）
* 「WHEREで条件を書く」流れを統一したい

ただし実務では：

👉 **JOIN構文を使う方が安全で読みやすい**

---

もしよければ、
「LEFT JOINだとどう変わるのか」や
「JOINの種類の違い」も解説できます。
