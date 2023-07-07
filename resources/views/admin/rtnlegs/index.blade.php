
@extends('layouts.admin')

@section('header')
structure des fichiers totaux des paies

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

                                <li class="m-portlet__nav-item">
                                    <a href="{{ url('new-rtnleg') }}" class="btn btn-primary m-btn  m-btn--custom m-btn--icon m-btn--air">
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
			<div class="m-portlet__body">
				<table class="table table-bordered table-striped " id="table">
					<thead class>
                            <tr>

                                    <th>Matricule</th>
                                    <th>date_de_paie</th>
                                    <th>service</th>
                                    <th>Valeur des HS</th>
                                    <th>Valorisation des HT</th>
                                    <th>Prime de présence</th>
                                    <th>Imposable</th>
                                    <th>Impôt sur revenue</th>
                                    <th>Charges fisc .addit</th>
                                    <th>PRIME MENSUELLE PRP</th>
                                    <th>Retenue CR</th>
                                    <th>Retenue CD</th>
                                    <th>Retenue CP</th>
                                    <th>Retenue SM</th>
                                    <th>Net à payer</th>
                                    <th>Alloc.fam.TA</th>
                                    <th>Alloc fam.TB</th>
                                    <th>Total des gains </th>
                                    <th>Total des retenue </th>
                                    <th>Action</th>
                            </tr>

					</thead>
					<tbody>
                            @foreach($rtnlegs as $rtnleg)
                                <tr>
                                    <td>{{ $rtnleg->personne->matricule }}</td>
                                    <td>{{ $rtnleg->personne->date_de_paie }}</td>
                                    <td>{{ $rtnleg->personne->service }}</td>
                                    <td>{{ $rtnleg->valhs }}</td>
                                    <td>{{ $rtnleg->valht }}</td>
                                    <td>{{ $rtnleg->prmres }}</td>
                                    <td>{{ $rtnleg->imposable }}</td>
                                    <td>{{ $rtnleg->impotnew }}</td>
                                    <td>{{ $rtnleg->CFA }}</td>
                                    <td>{{ $rtnleg->prempr }}</td>
                                    <td>{{ $rtnleg->CRmois }}</td>
                                    <td>{{ $rtnleg->CDmois }}</td>
                                    <td>{{ $rtnleg->Cpmois }}</td>
                                    <td>{{ $rtnleg->MUTmois }}</td>
                                    <td>{{ $rtnleg->net}}</td>
                                    <td>{{ $rtnleg->AFTA }}</td>
                                    <td>{{ $rtnleg->AFTB }}</td>
                                    <td>{{ $rtnleg->gain }}</td>
                                    <td>{{ $rtnleg->Snuit }}</td>
                                    <td>
                                        {{-- <a href="{{ url('show-user/'.$user->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="View ">
                                            <i class="fa fa-eye"></i>
                                        </a> --}}
                                        <a href="{{ url('edit-rtnleg/'.$rtnleg->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit ">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ url('delete-rtnleg/'.$rtnleg->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit ">
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

































