@extends('layouts.app')
    @section('content')

        <div class="row">
           <div class="col-md-9 col-sm-3 col-lg-9 pull-left">
            <div class="jumbotron">
                <h1>{{$company->name}}</h1>
                <p class="lead">{{$company->description}}</p>
                <!-- <p><a class="btn btn-lg btn-success" href="#" role="button">get start today</a>--> </p>
            </div>
               <div class="h2">
                   <h2>List des Project de la compagnie {{$company->name}}</h2>
               </div>
             <div class="row col-md-12 col-sm-12 col-lg-12" style="background: white; margin: 10px">

                 <div class="button">
                     <li ><a class="pull-right btn  btn-primary btn-sm"   href="/laravel/public/projects/create/{{$company->id}}" >Ajouter Project</a></li>
                 </div>
                     <table class="table table-bordered">
                         <thead>
                             <th>Nom du Project</th>
                             <th> Description du Project</th>
                             <th>Détail du Project</th>
                         </thead>
                         <tbody>
                         @foreach($company->projects as $project)
                             <tr>
                                 <td>{{$project->name}}</td>
                                 <td class="text-danger ">{{$project->description }}</td>
                                 <td><a class="btn btn-primary" href="/laravel/public/projects/{{$project->id}}" role="button">voir Project >></a></td>
                             </tr>
                         @endforeach
                         </tbody>
                     </table>
             </div>
            </div>
            <div class="col-md-3 col-sm-3 col-lg-3  pull-right">
                <div class="sidebar-module">
                    <h4>Actions</h4>
                    <ol class="list-unstyled">
                        <li><a href="/laravel/public/companies/{{$company->id}}/edit">Edit</a></li>
                        <li><a href="/laravel/public/projects/create/{{$company->id}}">Ajouter Project</a></li>
                        <li><a href="/laravel/public/companies">Les Companies</a></li>
                        <li><a href="/laravel/public/companies/create">Creer une Nouvelle Companie</a></li>

                        <li>
                            <br>
                            <a href="#"
                               onclick="var result =confirm('vous etes sûr de vouloir supprimer le project');
                                    if(result)
                                    {
                                        event.preventDefault();
                                        document.getElementById('layout-form').submit();
                                    }"
                                    >Supprimer</a>
                            <form id="layout-form" action="{{route('companies.destroy',[$company->id])}}"
                                  method="post" style="display: none">
                                <input type="hidden" name="_method" value="delete" >
                                {{csrf_field()}}
                            </form>

                        </li>
                    </ol>
                </div>
                <div class="sidebar-module">
                    <h4>Membres</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">March 2014</a></li>

                    </ol>
                </div>
            </div>
         </div>

     @endsection