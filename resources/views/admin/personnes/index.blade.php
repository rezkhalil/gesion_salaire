
@extends('layouts.admin')

@section('header')
     Users
@endsection

@section('content')

  <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->

		<!-- END: Subheader -->

		<div class="m-content ">
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Personnel
                        </h3>
                    </div>
                </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            @if(Auth::user()->hasRole('dev'))
                                <li class="m-portlet__nav-item">
                                    <a href="{{ url('users/create') }}" class="btn btn-primary m-btn  m-btn--custom m-btn--icon m-btn--air">
                                        <span>
                                            <i class="la la-user"></i>
                                            <span>Nouveau personnel</span>
                                        </span>
                                    </a>
                                </li>
						    @elseif(Auth::user()->hasRole('admin'))
                                <li class="m-portlet__nav-item">
                                    <a href="{{ url('new-personne') }}" class="btn btn-primary m-btn  m-btn--custom m-btn--icon m-btn--air">
                                        <span>
                                            <i class="la la-user"></i>
                                            <span>Nouveau personnel</span>
                                        </span>
                                    </a>
                                </li>
                            @else

                            @endif
						<li class="m-portlet__nav-item"></li>
					</ul>
				</div>
			</div>
			<div class="m-portlet__body" >
				<table class="table table-bordered table-striped " id="table">
					<thead class>
                            <tr>
                                <tr>
                                    <th>Matricule</th>
                                    <th>date_de_paie</th>
                                    <th>nom</th>
                                    <th>prenom</th>
                                    <th>date_de_naissance</th>
                                    <th>situation_familiale</th>
                                    <th>Nombre d'enfants pour abattement d'impôt </th>
                                    <th>service</th>
                                    <th>position</th>
                                    <th>echelle</th>
                                    <th>echelon</th>
                                    <th>Matricule caisse de retraite</th>
                                    <th>Taux d'heures normale</th>
                                    <th>Nombre d'heures normales</th>
                                    <th>Nombre d'heures majorées à25%</th>
                                    <th>Nombre d'heures majorées à 50% </th>
                                    <th>Nombre d'heures fériées </th>
                                    <th>Supplément nuit</th>
                                    <th>Action</th>

                                </tr>
                            </tr>

					</thead>
					<tbody>
                        @foreach($personnes as $personne)
                            <tr>
                                <td>{{ $personne->matricule }}</td>
                                <td>{{ $personne->date_de_paie }}</td>
                                <td>{{ $personne->nom }}</td>
                                <td>{{ $personne->prenom }}</td>
                                <td>{{ $personne->date_de_naissance }}</td>
                                <td>{{ $personne->situation_familiale }}</td>
                                <td>{{ $personne->enfinp }}</td>
                                <td>{{ $personne->service }}</td>
                                <td>{{ $personne->position }}</td>
                                <td>{{ $personne->echelle }}</td>
                                <td>{{ $personne->echelon }}</td>
                                <td>{{ $personne->MCNRPS }}</td>
                                <td>{{ $personne->thnor }}</td>
                                <td>{{ $personne->hnor}}</td>
                                <td>{{ $personne->h25 }}</td>
                                <td>{{ $personne->h50 }}</td>
                                <td>{{ $personne->Hfer }}</td>
                                <td>{{ $personne->Snuit }}</td>
                                <td>
                                    {{-- <a href="{{ url('show-user/'.$user->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="View ">
                                        <i class="fa fa-eye"></i>
                                    </a> --}}
                                    <a href="{{ url('edit-personne/'.$personne->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit ">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ url('delete-personne/'.$personne->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit ">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end:: Body -->
@endsection

































