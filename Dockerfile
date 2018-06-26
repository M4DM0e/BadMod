FROM php:7-alpine
MAINTAINER "Bobby Hines <bobby@conflabs.com>"

ENV TERM xterm

RUN ["apk","update"]
RUN ["apk","upgrade"]

COPY . /srv/BadMod

WORKDIR /srv/BadMod
VOLUME /srv/BadMod

ENTRYPOINT ["php","BadMod.php"]
CMD /bin/sh