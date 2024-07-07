<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In Out Table Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
        }
        .container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            width: 100%;
            max-width: 500px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h3>In Out Table Form</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('store')}}">
                @csrf
                <div class="form-group">
                    <label for="user_id">User Name</label>
                    <select class="form-control" id="user_id" name="user_id" required>
                        <option value="">Select User</option>
                        @isset($users)
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        @endisset
                    </select>
                </div>
                <div class="form-group">
                    <label for="in">In Time</label>
                    <input type="datetime-local" class="form-control" id="in" name="in">
                </div>
                <div class="form-group">
                    <label for="go_pause">Go Pause Time</label>
                    <input type="datetime-local" class="form-control" id="go_pause" name="go_pause">
                </div>
                <div class="form-group">
                    <label for="back_pause">Back Pause Time</label>
                    <input type="datetime-local" class="form-control" id="back_pause" name="back_pause">
                </div>
                <div class="form-group">
                    <label for="out">Out Time</label>
                    <input type="datetime-local" class="form-control" id="out" name="out">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
