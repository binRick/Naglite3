#!/bin/bash
cd $( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )
set -e
_pwd=$(command pwd)
FILES="config.php dashboard.css default.css index.php"

[[ "$1" == "" ]] && { echo First argument must be tarball file to create; exit 1; }

cmd="cd $_pwd && tar -czf $1 $FILES"

echo $cmd
eval $cmd
