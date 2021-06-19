@if($errors->any())
<div class="alart-alart-danger">
<ul>
@foreach($errors->all() as $error)
<li>
{{$error}}
</li>
@endforeach
</ul>
</div>
@endif


@if (session('status'))
<div class ="alart-alart-succcess">
{{session('status')}}
</div>
@endif