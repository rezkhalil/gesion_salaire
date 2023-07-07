
@extends('layouts.admin')

@section('header')
Créer du structure des fichiers totaux des paies
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
                                    Créer du structure des fichiers totaux des paies
                                </h3>
                            </div>
                        </div>
                    </div>
                <!--begin::Form-->
                    <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" method="POST" action="{{ url('/new-rtnleg') }}" autocomplete="off">
						@csrf
                        <div class="m-portlet__body">

                            <div class="form-group m-form__group row">
                                <div class="sm:col-span-6">
                                    <label for="matricule" class="block text-sm font-medium text-gray-700">Matricule</label>
                                    <select id="matricule" name="matricule" autocomplete="matricule" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        @foreach ($personne as $personne)
                                        <option value="{{$personne->id}}">{{$personne->matricule}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">

                                <div class="col-lg-4">
                                    <label class="">date_de_paie:</label>
                                    <input   id="date_de_paie" class="form-control m-input"  value="{{$personne->date_de_paie}}"  readonly>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">service :</label>
                                    <input type="text" name="service" class="form-control m-input" value="{{$personne->service}}" readonly>
                                    </select>
                                </div>
                                <div class="col-lg-4 " style="visibility: hidden;" >
                                    <label class="">id :</label>
                                    <input type="text" name="personne_id" class="form-control m-input" value="{{$personne->id}}" readonly>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">

                                <div class="col-lg-4">
                                    <label class="">Valeur des HS:</label>
                                    <input type="number" name="valhs" class="form-control m-input"  >
                                </div>
                                <div class="col-lg-4">
                                    <label class="">Valorisation des HT :</label>
                                    <input type="number" name="valht" class="form-control m-input"   >
                                </div>
                                <div class="col-lg-4">
                                    <label class="">Prime de présence :</label>
                                    <input type="number" name="prmres" class="form-control m-input"   >
                                </div>
                                <div class="col-lg-4">
                                    <label class="">imposable :</label>
                                    <input type="number" name="imposable" class="form-control m-input"   >
                                </div>
                                <div class="col-lg-4">
                                    <label class="">Impôt sur revenue :</label>
                                    <input type="number" name="impotnew" class="form-control m-input"   >
                                </div>
                                <div class="col-lg-4">
                                    <label class="">Charges fisc .addit :</label>
                                    <input type="number" name="CFA" class="form-control m-input"   >
                                </div>
                                <div class="col-lg-4">
                                    <label class="">PRIME MENSUELLE PRP :</label>
                                    <input type="number" name="prempr" class="form-control m-input"   >
                                </div>
                                <div class="col-lg-4">
                                    <label class="">Retenue CR :</label>
                                    <input type="number" name="CRmois" class="form-control m-input"   >
                                </div>
                                <div class="col-lg-4">
                                    <label class="">Retenue CD :</label>
                                    <input type="number" name="CDmois" class="form-control m-input"   >
                                </div>
                                <div class="col-lg-4">
                                    <label class="">Retenue CP :</label>
                                    <input type="number" name="Cpmois" class="form-control m-input"   >
                                </div>
                                <div class="col-lg-4">
                                    <label class="">Retenue SM :</label>
                                    <input type="number" name="MUTmois" class="form-control m-input"   >
                                </div>
                                <div class="col-lg-4">
                                    <label class="">Net à payer :</label>
                                    <input type="number" name="net" class="form-control m-input"   >
                                </div><div class="col-lg-4">
                                    <label class="">Alloc.fam.TA :</label>
                                    <input type="number" name="AFTA" class="form-control m-input"   >
                                </div><div class="col-lg-4">
                                    <label class="">Alloc fam.TB :</label>
                                    <input type="number" name="AFTB" class="form-control m-input"   >
                                </div><div class="col-lg-4">
                                    <label class="">Total des gains :</label>
                                    <input type="number" name="gain" class="form-control m-input"   >
                                </div>
                                <div class="col-lg-4">
                                    <label class="">Total des.retenue:</label>
                                    <input type="number" name="retenue" class="form-control m-input"   >
                                </div>
                                <div class="col-lg-4">
                                    <label class="">Total des.retenue:</label>
                                    <input type="number" name="retenue" class="form-control m-input"   >
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

<script type="text/javascript">
    // $("#matricule").prepend('<option>select</option>');
    $('#matricule').change(function(){
    var date_de_paie = $(this).val();
    if(date_de_paie){
        $.ajax({
           type:"GET",
           url:"{{url('get-date')}}?id="+date_de_paie,
           success:function(res){
           console.log(res);
            if(res){
                $("#date_de_paie").empty();
                $("#service").empty();
                $("#personne_id").empty();
                $.each(res,function(key){
                    $("#service").append('<option value="'+res[key].id+'">'+res[key].service+'</option>');
                    $("#date_de_paie").append('<option value="'+res[key].id+'">'+res[key].date_de_paie+'</option>');
                    $("#personne_id").append('<option value="'+res[key].id+'">'+res[key].id+'</option>');
                });

            }else{
               $("#date_de_paie").empty();
               $("#service").empty();
            }
           }
        });
    }
   });
</script>

@endsection

