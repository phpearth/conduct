<?php
<<<CONFIG
packages:
    - "symfony/yaml: ~2.6"
CONFIG;

use Symfony\Component\Yaml\Yaml;

// parse rules.yml file
$yaml = Yaml::parse(file_get_contents('./rules.yml'));

$data = '<strong>Do\'s and don\'ts of the PHP Facebook group</strong>';
$data .= '<ul>';

foreach ($yaml as $rule) {
    if(isset($rule['title']) && isset($rule['description'])) {
        $data .= '<li><strong>' . $rule['title'] . '</strong><br>' . $rule['description'] . '</li>';
    }
}

$data .= '</ul><br>';
$data .= 'Enjoy your stay at the group and don\'t be shy to ask your question. These rules are hosted on <a href="https://github.com/wwphp-fb/group-rules">GitHub</a> and presented on the <a href="http://wwphp-fb.github.io/rules.html">main group GitHub page</a>.';

file_put_contents('./rules.html', $data, LOCK_EX);
