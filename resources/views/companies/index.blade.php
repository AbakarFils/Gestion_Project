@extends("layouts.app")
	@section('content')

	<div class="panel panel-primary" style="border-color:#6ddad3; ">
        <li ><a class="pull-right btn  btn-primary btn-sm" href="/laravel/public/companies/create">Creer une nouvelle Companie</a></li>
        <div class="panel-heading text-center" style="background-color: #6ddad3;padding: 1px;
        width: 100%; color: white;"><h2>Companies</h2>
        </div>
        <div class="panel-body">
            <ul class="list-group" >
                @foreach($companies as $company)
                        <li class="list-group-item" style="border-color:#6ddad3; " role="presentation"><center><a href="/laravel/public/companies/{{$company->id}}">{{$company->name}}</a></center></li>
                @endforeach
             </ul>

        </div>
	</div>




	@endsection