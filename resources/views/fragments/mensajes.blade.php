 @if(session()->has('msj'))
                <div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                      {{session('msj')}}
                </div>                
        @endif