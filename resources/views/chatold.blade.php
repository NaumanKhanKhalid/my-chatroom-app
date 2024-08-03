<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatroom</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <select id="userSelect" class="form-control">
                    <option value="">Select User</option>

                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-8">
                <div id="messages" style="height: 300px; overflow-y: scroll;"></div>
                <input type="text" id="messageInput" class="form-control" placeholder="Type a message">
                <button onclick="sendMessage()" class="btn btn-primary mt-2">Send</button>
            </div>
        </div>
    </div>
</body>
</html>
