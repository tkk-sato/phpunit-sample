<?php
require_once('vendor/autoload.php');

//クラスの後ろにTestをつける
class SampleTest extends PHPUnit\Framework\TestCase
{

  //test_から始まるメソッドがテストケースとして扱われる
  public function test_add()
  {

    $sample = new Sample\Sample();

    // 1+2 の期待される結果は3だがとなっているためエラーが発生
    $this->assertEquals(3, $sample->Add(1, 2));
    // 2+2 の期待される結果を第一引数に記述
    $this->assertEquals(4, $sample->Add(2, 2));
    //足し算でも掛け算でも同じ4なためテストケースを追加
    $this->assertEquals(5, $sample->Add(2, 3));
  }
}
