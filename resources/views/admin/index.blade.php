@extends('layouts.admin')

@section('header')
Admin Dashboard
@endsection

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader">
		<div class="d-flex align-items-center ">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">Tableau de bord</h3>
			</div>


		</div>
	</div>

	<div class="m-content">
            <div class="m-portlet ">
                <div class="m-portlet__body  m-portlet__body--no-padding">
                    <div class="row m-row--no-padding m-row--col-separator-xl">
                        <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="m-widget24">
                                <div class="m-widget24__item">
                                    <h4 class="m-widget24__title">
                                        Administrateur
                                    </h4>
                                    <br>
                                    <span class="m-widget24__stats m--font-brand">
                                        {{ $users->count() }}
                                    </span>
                                    <div class="m--space-10"></div>
                                    <div class="progress m-progress--sm">
                                        <div class="progress-bar m--bg-brand" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-6">
                            <div class="m-widget24">
                                <div class="m-widget24__item">
                                    <h4 class="m-widget24__title">
                                        Employés
                                    </h4>
                                    <br>
                                    <span class="m-widget24__stats m--font-info">
                                        {{ $personne->count() }}
                                    </span>
                                    <div class="m--space-10"></div>
                                    <div class="progress m-progress--sm">
                                        <div class="progress-bar m--bg-info" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        </div>
                    </div>
                </div>
            </div>


	</div>
</div>
</div>
@endsection
