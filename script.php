<!-- // ページの先頭に以下のPHPコードを追加します： -->
<?php
if(isset($_GET['video'])) {
  $videoPath = $_GET['video'];
}
?>

<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>動画投稿アプリ</title>
<link rel="stylesheet" href="css/styles.css">
</head>

<body>
<div id="upload-container">
  <form action="upload_video.php" method="post" enctype="multipart/form-data">
    動画を選択してください:
    <input type="file" name="videoFile" id="videoFile">
    <input type="submit" value="アップロード" name="submit">
  </form>
</div>

<div id="video-container">
  <video id="videoPlayer" width="640" height="360" controls autoplay muted>
    <source src="<?php echo $videoPath; ?>" type="video/mp4">
    お使いのブラウザはvideoタグをサポートしていません。
  </video>
</div>

<script src="scripts.js"></script>
</body>

</html>
