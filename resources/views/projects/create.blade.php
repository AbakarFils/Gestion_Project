@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-9 col-sm-3 col-lg-9 pull-left">
          <h1>Creer un nouveau project</h1>
            <div class="row col-md-12 col-sm-12 col-lg-12" style="background: white; margin: 10px">
                <form method="post" action="{{route('projects.store')}}" >
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="project-name">Nom<span class="required">*</span></label>
                        <input class="form-control" style="width: 100%"
                               placeholder="entrer le nom"
                               required
                               name="name"
                               id="project-name"
                               spellcheck="false"
                               />
                        <!-- si on  vient avec id_compagnie on  le met à  -->
                        @if($companies == null)
                            <input
                                    class="form-control"
                                    type="hidden"
                                    name="company_id"
                                    value="{{ $company_id }}"
                                    />
                @endif


            </div>

            @if($companies != null)
                <div class="form-group">
                    <label for="company-content">Selectionner la companie</label>

                    <select name="company_id" class="form-control" >

                        @foreach($companies as $company)
                            <option value="{{$company->id}}"> {{$company->name}} </option>
                        @endforeach
                    </select>
                </div>
            @endif
                    <div class="form-group">
                        <label for="project-days">Days<span class="required">*</span></label>
                        <input class="form-control" style="width: 100%"
                               placeholder="entrer la duree "
                               required
                               type="number"
                               name="days"
                               id="project-days"
                               spellcheck="false"
                                />
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
                                    ></textarea>
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
                    <li><a href="/laravel/public/projects">Les projects</a></li>
                    <li><a href="#">Ajouter un nouveau Membre</a></li>
                </ol>
            </div>
        </div>
    </div>

@endsection