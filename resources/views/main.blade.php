@extends('layouts.main')
@section('content')
    <div>
        <form action="" method="post">
            <p class="zag" style="color: darkred">КАЛЬКУЛЯТОР</p>
            <p class="zag" style="color: darkred"> Будь-ласка введіть коректно числа, і запам*ятайте, що на нуль ділити можна тільки ворогів!!!</p>

            <input  type="text" name="chuslo_A" placeholder="Введіть число А"> <br>
            <br>
            <input type="text" name="chuslo_B" placeholder="Введіть число В"> <br>
            <br>

            <input type="submit" name="DOD" value="ДОДАТИ" class="btn btn success">
            <input type="submit" name="VID" value="ВІДНЯТИ" class="btn btn success">
            <input type="submit" name="POM" value="ПОМНОЖИТИ" class="btn btn success">
            <input type="submit" name="POD" value="ПОДІЛИТИ" class="btn btn success">

        </form>


        <form action="" method="post">
            <fieldset>
                <legend>Сніданок</legend>
                <label>Перше:<input name="in1a" class="in1" type="text" placeholder=" "></label><br>
                <label>Друге_:<input name="in2a" class="in1" type="text" placeholder=" "></label><br>
                <label>Хліб__:<input name="in3a" class="in1" type="text" placeholder=" "></label><br>
                <label>Напій_:<input name="in4a" class="in1" type="text" placeholder=" "></label><br>
                <label>КілЧол:<input name="in5a" class="in1" type="text" placeholder=" "></label><br>

                <input class="in2" name="in6a"  type="submit" value="Розрахувати ціну"><br>

            </fieldset>
        </form>
    </div>
@endsection


