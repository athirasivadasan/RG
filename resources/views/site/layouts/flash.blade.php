@if (session()->has('error'))
    <div class="alert alert-danger text-center">
        <ul>
            <li>{{ session('error') }}</li>
        </ul>
    </div>
    @elseif(session()->has('success'))
    <div class="alert alert-success text-center">
        <ul>
            <li>{{ session('success') }} @if(session()->has('redirect'))&nbsp;&nbsp;Next Go To: &nbsp;<a href="{{session('redirect')}}"> {{session('name')}} </a> @endif</li>
        </ul>
    </div>
@endif

