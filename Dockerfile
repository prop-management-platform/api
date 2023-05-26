FROM ubuntu:latest
LABEL authors="nikulas"

ENTRYPOINT ["top", "-b"]
