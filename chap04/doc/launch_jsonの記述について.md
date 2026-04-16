Windows11でVSCodeについてです。
php は 8.2.12で
Xdebug は v3.4.2 です。
次のようなフォルダ構成です。
```
./chap04
  +-- 4-2/
       +-- warikan_form.php
       +-- warikan_return.php
```
"chap04"フォルダを指定して、VSCodeを開いています。
launch.json は、デフォルトの状態に、以下の部分を追記しています。
launth.json
```
{
  "name": "Launch Built-in web server",
  # ... (省略) ...
  "serverReadyAction": {
    # ... (省略) ...
    "uriFormat": "http://localhost:%s/${relativeFile}",
    # ... (省略) ...
  }
}
```

warikan_form.phpは以下です。
```
<form action="warikan_return.php" method="post">
  合計金額：<input type="text" name="total"><br>
  人数：<input type="text" name="ninzu"><br>
  <input type="submit" value="計算する">
</form>  
```

warikan_return.php は以下です。
```
<body>
<?php
$total = $_POST['total'];
$ninzu = $_POST['ninzu'];
?>
</body>
```

この状態で、warikan_form.php を開いて、”実行とデバッグ"で、
"Launch BUild-in web server" を選択し、実行ボタンをクリックすると
warikan_form.phpがブラウザで開いて、合計金額と人数の入力欄が表示され、
入力して、"計算する"ボタンをクリックすると、次のようになります。

```
Not Found
The requested resource /warikan_return.php was not found on this server.
```

ですから、"warikan_form.php" の formの記述を次のようにしなければなりません。
```
<form action="/4-2/warikan_return.php" method="post">
    (以下、略)
```

ところが、同じコードが Ubuntu24.04 では "Not Found" にならずに
ちゃんと "warikan_return.php" に遷移するのです。
なぜだか、sわかりますか？

----

書きわすれました。
Windows11で"NotFound" になるとき、ブラウザの URL欄は、
"http://localhost:62425/warikan_result.php"
となっています。

Ubuntu24.04 だと、
"http://localhost:39489/4-2/warikan_return.php"
となって、ちゃんと表示されるのです。

"launch.json"
```
{
  // IntelliSense を使用して利用可能な属性を学べます。
  // 既存の属性の説明をホバーして表示します。
  // 詳細情報は次を確認してください: https://go.microsoft.com/fwlink/?linkid=830387
  "version": "0.2.0",
  "configurations": [
  
    {
      "name": "Listen for Xdebug",
      "type": "php",
      "request": "launch",
      "port": 9003
    },
    {
      "name": "Launch currently open script",
      "type": "php",
      "request": "launch",
      "program": "${file}",
      "cwd": "${fileDirname}",
      "port": 0,
      "runtimeArgs": [
        "-dxdebug.start_with_request=yes"
      ],
      "env": {
        "XDEBUG_MODE": "debug,develop",
        "XDEBUG_CONFIG": "client_port=${port}"
      }
    },
    {
      "name": "Launch Built-in web server",
      "type": "php",
      "request": "launch",
      "runtimeArgs": [
        "-dxdebug.mode=debug",
        "-dxdebug.start_with_request=yes",
        "-S",
        "localhost:0"
      ],
      "program": "",
      "cwd": "${workspaceRoot}",
      "port": 9003,
      "serverReadyAction": {
        "pattern": "Development Server \\(http://localhost:([0-9]+)\\) started",
        "uriFormat": "http://localhost:%s/${relativeFile}",
        "action": "openExternally"
      }
    }
  ]
}
```

---

なるほど、URLの違いがかなりヒントになっています。これはもう原因ははっきりしています。

---

## 結論（ズバリ）

Windowsでは：

```
http://localhost:62425/warikan_result.php
```

👉 **「/4-2/ が消えている」**

つまり、

👉 **サーバのドキュメントルートが `chap04/4-2` になっている**

一方 Ubuntu は：

```
http://localhost:39489/4-2/warikan_return.php
```

👉 **ドキュメントルートが `chap04`**

---

## なぜこうなるか（本質）

あなたの `launch.json` のここ👇

```json
"cwd": "${workspaceRoot}",
```

これが原因です。

---

### 🔥 問題点

* `${workspaceRoot}` は **古い変数**（非推奨）
* 環境によって挙動が変わる（←今回の差）

結果：

