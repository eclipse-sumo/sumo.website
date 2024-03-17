# Eclipse SUMO website [![linkcheck](https://github.com/eclipse-sumo/sumo.website/actions/workflows/linkcheck.yml/badge.svg)](https://github.com/eclipse-sumo/sumo.website/actions/workflows/linkcheck.yml)

This repository contains generated static files and markdown source files (inside the `/src/` directory) for the [Eclipse SUMO website](https://eclipse.dev/sumo).
The SUMO website is generated using [Hugo](https://gohugo.io/).

## Getting started

### Prerequisites
- [Hugo](https://gohugo.io/getting-started/installing/)

### Installation

Clone this repository (if not already done):
```
git clone https://github.com/eclipse-sumo/sumo.website.git
```

To run the built-in development server, use:
```
cd src
hugo serve
```

By default, the `config/_default/config.yaml` configuration file will be used. To use the alternative `config/dlr/config.yaml` file to overwrite some parameters, use:
```
cd src
hugo serve --environment dlr
```

`hugo serve` re-builds the entire site every time it detects a change.

**To preview edition you should run the built-in development server and access the website from the localhost address (which by default should be http://localhost:1313/sumo/).**

To generate the final static html files, run:
```
cd src
hugo -d ../
```
or
```
cd src
hugo -d ../ --environment dlr
```

This should generate all the necessary HTML and CSS files in the root directory.

### Contributing

After making changes to the markdown source files, the command `hugo -d ../` should be executed within the `/src/` directory, to generate the modified static files. A commit can be done after this step.

## Other links
- [SUMO repository](https://github.com/eclipse-sumo/sumo)
- [SUMO Documentation](https://sumo.dlr.de/docs)
