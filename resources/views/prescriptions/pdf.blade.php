<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <body   style = "font-family: DejaVu Sans;">
</head>

<body>
<div>
    <table>
        <tr>
            <td>Lekarstwa:</td>
            <td> {{$prescription->medicine}} </td>
        </tr>

        <tr>
            <td>Imie i nazwisko:</td>
            <td>
                @foreach($userList as $user)  
                {{$user->firstname}} {{$user->lastname}}
                @endforeach     
            </td>
        </tr>

        <tr>
            <td>Twoja recepta wygaśnie:</td>
            <td>{{$prescription->expire_at}}</td>
        </tr>

        <tr>
            <td>Twój kod recepty:</td>
            <td>{{$prescription->code}}</td>
        </tr>
    </table>
</div>
</body>