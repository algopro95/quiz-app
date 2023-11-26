<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        #countdown {
            font-size: 1.5rem;
            font-weight: bold;
            color: red;
        }
    </style>
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                @if(session('message'))
                    <div class="alert alert-info" role="alert">
                        {{ session('message') }}
                    </div>
                @endif

                <h1 class="card-title">{{ $quiz->question }}</h1>

                <div id="countdown"></div>

                <form action="{{ route('quiz.submit') }}" method="post">
                    @csrf
                    <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">
                    <input type="hidden" name="countdown_time" id="countdown_time" value="{{ $countdownTime }}">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer" value="a" id="optionA">
                        <label class="form-check-label" for="optionA">{{ $quiz->a }}</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer" value="b" id="optionB">
                        <label class="form-check-label" for="optionB">{{ $quiz->b }}</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer" value="c" id="optionC">
                        <label class="form-check-label" for="optionC">{{ $quiz->c }}</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer" value="d" id="optionD">
                        <label class="form-check-label" for="optionD">{{ $quiz->d }}</label>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        var countdownTime = {{ $countdownTime }};

function startCountdown() {
    var countdownElement = document.getElementById('countdown');
    var countdownTimeField = document.getElementById('countdown_time');

    var timer = setInterval(function () {
        console.log(countdownTime); 

        var minutes = Math.floor(countdownTime / 60);
        var seconds = countdownTime % 60;

        countdownElement.textContent = minutes + 'm ' + seconds + 's';

        if (countdownTime <= 0) {
            clearInterval(timer);
            countdownElement.textContent = 'Waktu Habis';
            window.location.href = '/home';
        }

        countdownTimeField.value = countdownTime;
        countdownTime--;
    }, 1000);
}

window.onload = startCountdown;
    </script>
</body>
</html>