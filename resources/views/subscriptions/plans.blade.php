@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pricing.css') }}">
@endpush

@section('jumbotron')
    @include('partials.jumbotron', [
        'title' => __("Subscríbete ahora a uno de nuestros planes"),
        'icon' => 'globe'
    ])
@endsection

@section('content')
    <div class="container">
        <div class="pricing-table pricing-three-column row">
            <div class="plan col-sm-4 col-lg-4">
                <div class="plan-name-bronze">
                    <h2>{{ __("MENSUAL") }}</h2>
                    <span>{{ __(":price / Mes", ['price' => '$9.99']) }}</span>
                </div>
                <ul>
                    <li class="plan-feature">{{ __("Acceso a todos los cursos") }}</li>
                    <li class="plan-feature">{{ __("Acceso a todos los archivos") }}</li>
                    <li class="plan-feature">
                        @include('partials.stripe.form' , [
                            'product' => [
                                'name' => 'Suscripcion',
                                'amount' => 1999.99,
                                'description' => 'Mensual',
                                'type' => 'monthly'
                            ],
                            'selection' => true
                        ])
                    </li>
                </ul>
            </div>

            <div class="plan col-sm-4 col-lg-4">
                <div class="plan-name-silver">
                    <h2>{{ __("TRIMESTRAL") }}</h2>
                    <span>{{ __(":price / 3 Meses", ['price' => '$49.99']) }}</span>
                </div>
                <ul>
                    <li class="plan-feature">{{ __("Acceso a todos los cursos") }}</li>
                    <li class="plan-feature">{{ __("Acceso a todos los archivos") }}</li>
                    <li class="plan-feature">
                        @include('partials.stripe.form' , [
                            'product' => [
                                'name' => 'Suscripcion',
                                'amount' => 4999.99,
                                'description' => 'Trimestral',
                                'type' => 'quarterly'
                            ],
                            'selection' => false
                        ])
                    </li>
                </ul>
            </div>

            <div class="plan col-sm-4 col-lg-4">
                <div class="plan-name-gold">
                    <h2>{{ __("ANUAL") }}</h2>
                    <span>{{ __(":price / 12 Meses", ['price' => '$99.99']) }}</span>
                </div>
                <ul>
                    <li class="plan-feature">{{ __("Acceso a todos los cursos") }}</li>
                    <li class="plan-feature">{{ __("Acceso a todos los archivos") }}</li>
                    <li class="plan-feature">
                        @include('partials.stripe.form' , [
                            'product' => [
                                'name' => 'Suscripcion',
                                'amount' => 8999.99,
                                'description' => 'Anual',
                                'type' => 'yearly'
                            ],
                            'selection' => false
                        ])
                    </li>
                </ul>
            </div>


        </div>
    </div>
@endsection

@push('scripts')
<script>
    jQuery(document).ready(function () {
        $(".btn-stripe-checkout").on('click', function(){
            $("input[name=type]").val($(this).closest('form').find('input[name=plan]').val());
        })
    })
</script>
@endpush