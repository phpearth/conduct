# Contributing guidelines for PHP.earth code of conduct

Contributions to this repository are welcome, but needs to go through an approval
procedure from project leads.

## How can you help?

* Report issues
* Fix typos and grammar
* Add new rules
* Improve existing rules and workflow

## Contributing procedure

Below is described procedure for contributing to this repository in particular
and some extra information about it.

* Fork this repository over GitHub
* Set up `upstream` remote for updating your fork's master branch when upstream
  changes happen:

  ```bash
  git remote add upstream git://github.com/phpearth/conduct
  git config branch.master.remote upstream
  ```

* Create a separate branch for instance `patch-1` so you will not need to
  rebase your fork if your master branch is merged

  ```bash
  git clone git@github.com:your_username/conduct
  cd conduct
  git checkout -b patch-1
  ```
* Make changes, commit them and push to your fork

  ```bash
  git add .
  git commit -m "Fix typo in the FAQ"
  git push origin patch-1
  ```
* Open a pull request

## Style guide

* This repository uses [Markdown](https://daringfireball.net/projects/markdown/)
  syntax and follows
  [cirosantilli/markdown-style-guide](http://www.cirosantilli.com/markdown-style-guide/)
  style guide.

* The preferred spelling of English words is the [American
  English](https://en.wikipedia.org/wiki/American_English) (e.g. behavior, not
  behaviour).

* Titles [capitalization](https://en.wikipedia.org/wiki/Letter_case#Headings_and_publication_titles)
  follow the [ISO](https://www.iso.org) recommendation of sentence-case style,
  where capitalisation follows the same rules that apply for sentences. Instead
  of *Code of Conduct*, use *Code of cunduct* in all titles and subtitles. In
  rare cases where you need to make the title important, and more special, you
  can use the so called title-case style, which has capitalized certain words
  such as nouns, pronouns, adjectives, verbs, adverbs, and subordinate conjunctions,
  but not articles, short prepositions, and conjunctions.

* Use gender-neutral language (instead of *he* or *she* use *they*, *them*,
  *their*, *theirs*, *themselves*).

* Use second person point of view (instead of *I* and *we*, use *you*). Avoid
  [nosism](https://en.wikipedia.org/wiki/Nosism).

## Images

Some images are created with the [draw.io](https://www.draw.io) tool. They are
located in a [separate repository](https://github.com/phpearth/PHP.earth).

## Folder structure

* `.github` - GitHub recognizes some files in this folder when opening issues and
  pull requests.

## YAML front matter

Contents include the YAML front matter blocks with the following parameters to
define extra content information:

* `image` - image used for open graph
* `description` - Short description of the document

## GitHub issues labels

Labels are used to organize issues and pull requests into manageable categories.
The following labels are used:

* **bug** - Attached when something isn't working properly from technical point of
  view.
* **duplicate** - Attached when the same issue or pull request already exists.
* **enhancement** - New improvement feature.
* **invalid** - Attached when issue or pull request is invalid.
* **question** - Attached for questions or discussions.
* **waiting for review** - Attached when further review is required.
* **wontfix** - Attached when decided that issue will not be fixed.
* **workflow change** - When new rule is added or removed and affects administrators'
  workflow

## License

By contributing to this repository you agree to share knowledge under the
Creative Commons Attribution-ShareAlike 4.0 International and code under the
public domain. See [LICENSE](https://github.com/phpearth/conduct/blob/master/LICENSE)
file for more information.

## Review and release process

* Each addition and rule change is discussed and reviewed internally by PHP.earth
  core team.
* When contents are updated, [CHANGELOG.md](/CHANGELOG.md) file is updated and a
  new tag is released. Repository follows [semantic versioning](http://semver.org/).
* If TL;DR section is updated or changed, also the
  [Facebook group](https://www.facebook.com/groups/2204685680/) description needs
  to be updated.
* [Online version](https://php.earth/conduct) is updated automatically accordingly.
