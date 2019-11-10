@extends('layouts.app')


@section('content')

<link href="{{ asset('css/timeline.css') }}" rel="stylesheet">

<div class="text-center">
	<h1>Date clés</h1>
</div> 

<link href='//fonts.googleapis.com/css?family=Roboto:200,400,600' rel='stylesheet' type='text/css'>
<div class="history-tl-container">
  <ul class="tl">
  	<li class="tl-item" ng-repeat="item in retailer_history">
      <div class="timestamp">
        2 novembre 2019<br> 12:00
      </div>
      <div class="item-title">Lorem ipsum dolor sit amet</div>
      <div class="item-detail">Also, throw that Gollum tooVestibulum vitae condimentum magna, vel finibus tortor. Vivamus eros tellus, lobortis eget eros luctus, auctor lobortis dui. Sed facilisis felis dui, ac rutrum orci consectetur sit amet. Nullam tellus quam, venenatis eget malesuada nec, sollicitudin a sem.</div>
    </li>
    <li class="tl-item" ng-repeat="item in retailer_history">
      <div class="timestamp">
        7 novembre 2019<br> 12:00
      </div>
      <div class="item-title">Lorem ipsum dolor sit amet</div>
      <div class="item-detail">Also, throw that Gollum tooVestibulum vitae condimentum magna, vel finibus tortor. Vivamus eros tellus, lobortis eget eros luctus, auctor lobortis dui. Sed facilisis felis dui, ac rutrum orci consectetur sit amet. Nullam tellus quam, venenatis eget malesuada nec, sollicitudin a sem.</div>
    </li>
    <li class="tl-item" ng-repeat="item in retailer_history">
      <div class="timestamp">
        22 novembre 2019<br> 12:00
      </div>
      <div class="item-title">Lorem ipsum dolor sit amet</div>
      <div class="item-detail">Also, throw that Gollum tooVestibulum vitae condimentum magna, vel finibus tortor. Vivamus eros tellus, lobortis eget eros luctus, auctor lobortis dui. Sed facilisis felis dui, ac rutrum orci consectetur sit amet. Nullam tellus quam, venenatis eget malesuada nec, sollicitudin a sem.
    <li class="tl-item" ng-repeat="item in retailer_history">
      <div class="timestamp">
        25 novembre 2019<br> 12:00
      </div>
      <div class="item-title">Lorem ipsum dolor sit amet</div>
      <div class="item-detail">Also, throw that Gollum tooVestibulum vitae condimentum magna, vel finibus tortor. Vivamus eros tellus, lobortis eget eros luctus, auctor lobortis dui. Sed facilisis felis dui, ac rutrum orci consectetur sit amet. Nullam tellus quam, venenatis eget malesuada nec, sollicitudin a sem.</div>
    </li>
    <li class="tl-item" ng-repeat="item in retailer_history">
      <div class="timestamp">
        17 décembre 2019<br> 12:00
      </div>
      <div class="item-title">Lorem ipsum dolor sit amet</div>
      <div class="item-detail">Also, throw that Gollum tooVestibulum vitae condimentum magna, vel finibus tortor. Vivamus eros tellus, lobortis eget eros luctus, auctor lobortis dui. Sed facilisis felis dui, ac rutrum orci consectetur sit amet. Nullam tellus quam, venenatis eget malesuada nec, sollicitudin a sem.</div>
    </li>
    <li class="tl-item" ng-repeat="item in retailer_history">
      <div class="timestamp">
        27 janvier 2020<br> 12:00
      </div>
      <div class="item-title">Lorem ipsum dolor sit amet</div>
      <div class="item-detail">Also, throw that Gollum tooVestibulum vitae condimentum magna, vel finibus tortor. Vivamus eros tellus, lobortis eget eros luctus, auctor lobortis dui. Sed facilisis felis dui, ac rutrum orci consectetur sit amet. Nullam tellus quam, venenatis eget malesuada nec, sollicitudin a sem.</div>
  </ul>

</div>

@endsection