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

- テキストを表示する場合は**`""`で囲む**
- echo文字列を複数表記する時は**`;`セミコロン**


## Week2

### Lesson3:Variables

- ${varname} = {value};
- $character_name = "John"
  - キャラクターには **引用符 ""** が必要
  - 数字には不要 **関数として見なすため**

### Lesson4:Strings
- strtolower(string)
- strtoupper(string)
- strlen(string)
  - strlen('abc') --> 3
    strlen('あいう') --> 6
    strlen('abcあいう') --> 9
- str_replace(pattern, replacement, string)
- substr(string, starting_index, how_many)
- echo function() function() function()
  - バイト数ではなく文字数を取得したい場合には「mb_strlen」関数

```
<?php
$str1 = 'abcde';
$str_len1 = strlen($str1);
$str_mblen1 = mb_strlen($str1);

$str2 = '10時20分';
$str_len2 = strlen($str2);
$str_mblen2 = mb_strlen($str2);

echo($str1.' の文字列の長さは'.$str_len1.'です<br>');
echo($str1.' の文字数は'.$str_mblen1.'です<br><br>');

echo($str2.' の文字列の長さは'.$str_len2.'です<br>');
echo($str2.' の文字数は'.$str_mblen2.'です<br><br>');
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
