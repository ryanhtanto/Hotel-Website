<div class="container">
    <div class="text-center">
        <h1>Browse Hotels</h1>
    </div>
    {{-- search box --}}
    <input 
        wire:model="query" 
        type="search" 
        name="search_input"
        class="form-control"
        id="search_box"
        placeholder="Find hotels..."
        wire:keydown.escape="resetFilters"
        wire:keydown.tab="resetFilters"
        autocomplete="off"
    >
    {{-- end of search box --}}
    <br>
    <div class="row">
        {{-- hotel list --}}

        <div class="col-8">
            @if (!count($hotels))
                <div class="text-center">
                    <h2 style="color: grey">No result found...</h2>
                </div>
            @endif
            @foreach ($hotels as $hotel)
                <div class="card mb-3 hotelList" >
                    <a href="/hotel_detail/{{$hotel->id_hotel}}">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/Hotel/'. $hotel->images)}}" style="width : 200px; height : 200px">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{$hotel->hotel_name}}</h5>
                                    <p class="card-text">
                                        @for ($i = 0; $i < $hotel->hotel_star; $i++)
                                            <i class="fas fa-star icon"></i>
                                        @endfor   
                                    </p>
                                    <p class="card-text"><small class="text-muted"><i class="fas fa-map-marked"></i>{{$hotel->address}}, {{$hotel->location}}</small></p>
                                    <p class="card-text text-end fw-bold" style="color: #f86d03; ">Rp. {{number_format($hotel->price)}}/night/room</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div> 
            @endforeach
            {{-- @endif --}}
        </div>
        {{-- hotel list --}}
        
        <div class="col-4">
            {{-- filter --}}
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Filter Hotel</h5>
                    <p class="text-muted">Showing results based on categories</p>
                    <hr>
                    <h5 class="card-title">Location</h5>
                    <select name="location" id="location" wire:model="idLocation" class="form-control">
                        <option value="" selected disabled>Select location</option>
                        @foreach ($locations as $location)
                            <option value="{{$location->id_location}}">{{$location->location}}</option>
                        @endforeach
                    </select>
                    <hr>
                    <h5 class="card-title">Star Rating</h5>
                    @for ($i = 1; $i <= 5; $i++)
                        <div class="form-check">
                            <input wire:model="selectedStar" wire:click="clickedSelectedStar" class="form-check-input" type="checkbox" value="{{$i}}" id="flexCheckDefault" checked>
                            <label class="form-check-label" for="flexCheckDefault">
                                @for ($j = 0; $j < $i; $j++)
                                    <i class="fas fa-star icon"></i>
                                @endfor
                            </label>
                        </div>
                    @endfor
                    {{-- @foreach ($selectedStar as $star)
                        {{$star}}
                    @endforeach --}}
                    <hr>
                    <h5 class="card-title">Price</h5>
                    <div class="row">
                        <div class="col">
                            <label for="from">From</label>
                            <input class="form-control" type="number" name="from" wire:model="from" placeholder="from">
                        </div>
                        <div class="col">
                            <label for="to">To</label>
                            <input class="form-control" type="number" name="to" wire:model="to" placeholder="to">
                        </div>
                    </div>
                </div>
            </div>
            {{-- end filter --}}      
        </div>
    </div>
    
    
</div>
