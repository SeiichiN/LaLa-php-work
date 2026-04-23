<?php
class Person {
  public const COMPANY = "株式会社ABC";
  public string $name;
  public int $age;

  function __construct(string $name, int $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function print_self() {
    echo "名前：", $this->name, "<br>";
    echo "年齢：", $this->age, "歳<br>";
  }

  public static function print_company() {
    echo "会社名：", self::COMPANY, "<br>";
  }
}