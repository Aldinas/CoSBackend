<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | Endless Runner</title>
    <link rel="shortcut icon" href="erbuild/TemplateData/favicon.ico">
    <link rel="stylesheet" href="erbuild/TemplateData/style.css">
    <link rel="stylesheet" href="composer/bootstrap.min.css">
    <script src="erbuild/TemplateData/UnityProgress.js"></script>
    <script src="erbuild/Build/UnityLoader.js"></script>
    <script src="composer/jquery.min.js"></script>
    <script src="composer/bootstrap.min.js"></script>
    <script>
      var unityInstance = UnityLoader.instantiate("unityContainer", "erbuild/Build/Builds.json", {onProgress: UnityProgress});
    </script>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg">
                <h1 class="text-center">Endless Runner</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <h3 class="text-center">Todays Scores</h3>
                @if(count($todaysScores) > 0)
                <table class="table table-sm table-hover">
                    <tr>
                        <th>Score</th>
                        <th>Name</th>
                    </tr>
                    @foreach ($todaysScores as $scores)
                    <tr>
                        <td>{{$scores->score}}</td>
                        <td>{{$scores->name}}</td>
                    </tr>
                    @endforeach
                </table>
                @else
                <br />
                <div class="alert alert-warning text-center">No one has recorded any scores for today, will you be the first?</div>
                @endif
            </div>
            <div class="col-lg-6">
                <div class="webgl-content">
                    <div id="unityContainer" style="width: 100%; height: 600px margin: 0 auto"></div>
                    <div class="footer">
                    <div class="webgl-logo"></div>
                    <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
                    <div class="title">Endless Runner</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <h3 class="text-center">Yesterdays Scores</h3>
                @if(count($todaysScores) > 0)
                <table class="table table-sm table-hover">
                    <tr>
                        <th>Score</th>
                        <th>Name</th>
                    </tr>
                    @foreach ($yesterdaysScores as $scores)
                    <tr>
                        <td>{{$scores->score}}</td>
                        <td>{{$scores->name}}</td>
                    </tr>
                    @endforeach
                </table>
                @else
                <br />
                <div class="alert alert-warning text-center">There are no entries for yesterday.</div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3>Controls</h3>
                Use the left mouse button to jump, and the escape key to pause. Text entry is done with your keyboard.
            </div>
        </div>
    </div>
  </body>
</html>
