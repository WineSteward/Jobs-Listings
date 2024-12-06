<?php

namespace Tests\Feature;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JobTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {

        $this->assertDatabaseEmpty('users');

        $employer = Employer::factory()->create();
        
        $job = Job::factory()->create([
            'employer_id' => $employer->id
        ]);

        
        $this->assertEquals($job->employer->id,$employer->id);

    }
}
