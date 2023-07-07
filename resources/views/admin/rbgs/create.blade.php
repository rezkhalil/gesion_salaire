
@extends('layouts.admin')

@section('header')
structure des fichiers des rubriques diverses des paies
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
                    <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" method="POST" action="{{ url('/new-rbg') }}" autocomplete="off">
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
                                    <label class="">code</label>
                                    <input type="text" name="code" class="form-control m-input"   required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">Montant</label>
                                    <input type="text" name="montant" class="form-control m-input"   required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">libel</label>
                                    <input type="text" name="libel" class="form-control m-input"   required>
                                </div>
                            <div class="form-group m-form__group row">

                                <div class="col-lg-4">
                                    <label class="">etat</label>
                                    <select id="etat" name="etat" autocomplete="etat" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="positive">positive</option>
                                        <option value="negative">négative</option>
                                    </select>
                                </div>
                                <div class="col-lg-4"style="visibility: hidden;" >
                                    <label class="">id :</label>
                                    <input type="text" name="personne_id" class="form-control m-input" value="{{$personne->id}}" readonly>
                                    </select>
                                </div>
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
