<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | Endless Runner</title>
    <link rel="shortcut icon" href="erbuild/TemplateData/favicon.ico">
    <link rel="stylesheet" href="erbuild/TemplateData/style.css">
    <script src="erbuild/TemplateData/UnityProgress.js"></script>
    <script src="erbuild/Build/UnityLoader.js"></script>
    <script>
      var unityInstance = UnityLoader.instantiate("unityContainer", "erbuild/Build/Builds.json", {onProgress: UnityProgress});
    </script>
  </head>
  <body>
    <div class="webgl-content">
      <div id="unityContainer" style="width: 960px; height: 600px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
        <div class="title">Endless Runner</div>
      </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                Todays Scores
            </div>
            <div class="col-sm">
                Yesterdays Scores
            </div>
        </div>
    </div>
  </body>
</html>
