@if(isset($errors) && count($errors)>0)
    <div class="alert alert-dismissable alert-success  ">
        <button class="close" type="button" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true" ></span>
          </button>
        @foreach($errors as $error)
            <li><strong>{!!$error!!}</strong></li>
        @endforeach
    </div>
@endif