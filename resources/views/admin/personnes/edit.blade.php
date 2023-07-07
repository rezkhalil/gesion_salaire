
@extends('layouts.admin')

@section('header')
    User
@endsection

@section('content')

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->

		<!-- END: Subheader -->

        <div class="m-content">
            @foreach($personnes as $personne)
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                          Modifier utilisateur
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="m_user_profile_tab_1">
                                        <form class="m-form m-form--fit m-form--label-align-right" method="POST" action="/update-personne/{{ $personne->id }}" autocomplete="off">
                                            @csrf
                                            <div class="m-portlet__body">
                                                <div class="form-group m-form__group m--margin-top-10 m--hide">
                                                    <div class="alert m-alert m-alert--default" role="alert">
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <div class="col-10 ml-auto">
                                                        <h3 class="m-form__section">
                                                            employé information
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">Matricule</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input" name="matricule"  type="text" value="{{ $personne->matricule }}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">date de paie</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="date_de_paie"  type="date" value="{{ $personne->date_de_paie }}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">Nom</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="nom"  type="text" value="{{ $personne->nom }}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">Prénom</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="prenom"  type="text" value="{{ $personne->prenom }}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">date de naissance</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="date_de_naissance"  type="date" value="{{ $personne->date_de_naissance }}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">situation familiale</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="situation_familiale"  type="text" value="{{ $personne->situation_familiale }}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">Nombre d'enfants pour abattement d'impôt</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="enfinp"  type="text" value="{{ $personne->enfinp}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">service</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="service"  type="text" value="{{ $personne->service}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">position</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="position"  type="text" value="{{ $personne->position}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">echelle</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="echelle"  type="text" value="{{ $personne->echelle}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">echelon</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="echelon"  type="text" value="{{ $personne->echelon}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">Matricule caisse de retraite </label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="MCNRPS"  type="text" value="{{ $personne->MCNRPS}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">Taux d'heures normale</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="thnor"  type="text" value="{{ $personne->thnor}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">Nombre d'heures normales</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="hnor"  type="text" value="{{ $personne->hnor}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">Nombre d'heures majorées à25%</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="h25"  type="text" value="{{ $personne->h25}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">Nombre d'heures majorées à50%</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="h50"  type="text" value="{{ $personne->h50}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">Nombre d'heures fériées</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="Hfer"  type="text" value="{{ $personne->Hfer}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">Supplément nuit</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="Snuit"  type="text" value="{{ $personne->Snuit}}" required>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="m-portlet__foot m-portlet__foot--fit">
                                                <div class="m-form__actions">
                                                    <div class="row">
                                                        <div class="col-2"></div>
                                                        <div class="col-lg-7">
                                                            <button type="submit" class="btn btn-primary m-btn m-btn--air m-btn--custom">
                                                                Valider
                                                            </button>
                                                            &nbsp;&nbsp;
                                                            <button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">
                                                                Annuler
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
            <!--End::Section-->
        </div>
    </div>
</div>
<!-- end:: Body -->

@endsection

































