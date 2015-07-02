<?php
<<<CONFIG
packages:
    - "symfony/yaml: ~2.7"
CONFIG;

use Symfony\Component\Yaml\Yaml;

// parse rules.yml file
$yaml = Yaml::parse(file_get_contents('./rules.yml'));

$data = '<strong>Do\'s and don\'ts of the PHP Facebook group</strong><br>Dear members, programming is a lot about following rules with good practices and so is posting in this group. Let\'s take a moment and read the group rules so we can have useful and safe discussion environment. These rules are hosted on <a href="https://github.com/wwphp-fb/group-rules">GitHub</a> and presented on the <a href="http://wwphp-fb.github.io/rules.html">main group GitHub page</a>.';
$data .= '<ul>';

foreach ($yaml as $rule) {
    if(isset($rule['title']) && isset($rule['description'])) {
        $data .= '<li><strong>' . $rule['title'] . '</strong><br>' . $rule['description'] . '</li>';
    }
}

$data .= '</ul><br>';
$data .= 'Enjoy your stay at the group and don\'t be shy to ask your question.';

file_put_contents('./rules.html', $data, LOCK_EX);
