<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Register;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_page_can_be_rendered(): void
    {
        $response = $this->get('/registration');

        $response->assertStatus(200);
        $response->assertSee('Registration');
    }

    public function test_registration_form_can_be_submitted(): void
    {
        $response = $this->post('/submit-registration', [
            'formName' => 'John Doe',
            'formStuMobile' => '1234567890',
            'formAltMobile' => '0987654321',
            'formDOB' => '1990-01-01',
            'formDestination' => 'Male',
            'formFatherName' => 'Father Doe',
            'formFatherMobile' => '1111111111',
            'formMotherName' => 'Mother Doe',
            'formMotherMobile' => '2222222222',
            'formAddress' => '123 Test Street',
            'formCity' => 'Test City',
            'formPostalCode' => '12345',
            'formpercentage10' => '85',
            'formpercentage12' => '80',
            'formCourse' => 'Engineering',
            'agree' => 'on',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('registers', [
            'name' => 'John Doe',
            'number' => '1234567890',
            'course' => 'Engineering',
        ]);
    }

    public function test_registration_validation_works(): void
    {
        $response = $this->post('/submit-registration', [
            'formName' => '',
            'formStuMobile' => '123',
            'formAltMobile' => '456',
        ]);

        $response->assertSessionHasErrors([
            'formName',
            'formStuMobile',
            'formAltMobile',
        ]);
    }

    public function test_duplicate_registration_is_prevented(): void
    {
        // Create first registration
        Register::create([
            'name' => 'John Doe',
            'number' => '1234567890',
            'alternative_number' => '0987654321',
            'dob' => '1990-01-01',
            'gender' => 'Male',
            'father' => 'Father Doe',
            'mother' => 'Mother Doe',
            'father_no' => '1111111111',
            'mother_no' => '2222222222',
            'address' => '123 Test Street',
            'city' => 'Test City',
            'post' => '12345',
            'course' => 'Engineering',
            'tenth' => '85',
            'twelth' => '80',
        ]);

        // Try to submit duplicate
        $response = $this->post('/submit-registration', [
            'formName' => 'Jane Doe',
            'formStuMobile' => '1234567890',
            'formAltMobile' => '0987654321',
            'formDOB' => '1995-01-01',
            'formDestination' => 'Female',
            'formFatherName' => 'Father Doe',
            'formFatherMobile' => '1111111111',
            'formMotherName' => 'Mother Doe',
            'formMotherMobile' => '2222222222',
            'formAddress' => '456 Test Street',
            'formCity' => 'Test City',
            'formPostalCode' => '12345',
            'formpercentage10' => '90',
            'formpercentage12' => '85',
            'formCourse' => 'Medical',
            'agree' => 'on',
        ]);

        $response->assertSessionHas('error');
        $this->assertDatabaseCount('registers', 1);
    }
} 