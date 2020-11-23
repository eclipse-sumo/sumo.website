# Eclipse SUMO website

This repository contains the source files for the [Eclipse SUMO website](https://eclipse.org/sumo).
The SUMO website is generated using [Hugo](https://gohugo.io/).

## Getting started

### Prerequisites
- [Hugo](https://gohugo.io/getting-started/installing/)

### Installation

Clone this repository (if not already done):
```
git clone https://github.com/eclipse/sumo.website.git
```

To run the built-in development server, use:
```
hugo serve
```

`hugo serve` re-builds the entire site everytime it detects a change.

**To preview edition you should run the built-in development server and access the website from the localhost address (which by default should be http://localhost:1313/sumo/).**

To generate the final static html files, run:
```
hugo
```
This should create the *public* directory, containing all the necessary HTML and CSS files.

## Other links
- [SUMO repository](https://github.com/eclipse/sumo)
- [SUMO Documentation](https://sumo.dlr.de/docs)
