<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
      'jobs' => [
        [
          'id'=>1,  
          'title' => 'Senior Laravel Developer',
          'description' => 'We are looking for a Senior Laravel Developer to join our dynamic team. The ideal candidate will have extensive experience with Laravel and a passion for building scalable web applications.',
          'location' => 'Remote',
          'type' => 'Full-time',
        ],
        [
          'id'=>2,  
          'title' => 'Frontend Engineer',
          'description' => 'Join our team as a Frontend Engineer and help us create stunning user interfaces. Proficiency in Vue.js and Tailwind CSS is a must.',
          'location' => 'New York, NY',
          'type' => 'Contract',
        ],
        [
          'id'=>3,  
          'title' => 'DevOps Specialist',
          'description' => 'We are seeking a DevOps Specialist to streamline our deployment processes and ensure the reliability of our infrastructure. Experience with AWS and Docker is required.',
          'location' => 'San Francisco, CA',
          'type' => 'Full-time',
        ],
      ]

    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
          'id'=>1,  
          'title' => 'Senior Laravel Developer',
          'description' => 'We are looking for a Senior Laravel Developer to join our dynamic team. The ideal candidate will have extensive experience with Laravel and a passion for building scalable web applications.',
          'location' => 'Remote',
          'type' => 'Full-time',
        ],
        [
          'id'=>2,  
          'title' => 'Frontend Engineer',
          'description' => 'Join our team as a Frontend Engineer and help us create stunning user interfaces. Proficiency in Vue.js and Tailwind CSS is a must.',
          'location' => 'New York, NY',
          'type' => 'Contract',
        ],
        [
          'id'=>3,  
          'title' => 'DevOps Specialist',
          'description' => 'We are seeking a DevOps Specialist to streamline our deployment processes and ensure the reliability of our infrastructure. Experience with AWS and Docker is required.',
          'location' => 'San Francisco, CA',
          'type' => 'Full-time',
        ],
    ];
    
   $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
       
   return view('job',['job' => $job]); 
});

Route::get('/contact', function () {
    return view('contact');
});
