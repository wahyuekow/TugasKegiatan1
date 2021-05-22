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
    <center><p>Wahyu Eko Wijayanto 1461900157</p>
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
        <img src="{{url('/aku.jpg')}}" class="img"></img>
    </div>
    <div>
        <a>Nama : Wahyu Eko Wijayanto </a></br>
        <a>No Telp : 081216936864</a></br>
        <a>Email : wahyuekow24@gmail.com</a></br>
        <a>Instagram : @wahyuekow_</a>
    </div>
    </article>
    </section>
</body>
</html>