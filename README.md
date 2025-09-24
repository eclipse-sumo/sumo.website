# Eclipse SUMO website [![linkcheck](https://github.com/eclipse-sumo/sumo.website/actions/workflows/linkcheck.yml/badge.svg)](https://github.com/eclipse-sumo/sumo.website/actions/workflows/linkcheck.yml)

This repository contains generated static files and markdown source files (inside the `source` branch) for the [Eclipse SUMO website](https://eclipse.dev/sumo).
The SUMO website is generated using [Hugo](https://gohugo.io/).

> [!NOTE]
> The SUMO Documentation source files are located in the main SUMO repository (here: https://github.com/eclipse-sumo/sumo/tree/main/docs/web) and are generated using MkDocs.

> [!WARNING]
> Only modify files in the `source` branch (including this README).

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

By default, the `config/_default/config.yaml` configuration file will be used. To use the alternative `config/dlr/config.yaml` file to overwrite some parameters, use:
```
hugo serve --environment dlr
```

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

## Other links
- [SUMO repository](https://github.com/eclipse-sumo/sumo)
- [SUMO Documentation](https://sumo.dlr.de/docs)
