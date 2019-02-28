@extends('pages.master') 
@section('header')
    @include('partials.head1')
@endsection
  
@section('content')
<div class="gradient-overlay-half-dark-v3 bg-img-hero" style="background-image: url('https://htmlstream.com/preview/space-v1.2/assets/img/1920x800/img3.jpg');">
    <div class="container space-2 space-4-top--lg space-3-bottom--lg">
        <div class="w-lg-100 text-center mx-lg-auto">
            <h1 class="display-2 font-size-48--md-down text-primary mb-0">Contactez nous</h1>
        </div>
    </div>
</div>
<div class="container space-2">
    <div class="row">
        <div class="col-sm-6 col-md-4 mb-7 mb-md-0">
            <h2 class="h4">Abrar Invest</h2>
            <span class="d-block text-secondary">siège Social</span>
            <hr class="my-5" />
            <address>
                <!-- Contacts List -->
                <ul class="list-unstyled text-secondary">
                    <li class="media align-items-center pb-2"><img class="max-width-5 mr-2"
                            src="https://htmlstream.com/preview/space-v1.2/assets/svg/components/location-dark-icon.svg"
                            alt="Image Description" />
                        <div class="media-body">Lotissment la colline. N° 11. Sidi Maarouf Casablanca – Maroc</div>
                    </li>
                    <li class="media align-items-center py-2"><img class="max-width-5 mr-2"
                            src="https://htmlstream.com/preview/space-v1.2/assets/svg/business-icons/iStar_Design_Business_LineIcons_Live-89.svg"
                            alt="Image Description" />
                        <div class="media-body">contact@abrarimmo.com</div>
                    </li>
                    <li class="media align-items-center py-2"><img class="max-width-5 mr-2"
                            src="https://htmlstream.com/preview/space-v1.2/assets/svg/components/contacts-dark-icon.svg"
                            alt="Image Description" />
                        <div class="media-body">+212 (0) 522 78 76 61</div>
                    </li>
                </ul>
                <!-- End Contacts List -->
            </address>
        </div>
        <div class="col-sm-6 col-md-8 mb-7 mb-md-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d106418.33948846294!2d-7.640916!3d33.538483!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa0506183a588c2b4!2sabrar+invest+(groupe+mojazine)+SA!5e0!3m2!1sfr!2sma!4v1550662148588"
                style="border:0;width: 100%;height: 100%;" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>
    </div>
</div>
<hr class="my-0" />
<div class="container space-2">
    <!-- Title -->
    <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
        <h2 class="h3">Contact</h2>
    </div>
    <!-- End Title -->
    <div class="w-lg-80 mx-auto">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible  show" role="alert">
            {{session()->get('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
        </div>
        @endif @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible  show" role="alert">
            {{session()->get('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
        </div>
        @endif
        <form class="js-validate" action="/contacts" method="POST" novalidate="novalidate">
            @csrf
            <div class="row">
                <!-- Input -->
                <div class="col-sm-6 mb-6">
                    <div class="js-form-message">
                        <div class="js-focus-state input-group form">
                            <input name="name" type="text" class="form-control form__input" required="" placeholder="Votre nom (obligatoire)" value="{{ old('name')}}"
                                aria-label="Votre nom (obligatoire)" data-msg="Please enter your name." data-error-class="u-has-error"
                                data-success-class="u-has-success" /></div>
                    </div>
                </div>
                <!-- End Input -->
                <!-- Input -->
                <div class="col-sm-6 mb-6">
                    <div class="js-form-message">
                        <div class="js-focus-state input-group form"><input name="email" type="email" class="form-control form__input" required="" placeholder="Votre email (obligatoire)"
                                aria-label="Votre email (obligatoire)" data-msg="Please enter a valid email address." data-error-class="u-has-error"
                                data-success-class="u-has-success" /></div>
                    </div>
                </div>
                <!-- End Input -->
                <div class="w-100">&nbsp;</div>
                <!-- Input -->
                <div class="col-sm-6 mb-6">
                    <div class="js-form-message">
                        <div class="js-focus-state input-group form"><input name="sujet" type="text" class="form-control form__input" required="" placeholder="Sujet"
                                aria-label="Sujet" data-msg="Please enter a sujet." data-error-class="u-has-error" data-success-class="u-has-success"
                            /></div>
                    </div>
                </div>
                <!-- End Input -->
                <!-- Input -->
                <div class="col-sm-6 mb-6">
                    <div class="js-form-message">
                        <div class="js-focus-state input-group form"><input name="phone" type="number" class="form-control form__input" required="" placeholder="Votre Numéro de téléphone"
                                aria-label="Votre Numéro de téléphone" data-msg="Please enter a valid phone number." data-error-class="u-has-error"
                                data-success-class="u-has-success" /></div>
                    </div>
                </div>
                <!-- End Input -->
            </div>
            <!-- Input -->
            <div class="js-form-message mb-9">
                <div class="js-focus-state input-group form"><textarea class="form-control form__input" name="text" required="" rows="6" placeholder="Votre message" aria-label="Votre message"
                        data-msg="Please enter a reason." data-error-class="u-has-error" data-success-class="u-has-success"></textarea></div>
            </div>
            <!-- End Input -->
            <div class="text-center"><button class="btn btn-primary btn-wide mb-4" type="submit">Envoyer</button>
            </div>
        </form>
    </div>
</div>
@endsection