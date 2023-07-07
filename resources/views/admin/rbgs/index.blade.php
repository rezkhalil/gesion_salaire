
@extends('layouts.admin')

@section('header')
structure des fichiers des rubriques diverses des paies
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
                            structure des fichiers des rubriques diverses des paies

                        </h3>
                    </div>
                </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">

						    
                                <li class="m-portlet__nav-item">
                                    <a href="{{ url('new-rbg') }}" class="btn btn-primary m-btn  m-btn--custom m-btn--icon m-btn--air">
                                        <span>
                                            <i class="la la-user"></i>
                                            <span>Nouveau </span>
                                        </span>
                                    </a>
                                </li>



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
                                    <th>code</th>
                                    <th>montant</th>
                                    <th>libelé</th>
                                    <th>état</th>
                                    <th>Action</th>

                                </tr>
                            </tr>

					</thead>
					<tbody>
                        @foreach($rbgs as $rbg)
                            <tr>
                                <td>{{ $rbg->personne->matricule }}</td>
                                <td>{{ $rbg->code }}</td>
                                <td>{{ $rbg->montant }}</td>
                                <td>{{ $rbg->libel }}</td>
                                <td>{{ $rbg->etat }}</td>
                                <td>
                                    {{-- <a href="{{ url('show-user/'.$user->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="View ">
                                        <i class="fa fa-eye"></i>
                                    </a> --}}
                                    <a href="{{ url('edit-rbg/'.$rbg->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit ">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ url('delete-rbg/'.$rbg->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit ">
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

































