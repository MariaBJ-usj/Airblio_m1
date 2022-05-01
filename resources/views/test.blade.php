@extends('layouts/client_master')

@section('page-content')
    <div id="map" class="map-container" style="height: 500px; width: 500px"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiL8XJNvgWBPbLETYSRbgp7fPe7OZgEUA&callback=initializeMap" defer></script>
    <h1>Lat = <p id="lat"></p></h1>
    <h1>Lng = <p id="lng"></p></h1>
    <h1>Lieux = <p id="lieux"></p></h1>
@endsection
