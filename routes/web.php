<?php

use Illuminate\Support\Facades\Route;
use San3jaya\SocialConnector\SocialConnector;

Route::get('/token', [SocialConnector::class, 'redirectToFacebook']);
Route::get('/token/callback', [SocialConnector::class, 'getFacebookUser']);
