## GcpSignedUrl
GCPのCloud Strageにあるデータの署名付きURLをPHPで生成

※参考：[【Google Cloud Platform】署名付き URL](https://cloud.google.com/storage/docs/access-control/signed-urls?hl=ja#about-canonical-extension-headers)

### 実行コマンド
`php signedUrl.php SSH_KEY.json bucket_name object_name`

### コマンド引数
| 引数名 | 概要 |
|:------------:|:------------:|
| SSH_KEY.json |GCPのサービスアカウントで作成した資格情報のjsonファイル名|
| bucket_name |指定するオブジェクトが存在するGCPのバケット名|
| object_name |指定するオブジェクト名|
