@extends('layouts.base')

<section>
    <div class="container">
    @if($errors->any())
        <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                <ul>
                    <li>{{$error}}</li>
                </ul>
                @endforeach
        </div>
    @endif
<form action="{{route('createCar')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="brand">Марка</label>
    <input type="text" name="brand" id="brand" placeholder="Введите марку машины" class="form-control">

    <label for="price">Цена</label>
    <input type="number" name="price" id="price" placeholder="Введите цену машины" class="form-control">

    <label for="releaseDate">Год выпуска</label>
    <input type="number" name="releaseDate" id="releaseDate" placeholder="Введите год выпуска машины" class="form-control">

    <label for="color">Цвет</label>
    <input type="text" name="color" id="color" placeholder="Введите цвет машины" class="form-control">

   <label for="mileage">Пробег</label>
    <input type="number" name="mileage" id="mileage" placeholder="Введите пробег машины" class="form-control">
   <label for="photo">Фото</label>
    <input type="file" name="file" id="file" placeholder="Добавить фото" class="form-control"><br>
    <button type="submit" class="btn btn-secondary">Опубликовать</button>

</form>
</div>
</section>