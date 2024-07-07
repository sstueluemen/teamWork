<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update In Out Table Form</title>
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
            <h3>Update In Out Table Form</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('update', ['id' => $data->id]) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="user_id">User Name</label>
                   <input type="text" value="{{$data->user_id}}">
                </div>
                <div class="form-group">
                    <label for="in">In Time</label>
                    <input type="datetime-local" class="form-control" id="in" name="in" value="{{ $data->in ? \Carbon\Carbon::parse($data->in)->format('Y-m-d\TH:i') : '' }}">
                </div>
                <div class="form-group">
                    <label for="go_pause">Go Pause Time</label>
                    <input type="datetime-local" class="form-control" id="go_pause" name="go_pause" value="{{ $data->go_pause ? \Carbon\Carbon::parse($data->go_pause)->format('Y-m-d\TH:i') : '' }}">
                </div>
                <div class="form-group">
                    <label for="back_pause">Back Pause Time</label>
                    <input type="datetime-local" class="form-control" id="back_pause" name="back_pause" value="{{ $data->back_pause ? \Carbon\Carbon::parse($data->back_pause)->format('Y-m-d\TH:i') : '' }}">
                </div>
                <div class="form-group">
                    <label for="out">Out Time</label>
                    <input type="datetime-local" class="form-control" id="out" name="out" value="{{ $data->out ? \Carbon\Carbon::parse($data->out)->format('Y-m-d\TH:i') : '' }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Update</button>
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
