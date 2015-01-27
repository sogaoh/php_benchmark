ruby_benchmark
===========

##What is it?

rubyで作られた簡易ベンチマーク。
大文字小文字のアルファベット＋0～9までの数字の合計62文字の中からランダムで10桁の文字を求めるプログラム。
３つのバージョンがあり、それぞれ
ruby_benchmark(windowsで動作するのはこれのみ)
ruby_benchmark_parallel
ruby_benchmark_fork
となっています。(詳しい説明はこちらにflum.sun.ddns.vc/twitter/ruby_benchmark/index.html)

推奨環境はlinux環境でrubyが必要です。
動作チェックはUbuntu13.04のruby1.9.3p194でしました。


##How to Use

```
$ git clone https://github.com/flum1025/ruby_benchmark.git
$ cd ruby_benchmark
$ ruby ruby_benchmark.rb
$ ruby ruby_benchmark_fork.rb
$ ruby ruby_benchmark_parallel.rb

```


質問等ありましたらTwitter:[@flum_](https://twitter.com/flum_)までお願いします。

##License

The MIT License

-------
(c) @2015 flum_