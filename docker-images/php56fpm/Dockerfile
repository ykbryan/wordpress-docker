FROM php:5.6-fpm
MAINTAINER ShopBack <tech@shopback.com>


# Procedure from the official Mongo Doc.
# https://docs.mongodb.com/manual/tutorial/install-
RUN apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv 0C49F3730359A14518585931BC711F9BA15703C6
RUN echo "deb http://repo.mongodb.org/apt/debian jessie/mongodb-org/3.4 main" | tee /etc/apt/sources.list.d/mongodb-org-3.4.list
RUN apt-get update
RUN apt-get install -y mongodb-org git zip unzip

RUN mkdir -p /data/db /data/configdb \
	&& chown -R mongodb:mongodb /data/db /data/configdb
VOLUME /data/db /data/configdb

# mongo

RUN apt-get install -y  libsasl2-dev\
                        libssl-dev

RUN pecl install mongodb &&\
    echo "extension=mongodb.so" > /usr/local/etc/php/conf.d/mongodb.ini



#### FOR COMPOSER #####

RUN curl -sS https://getcomposer.org/installer | php \
        && mv composer.phar /usr/local/bin/ \
        && ln -s /usr/local/bin/composer.phar /usr/local/bin/composer

ENV PATH="~/.composer/vendor/bin:./vendor/bin:${PATH}"

COPY . /code
WORKDIR /code

#RUN composer install --no-interaction
