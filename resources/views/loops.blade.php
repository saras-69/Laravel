<h1>Using for loop directive</h1>
<ul>
@for ($i = 0; $i < count($records); $i++)
<li>{{$records[$i]}}</li>
@endfor    
</ul>

<h1>Using foreach loop directive</h1>
<ul>
@foreach ($records as $record)
<li>{{$record}}</li>
@endforeach   
</ul>

<h1>Using forelse loop directive</h1>
<ul>
@forelse ($records as $record)
    <li>{{$record}}</li>
@empty
    <p>Out of stock</p>
@endforelse
</ul>