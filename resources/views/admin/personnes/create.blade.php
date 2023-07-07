
@extends('layouts.admin')

@section('header')
    Ajouter Employé
@stop

@section('content')
	<div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
		<!-- END: Subheader -->
			<div class="m-content">
				<!--begin::Portlet-->
                <div class="m-portlet">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Créer du personnel
                                </h3>
                            </div>
                        </div>
                    </div>
                <!--begin::Form-->
                    <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" method="POST" action="{{ url('/new-personne') }}" autocomplete="off">
						@csrf
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row">
                                <div class="col-lg-4">
                                    <label>Matricule:</label>
                                    <input type="text" name="matricule" class="form-control m-input" value="{{ old('matricule') }}" required>

                                </div>
                                <div class="col-lg-4">
                                    <label class="">date_de_paie:</label>
                                    <input type="date" name="date_de_paie" class="form-control m-input"  value="{{ old('date_de_paie') }}" required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">nom:</label>
                                    <input type="text" name="nom" class="form-control m-input" value="{{ old('nom') }}" required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">prénom:</label>
                                    <input type="text" name="prenom" class="form-control m-input" value="{{ old('prenom') }}" required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">date de naissance :</label>
                                    <input type="date" name="date_de_naissance" class="form-control m-input" value="{{ old('date_de_naissance') }}" required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">situation familiale:</label>
                                    <input type="text" name="situation_familiale" class="form-control m-input" value="{{ old('situation_familiale') }}" required>
                                </div>

                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-4">
                                    <label class="">Nombre d'enfants pour abattement d'impôt :</label>
                                    <input type="number" name="enfinp" class="form-control m-input"  required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">service :</label>
                                    <input type="text" name="service" class="form-control m-input"  required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">position :</label>
                                    <input type="text" name="position" class="form-control m-input" required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">echelle :</label>
                                    <input type="text" name="echelle" class="form-control m-input"  required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">echelon :</label>
                                    <input type="text" name="echelon" class="form-control m-input"  required>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-4">
                                    <label class="">Matricule caisse de retraite :</label>
                                    <input type="text" name="MCNRPS" class="form-control m-input" value="{{ old('MCNRPS') }}" required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">Taux d'heures normale :</label>
                                    <input type="number" name="thnor" class="form-control m-input" value="{{ old('thnor') }}" required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">Nombre d'heures normales :</label>
                                    <input type="number" name="hnor" class="form-control m-input" value="{{ old('hnor') }}" required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">Nombre d'heures majorées à25% :</label>
                                    <input type="number" name="h25" class="form-control m-input" value="{{ old('h25') }}" required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">Nombre d'heures majorées à 50%:</label>
                                    <input type="number" name="h50" class="form-control m-input" value="{{ old('h50') }}" required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">Nombre d'heures fériées:</label>
                                    <input type="number" name="Hfer" class="form-control m-input" value="{{ old('Hfer') }}" required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">Supplément nuit:</label>
                                    <input type="number" name="Snuit" class="form-control m-input" value="{{ old('Snuit') }}" required>
                                </div>

                            </div>
                        </div>
                        <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions--solid">
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8">
                                        <button type="submit" class="btn btn-primary">
                                            Valider
                                        </button>
                                        <button type="reset" class="btn btn-secondary">
                                            Annuler
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Portlet-->
                <!--End::Section-->
            </div>
        </div>
    </div>


					<!--End::Section-->
                    </div>
                </div>
            </div>
            <!-- end:: Body -->

@endsection
