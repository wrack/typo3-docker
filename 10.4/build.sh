#!/usr/bin/env bash
#
# Builds TYPO3 Docker images locally

set -e

docker build -t edepta/typo3-docker:10.4 --build-arg TYPO3_VERSION="10.4.3" .
