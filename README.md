# Eclipse SUMO website [![linkcheck](https://github.com/eclipse-sumo/sumo.website/actions/workflows/linkcheck.yml/badge.svg)](https://github.com/eclipse-sumo/sumo.website/actions/workflows/linkcheck.yml)

This repository contains generated static files and markdown source files (inside the `source` branch) for the [Eclipse SUMO website](https://eclipse.dev/sumo).
The SUMO website is generated using [Hugo](https://gohugo.io/).

> [!NOTE]
> The SUMO _documentation_ source files are located in the main SUMO repository (here: https://github.com/eclipse-sumo/sumo/tree/main/docs/web) and are generated using MkDocs.

> [!WARNING]
> Only modify files in the `source` branch (including this README).

In general the web presence is split into two servers. The "static" part resides at https://eclipse.dev/sumo, the "dynamic" part (nightly builds, test results, user documentation for the current HEAD) in subdirectories on sumo.dlr.de e.g. https://sumo.dlr.de/docs. Having two servers makes the setup more complex but has the benefit that one can serve as the backup of the other.

## Getting started

### Prerequisites
- [Hugo](https://gohugo.io/getting-started/installing/)
  - The easiest way on Windows is `winget install Hugo.Hugo.Extended`, on (Debian/Ubuntu) Linux `sudo apt install hugo`.

### Installation

Clone this repository (if not already done):
```
git clone https://github.com/eclipse-sumo/sumo.website.git
```

Checkout the `source` branch:
```
git checkout source
```

To run the built-in development server, use:
```
hugo serve
```

By default, the `config/_default/config.yaml` configuration file will be used.

There are two alternative configs. One which is to be used, when eclipse.dev is down and everything needs to be served using sumo.dlr.de (`config/dlr`) which can be locally build using:
```
hugo serve --environment dlr
```
and one which does the opposite (redirecting everything to eclipse.dev in case sumo.dlr.de is down: `hugo serve --environment eclipse`).

`hugo serve` re-builds the entire site every time it detects a change.

**To preview any changes, just run the built-in development server and access the website from the localhost address (which by default should be http://localhost:1313/sumo/).**

To generate the final static html files, run:
```
hugo -d
```
or
```
hugo -d --environment dlr
```

This should generate all the necessary HTML and CSS files inside the `public` folder.

### Contributing

Only modify the files inside the `source` branch. After pushing, the static files will be generated automatically by the ["deploy-static-pages" workflow](https://github.com/eclipse-sumo/sumo.website/blob/source/.github/workflows/deploy.yml), and committed to the `main` branch (this is an Eclipse infrastructure requirement).
This CI step will also build and deploy the current version of userdoc and pydoc so that they are readily available as a backup. To enable the backup you can trigger the github action using the trigger_deploy workflow with the `eclipse` hugo environment.

## Other links
- [SUMO repository](https://github.com/eclipse-sumo/sumo)
- [SUMO Documentation](https://sumo.dlr.de/docs)
