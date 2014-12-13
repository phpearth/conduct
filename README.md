# PHP Facebook group rules

## About

This repository holds do's and don'ts of the PHP Facebook Group a.k.a. the
posting rules and guidelines.

We use Semantic versioning which means each change of the rule increases
and releases a new tag.

Fixing typos and new contribution to the rules are welcome by sending a pull request,
opening a new topic in the group or opening just an [issue][issues].

On each change of the rules also a Facebook document is generated. [Generator][generator] script uses
[melody][melody] - one file Composer scripts:

```bash
$ sudo sh -c "curl http://get.sensiolabs.org/melody.phar -o /usr/local/bin/melody && chmod a+x /usr/local/bin/melody"
$ melody run generator.php -vvv
```

This generates rules.html file which is pasted into the Facebook document as well.

## License

For the content and code license, please check the [LICENSE file][license].

[issues]: https://github.com/wwphp-fb/group-rules/issues
[generator]: generator.php
[melody]: http://melody.sensiolabs.org/
[license]: LICENSE
