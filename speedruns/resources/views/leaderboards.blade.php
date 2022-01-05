<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <style>
        html {
            font-size: 30px;
            text-align: center;
        }

        div, table {
            margin: auto;
            width: 70%;
        }

        table {
            margin-top: 100px;
        }

        table, td {
            border: 1px solid;
        }

        td {
            padding: 20px 50px 20px 50px;
        }
    </style>
</head>
<body>
    <div>
        <h1><u>Speedrun leaderboards</u></h1>
        <table>
            <tr>
                <th>Game title</th>
                <th>Category</th>
                <th>Time (sec)</th>
                <th>Runner</th>
            </tr>
            <!-- php utasításainkat @ jellel kezdjük-->
            @foreach($records as $record)
                <tr>
                    <td>{{ $record->game->name }}</td>
                    <td>{{ $record->category }}</td>
                    <td>{{ $record->time }}</td>
                    <td>{{ $record->user->name }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
