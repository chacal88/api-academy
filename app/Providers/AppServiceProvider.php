<?php

namespace App\Providers;

use App\Address;
use App\Classroom;
use App\Academy;
use App\AcademiesPhoto;
use App\ClassroomVote;
use App\Observers\AddressObserver;
use App\Observers\ClassroomObserver;
use App\Observers\AcademyObserver;
use App\Observers\AcademyPhotoObserver;
use App\Observers\ClassroomVoteObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Address::observe(AddressObserver::class);
        Classroom::observe(ClassroomObserver::class);
        Academy::observe(AcademyObserver::class);
        AcademiesPhoto::observe(AcademyPhotoObserver::class);
        ClassroomVote::observe(ClassroomVoteObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
