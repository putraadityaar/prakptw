<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
    <style>
        .img{
            height: 250px;
            width: 200px;
        }
    </style>
</head>
<body>
    <center><p>Putra Aditya Armanda 1461900170</p>
    <section>
    <nav>
        <a href="{{url('/home')}}">
            <input type="button" value="HOME"></input>
        </a>
        <a href="{{url('/artikel')}}">
            <input type="button" value="ARTIKEL"></input>
        </a>
        <a href="{{url('/profil')}}">
            <input type="button" value="CONTACT US"></input>
        </a>
    </nav>
    </br>
    <article>
    <div>
        <img src="{{url('/fotoku.jpg')}}" class="img"></img>
    </div>
    <div>
        <a>Nama : Putra Aditya Armanda</a></br>
        <a>No Telp : 085648816289</a></br>
        <a>Email : putraadityafrost@gmail.com</a></br>
        <a>Instagram : adtx.ar</a>
    </div>
    </article>
    </section>
</body>
</html