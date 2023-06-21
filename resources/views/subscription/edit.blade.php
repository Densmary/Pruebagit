@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Subscription
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('') }} Suscripción</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('subscriptions.update', $subscription->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('subscription.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
