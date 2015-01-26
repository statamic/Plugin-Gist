Statamic Gist Plugin
================================

## Installing
1. Download the zip file (or clone via git) and unzip it or clone the repo into `/_add-ons/`.
2. Ensure the folder name is `gist` (Github timestamps the download folder).
3. Enjoy.

## Usage

Quick embed any [Gist](https://gist.github.com/) with a simple tag. Example:

    {{ gist:12345 }}

Longhand format example:

    {{ gist id="12345" }}

Where '12345' is the id of the desired gist. That's all there is to it.

To specify a specific file within a gist use the longhand format.

    {{ gist id="12345" file="filename.md" }}
