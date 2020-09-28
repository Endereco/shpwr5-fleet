FROM ubuntu:18.04

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update
RUN apt-get install -y --no-install-recommends apt-utils \
    build-essential \
    ca-certificates \
    software-properties-common \
    locales

RUN add-apt-repository ppa:ondrej/php
RUN apt-get update --fix-missing && apt-get install -y --no-install-recommends apache2 php7.2 php7.2-zip php7.2-curl php7.2-gd php7.2-dom php7.2-bcmath php7.2-soap php7.2-cli php7.2-pdo php7.2-mysql php7.2-common libapache2-mod-php7.2 php7.2-mbstring

# Install div Tools
RUN apt-get install -y --no-install-recommends wget curl nano zip unzip openssl ca-certificates cron

# Install locale
RUN locale-gen de_DE.UTF-8
RUN locale-gen en_GB.UTF-8
RUN update-locale

# Add default config
COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf
#RUN echo "daemon off;" >> /etc/nginx/nginx.conf
#RUN service apache2 reload
#RUN mkdir -p /run/php

# Copy app
#COPY --chown=www-data:www-data ./shop/ /var/www/html

# Output logs to stdout/stderr TODO
RUN ln -sf /dev/stdout /var/log/apache2/access.log && \
    ln -sf /dev/stderr /var/log/apache2/error.log

# Add cronjob
#COPY ./cronjob /etc/cron.d/cronjob
#RUN chmod 0644 /etc/cron.d/cronjob

RUN echo 'Europe/Berlin' > /etc/timezone
RUN a2enmod rewrite

COPY ./bootstrap.sh /bootstrap.sh

CMD sh bootstrap.sh
