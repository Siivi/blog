<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubmitLinksTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    function guest_can_submit_a_new_link() {

    }

    /** @test */
    function link_is_not_created_if_validation_fails() {

    }

    /** @test */
    function link_is_not_created_with_an_invalid_url() {

    }

    /** @test */
    function max_length_fails_when_too_long() {

    }

    /** @test */
    function max_length_succeeds_when_under_max() {
        
    }
}
