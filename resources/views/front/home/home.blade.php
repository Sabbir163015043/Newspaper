@extends('front.master')

@section('body')
<br>
        <!-- Main News Start-->
        <div class="main-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                    <h2><br></h2>
                        <div class="row">
                        @foreach($details as $key => $detail)
                            <div class="col-md-4">
                                <div class="mn-img">
                                   <a href="{{ route('new-detail',['id' => $detail->id]) }}"> <img src="{{ asset($detail->image)  }}"  height="150" width="60"/></a>
                                    <div class="mn-title">
                                        <a href="{{ route('new-detail',['id' => $detail->id]) }}">{{ $detail->tittle_name }}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach  
                        </div>
                    </div>
                   
                    <div class="col-lg-3">
                        <div class="mn-list">
                            <h2>সংবাদ বিভাগ</h2>
                            <ul>
                            @foreach($categories as $key => $category)
                                <li><a href="{{ route('single-page',['id' => $category->id]) }}">{{ $category->name }}</a></li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main News End-->
@endsection
