<?= sprintf('::set-output name=var::%s', json_encode(simplexml_load_file('coverage.xml')));
