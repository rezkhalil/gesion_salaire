
@extends('layouts.admin')

@section('header')
fiche des paies

@endsection

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
                               consultation bon de paie
                            </h3>
                        </div>
                    </div>
                </div>
            <!--begin::Form-->
                <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" method="POST" autocomplete="off">
                    @csrf
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">

                            <div class="col-lg-4">
                                <label class="">date_de_paie:</label>
                                <input type="date" name="date_de_paie" class="form-control m-input"  value="{{$data->date_de_paie}}" readonly style=" outline: none;">
                            </div>
                            <div class="col-lg-4">

                                <label>Matricule:</label>
                                <input type="text" name="matricule" class="form-control m-input" value="{{ $data->matricule }}" readonly>
                            </div>
                        </div>
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">

                            <div class="col-lg-4">
                                <label class="">service:</label>
                                <input type="text" name="service" class="form-control m-input"  value="{{ $data->service }}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">position :</label>
                                <input type="text" name="position" class="form-control m-input" value="{{ $data->position }}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">echelle :</label>
                                <input type="text" name="echelle" class="form-control m-input"  value="{{ $data->echelle }}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">echelon :</label>
                                <input type="text" name="echelon" class="form-control m-input"  value="{{ $data->echelon }}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">situation familiale:</label>
                                <input type="text" name="situation_familiale" class="form-control m-input"  value="{{ $data->situation_familiale }}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">Nombre d'enfants pour abattement d'impôt :</label>
                                <input type="number" name="enfinp" class="form-control m-input"  value="{{ $data->enfinp }}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">nom:</label>
                                <input type="text" name="nom" class="form-control m-input"  value="{{ $data->nom }}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">prénom:</label>
                                <input type="text" name="prenom" class="form-control m-input"  value="{{ $data->prenom }}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">Matricule caisse de retraite :</label>
                                <input type="text" name="MCNRPS" class="form-control m-input"  value="{{ $data->MCNRPS }}" readonly>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">

                            <div class="col-lg-4">
                                <label class="">Retenue CR :</label>
                                <input type="text" name="CRmois" class="form-control m-input" value="{{ $data->rtnleg->first()->CRmois }}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">Retenue CP :</label>
                                <input type="text" name="Cpmois" class="form-control m-input" value="{{ $data->rtnleg->first()->Cpmois }}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">Retenue CD:</label>
                                <input type="text" name="CDmois" class="form-control m-input" value="{{ $data->rtnleg->first()->CDmois }}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">Retenue CM:</label>
                                <input type="text" name="MUTmois" class="form-control m-input" value="{{ $data->rtnleg->first()->MUTmois }}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">totale 1 </label>
                                @php
                                ($totale=0);
                                $totale=( $data->rtnleg->first()->MUTmois + $data->rtnleg->first()->CDmois + $data->rtnleg->first()->Cpmois + $data->rtnleg->first()->CRmois );
                                @endphp
                                <input type="text" name="h50" class="form-control m-input" value="{{$totale}}" readonly >
                            </div>


                        </div>
                        <div class="form-group m-form__group row">

                            <div class="col-lg-4">
                                <label class="">Taux d'heures normale :</label>
                                <input type="number" name="thnor" class="form-control m-input"  value="{{ $data->thnor }}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">Nombre d'heures normales :</label>
                                <input type="number" name="hnor" class="form-control m-input" value="{{ $data->hnor }}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">Nombre d'heures majorées à25% :</label>
                                <input type="number" name="h25" class="form-control m-input" value="{{ $data->h25 }}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">Nombre d'heures majorées à 50%:</label>
                                <input type="number" name="h50" class="form-control m-input" value="{{ $data->h50 }}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">Nombre d'heures fériées:</label>
                                <input type="number" name="Hfer" class="form-control m-input" value="{{ $data->Hfer }}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">Supplément nuit:</label>
                                <input type="number" name="Snuit" class="form-control m-input"  value="{{ $data->Snuit }}" readonly>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">

                            <div class="col-lg-4">
                                <label class="">Supplément de nuit:</label>
                                <input type="number" name="Snuit" class="form-control m-input"  value="{{ $data->Snuit }}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">Nombre d'heures férier :</label>
                                <input type="number" name="Hfer" class="form-control m-input" value="{{ $data->Hfer }}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">valeur HS :</label>
                                <input type="number" name="valhs" class="form-control m-input" value="{{ $data->rtnleg->first()->valhs}}" readonly>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">

                            <div class="col-lg-4">
                                <label class="">prime de présence :</label>
                                <input type="number" name="prmres" class="form-control m-input"  value="{{ $data->rtnleg->first()->prmres }}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">prime mensuelle :</label>
                                <input type="number" name="prempr" class="form-control m-input" value="{{ $data->rtnleg->first()->prempr }}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">alloc fam TA :</label>
                                <input type="number" name="AFTA" class="form-control m-input" value="{{ $data->rtnleg->first()->AFTA}}" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label class="">alloc fam TB :</label>
                                <input type="number" name="AFTB" class="form-control m-input" value="{{ $data->rtnleg->first()->AFTB}}" readonly>
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
@endsection

































