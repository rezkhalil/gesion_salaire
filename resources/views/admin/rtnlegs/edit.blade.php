
@extends('layouts.admin')

@section('header')

@endsection

@section('content')

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->

		<!-- END: Subheader -->

        <div class="m-content">
            @foreach($rtnlegs as $rtnleg)
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
                                        <form class="m-form m-form--fit m-form--label-align-right" method="POST" action="/update-rtnleg/{{ $rtnleg->id }}" autocomplete="off">
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
                                                        <input class="form-control m-input" name="matricule"  type="text" value="{{ $rtnleg->personne->matricule }}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">date de paie</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="date_de_paie"  type="text" value="{{ $rtnleg->personne->date_de_paie }}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">service</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="service"  type="text" value="{{ $rtnleg->personne->service }}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">valht</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="valhs"  type="text" value="{{ $rtnleg->valhs }}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">valht</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="valht"  type="text" value="{{ $rtnleg->valht }}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">prmres</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="prmres"  type="text" value="{{ $rtnleg->prmres }}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">imposable</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="imposable"  type="text" value="{{ $rtnleg->imposable}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">service</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="service"  type="text" value="{{ $rtnleg->service}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">impotnew</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="impotnew"  type="text" value="{{ $rtnleg->impotnew}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">CFA</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="CFA"  type="text" value="{{ $rtnleg->CFA}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">prempr</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="prempr"  type="text" value="{{ $rtnleg->prempr}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">CRmois</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="CRmois"  type="text" value="{{ $rtnleg->CRmois}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">CDmois</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="CDmois"  type="text" value="{{ $rtnleg->CDmois}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">CDmois</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="CDmois"  type="text" value="{{ $rtnleg->CDmois}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">MUTmois</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="MUTmois"  type="text" value="{{ $rtnleg->MUTmois}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">net</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="net"  type="text" value="{{ $rtnleg->net}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">AFTA</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="AFTA"  type="text" value="{{ $rtnleg->AFTA}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">AFTB</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="AFTB"  type="text" value="{{ $rtnleg->AFTB}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">gain</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="gain"  type="text" value="{{ $rtnleg->gain}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">retenue</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="retenue"  type="text" value="{{ $rtnleg->retenue}}" required>
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

































