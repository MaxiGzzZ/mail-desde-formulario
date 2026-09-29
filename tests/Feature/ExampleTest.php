<?php

test('returns a successful response', function () {
    $response = $this->get(route('register.create'));

    $response->assertOk();
});
