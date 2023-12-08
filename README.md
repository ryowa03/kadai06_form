# kadai06_form

# ①課題内容（どんな作品か）
管理者が自動集計できる問い合わせフォーム

企業内にて、他部署への質問時に使うことを想定したアプリ。
ユーザーは該当の部署に対してフォーム上で質問ができ、
部署側はどんな質問が多く寄せられているか、質問ジャンルごとに自動集計できる仕様とした。

# ②工夫した点・こだわった点
ユーザーが入力した質問が、ジャンル毎にそれぞれ違うページに格納される仕様とした点。
最初に質問が格納されるtxtを複数枚用意し、それぞれのtxtからphpに出力することで、
質問ジャンル毎にページを分けている。

# ③難しかった点・次回トライしたいこと(又は機能)
質問ジャンル毎に表示ページを分けることに苦労した。
最初はtxtを分けるという発想に至らず、フロント側の機能によって表示を分けようとしたが、
毎回txt上の全データ（これまでのすべての質問）が表示されてしまい、うまくいかなかった。
冷静にデーターの道程を理解し始めたことが解決につながった。
