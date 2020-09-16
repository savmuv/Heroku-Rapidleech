FROM php:5.6-apache
RUN apt-get update && \
    apt-get install -y python-pip libnet1 libnet1-dev libpcap0.8 libpcap0.8-dev libmcrypt-dev git wget

RUN git clone https://github.com/savmuv/Bakaleechv2.git ./

ADD https://raw.githubusercontent.com/savmuv/Rapidleech-HRK/master/config.php configs/

RUN docker-php-ext-install mcrypt && \
    chmod 777 -R files && \
    chmod 777 -R rar && \
    chmod 777 -R configs

COPY ./ /var/www/html

EXPOSE  80
