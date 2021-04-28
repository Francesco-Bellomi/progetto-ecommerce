<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div style="background-color:rgb(5, 37, 43); padding: 5%; font-family: 'Poppins', sans-serif;">
        <h1 style="color:rgb(6, 218, 255);  font-size: 24px;  text-align: center; font-family: 'Poppins', sans-serif;">Plesto</h1>
        <h2 style="color: white; font-size: 24px;  text-align: center; font-family: 'Poppins', sans-serif;padding: 5%;">
            Grazie per averci contattato <span style="color: rgb(6, 218, 255);">{{$contact['name']}}</span>
        </h2>
        <h2 style="color: white; font-size: 24px;  text-align: center; font-family: 'Poppins', sans-serif;padding: 5%;">
            Verrai ricontattato da un nostro operatore al più presto <span style="color: rgb(6, 218, 255);"></span>
        </h2>
        <h4 style="color: rgb(6, 218, 255); font-size: 18px; font-family: 'Poppins', sans-serif;padding-top: 5%;">
            Riepilogo Messaggio:
        </h4>
        <p style="color: white; font-size: 16px; font-family: 'Poppins', sans-serif;padding-bottom: 5%;">
            {{$contact['message']}}
        </p>
        <hr style="background-color: azure; color: azure;">
        <div style="display:flex; flex-wrap: wrap; justify-content: center; text-align: center;">
            <div style="color:rgb(6, 218, 255);">
                <p>© 2021 E-commerce Plesto.</p>
                <p>Privacy Policy / Cookie policy / P.IVA 02323240000 | Design e sviluppo: ojias</p>
                <p>- Copiright®</p>
            </div>
        </div>
    </div>
</body>
</html>
