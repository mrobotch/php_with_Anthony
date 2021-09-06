# php with Anthony

## Lesson1

### サーバーの立ち上げ方

`cd path/to/your/project`
`php -S localhost:8000`
**ルートを作りたい場所にhostを立ち上げる**

## Lesson2

### php記述の仕方

- `<?php {php code goes here} ?>`
- `php echo() is like print()`
  - `<?php
 echo "Hello World<br>";
 echo "Good";
   ?>`
- php echo の中でhtml記述可能　<h1></h1>
- ファンクションの中にファンクションを入れる場合`()`を使用する場合がある

- テキストを表示する場合は **""で囲む**
- echo文字列を複数表記する時は **;セミコロン**


## Lesson3:Variables

- ${varname} = {value};
- `<?php ?>` で囲んだ中に項目を記述する。
  - 先に`variable` を記述した後に `echo` 記述。
  - キャラクターには **""引用符** 、文末に **;セミコロン**
- $character_name = "John"
  - キャラクターには **引用符 ""** が必要
  - 数字には不要 **関数として見なすため**

## Lesson4:Strings
- strtolower(string)　 --> 全て小文字
- strtoupper(string)　 --> 全て大文字
- 改行<br>タグを入れるとき、 `** , **` で区切ること
- `strlen(テキスト)+strlen(テキスト)` で足し算
- `strlen(テキスト)-strlen(テキスト)` で引き算
- `strlen(テキスト)*strlen(テキスト)` で掛け算
- `strlen(テキスト)/strlen(テキスト)` で割り算
- `** , **` で区切ると定義をいくつも追加していくことができる
  - 例えば、選択範囲から文字数オーバーする場合`** ... **` を追加すると、お知らせなどで制限文字数内で表示ができる

```
<?php
$phrase = "mrobotch design";
echo strtoupper($phrase),"<br>";
echo strtolower($phrase),"<br>";
echo strlen("hello")+strlen("world"),"<br>";
echo strlen("mrobotch")-strlen("design"),"<br>";
echo strlen("mrobotch")*strlen("design"),"<br>";
echo strlen("mrobotch")/strlen("design"),"<br>";
?>
```

- str_replace(pattern, replacement, string) -->差し替え、3つの定義が必要
  - (元の文言,差し替え文言,ファンクション)

```
<?php
 $string = "Hello my name is Mikiko";
 echo $string;
 echo str_replace("Mikiko","Anthony",$string);
?>
```

- substr(string, starting_index, how_many) --> 入力文字列、開始場所、個数
  - 個数が負（マイナス）の場合、終了場所からマイナスしたまで
- echo function(), function(), function() --> 区切るにはカンマ必要

```
<?php
$phrase = "mrobotch design";
echo substr($phrase,5,-1),"<br>";
 ?>
```

## Lesson5:Data_Types

- `$num`数字の文字列
  - `$num++`でプラス1
  - `$num--`でマイナス1

```
<?php
echo $num = 10, "<br>";
$num++;
echo $num, "<br>";
$num--;
echo $num;
 ?>
```

## Lesson6:Numbers

- `+` 足し算
- `-` 引き算
- `/` 割り算
- `*` 掛け算
- `%`　割り算で近似値を取る
- `pow` power - 二乗
- `sqrt` square route - ルート
- `max` 大きい
- `min` 小さい
- `abs` absolute - 絶対値
- `round` 四捨五入
- `ceil` 切り上げ
- `floor` 切り捨て



```
+
<?php  echo 12 + 5; ?>
<br>
-
<?php  echo 12 - 5; ?>
<br>
/
<?php  echo 12 / 5; ?>
<br>
%
<?php  echo 12 % 5; ?>
<br>
pow()
<?php  echo pow(12, 5); ?>
<br>
sqrt()
<?php  echo sqrt(12); ?>
<br>
max()
<?php  echo max(12, 5); ?>
<br>
min()
<?php  echo min(12, 5); ?>
<br>
abs()
<?php  echo abs(-12); ?>
<br>
round()
<?php  echo round(12.1), " ", round(12.6); ?>
<br>
ceil()
<?php  echo ceil(12.1); ?>
<br>
floor()
<?php  echo floor(12.9); ?>

```

## Lesson7:Input_Users01

- Submit 書き方
  - `<form></form>` で記載
  - `<input type=""` typeは使用用途によって自由に
    - 例えば `<input type="radio">``<input type="checkbox">` など
    - `<input type="radio">` は`<label>` と一緒に使う
  - `<?php echo $_GET[]　?>`で呼び出す
  - `<input type="submit">` で提出

```
<form action="user_input.php" method="get">
  Name: <input type="text" name="name">
  <br>
  Age: <input type="number" name="age">
  <input type="submit">
</form>
```

## Lesson7:Input_Users02

- htmlベースのみで書くことも可能
```
<form action="user_input_buttontest.php" method="get">
  <p>Choose your monster's features:</p>
   <div>
     <input type="checkbox" id="scales" name="scales"
            checked>
     <label for="scales">Scales</label>
   </div>

   <div>
     <input type="checkbox" id="horns" name="horns">
     <label for="horns">Horns</label>
   </div>
 </form>

 <p>希望する連絡方法を選択してください。</p>
 <form>
 <div>
   <input type="radio" id="contactChoice1"
    name="contact" value="email">
   <label for="contactChoice1">電子メール</label>

   <input type="radio" id="contactChoice2"
    name="contact" value="phone">
   <label for="contactChoice2">電話</label>

   <input type="radio" id="contactChoice3"
    name="contact" value="mail">
   <label for="contactChoice3">郵便</label>
 </div>
 <div>
   <button type="submit">送信</button>
 </div>
</form>

 ```
- phpで呼び出す場合は
`<?php echo $_GET ["name"]?>`のように記述する

## Lesson7:Input_Users03
- phpで呼び出す場合は
`<?php echo $_GET ["name"]?>`のように記述する
-> GET,POST　は大文字


## Lesson8:checkbox
- checkboxを複数作成した場合、
 ```
<?php
  $fruits = $_POST["fruits"];
  echo $fruits[1];
 ?>
 ```
`$_POST[]`チェックを入れた順[]の中では0,1,2,3の順で表示する


## Lesson9:Associative Array
- Array で指定した順番でechoで呼び出す
- Key Value を記載していればそちらを読み込む



### git push

- git hub にアップロードする時
  - `git status`
    - 現在の状況を確認
  - `git add .`
    - 何が追加されたかを確認
  - `git commit -m`
    - 何を変更したかがわかるようにメッセージを入れる **引用符はあってもなくても可**
  - `git push`
    - githubで確認すること
