@extends('layouts.app')
@section('title', 'FAQs')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="kt-portlet ">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            User Guide / FAQs
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <form method="post" class="w-50 m-auto py-2" action="">
                        @csrf
                        <textarea name="question" class="form-control swal2-textarea" placeholder="ask something...."></textarea>
                        <button type="submit" class="btn btn-dark">Ask Question</button>
                    </form>
                    <div class="accordion accordion-solid accordion-toggle-arrow" id="accordionExample8">
                        <div class="card">
                            <div class="card-header" id="headingOne8">
                                <div class="card-title" data-toggle="collapse" data-target="#collapseOne8" aria-expanded="true" aria-controls="collapseOne8">
                                   this is first question ?
                                </div>
                            </div>
                            <div id="collapseOne8" class="collapse show" aria-labelledby="headingOne8" data-parent="#accordionExample8">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo8">
                                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo8" aria-expanded="false" aria-controls="collapseTwo8">
                                    this is second question ?
                                </div>
                            </div>
                            <div id="collapseTwo8" class="collapse" aria-labelledby="headingTwo8" data-parent="#accordionExample8">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree8">
                                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree8" aria-expanded="false" aria-controls="collapseThree8">
                                  this is another question ?
                                </div>
                            </div>
                            <div id="collapseThree8" class="collapse" aria-labelledby="headingThree8" data-parent="#accordionExample8">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection