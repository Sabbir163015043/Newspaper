@extends('front.master')

@section('body')
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">News</a></li>
                    <li class="breadcrumb-item active">News details</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Single News Start-->
        <div class="single-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sn-container">
                            <div class="sn-img">
                            <h3 class="sn-title">{{ $detail->tittle_name }}</h3>
                                <img src="{{ asset($detail->image)  }}" height="485" width="404" alt=""/>   
                            </div>
                            <div class="sn-content">
                               <p> Writter : Sabbir</p>
                                <p> {{ $detail->full_description }} </p> 
                            </div>
                        </div>
                        <div class="sn-related">
                            <h2>Related News</h2>
                            <div class="row sn-slider">
                            @foreach($related_details as $key => $related_detail)
                                @if($related_detail->id != $detail->id)
                                    <div class="col-md-4">
                                        <div class="sn-img">
                                            <img src="{{ asset($related_detail->image)  }}"  height="250" width="100" alt=""/>
                                            <div class="sn-title">
                                                <a href="{{ route('new-detail',['id' => $related_detail->id]) }}">{{ $related_detail->tittle_name }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                    
                            </div>
                            </div>
                                </div>
                           
                            
                            @endsection
        
        
        