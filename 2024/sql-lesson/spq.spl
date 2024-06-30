https://qiita.com/riu-414/items/c185b2bc2d5765e7f36a
-----------------------------------------------------------------
SELECT(データを取得):
SELECT カラム名 FROM DB名.テーブル名;
-----------------------------------------------------------------
-- purchasesテーブルから、nameカラムのデータを取得してください
SELECT name
FROM purchases;

-- purchasesテーブルから、「nameカラム」と「priceカラム」のデータを取得してください
SELECT name,price
FROM purchases;

-- purchasesテーブルから、全てのカラムのデータを取得してください
SELECT *
FROM purchases;


-----------------------------------------------------------------
WHERE(条件検索):
SELECT * FROM DB名.テーブル名 WHERE 条件式;
-----------------------------------------------------------------
-- WHEREを用いてcategoryカラムが「食費」であるデータを取得してください
SELECT *
FROM purchases
WHERE category="食費";

-- WHEREを用いてpriceカラムが「1000」のデータを取得してください
SELECT *
FROM purchases
WHERE price=1000;

-- WHEREを用いてpurchased_atカラムが「2017-07-01」のデータを取得してください
SELECT *
FROM purchases
WHERE purchased_at="2017-07-01";

-- 比較演算子を用いてpriceカラムが「1000以上」のデータを取得してください
SELECT *
FROM purchases
WHERE price>=1000;

-----------------------------------------------------------------
LIKE演算子(文字列を部分一致検索):
SELECT 列名 FROM テーブル名 WHERE 列名 LIKE '検索文字';
-----------------------------------------------------------------
-- nameカラムが「プリン」を含むデータを取得してください
SELECT *
FROM purchases
WHERE name LIKE "%プリン%";

-- nameカラムが「プリン」で始まるデータを取得してください（前方一致）
SELECT *
FROM purchases
WHERE name LIKE "プリン%";

-- nameカラムが「プリン」で終わるデータを取得してください（後方一致）
SELECT *
FROM purchases
WHERE name LIKE "%プリン";

-----------------------------------------------------------------
NOT(条件式などを否定):
SELECT カラム名 FROM テーブル名 WHERE カラム名 NOT LIKE '検索文字';
-----------------------------------------------------------------
-- character_nameカラムが「にんじゃわんこ」でないデータを取得してください
SELECT *
FROM purchases
WHERE NOT character_name="にんじゃわんこ";

-- nameカラムが「プリン」を含まないデータを取得してください
SELECT *
FROM purchases
WHERE NOT name LIKE "%プリン%";