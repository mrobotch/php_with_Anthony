# php with Anthony

## Week1

### Lesson1

#### サーバーの立ち上げ方

`cd path/to/your/project`
`php -S localhost:8000`
**ルートを作りたい場所にhostを立ち上げる**

### Lesson2

#### php記述の仕方

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
