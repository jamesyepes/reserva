 @if(session()->has('msj'))
                <div class="alert alert-info fade in">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                      {{session('msj')}}
                </div>                
        @endif