@if(count($errors))
<div class="alert alert-danger fade in">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <ul>
        @foreach($errors->all() as $error)
         <li>{{ $error }}</li>
        @endforeach
    </ul>
   
</div>
@endif