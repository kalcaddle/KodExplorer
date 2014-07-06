# Contributing

First, please do contribute!

English and Chinese issues are acceptable, talk in your favorite language.

Pull request and git commit message must be in English, if your commit message is in other language, it will be rejected.


## Issues

When you submit an issue, please format your content, a readable content helps a lot. You should have a little knowledge on [Markdown](http://github.github.com/github-flavored-markdown/).

Code talks. If you can't make yourself understood, show us the code.


## Codebase

The codebase of `cmd-util` is highly tested and linted, as a way to guarantee functionality and keep all code written in a particular style for readability.

You should follow the code style, and if you add any code, please add test cases for them.

Here is a little tips to make things simple:

- when you cloned this repo, run `make`, it will prepare everything for you
- check the code style with `make lint`
- check the test case with `make test`

If you are on Windows, you should have a look at the `Makefile` and find out what you should do. If you are familiar with Windows, please add a `make.bat` for me.


## Git Help

Something you should know about git.

- don't add any code on the master branch, create a new one
- don't add too many code in one pull request
- all featured branches should be based on the master branch

Take an example, if you want to add feature A and feature B, you should have two branches:

```
$ git branch feature-A
$ git checkout feature-A
```

Now code on feature-A branch, and when you finish feature A:

```
$ git checkout master
$ git branch feature-B
$ git checkout feature-B
```

All branches must be based on the master branch. If your feature-B needs feature-A, you should send feature-A first, and wait for its merging. We may reject feature-A, and you should stop feature-B.

We use a none fast forward merging strategy, please don't `git rebase`.
