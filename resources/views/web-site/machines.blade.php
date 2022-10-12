<!DOCTYPE html>
<html>
<head>
    <style>
        body


        div.polaroid {
            width: 80%;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin-bottom: 25px;
        }

        div.container {
            text-align: center;
            padding: 10px 20px;
        }
    </style>
</head>
<body>

<h2>Responsive Polaroid Images / Cards</h2>

<div class="polaroid">
    <img src="{{ Vite::asset('public/content/img/beansbackground.jpg') }}" alt="5 Terre" style="width:100%">
    <div class="container">
        <p>Cinque Terre</p>
    </div>
</div>

<div class="polaroid">
    <img src="lights600x400.jpg" alt="Norther Lights" style="width:100%">
    <div class="container">
        <p>Northern Lights</p>
    </div>
</div>

</body>
</html>


