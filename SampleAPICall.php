<?php

$context = stream_context_create([
    'http' => [
      'content' => json_encode(['value1' => '123', 'value2' => 'abc']),
      //'header' => 'Authorization: Basic XXXXXXXXXXXXXXX',
      'ignore_errors' => 1,
      'method' => 'GET',
      'timeout' => 10
    ]
  ]);

$data = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/users", FALSE, $context));

$response = http_get("https://jsonplaceholder.typicode.com/users");

$i = 1;

