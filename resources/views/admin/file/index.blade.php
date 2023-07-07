
@extends('layouts.admin')

@section('header')
fiche des paies

@endsection

@section('content')

  <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->

		<!-- END: Subheader -->

		<div class="m-content">
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            structure des fichiers totaux des paies

                        </h3>
                    </div>
                </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">

                                {{-- <li class="m-portlet__nav-item">
                                    <a href="{{ url('new-rtnleg') }}" class="btn btn-primary m-btn  m-btn--custom m-btn--icon m-btn--air">
                                        <span>
                                            <i class="la la-user"></i>
                                            <span>Nouveau </span>
                                        </span>
                                    </a>
                                </li> --}}

						<li class="m-portlet__nav-item"></li>
					</ul>
				</div>
			</div>
			<div class="m-portlet__body">
				<table class="table table-bordered table-striped " id="table">
					<thead class>
                            <tr>

                                    <th>Matricule</th>
                                    <th>date_de_paie</th>
                                    <th>nom</th>
                                    <th>prénom</th>
                                    <th>Action</th>
                            </tr>

					</thead>
					<tbody>
                            @foreach($data as $data)
                                <tr>
                                    <td>{{ $data->matricule }}</td>
                                    <td>{{ $data->date_de_paie }}</td>
                                    <td>{{ $data->nom }}</td>
                                    <td>{{ $data->prenom }}</td>

                                     <td>
                                         <a href="{{ url('show-file/'.$data->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="View ">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        {{--<a href="{{ url('edit-rtnleg/'.$rtnleg->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit ">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ url('delete-rtnleg/'.$rtnleg->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit ">
                                            <i class="fa fa-trash"></i>
                                        </a> --}}
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

































