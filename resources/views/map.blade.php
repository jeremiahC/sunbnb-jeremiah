@extends('app')

@section('content')
    <form action="/maps/save-address" method="post">
        @csrf
        <input type="text" name="address" id="address">
        <button type="submit">Submit</button>
    </form>
    {{-- Add Google Map in the browser --}}
    <div id="map" style="height: 400px;"></div>
@endsection

@section('script')
    
    {{-- Retrieves Google Map API information from Google APIs --}}
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.googlemaps.api_key') }}"></script>
    <script>
        function initialize() {
            var location = { lat: 0, lng: 0 };
    
            var map = new google.maps.Map(document.getElementById('map'), {
                center: location,
                zoom: 14
            });
    
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);


    </script>    
@endsection