<!-- <h1>Items</h1> -->

<h1>{{$heading}}</h1>

@if(count($items) == 0)
    <p>No items found.</p>
    
@else
@foreach($items as $item)
    <h2><a href='/items/{{$item['itemID']}}'>{{$item['itemName']}}</a></h2>
    <p>{{$item['itemDescription']}}</p>
@endforeach 

@endif