| 環境      | `${workspaceRoot}` の解釈      |
| ------- | --------------------------- |
| Windows | なぜか `chap04/4-2` 扱いになることがある |
| Ubuntu  | `chap04`                    |

---

## その結果の流れ

### Windows

1. サーバ起動：

   ```
   ルート = chap04/4-2
   ```

2. ブラウザ：

   ```
   /warikan_return.php を要求
   ```

3. サーバは：

   ```
   chap04/4-2/warikan_return.php → OKなはずだが…
   ```

でも実際には：

👉 最初のアクセス自体が

```
http://localhost:62425/warikan_form.php
```

になっている（= `/4-2/` が最初から無い）

つまり：

👉 `${relativeFile}` の解釈もズレている

---

## Ubuntu がうまくいく理由

Ubuntuでは：

* `${workspaceRoot}` = chap04
* `${relativeFile}` = 4-2/warikan_form.php

👉 期待通り

---

## 解決方法（これが正解）

### ✅ ① `${workspaceRoot}` をやめる

これに変更：

```json
"cwd": "${workspaceFolder}"
```

---

### ✅ ②（超重要）ドキュメントルートを明示

```json
"runtimeArgs": [
  "-dxdebug.mode=debug",
  "-dxdebug.start_with_request=yes",
  "-S",
  "localhost:0",
  "-t",
  "${workspaceFolder}"
],
```

---

### 🔧 修正版（完成形）

```json
{
  "name": "Launch Built-in web server",
  "type": "php",
  "request": "launch",
  "runtimeArgs": [
    "-dxdebug.mode=debug",
    "-dxdebug.start_with_request=yes",
    "-S",
    "localhost:0",
    "-t",
    "${workspaceFolder}"
  ],
  "program": "",
  "cwd": "${workspaceFolder}",
  "port": 9003,
  "serverReadyAction": {
    "pattern": "Development Server \\(http://localhost:([0-9]+)\\) started",
    "uriFormat": "http://localhost:%s/${relativeFile}",
    "action": "openExternally"
  }
}
```

---

## これでどうなるか

### URLはこうなる👇

```
http://localhost:xxxx/4-2/warikan_form.php
```

フォーム送信：

```
warikan_return.php → /4-2/warikan_return.php
```

👉 Windows / Ubuntu 両方で一致

---

## 補足（今回の本質）

今回のトラブルは：

* 相対パスの問題に見えて
* 実は

👉 **VSCode の変数 `${workspaceRoot}` の罠**

です。

---

## 一言アドバイス

VSCodeでは：

* ❌ `${workspaceRoot}`（古い・不安定）
* ✅ `${workspaceFolder}`（現在の標準）

これを徹底すると、こういう事故はほぼ防げます。

---

もし興味あれば、

👉 `${relativeFile}` がどう計算されているか

も解説できます（ここも地味に重要です）。

---

まだ同じです。改善されません。
launch.json
```
{
  // IntelliSense を使用して利用可能な属性を学べます。
  // 既存の属性の説明をホバーして表示します。
  // 詳細情報は次を確認してください: https://go.microsoft.com/fwlink/?linkid=830387
  "version": "0.2.0",
  "configurations": [
  
    {
      "name": "Listen for Xdebug",
      "type": "php",
      "request": "launch",
      "port": 9003
    },
    {
      "name": "Launch currently open script",
      "type": "php",
      "request": "launch",
      "program": "${file}",
      "cwd": "${fileDirname}",
      "port": 0,
      "runtimeArgs": [
        "-dxdebug.start_with_request=yes"
      ],
      "env": {
        "XDEBUG_MODE": "debug,develop",
        "XDEBUG_CONFIG": "client_port=${port}"
      }
    },
    {
      "name": "Launch Built-in web server",
      "type": "php",
      "request": "launch",
      "runtimeArgs": [
        "-dxdebug.mode=debug",
        "-dxdebug.start_with_request=yes",
        "-S",
        "localhost:0",
        "-t",
        "${workspaceFolder}"
      ],
      "program": "",
      "cwd": "${workspaceFolder}",
      "port": 9003,
      "serverReadyAction": {
        "pattern": "Development Server \\(http://localhost:([0-9]+)\\) started",
        "uriFormat": "http://localhost:%s/${relativeFile}",
        "action": "openExternally"
      }
    }
  ]
}
```
