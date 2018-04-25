@extends('layouts.app')
@section('content')

        <div class="row">
            <div class="col-md-9 col-sm-3 col-lg-9 pull-left">

                <div class="row col-md-12 col-sm-12 col-lg-12" style="background: white; margin: 10px">
                    <form method="post" action="{{route('projects.update',[$project->id])}}" >
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="project-name">Nom<span class="required">*</span></label>
                            <input class="form-control"
                                   placeholder="entrer le nom"
                                   required
                                   name="name"
                                   id="project-name"
                                   spellcheck="false"
                                   value="{{$project->name}}"/>
                        </div>
                        <div class="form-group">
                            <label for="project-description">Description<span class="required">*</span></label>
                            <textarea class="form-control autosize-target text-left"
                                      placeholder="entrer la Description"
                                      style ="reize :verticale;"
                                      name="description"
                                      id="project-description"
                                      rows="5"
                                      spellcheck="false"
                                    >{{$project->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" value="submit" type="submit"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-lg-3  pull-right">
                <div class="sidebar-module">
                    <h4>Actions</h4>
                    <ol class="list-unstyled">
                        <li>
                            <a href="#"
                                    onclick="var result =confirm('vous etes sûr de vouloir supprimer le project');
                                    if(result)
                                    {
                                        event.preventDefault();
                                        document.getElementById('layout-form').submit();
                                    }"
                                    >delete</a>
                            <form id="layout-form" action="{{route('projects.destroy',[$project->id])}}"
                                  method="post" style="display: none">
                                <input type="hidden" name="_methode" value="delete" >
                                {{csrf_field()}}
                            </form>
                        </li>
                        <li><a href="/laravel/public/projects/{{$project->id}}/edit">Modififier</a></li>
                        <li><a href="#">Ajouter un nouveau Membre</a></li>
                    </ol>
                </div>
            </div>
        </div>

@endsection