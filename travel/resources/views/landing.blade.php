@extends('html_landing')
@section('news_content')
    <div class="tour_block_items">
        @foreach($newses as $news)
            <div class="tour_item">
                <img src="../img/{{$news->photo}}"/>
                <div class="item_info">
                    <p class="item_info_p_1">
                        {{$news->article}}
                        <br>
                    </p>
                    <p class="item_info_p_2">
                        <br>
                        {{$news->text}}
                    </p>
                    <a href="{{$news->link}}">
                        Читати далі
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section('hot_content')
    <div class="tour_block_items">
        @foreach($hot_tours as $hot)
            <div class="tour_item">
                <div class="item_image">
                    <img src="../img/{{$hot->photo}}"/>
                    <div class="item_image_text">
                        <div>
                            <p class="item_p_1">
                                {{$hot->price}} грн
                            </p>
                            <p class="item_p_2">
                                за 1 особу
                            </p>
                        </div>
                        <a href="/tour/{{$hot->id}}">Детальніше</a>
                    </div>
                </div>
                <div class="item_info">
                    <p class="item_info_p_1">
                        {{$hot->hotel_name}}
                    </p>
                    <p class="item_info_p_2">
                        {{$hot->countries->name}} , {{$hot->cities->name}}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section('popular_content')
    <div class="tour_block_items">
        @foreach($popular_tours as $tour)
            <div class="tour_item">
                <div class="item_image">
                    <img src="../img/{{$tour->photo}}"/>
                    <div class="item_image_text">
                        <div>
                            <p class="item_p_1">
                                {{$tour->price}} грн
                            </p>
                            <p class="item_p_2">
                                за 1 особу
                            </p>
                        </div>
                        <a href="/tour/{{$tour->id}}">Детальніше</a>
                    </div>
                </div>
                <div class="item_info">
                    <p class="item_info_p_1">
                        {{$tour->hotel_name}}
                    </p>
                    <p class="item_info_p_2">
                        {{$tour->countries->name}} , {{$tour->cities->name}}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
