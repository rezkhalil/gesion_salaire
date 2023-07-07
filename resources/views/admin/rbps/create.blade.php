
@extends('layouts.admin')

@section('header')
structure des fichiers des rubriques code des paies
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
                                    nouveau
                                </h3>
                            </div>
                        </div>
                    </div>
                <!--begin::Form-->
                    <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" method="POST" action="{{ url('/new-rbp') }}" autocomplete="off">
						@csrf
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row">
                                <div class="col-lg-4">
                                    <label>date de paie:</label>
                                    <input type="date" name="date_de_paie" class="form-control m-input"  required>

                                </div>
                                <div class="col-lg-4">
                                    <label class="">code</label>
                                    <input type="text" name="code" class="form-control m-input"   required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">libel</label>
                                    <input type="text" name="libel" class="form-control m-input"   required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">etat</label>
                                    <input type="text" name="etat" class="form-control m-input"   required>
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
