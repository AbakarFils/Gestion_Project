@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-9 col-sm-3 col-lg-9 pull-left">

            <div class="row col-md-12 col-sm-12 col-lg-12" style="background: white; margin: 10px">
                <form method="post" action="{{route('companies.store')}}" >
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="company-name">Nom<span class="required">*</span></label>
                        <input class="form-control" style="width: 100%"
                               placeholder="entrer le nom"
                               required
                               name="name"
                               id="company-name"
                               spellcheck="false"
                               />
                    </div>
                    <div class="form-group">
                        <label for="company-description">Description<span class="required">*</span></label>
                            <textarea class="form-control autosize-target text-left"
                                      placeholder="entrer la Description"
                                      style ="reize :verticale;"
                                      name="description"
                                      id="company-description"
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
                    <li><a href="/laravel/public/companies">Les companies</a></li>
                    <li><a href="#">Ajouter un nouveau Membre</a></li>
                </ol>
            </div>
        </div>
    </div>

@endsection