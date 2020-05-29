@extends('html_tour')]
@section('fitch')
    <div class="fitch">
        @foreach($tours->first()->options as $option)
            <div class="fitch_text">
                <p>{{$option->name}}</p>
            </div>
        @endforeach
    </div>
@endsection
@section('hotel')
    <div class="name_hotel">
        <h4>{{$tours->first()->hotel_name}}</h4>
    </div>
    <div class="stars">
        @for($i = 0; $i < $tours->first()->stars; $i++)
            <img src="../img/shapes-and-symbols.svg">
        @endfor
        <p>{{$tours->first()->countries->name}}, {{$tours->first()->cities->name}}</p>
    </div>
@endsection
@section('description')

    <div class="description">
        <h4 class="description_h4">Опис</h4>
        <p>{{$tours->first()->description}}</p>
    </div>
@endsection
@section('question')
    <div class="search_h4"> <h4>Тури в готель {{$tours->first()->hotel_name}}</h4></div>
    <div class="search">
        <div class="question">
            <div>
                <p class="question_text_2">
                    Оберемо оптимальний варіант, саме для Вас
                </p>
            </div>
            <div>
                <form class="question_call" action="/tour" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Ваше ім'я..">
                    <input type="text" name="phone" placeholder="Телефон..">
                    <input type="text" name="email" placeholder="Email..">
                    <input type="text" name="tour_id" style="display: none" value="{{$tours->first()->id}}">
                    <button type="submit">Забронювати</button>
                </form>
            </div>
        </div>
    </div>
@endsection
