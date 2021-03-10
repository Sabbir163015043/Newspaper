@extends('front.master')

@section('body')
        <!-- Single News Start-->
        
        <div class="single-news">
        
            <div class="container">
            <h2 class="sw-title">এই বিভাগটি সর্বশেষ খবর</h2>
                <div class="row">
                @foreach($details as $key => $detail)
                                <div class="col-md-3">
                                    <div class="sn-img">
                                        <img src="{{ asset($detail->image)  }}" height="150" width="60" alt="" />
                                        <div class="sn-title">
                                            <a href="{{ route('new-detail',['id' => $detail->id]) }}"><h4>{{ $detail->tittle_name }}</h4></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        </div>
                    </div>
                </div> 
            </div>


@endsection