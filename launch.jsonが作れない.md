VSCodeのバージョン情報で、以下が表示されてます。

バージョン: 1.105.1 (user setup)
コミット: 7d842fb85a0275a4a8e4d7e040d2625abbf7f084
日付: 2025-10-14T22:33:36.618Z
Electron: 37.6.0
ElectronBuildId: 12502201
Chromium: 138.0.7204.251
Node.js: 22.19.0
V8: 13.8.258.32-electron.0
OS: Windows_NT x64 10.0.26100

「実行とデバッグ」ボタンは表示されますが、
launch.jsonを作成リンクをクリックしても、
動作しません。

画面右上の「Debug PHP File」をクリックすると、
ステップ実行は動作します。

---

とても良い情報です。
整理すると、あなたの環境では：

* ? VSCode 最新版（v1.105.1）
* ? Windows 10
* ? PHP Debug は機能している（「Debug PHP File」で実際にステップ実行できる）
* ?? しかし「launch.jsonを作成」が反応しない（クリックしても何も起こらない）

という状態ですね。

---

## ?? 結論から言うと

これは **VSCode 1.105.x 系で報告されている既知の不具合** に該当しています。
特に **「user setup版（ユーザーインストール版）」＋ PHP Debug 拡張** の組み合わせで、
「launch.json を自動生成するボタンが動作しない」現象が確認されています。

（内部的には、VSCodeがデバッグテンプレートを呼び出すためのコマンド呼び出しがブロックされてしまっています）

---

## ?? 回避策・対応方法

### ? 方法①：手動で launch.json を作成する（最も確実）

VSCodeが自動で作ってくれなくても、内容はシンプルです。
以下の手順で問題なく動作します。

1. プロジェクトのルートに `.vscode` フォルダを作成
2. その中に `launch.json` を作成して、以下を貼り付けてください：

```json
{
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
      "port": 9003
    }
  ]
}
```

?? この設定は Xdebug 3.x に対応（デフォルトポート9003）です。
「Listen for Xdebug」で外部アクセスを待つ方式、
「Launch currently open script」で今開いてるPHPファイルを直接実行する方式です。

---

### ? 方法②：VSCodeを「システムセットアップ版」で再インストールする

「user setup版」では一部のUIコマンドが機能しないことがあり、
**システム全体にインストールする版**（system setup）では正常動作することが確認されています。

手順：

1. VSCodeをアンインストール
2. [公式サイト](https://code.visualstudio.com/) から **System Installer (for all users)** をダウンロード
3. 再インストールして同じ拡張を入れる

その後、「launch.jsonを作成」をクリックすると反応するはずです。

---

### ? 方法③：コマンドパレットから生成を試す

もしボタンが反応しないだけなら、以下の手順で同じ動作ができます。

1. **Ctrl+Shift+P** でコマンドパレットを開く
2. 「launch」と入力して
   ?? `Debug: Open launch.json`
   を選択
3. 言語の一覧に「PHP」が出る場合、それを選ぶ

---

## ?? まとめ

| 状況                      | 原因                                  | 対処                  |
| ----------------------- | ----------------------------------- | ------------------- |
| 「launch.jsonを作成」が反応しない  | VSCode 1.105.x のUIバグ（特にUser Setup版） | 手動作成 or System版へ切替  |
| デバッグ自体は動作               | PHP Debug 拡張OK                      | 設定ファイルだけ手動で補う       |
| launch.jsonなしでも一時的に動作可能 | ?                                   | ただしブレークポイント設定など制限あり |

---

もしよければ、
→ `.vscode/launch.json` を手動で作成して
→ 「Listen for Xdebug」を選んで
→ PHPサーバー側（`php.ini` の `xdebug.mode=debug`、`xdebug.client_port=9003`）
が正しく設定されているかを確認してみてください。

希望があれば、**あなたの php.ini 設定例 に合わせて launch.json を最適化**することもできます。
どうしますか？

