<?php

test('route beranda returns success and contains navbar and heading 1', function () {
    $response = $this->get('/beranda');

    $response->assertStatus(200);
    $response->assertSee('Perpusda Sleman');
    $response->assertSee('Ini adalah beranda');
});

test('route buku returns success and contains navbar and heading 1', function () {
    $response = $this->get('/buku');

    $response->assertStatus(200);
    $response->assertSee('Perpusda Sleman');
    $response->assertSee('Ini adalah buku');
});

test('route tentang-kami returns success and contains navbar and heading 1', function () {
    $response = $this->get('/tentang-kami');

    $response->assertStatus(200);
    $response->assertSee('Perpusda Sleman');
    $response->assertSee('Ini adalah tentang kami');
});
