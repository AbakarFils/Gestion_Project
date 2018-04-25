@if(session()->has('success'))
    <div class="alert alert-dismissable alert-success  ">
        <button class="close" type="button" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true" ></span>
           <center> <strong>
                {!!session()->get('success') !!}
            </strong></center>
        </button>
    </div>
@endif