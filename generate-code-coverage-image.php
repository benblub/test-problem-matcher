<?=


    $xml = simplexml_load_file('coverage.xml');

    sprintf('::set-output name=var::%s', json_encode([
        [
            'id' => 'bar',
            'name' => 'foo',
        ],
        [
            'id' => 'bar2',
            'name' => 'foo2',
        ],
    ]));
