
@extends('layouts.admin')

@section('header')
structure des fichiers des rubriques diverses des paies
@endsection

@section('content')

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->

		<!-- END: Subheader -->

        <div class="m-content">
            @foreach($rbgs as $rbg)
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                          Modifier
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="m_user_profile_tab_1">
                                        <form class="m-form m-form--fit m-form--label-align-right" method="POST" action="/update-rbg/{{ $rbg->id }}" autocomplete="off">
                                            @csrf
                                            <div class="m-portlet__body">
                                                <div class="form-group m-form__group m--margin-top-10 m--hide">
                                                    <div class="alert m-alert m-alert--default" role="alert">
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <div class="col-10 ml-auto">
                                                        <h3 class="m-form__section">
structure des fichiers des rubriques diverses des paies

                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">Matricule</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input" name="matricule"  type="text" value="{{ $rbg->matricule }}"  readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">code</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="code"  type="text" value="{{ $rbg->code }}" required >
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">etat</label>
                                                    <div class="col-lg-7">
                                                        <input class="form-control m-input"  name="etat"  type="text" value="{{ $rbg->etat }}" required>
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

































