<?php

use A17\Twill\Facades\TwillRoutes;

// Register Twill routes here eg.
// TwillRoutes::module('posts');

TwillRoutes::module('services');
TwillRoutes::singleton('contact');
TwillRoutes::singleton('about');

TwillRoutes::singleton('testimonial');
TwillRoutes::module('testimonials');