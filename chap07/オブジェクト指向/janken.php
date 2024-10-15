<?php

class Player {
  public string $name;
  public int $hand;
  public string $result;
  private const HAND = ['グー', 'チョキ', 'パー'];

  function __construct($name) {
    $this->name = $name;
  }
  
  function judge(Player $oppo) {
    $result = match(true) {
      $this->hand === $oppo->hand => '引き分け',
      $this->hand === 0 && $oppo->hand === 1 => '勝ち',
      $this->hand === 1 && $oppo->hand === 2 => '勝ち',
      $this->hand === 2 && $oppo->hand === 0 => '勝ち',
      default => '負け',
    };
    $this->result = $result;
  }
  
  function showResult() {
    return $this->name . ": " . self::HAND[$this->hand] . ": " . $this->result;
  }
  
}  // class end

class Com extends Player {
  function setHand() {
    $this->hand = mt_rand(0, 2);
  }
}

class User extends Player {
  function setHand(int $hand) {
    $this->hand = $hand;
  }
}

$num = (int) $_POST['hand'];
$u = new User("Taro");
$u->setHand($num);

$c = new Com("COM");
$c->setHand();

$u->judge($c);
$c->judge($u);
?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <h1>じゃんけんゲーム</h1>
  <p><?php echo $u->showResult(); ?></p>
  <p><?php echo $c->showResult(); ?></p>
  <hr>
  <p><a href="index.php">もどる</a></p>
</body>
</html>
