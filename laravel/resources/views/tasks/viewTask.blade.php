<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="container-fluid">
    <h1 class="text-center mt-4">Detail Task</h1>
    <hr>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="gambar tugas">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $task['name'] }}</h5>
                    <p class="card-text">{{ $task['description'] }}</p>
                    <p class="card-text"><small
                            class="text-warning">{{$task['dedline']}}</small>
                    </p>
                    <a href="#" class="btn btn-info disabled" tabindex="-1" role="button" aria-disabled="true"
                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">{{ $task['status'] }}</a>
                </div>
            </div>
        </div>
    </div>
    <a href="/" class="btn btn-primary">
        <svg xml:space="preserve" viewBox="0 0 100 100" y="0" x="0" xmlns="http://www.w3.org/2000/svg"
            id="Layer_1" version="1.1" width="24px" height="24px" xmlns:xlink="http://www.w3.org/1999/xlink"
            style="width:100%;height:100%;background-size:initial;background-repeat-y:initial;background-repeat-x:initial;background-position-y:initial;background-position-x:initial;background-origin:initial;background-image:initial;background-clip:initial;background-attachment:initial;animation-play-state:paused">
            <g class="ldl-scale"
                style="transform-origin:50% 50%;transform:rotate(0deg) scale(0.8, 0.8);animation-play-state:paused">
                <path fill="#323232"
                    d="M7.5 38.605c8.061 15.375 19.1 30.221 32.087 41.837l1.047-23.204C54.668 66.965 70.3 72.455 86.711 77.17A330.108 330.108 0 0 1 92.5 41.632c-16.391-1.052-32.783-.179-49.174-1.231 1.556-6.501 4.393-15.063 7.751-20.843C35.278 24.645 20.65 30.893 7.5 38.605z"
                    id="XMLID_3280_" style="fill:rgb(255, 255, 255);animation-play-state:paused"></path>
                Back
            </g>
        </svg>
    </a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
</html>