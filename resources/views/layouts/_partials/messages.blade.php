@if ($message = Session::get('success'))
    <div style="padding: 15px; background-color:greenyellow; color:black">
        <p>{{ $message }}</p>
    </div>
@endif

@if ($message = Session::get('danger'))
    <div style="padding: 15px;width:50px ;background-color:red; color:black">
        <p>{{ $message }}</p>
    </div>
@endif
