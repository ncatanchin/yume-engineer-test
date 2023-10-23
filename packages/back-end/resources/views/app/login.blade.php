@extends('app.layouts.app')
@section('content')
    <div class="container mx-auto flex flex-wrap-reverse  mt-8 md:mt-16 p-4 md:p-0 mb-16">
        <div class="w-full md:w-1/2 mt-32 md:mt-0  md:pr-8  text-center lg:text-left">

            <div class="text-3xl lg:text-4xl font-bold text-red lg:mt-16">Log in to access {{env('APP_NAME')}}’s network of trusted {{env('TEXT_SURPLUS_OR_EXCESS', 'surplus')}} food suppliers
            </div>
            <div class="mt-8 text-xl">Want to see what’s currently on offer? Our deals are just for {{env('APP_NAME')}} buyers, so log in or
                sign up for free to start browsing.
            </div>
        </div>
        <div class="w-full md:w-1/2 mt-24 lg:mt-0">
            <div class="text-center text-5xl hero text-red mb-8">
                LOG IN TO YUME FOOD
            </div>
            @if(count($errors) >= 1)
                <div class="p-4 text-red">
                    Oops! {{$errors->first()}}
                    @if($errors->first() == trans('auth.unconfirmed'))
                        <div>
                            <a href="/resend-registration-email" class="text-blue underline">Resend my confirmation
                                email</a>
                        </div>
                    @endif
                </div>
            @endif
            <div class="lg:border lg:p-8">
                <form action="/login" method="post" novalidate="novalidate">
                    <div>
                        <div>
                            <label for="username" class="">Email</label>
                        </div>
                        <input type="text" id="username" name="email" value="" class="border w-full p-4"
                               placeholder="you@yourdomain.com"
                               autocomplete="off">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                    <div class="mt-4">
                        <div>
                            <label for="password" class="">Password</label>
                        </div>
                        <input type="password" id="password" name="password" class="border w-full p-4"
                               autocomplete="off">
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="rounded-full p-4 px-8 w-full outline-none btn btn-red">Log in ></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
