<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b8b9db618b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style_2.css">
    <title>Document</title>
</head>

<body>
    <section dir="rtl" class="form-container">
        <section class="form">

               <form action="{{route('post.create')}}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('POST')

                <label for="price">قیمت: </label>
                <input type="number" id="price" name="price"><br><br>
                <label for="address">آدرس: </label>
                <input type="text" id="address" name="address"><br><br>
                <label for="type">نوع ملک: </label>
                <input type="text" id="type" name="type"><br><br>
                <label for="measurement">متراژ: </label>
                <input type="number" id="measurement" name="measurement"><br><br>
                <label for="rooms">تعداد خواب: </label>
                <input type="number" id="rooms" name="rooms"><br><br>
                <label for="year">سال ساخت: </label>
                <input type="number" id="year" name="year"><br><br>
                <label for="description">توضیح مختصر: </label>
                <textarea id="description" name="description" rows="3" cols="40"></textarea><br><br>
                <label for="file">فایل: </label>
                <input type="file" id="file" name="file" multiple><br><br>
                <input type="submit" value="ارسال" id="send-btn">
                <!-- <button id="send-btn">send</button> -->
            </form>
        </section>


        <section class="app-item-container">


            @foreach ($posts as $key => $post)

            <article class="app-item">


                <section class="item-img">
                    <section class="img-slider fade">
                       <img src="{{asset($post->file)}}" alt="{{$post->title}}">
                    </section>

                    <a class="prev">&#10095;</a>
                    <a class="next">&#10094;</a>
                </section>

                <section class="item-info">
                    <section class="item-info-con">
                        <section class="item-caption">
                            <ul>
                                <li class="price"> {{$post->price}} تومان </li>
                                <li class="area">{{$post->address}}</li>
                                <li class="type">{{$post->type}}</li>
                                <li class="caption">{{$post->description}}</li>
                            </ul>
                        </section>
                        <section class="item-info-list">
                            <section class="item-info-list-container">
                                <ul>
                                    <li><img src="/img/mycollection/png/001-meter.png" alt="">
                                        <span>{{$post->measurement}}متر</span></li>
                                    <li><img src="/img/mycollection/png/002-double-bed.png" alt="">
                                        <span>{{$post->rooms}}خواب</span></li>
                                    <li><img src="/img/mycollection/png/003-calendar.png" alt="">
                                        <span>{{$post->year}}</span></li>
                                </ul>
                            </section>
                        </section>
                    </section>
                    <section class="item-contact">

                        <form action="{{ route('post.destroy', $post->id)}}"  method="GET">

                            @csrf
                            @method('get')
                            <button type="submit" style="background-color: red" >
                                <span>حذف</span>
                            </button>
                        </form>
                    </section>
                </section>
            </article>

            @endforeach


        </section>




    </section>
    <script src="../js/available-item.js"></script>
    <script src="../js/app.js"></script>
</body>

</html>
